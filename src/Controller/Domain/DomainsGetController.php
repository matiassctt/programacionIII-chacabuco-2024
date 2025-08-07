<?php

use Src\Service\Domain\DomainsSearcherService;

final readonly class DomainsGetController {
    private DomainsSearcherService $service;

    public function __construct() {
        $this->service = new DomainsSearcherService();
    }

    public function start(): void
    {
        $domains = $this->service->search();

        echo json_encode([
            "results" => $domains
        ]);
    }
}