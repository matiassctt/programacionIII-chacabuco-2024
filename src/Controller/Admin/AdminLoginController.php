<?php 

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/SessionController.php';

use Src\Service\User\UserFinderByEmailAndPasswordService;

final readonly class AdminLoginController extends SessionController {

    private UserFinderByEmailAndPasswordService $service;

    public function __construct() {
        $this->service = new UserFinderByEmailAndPasswordService();
    }

    public function start(): void 
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = $this->service->find($username, $password);
        
        if (empty($user)) {
            header ("Location: /admin/?e=1");
            die();
        }
        
        $this->login($user->id());
    }
}
