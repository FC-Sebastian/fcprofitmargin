<?php

namespace Fatchip\ProfitMargin\extend\Application\Model;

class Article extends Article_Parent
{

    protected string $fcDecimalSeparator = ',';
    protected string $fcThousandSeparator = '.';

    protected $fcProfit;

    /**
     * Calculates and returns profit
     * return null if net or buying price are empty
     *
     * @return null
     */
    public function fcGetProfit()
    {
        if ($this->fcProfit !== null) {
            return $this->fcProfit;
        }
        $dNetto = $this->getPrice()->getNettoPrice();
        $dBuyPrice = $this->oxarticles__oxbprice->rawValue;
        if (!empty($dNetto) && !empty($dBuyPrice)) {
            return $this->fcProfit = ($dNetto - $dBuyPrice);
        }
        return null;
    }

    /**
     * Returns formatted profit or profit margin
     *
     * @return string|null
     */
    public function fcGetFormatted($sType)
    {
        if ($this->fcGetProfit() !== null) {
            switch ($sType) {
                case 'profit':
                    return number_format($this->fcGetProfit(), 2, $this->fcDecimalSeparator, $this->fcThousandSeparator);
                case 'profitMargin':
                    return number_format($this->fcGetProfitMargin(), 2, $this->fcDecimalSeparator, $this->fcThousandSeparator);
            }
        }
        return null;
    }

    /**
     * Calculates and returns profit margin
     *
     * @return float|null
     */
    public function fcGetProfitMargin()
    {
        $dProfit = $this->fcGetProfit();
        if ($dProfit !== null) {
            return round(($dProfit / $this->getPrice()->getNettoPrice()) * 100, 2);
        }
        return null;
    }
}