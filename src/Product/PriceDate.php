<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList;
use Ribal\Onix\CodeList\CodeList173;
use Ribal\Onix\Date;

class PriceDate
{
    /**
     * PriceDateRole
     *
     * @var CodeList
     */
    protected CodeList $PriceDateRole;

    /**
     * @var Date|null
     */
    protected ?Date $Date = null;

    /**
     * Set Date (b306)
     */
    public function setDate(Date $date): void
    {
        $this->Date = $date;
    }

    public function getDate(): ?Date
    {
        return $this->Date;
    }

    /**
     * Set PriceDateRole
     *
     * @param int $PriceDateRole
     * @return void
     */
    public function setPriceDateRole(CodeList173 $PriceDateRole)
    {
        $this->PriceDateRole = $PriceDateRole;
    }

    public function getPriceDateRole(): CodeList
    {
        return $this->PriceDateRole;
    }
}