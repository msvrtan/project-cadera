<?php

declare(strict_types=1);

namespace Core\Events\Value;

use HideMe\Domain\Core\Uuid\Uuid;
use Ramsey\Uuid\Uuid as RamseyUuid;
use Webmozart\Assert\Assert;

class ConferenceId
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

    public function equals(ConferenceId $conferenceId): bool
    {
        return $conferenceId->asString() === $this->asString();
    }

    public static function create(): ConferenceId
    {
        return new self(RamseyUuid::uuid4()->toString());
    }
}
