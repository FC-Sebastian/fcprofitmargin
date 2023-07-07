<?php

namespace Fatchip\ProfitMargin\Application\Component\Widget;

class FcProfitWidgetController extends \OxidEsales\Eshop\Application\Component\Widget\WidgetController
{
    protected $_sTemplate = 'profitMargin.tpl';

    public function render()
    {
        return $this->_sTemplate;
    }
}