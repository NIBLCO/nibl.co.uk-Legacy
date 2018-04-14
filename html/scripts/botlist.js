function show_botlist(listptr, botid, botname, expand)
{
    if ((expand == "expand" && listptr.css("display") != "none")
        || (expand == "collapse" && listptr.css("display") == "none"))
        return;

    if (!listptr.data("loaded"))
    listptr.html("<div class=\"padded\">Loading...</div>");

    if (expand == "expand")
    {
        listptr.show("fast");
    }
    else if (expand == "collapse")
    {
        listptr.hide("fast");
        return;
    }
    else
    {
        listptr.toggle("fast");
    }

    if (listptr.data("loaded") == true)
        return;
    
    listptr.load("rpc.php", { "request": "botlist", "name": botname, "id": botid });
    listptr.data("loaded", true);
}

function show_botlist_all(expand)
{
    var bots = $('.bots .bot');
    for (var i = 0; i < bots.length; i++)
    {
        show_botlist($(bots[i]).children('.list'), $(bots[i]).children('.botid').attr('title'), expand);
        var b = $(bots[i]).find('.expand a');
        if (expand == "expand")
            b.html("-");
        else if (expand == "collapse")
            b.html("+");
        else
            b.html(b.html() == "+" ? "-" : "+");
    }
}

function toggle_botlist(obj)
{
	var bot = $(obj).closest(".bot");
	var list = bot.find(".list");
	var botinfo = bot.find("#botinfo");
	
    show_botlist(list, botinfo.attr("botid"), botinfo.attr("botname"));
    
    obj.innerHTML = obj.innerHTML == '+' ? '-' : '+';
}

function toggle_latest(obj, botid)
{
    show_botlist($(obj).parent().parent().children('.list'), botid);
    var expand = $(obj).parent().parent().children('.expand').find('a');
    $(expand).html(($(expand).html() == '+')?'-':'+');
}

$( document ).ready(function(){
	$( document ).on("click", "#toggle", function(e){
		toggle_botlist(this);
	});
	
    $( document ).on("click", ".batch, .packnumber, .filesize, .filename, .packtime", function(e){
    	if( e.currentTarget.className == "filename" && e.currentTarget != e.target ) {
    		return;
    	} else if( e.currentTarget.className == "batch" ) {
            if( e.target.className == "batch" ){ // Help the TD
                var checkbox = $(e.target).find(":checkbox");
                checkbox.prop("checked", !checkbox.prop("checked"));
            }
        } else {
            var packs = $("input[type=checkbox][name=batch]:checked").map(function(){
                return {"botname" : $(this).closest(".botlistitem").attr("botname"), "botpack" : $(this).closest(".botlistitem").attr("botpack")};
            }).get();
            var msg = '';
            if( packs.length == 0 ){
                msg = '/msg ' + $(this).closest(".botlistitem").attr("botname") + ' xdcc send #' +  $(this).closest(".botlistitem").attr("botpack");
            } else {
                var botlist = {};
                for(i=0;i<packs.length;i++){
                    if( typeof(botlist[packs[i].botname]) == 'undefined' ){
                        botlist[packs[i].botname] = [];
                    }
                    botlist[packs[i].botname].push(packs[i].botpack);
                }
                for( var bot in botlist ){
                    msg += '/msg ' + bot + ' xdcc batch ' + botlist[bot].join(",") + '\n'; 
                }
            }
            
            if( msg.length > 0 ){
                $('#popuptext').html(msg);
                $('#popup').dialog({ 
                	buttons: {
                        'Clear' : function() {
                            $(this).dialog('close');
                            $("input[type=checkbox][name=batch]:checked").each(function(i){
                            	$(this).prop("checked", false);
                            });
                        }
                    }
                });
                $('#popuptext').select();
                //prompt('Paste this into your IRC client:', msg);
            }
            
            
        }
    });
});
