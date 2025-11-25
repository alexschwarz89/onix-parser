<?php

namespace Ribal\Onix\Product;

use Ribal\Onix\CodeList\CodeList;
use Ribal\Onix\CodeList\CodeList173;

class PriceDate
{
    /**
     * PriceDateRole
     *
     * @var CodeList
     */
    protected CodeList $PriceDateRole;

    /**
     * @var string|null YYYYMMDD or YYYY
     */
    protected ?string $Date = null;

    /**
     * @var string|null ONIX dateformat code (attribute of b306)
     */
    protected ?string $DateFormat = null;

    /**
     * Set Date (b306)
     */
    public function setDate(string $date): void
    {
        $this->Date = $date;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    /**
     * Set DateFormat (b306@dateformat)
     */
    public function setDateFormat(?string $format): void
    {
        $this->DateFormat = $format;
    }

    public function getDateFormat(): ?string
    {
        return $this->DateFormat;
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