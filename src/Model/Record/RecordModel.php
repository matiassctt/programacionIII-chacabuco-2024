<?php 

namespace Src\Model\Record;

use Src\Model\DatabaseModel;
use Src\Entity\Record\Record;

final readonly class RecordModel extends DatabaseModel {

    public function find(int $id): ?Record
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        R.id,
                        R.user,
                        R.categoria,
                        R.descripcion
                    FROM
                        record R
                    WHERE
                        R.id = :id
                SELECT_QUERY;

        $parameters = [
            'id' => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toRecord($result[0] ?? null);
    }

    /** @return Record[] */
    public function search(): array
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        R.id,
                        R.user,
                        R.categoria,
                        R.descripcion
                    FROM
                        record R
                SELECT_QUERY;

        $primitiveResults = $this->primitiveQuery($query);

        $objectResults = [];
        
        foreach ($primitiveResults as $primitiveResult) {
            $objectResults[] = $this->toRecord($primitiveResult);
        }

        return $objectResults;
    }

    private function toRecord(?array $primitive): ?Record
    {
        if ($primitive === null) {
            return null;
        }

        return new Record(
            $primitive['id'],
            $primitive['user'],
            $primitive['categoria'],
            $primitive['descripcion']
        );
    }
}