<?php 

declare(strict_types = 1);

namespace Src\Service\User;

use Src\Model\User\UserModel;
use Src\Entity\User\User;

final readonly class UserFinderByEmailAndPasswordService {

    private UserModel $model;

    public function __construct() 
    {
        $this->model = new UserModel();
    }

    public function find(string $email, string $password): ?User 
    {
        return $this->model->findByEmailAndPassword($email, $password);
    }

}

