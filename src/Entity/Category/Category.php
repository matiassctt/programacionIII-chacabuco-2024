<?php

namespace Src\Entity\Category;

final readonly class Category
{
    public function __construct(
        private int $idCategory,
        private string $name
    ) {
    }

    public function id(): int
    {
        return $this->idCategory;
    }

    public function name(): string
    {
        return $this->name;
    }
}
