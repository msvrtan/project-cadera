<?php

declare(strict_types=1);

namespace Core\Events\Entity;

use Core\Events\Value\ConferenceId;

class CallForPaper
{
    /** @var ConferenceId */
    private $conferenceId;

    /** @var \DateTimeImmutable */
    private $startDate;

    /** @var \DateTimeImmutable */
    private $endDate;

    public function __construct(
        ConferenceId $conferenceId,
        \DateTimeImmutable $startDate,
        \DateTimeImmutable $endDate
    ) {
        $this->conferenceId = $conferenceId;
        $this->startDate    = $startDate;
        $this->endDate      = $endDate;
    }
}
