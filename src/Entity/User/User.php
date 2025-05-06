<?php

namespace Src\Entity\User;

final readonly class User
{
    public function __construct(
        private int $userId,
        private string $username,
        private string $email,
        private string $first_name,
        private string $lastName
    ) {
    }

    public function id(): int
    {
        return $this->userId;
    }

    public function username(): string
    {
        return $this->username;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function firstName(): string
    {
        return $this->first_name;
    }

    public function lastName(): string
    {
        return $this->lastName;
    }
}
