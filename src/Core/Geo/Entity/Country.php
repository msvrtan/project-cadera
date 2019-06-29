<?php

declare(strict_types=1);

namespace Core\Geo\Entity;

use Core\Geo\Value\CountryCode;
use Core\Geo\Value\RegionCode;

class Country
{
    /** @var CountryCode */
    private $countryCode;

    /** @var RegionCode */
    private $regionCode;

    public function __construct(CountryCode $countryCode, RegionCode $regionCode)
    {
        $this->countryCode = $countryCode;
        $this->regionCode  = $regionCode;
    }
}
