<?php

namespace Fatchip\ProfitMargin\extend\Application\Model;

class Article extends Article_Parent
{

    public function fcGetProfit()
    {
        $dNetto = $this->getPrice()->getNettoPrice();
        $dBuyPrice = $this->oxarticles__oxbprice->value;
        if (!empty($dNetto) && !empty($dBuyPrice)) {
            return $dNetto - $dBuyPrice;
        }
        return null;
    }

    public function fcGetProfitMargin()
    {
        $dProfit = $this->fcGetProfit();

        if ($dProfit !== null) {
            return round(($dProfit / $this->getPrice()->getNettoPrice()) * 100, 2);
        }
        return null;
    }
}