<?php

namespace Fatchip\ProfitMargin\Tests\Unit\extend\Application\Model;

use OxidEsales\Eshop\Core\Field;
use OxidEsales\Eshop\Core\Price;
use Fatchip\ProfitMargin\extend\Application\Model\Article;

class ArticleTest extends \OxidEsales\TestingLibrary\UnitTestCase
{
    public function testFcGetProfit()
    {
        $dNetto = 10.0;
        $dBuyPrice = 2.0;
        $dProfit = $dNetto - $dBuyPrice;

        $oArticle = new Article();
        $oPrice = new Price($dNetto);

        $this->assertEquals(null, $oArticle->fcGetProfit());

        $oArticle->setPrice($oPrice);
        $oArticle->oxarticles__oxbprice = new Field($dBuyPrice);

        $this->assertEquals($dProfit, $oArticle->fcGetProfit());
    }

    public function testFcGetProfitMargin()
    {
        $dNetto = 10.0;
        $dBuyPrice = 5.0;
        $dMargin = round((($dNetto - $dBuyPrice) / $dNetto) * 100, 2);

        $oArticle = new Article();
        $oPrice = new Price($dNetto);

        $this->assertEquals(null, $oArticle->fcGetProfitMargin());

        $oArticle->setPrice($oPrice);
        $oArticle->oxarticles__oxbprice = new Field($dBuyPrice);

        $this->assertEquals($dMargin, $oArticle->fcGetProfitMargin());
    }

    public function testFcGetFormatted()
    {
        $dNetto = 10.0;
        $dBuyPrice = 5.0;
        $sFormattedProfit = number_format($dNetto - $dBuyPrice, 2, ',', '.');
        $sFormattedMargin = number_format(round((($dNetto - $dBuyPrice) / $dNetto) * 100, 2), 2, ',', '.');

        $oArticle = new Article();
        $oPrice = new Price($dNetto);

        $this->assertEquals(null, $oArticle->fcGetFormatted(''));

        $oArticle->setPrice($oPrice);
        $oArticle->oxarticles__oxbprice = new Field($dBuyPrice);

        $this->assertEquals($sFormattedProfit, $oArticle->fcGetFormatted('profit'));
        $this->assertEquals($sFormattedMargin, $oArticle->fcGetFormatted('profitMargin'));
    }
}