<?php 

use Src\Service\Domain\DomainFinderService;

include_once $_SERVER["DOCUMENT_ROOT"]."/src/Controller/AuthMiddleware.php";

final readonly class DomainGetController extends AuthMiddleware {
    private DomainFinderService $service;

    public function __construct() {
        parent::__construct();
        $this->service = new DomainFinderService();
    }

    public function start(int $id): void 
    {
        $domain = $this->service->find($id);
     
        echo json_encode([
            "id" => $domain->id(),
            "code" => $domain->code(),
            "name" => $domain->name()
        ]);
    }
}
