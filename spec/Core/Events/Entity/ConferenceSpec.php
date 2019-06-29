<?php

declare(strict_types=1);

namespace spec\Core\Events\Entity;

use Core\Events\Entity\Conference;
use Core\Events\Value\ConferenceId;
use Core\Geo\Value\LocationId;
use PhpSpec\ObjectBehavior;

class ConferenceSpec extends ObjectBehavior
{
    public function let(
        ConferenceId $conferenceId,
        LocationId $locationId,
        \DateTimeImmutable $startDate,
        \DateTimeImmutable $endDate,
        \DateTimeImmutable $createdAt
    ) {
        $this->beConstructedWith(
            $conferenceId,
            $name = 'SomeConf 2019',
            $locationId,
            $startDate,
            $endDate,
            $createdAt
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(Conference::class);
    }

    public function it_can_have_description_defined()
    {
        $this->setDescription($description = 'SomeConf is traditional...');
    }

    public function it_can_have_conference_url_defined()
    {
        $this->setConferenceUrl($conferenceUrl = 'https://some.conf');
    }
}
