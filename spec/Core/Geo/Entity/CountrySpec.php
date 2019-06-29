<?php

declare(strict_types=1);

namespace spec\Core\Geo\Entity;

use Core\Geo\Entity\Country;
use Core\Geo\Value\CountryCode;
use Core\Geo\Value\RegionCode;
use PhpSpec\ObjectBehavior;

class CountrySpec extends ObjectBehavior
{
    public function let(CountryCode $countryCode, RegionCode $regionCode)
    {
        $this->beConstructedWith($countryCode, $regionCode);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Country::class);
    }
}
