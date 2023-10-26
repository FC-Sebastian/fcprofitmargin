<?php

namespace Fatchip\ProfitMargin\tests\Unit\Application\Component\Widget;

use \Fatchip\ProfitMargin\Application\Component\Widget\FcProfitWidgetController;

class FcProfitWidgetControllerTest extends \OxidEsales\TestingLibrary\UnitTestCase
{
    public function testRenderReturnsView()
    {
        $oProfitWidgetController = oxNew($this->getProxyClassName(FcProfitWidgetController::class));
        $this->assertEquals('profitMargin.tpl', $oProfitWidgetController->render());
    }
}