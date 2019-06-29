<?php

declare(strict_types=1);

namespace Core\Geo\Entity;

use Core\Geo\Value\CountryCode;
use Core\Geo\Value\LocationId;

class Location
{
    /** @var LocationId */
    private $locationId;

    /** @var CountryCode */
    private $countryCode;

    public function __construct(LocationId $locationId, CountryCode $countryCode)
    {
        $this->locationId  = $locationId;
        $this->countryCode = $countryCode;
    }
}
