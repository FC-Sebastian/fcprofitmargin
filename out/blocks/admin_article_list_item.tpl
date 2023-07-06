[{$smarty.block.parent}]
<script type="text/javascript">
    fcAppendColumn(
        document.getElementById('row.[{$_cnt}]').firstElementChild.nextElementSibling,
        'listitem[{if $listitem->oxarticles__oxid->value == $oxid}]4[{/if}]',
        fcGetLinkElement(
            '[{$listitem->oxarticles__oxid->value}]',
            '[{if $listitem->oxarticles__oxid->value != $oxid && $listitem->fcGetProfit() < 0}]error[{/if}]'
            [{if $listitem->fcGetProfitMargin() !== null}], '[{$listitem->fcGetProfitMargin()}]%'[{/if}]));
</script>