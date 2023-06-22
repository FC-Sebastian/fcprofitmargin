[{$smarty.block.parent}]
[{if (!is_null($edit->oxarticles__oxid->value))}]
    <tr>
        <td class="edittext">
            [{oxmultilang ident="FATCHIP_ARTICLE_PROFIT"}]&nbsp;
        </td>
        <td class="edittext">
            [{$edit->fcGetProfit()}]
        </td>
    </tr>
    <tr>
        <td class="edittext">
            [{oxmultilang ident="FATCHIP_ARTICLE_PROFIT_MARGIN"}]&nbsp;
        </td>
        <td class="edittext">
            [{$edit->fcGetProfitMargin()}]
        </td>
    </tr>
[{/if}]