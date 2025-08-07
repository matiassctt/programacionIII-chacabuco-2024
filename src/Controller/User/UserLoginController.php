<?php 

use Src\Service\User\UserLoginService;

final readonly class UserLoginController {
    private UserLoginService $service;

    public function __construct() {
        $this->service = new UserLoginService();
    }

    public function start(): void 
    {
        $email = $_POST["email"] ?? "";
        $password = $_POST["password"] ?? "";
        
        $user = $this->service->login($email, $password);
     
        echo json_encode([
            "token" => $user->token(),
        ]);
    }
}
