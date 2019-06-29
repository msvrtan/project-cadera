<?php

declare(strict_types=1);

namespace Core\Geo\Value;

class RegionCode
{
    private const AFRICA = 'Africa';

    private const ASIA = 'Asia';

    private const CENTRAL_AMERICA = 'Central America';

    private const EUROPE = 'Europe';

    private const NORTH_AMERICA = 'North America';

    private const OCEANIA = 'Oceania';

    private const SOUTH_AMERICA = 'South America';

    /** @var string */
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function africa(): RegionCode
    {
        return new self(self::AFRICA);
    }

    public static function asia(): RegionCode
    {
        return new self(self::ASIA);
    }

    public static function centralAmerica(): RegionCode
    {
        return new self(self::CENTRAL_AMERICA);
    }

    public static function europe(): RegionCode
    {
        return new self(self::EUROPE);
    }

    public static function northAmerica(): RegionCode
    {
        return new self(self::NORTH_AMERICA);
    }

    public static function oceania(): RegionCode
    {
        return new self(self::OCEANIA);
    }

    public static function southAmerica(): RegionCode
    {
        return new self(self::SOUTH_AMERICA);
    }
}
