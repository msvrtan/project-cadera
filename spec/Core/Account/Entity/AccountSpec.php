<?php

declare(strict_types=1);

namespace spec\Core\Account\Entity;

use Core\Account\Entity\Account;
use Core\Account\Value\AccountId;
use DateTimeImmutable;
use PhpSpec\ObjectBehavior;

class AccountSpec extends ObjectBehavior
{
    public function let(AccountId $accountId, DateTimeImmutable $createdAt)
    {
        $this->beConstructedWith($accountId, $createdAt);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Account::class);
    }
}
