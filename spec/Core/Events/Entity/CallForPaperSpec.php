<?php

declare(strict_types=1);

namespace spec\Core\Events\Entity;

use Core\Events\Entity\CallForPaper;
use Core\Events\Value\ConferenceId;
use PhpSpec\ObjectBehavior;

class CallForPaperSpec extends ObjectBehavior
{
    public function let(
        ConferenceId $conferenceId,
        \DateTimeImmutable $startDate,
        \DateTimeImmutable $endDate
    ) {
        $this->beConstructedWith($conferenceId, $startDate, $endDate);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(CallForPaper::class);
    }
}
