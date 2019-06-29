<?php

declare(strict_types=1);

namespace Core\Events\Entity;

use Core\Events\Value\ConferenceId;
use Core\Geo\Value\LocationId;

class Conference
{
    /** @var ConferenceId */
    private $conferenceId;

    /** @var string */
    private $name;

    /** @var string|null */
    private $description;

    /** @var LocationId */
    private $locationId;

    /** @var \DateTimeImmutable */
    private $startDate;

    /** @var \DateTimeImmutable */
    private $endDate;

    /** @var string|null */
    private $conferenceUrl;

    /** @var \DateTimeImmutable */
    private $createdAt;

    public function __construct(
        ConferenceId $conferenceId,
        string $name,
        LocationId $locationId,
        \DateTimeImmutable $startDate,
        \DateTimeImmutable $endDate,
        \DateTimeImmutable $createdAt
    ) {
        $this->conferenceId = $conferenceId;
        $this->name         = $name;
        $this->locationId   = $locationId;
        $this->startDate    = $startDate;
        $this->endDate      = $endDate;
        $this->createdAt    = $createdAt;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setConferenceUrl(string $conferenceUrl): void
    {
        $this->conferenceUrl = $conferenceUrl;
    }
}
