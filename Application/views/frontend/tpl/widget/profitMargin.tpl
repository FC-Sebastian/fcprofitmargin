[{if $oViewConf->getUser() !== false}]
    [{assign var="oUser" value=$oViewConf->getUser()}]
    [{assign var="oGroups" value=$oUser->getUserGroups()}]

    [{if $oGroups->containsFieldValue('oxidadmin', 'oxgroups__oxid') === true}]
        [{if $_product->fcGetProfit() !== null}]
            <div>
                <span class="price">[{oxmultilang ident="FCPROFITMARGIN_PROFIT"}]: </span>
                <span class="lead text-nowrap [{if $_product->fcGetProfitMargin() < 0}]text-danger font-weight-bold[{/if}]">[{$_product->fcGetFormatted('profit')}] [{$currency->sign}]</span>
            </div>
            <div>
                <span class="price">[{oxmultilang ident="FCPROFITMARGIN_PROFIT_MARGIN"}]: </span>
                <span class="lead text-nowrap [{if $_product->fcGetProfitMargin() < 0}]text-danger font-weight-bold[{/if}]">[{$_product->fcGetFormatted('profitMargin')}] %</span>
            </div>
        [{/if}]
    [{/if}]
[{/if}]