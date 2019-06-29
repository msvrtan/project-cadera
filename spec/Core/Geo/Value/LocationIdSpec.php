<?php

declare(strict_types=1);

namespace spec\Core\Geo\Value;

use Core\Geo\Value\LocationId;
use PhpSpec\ObjectBehavior;

class LocationIdSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('f3918923-4cac-4efe-8635-3fd2d4df04e0');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(LocationId::class);
    }

    public function it_exposes_value_as_string()
    {
        $this->asString()->shouldReturn('f3918923-4cac-4efe-8635-3fd2d4df04e0');
    }

    public function it_can_be_converted_to_string_magically()
    {
        $this->__toString()->shouldReturn('f3918923-4cac-4efe-8635-3fd2d4df04e0');
    }

    public function it_offers_check_if_two_account_ids_are_equal()
    {
        $other = new LocationId('f3918923-4cac-4efe-8635-3fd2d4df04e0');
        $this->equals($other)->shouldReturn(true);
    }
}
