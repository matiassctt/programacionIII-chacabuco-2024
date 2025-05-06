<?php

use Src\Service\Record\RecordsSearcherService;

include_once $_SERVER["DOCUMENT_ROOT"].'/src/Controller/ViewController.php';

final readonly class RecordsGetController extends ViewController {
    private RecordsSearcherService $service;

    public function __construct() {
        $this->service = new RecordsSearcherService();
        parent::__construct('Record/list');
    }

    public function start(): void
    {
        $records = $this->service->search();

        $data = [
            "records" => $records
        ];

        parent::call($data);
    }
}