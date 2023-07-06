[{$smarty.block.parent}]
[{assign var=dFcProfit value=$edit->fcGetProfit()}]
[{if ($dFcProfit !== null)}]
    <tr>
        <td class="edittext">
            [{oxmultilang ident="FCPROFITMARGIN_PROFIT"}]&nbsp;
        </td>
        <td class="edittext [{if ($dFcProfit <= 0)}] error [{/if}]">
            [{$dFcProfit}]
        </td>
    </tr>
    <tr>
        <td class="edittext">
            [{oxmultilang ident="FCPROFITMARGIN_PROFIT_MARGIN"}]&nbsp;
        </td>
        <td class="edittext [{if ($dFcProfit <= 0)}] error [{/if}]">
            [{$edit->fcGetProfitMargin()}]%
        </td>
    </tr>
[{/if}]