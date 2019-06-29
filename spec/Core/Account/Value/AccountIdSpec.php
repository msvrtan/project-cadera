<?php

declare(strict_types=1);

namespace spec\Core\Account\Value;

use Core\Account\Value\AccountId;
use PhpSpec\ObjectBehavior;

class AccountIdSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('67621b6e-3b4f-4cd2-82e0-62963012f141');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(AccountId::class);
    }

    public function it_exposes_value_as_string()
    {
        $this->asString()->shouldReturn('67621b6e-3b4f-4cd2-82e0-62963012f141');
    }

    public function it_can_be_converted_to_string_magically()
    {
        $this->__toString()->shouldReturn('67621b6e-3b4f-4cd2-82e0-62963012f141');
    }

    public function it_offers_check_if_two_account_ids_are_equal()
    {
        $other = new AccountId('67621b6e-3b4f-4cd2-82e0-62963012f141');
        $this->equals($other)->shouldReturn(true);
    }
}
