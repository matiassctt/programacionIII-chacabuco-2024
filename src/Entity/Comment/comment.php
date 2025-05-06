<?php

namespace Src\Entity\Comment;

final readonly class Comment
{
    public function __construct(
        private int $comment_id,
        private string $message,
        private int $entertainmentId,
        private float $rating,
        private int $userId,
        private \DateTimeInterface $commentDate
    ) {
    }

    public function id(): int
    {
        return $this->comment_id;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function entertainmentId(): int
    {
        return $this->entertainmentId;
    }

    public function rating(): float
    {
        return $this->rating;
    }

    public function userId(): int
    {
        return $this->userId;
    }

    public function commentDate(): \DateTimeInterface
    {
        return $this->commentDate;
    }
}
