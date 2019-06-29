<?php

declare(strict_types=1);

namespace spec\Core\Geo\Value;

use Core\Geo\Value\RegionCode;
use PhpSpec\ObjectBehavior;

class RegionCodeSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedThrough('Africa');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(RegionCode::class);
    }
}
