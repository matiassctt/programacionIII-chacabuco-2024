<?php 

namespace Src\Entity\Record;

final readonly class Record {

    public function __construct(
        private int $id,
        private string $user,
        private string $categoria,
        private string $descripcion,

    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function user(): string
    {
        return $this->user;
    }

    public function categoria(): string
    {
        return $this->categoria;
    }
    public function descripcion(): string
    {
        return $this->descripcion;
    }
}