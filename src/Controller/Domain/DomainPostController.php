<?php 

include_once $_SERVER["DOCUMENT_ROOT"]."/src/Controller/SessionController.php";

use Src\Utils\ControllerUtils;
use Src\Service\Domain\DomainCreatorService;

final readonly class DomainPostController extends SessionController {
    private DomainCreatorService $service;

    public function __construct() {
        $this->service = new DomainCreatorService();
    }

    public function start(): void 
    {
        $this->validateUser();
        
        $name = $_POST["name"];
        $code = $_POST["code"];

        $this->service->create($name, $code);

        header("Location: /domains");
        die();
    }
}
