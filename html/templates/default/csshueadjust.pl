#!/usr/bin/perl

use Graphics::RGBManipulate;

sub hex2hsv($)
{
	my $hex = shift or return;

	$hex_hash_flag = $hex =~ s/#//;

	if (length $hex == 3) {
		$hex =~ s/([a-zA-Z0-9])/$1$1/g;
	}

	my $r = hex(substr($hex, 0, 2) );
	my $g = hex(substr($hex, 2, 2) );
	my $b = hex(substr($hex, 4, 2) );

print "$hex rgb:($r,$g,$b)\n";
	my ($h, $s, $v) = Graphics::RGBManipulate::RGBtoHSV($r, $g, $b);
print "$hex hsv:($h,$s,$v)\n";
	return ($h, $s, $v);
}

sub round($)
{
	my $number = shift or return;
	return int(($number > 0) ? ($number + 0.5) : ($number - 0.5));
}

sub hexhueadjust($$)
{
	my ($hex, $hueadjustment) = @_;

	print "hex:".$hex."\n";
	my ($h, $s, $v) = hex2hsv($hex) or return;
	print "oldhue: ".round($h)." newhue:". (round($h + $hueadjustment) % 360)."\n";

	my $new_hex = Graphics::RGBManipulate::tweak(
		hex => $hex,
#		hue => (round($h) + $hueadjustment) % 360
		hue => round($h + $hueadjustment) % 360
	);
	if (substr($new_hex, 0, 1) eq substr($new_hex, 1, 1)
	and substr($new_hex, 2, 1) eq substr($new_hex, 3, 1)
	and substr($new_hex, 4, 1) eq substr($new_hex, 5, 1))
	{
		$new_hex = substr($new_hex, 0, 1) . substr($new_hex, 2, 1) . substr($new_hex, 4, 1);
	}
	print "newhex:".$new_hex."\n";
	return lc($new_hex);
}

#hexhueadjust("#516ba8",180.39);
#hexhueadjust("#516ba8",-180);
#hexhueadjust("#a87f51",180);

sub adjustcss($$$)
{
my ($inputfilename, $outputfilename, $hexadjustmentamount) = @_;
#my $inputfilename = "style.css";
#my $outputfilename = "style-blue2.css";
#my $hexadjustmentamount = 180;
#my $inputfilename = "style.css";
#my $outputfilename = "style-greenpurple.css";
#my $hexadjustmentamount = 60;

print "Reading from " . $inputfilename . "...\n";

my $infile;
open(my $in, "<", $inputfilename);
$infile .= $_ while(<$in>);
close($in);

print "Processing...\n";
print "=" x 80 . "\n";
(my $outfile = $infile) =~ s/(?<=#)([a-f0-9]{6}|[a-f0-9]{3})/hexhueadjust($1,$hexadjustmentamount)/ieg;
print "=" x 80 . "\n";
print $outfile;
print "=" x 80 . "\n";

print "Saving to " . $outputfilename . "...\n";

open(my $out, ">", $outputfilename);
print $out $outfile;
close($out);

print "Done!\n";
}

#adjustcss("style.css", "style-blue.css", 180);
#adjustcss("style.css", "style-greenpurple.css", 60);
adjustcss("style-fullwidth.css", "style-greenpurple-fullwidth.css", 60);
