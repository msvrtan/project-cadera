<?php

declare(strict_types=1);

namespace Core\Account\Value;

use HideMe\Domain\Core\Uuid\Uuid;
use Ramsey\Uuid\Uuid as RamseyUuid;
use Webmozart\Assert\Assert;

class AccountId
{
    /** @var string */
    private $uuid;

    public function __construct(string $uuid)
    {
        Assert::uuid($uuid);

        $this->uuid = $uuid;
    }

    public function asString(): string
    {
        return $this->uuid;
    }

    public function __toString(): string
    {
        return $this->uuid;
    }

    public function equals(AccountId $accountId): bool
    {
        return $accountId->asString() === $this->asString();
    }

    public static function create(): AccountId
    {
        return new self(RamseyUuid::uuid4()->toString());
    }
}
