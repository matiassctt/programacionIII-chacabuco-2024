<?php 

use Src\Service\Record\RecordFinderService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class RecordGetController extends ViewController {
    private RecordFinderService $service;

    public function __construct() {
        $this->service = new RecordFinderService();
        parent::__construct('Record/detail');
    }

    public function start(int $id): void
    {
        $record = $this->service->find($id);
        
        $data = [
            "record" => $record,
        ];

        parent::call($data);
    }
}
