<?php

namespace Src\Entity\Platform;

final readonly class Platform
{
    public function __construct(
        private int $platformId,
        private string $name
    ) {
    }

    public function id(): int
    {
        return $this->platformId;
    }

    public function name(): string
    {
        return $this->name;
    }
}
