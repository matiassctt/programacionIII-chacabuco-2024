<?php 

use Src\Service\Domain\DomainUpdaterService;

final readonly class DomainPutController {
    private DomainUpdaterService $service;

    public function __construct() {
        $this->service = new DomainUpdaterService();
    }

    public function start(int $id): void 
    {
        $name = $_POST["name"];
        $code = $_POST["code"];

        $this->service->update($name, $code, $id);

        header("Location: /domains");
        die();
    }
}
