[{$smarty.block.parent}]
<span>[{$edit->craig}]</span>
[{if (!is_null($edit->oxarticles__oxid->value))}]
    <span>[{$edit->fcGetProfitMargin()}]</span>
[{/if}]