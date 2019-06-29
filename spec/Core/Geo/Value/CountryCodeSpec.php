<?php

declare(strict_types=1);

namespace spec\Core\Geo\Value;

use Core\Geo\Value\CountryCode;
use PhpSpec\ObjectBehavior;

class CountryCodeSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('AF');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(CountryCode::class);
    }
}
