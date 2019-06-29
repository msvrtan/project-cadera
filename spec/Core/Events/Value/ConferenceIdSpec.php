<?php

declare(strict_types=1);

namespace spec\Core\Events\Value;

use Core\Events\Value\ConferenceId;
use PhpSpec\ObjectBehavior;

class ConferenceIdSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('afab85c6-b2d5-4ac9-af54-15bf3e6e1070');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(ConferenceId::class);
    }

    public function it_exposes_value_as_string()
    {
        $this->asString()->shouldReturn('afab85c6-b2d5-4ac9-af54-15bf3e6e1070');
    }

    public function it_can_be_converted_to_string_magically()
    {
        $this->__toString()->shouldReturn('afab85c6-b2d5-4ac9-af54-15bf3e6e1070');
    }

    public function it_offers_check_if_two_account_ids_are_equal()
    {
        $other = new ConferenceId('afab85c6-b2d5-4ac9-af54-15bf3e6e1070');
        $this->equals($other)->shouldReturn(true);
    }
}
