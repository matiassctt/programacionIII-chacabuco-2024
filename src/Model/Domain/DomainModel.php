<?php 

namespace Src\Model\Domain;

use Src\Model\DatabaseModel;
use Src\Entity\Domain\Domain;

final readonly class DomainModel extends DatabaseModel {

    public function find(int $id): ?Domain
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        D.id,
                        D.name,
                        D.code
                    FROM
                        domains D
                    WHERE
                        D.id = :id
                SELECT_QUERY;

        $parameters = [
            'id' => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toDomain($result[0] ?? null);
    }

    /** @return Domain[] */
    public function search(): array
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        D.id,
                        D.name,
                        D.code
                    FROM 
                        domains D
                SELECT_QUERY;

        $primitiveResults = $this->primitiveQuery($query);

        $objectResults = [];
        
        foreach ($primitiveResults as $primitiveResult) {
            $objectResults[] = $this->toDomain($primitiveResult);
        }

        return $objectResults;
    }

    private function toDomain(?array $primitive): ?Domain
    {
        if ($primitive === null) {
            return null;
        }

        return new Domain(
            $primitive['id'],
            $primitive['name'],
            $primitive['code']
        );
    }
}