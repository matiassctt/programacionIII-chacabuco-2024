<?php 

namespace Src\Model\Entertainment;

use DateTime;
use Src\Model\DatabaseModel;
use Src\Entity\Entertainment\Entertainment;

final readonly class EntertainmentModel extends DatabaseModel {
	
	public function find(int $id): ?Entertainment
	{
		$query = <<<SELECT_QUERY
						SELECT 
							E.entertainment_id,
							E.type,
							E.release_date,
							E.is_final,
							E.name,
							E.description,
							E.category_id
						FROM 
							entertainments E
						WHERE
							E.entertainment_id = :id
					SELECT_QUERY;

		$parameters = [
			"id" => $id
		];

		$result = $this->primitiveQuery($query, $parameters);

		return $this->toEntertainment($result[0] ?? null);
	}

	private function toEntertainment(?array $primitive): ?Entertainment
	{
		if ($primitive === null) {
			return null;
		}

		return new Entertainment(
			$primitive["entertainment_id"] ?? 0,
			$primitive["type"] ?? '',
			new DateTime($primitive["release_date"] ?? 'now'),
			$primitive["is_final"] ?? false,
			$primitive["name"] ?? '',
			$primitive["description"] ?? '',
			$primitive["category"] ?? 0,
		);
	}
}