<?php

declare(strict_types=1);

namespace spec\Core\Geo\Entity;

use Core\Geo\Entity\Location;
use Core\Geo\Value\CountryCode;
use Core\Geo\Value\LocationId;
use PhpSpec\ObjectBehavior;

class LocationSpec extends ObjectBehavior
{
    public function let(LocationId $locationId, CountryCode $countryCode)
    {
        $this->beConstructedWith($locationId, $countryCode);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Location::class);
    }
}
