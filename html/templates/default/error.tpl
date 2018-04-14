{extends "index.tpl"}

{block "site_title"}{$dwoo.parent} - error{/block}

{block "content"}<p class="error_box"><strong>Error:</strong> {$error_message}</p>{/block}

