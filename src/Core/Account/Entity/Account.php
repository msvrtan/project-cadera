<?php

declare(strict_types=1);

namespace Core\Account\Entity;

use Core\Account\Value\AccountId;
use DateTimeImmutable;

class Account
{
    /** @var AccountId */
    private $accountId;

    /** @var DateTimeImmutable */
    private $createdAt;

    public function __construct(AccountId $accountId, DateTimeImmutable $createdAt)
    {
        $this->accountId = $accountId;
        $this->createdAt = $createdAt;
    }
}
