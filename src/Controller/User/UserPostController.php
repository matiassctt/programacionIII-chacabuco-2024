<?php 

use Src\Service\User\UserCreatorService;

final readonly class UserPostController {
    private UserCreatorService $service;

    public function __construct() {
        $this->service = new UserCreatorService();
    }

    public function start(): void 
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $this->service->create($name, $email, $password);
    }
}
