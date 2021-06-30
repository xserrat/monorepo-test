<?php

declare(strict_types=1);

namespace YourMonorepo\FirstPackage;

final class FirstClass
{
    public const VERSION = 'main';
    public const NAME = 'first';

    private $version;

    public function __construct()
    {
        $this->version = self::VERSION;
    }

    public function version(): string
    {
        return $this->version;
    }
}
