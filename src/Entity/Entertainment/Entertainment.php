<?php

namespace Src\Entity\Entertainment;

final readonly class Entertainment
{
    public function __construct(
        private int $entretainmentId,
        private string $type,                // Ej: 'peliculas' o 'series'
        private \DateTimeInterface $date,   // Fecha de estreno
        private bool $final,                 // Si tiene final cerrado
        private string $name,
        private string $description,
        private int $categoriyId,
        private int $platformId
    ) {
    }

    public function id(): int
    {
        return $this->entretainmentId;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function date(): \DateTimeInterface
    {
        return $this->date;
    }

    public function final(): bool
    {
        return $this->final;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function idCategoria(): int
    {
        return $this->categoriyId;
    }

    public function idPlataforma(): int
    {
        return $this->platformId;
    }
}
