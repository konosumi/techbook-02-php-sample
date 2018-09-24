{include file='_header.tpl' pagetitle="Smarty demo."}

{if $hello}
<h1>{$hello}</h1>
{/if}

<ul>
{foreach from=$demos item=demo}
    <li>{$demo}</li>
{/foreach}
</ul>

{include file='_footer.tpl'}