<?php 

namespace Src\Entity\Entertainment;

use DateTime;

final readonly class Entertainment {
	public function __construct(
		private int $id,
		private int $type,
		private DateTime $releaseDate,
		private bool $isFinal,
		private string $name,
		private string $description,
		private int $categoryId
	) {

	}

	public function id(): int
	{
		return $this->id;
	}

	public function type(): int
	{
		return $this->type;
	}

	public function releaseDate(): DateTime
	{
		return $this->releaseDate;
	}

	public function isFinal(): bool
	{
		return $this->isFinal;
	}

	public function name(): string
	{
		return $this->name;
	}

	public function description(): string
	{
		return $this->description;
	}

	public function categoryId(): int
	{
		return $this->categoryId;
	}
}