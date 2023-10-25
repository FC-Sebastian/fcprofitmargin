<?php

namespace Fatchip\ProfitMargin\Tests\Unit\Application\Component\Widget;

use \Fatchip\ProfitMargin\Application\Component\Widget\FcProfitWidgetController;

class FcProfitWidgetControllerTEST extends \OxidEsales\TestingLibrary\UnitTestCase
{
    public function testRenderReturnsView()
    {
        $oProfitWidgetController = $this->getMockBuilder(FcProfitWidgetController::class)
            ->onlyMethods(['render'])
            ->getMock();

        $this->assertEquals('profitMargin.tpl',$oProfitWidgetController->render());
    }
}