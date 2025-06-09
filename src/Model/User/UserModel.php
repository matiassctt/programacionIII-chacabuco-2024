<?php 

namespace Src\Model\User;

use Src\Model\DatabaseModel;
use Src\Entity\User\User;

final readonly class UserModel extends DatabaseModel {

    public function find(int $id): ?User
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        U.id,
                        U.email,
                        U.password
                    FROM
                        user U
                    WHERE
                        U.id = :id
                SELECT_QUERY;

        $parameters = [
            'id' => $id
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toUser($result[0] ?? null);
    }

    public function findByEmailAndPassword(
        string $email,
        string $password
    ): ?User
    {
        $query = <<<SELECT_QUERY
                    SELECT
                        U.id,
                        U.email,
                        U.password
                    FROM
                        user U
                    WHERE
                        U.email = :email AND
                        U.password = :password
                SELECT_QUERY;

        $parameters = [
            'email' => $email,
            'password' => $password,
        ];

        $result = $this->primitiveQuery($query, $parameters);
        
        return $this->toUser($result[0] ?? null);
    }

    private function toUser(?array $primitive): ?User
    {
        if ($primitive === null) {
            return null;
        }

        return new User(
            $primitive['id'],
            $primitive['email'],
            $primitive['password']
        );
    }
}