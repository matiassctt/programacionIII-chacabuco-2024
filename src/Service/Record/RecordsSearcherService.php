<?php 

namespace Src\Service\Record;

use Src\Entity\Record\Record;
use Src\Model\Record\RecordModel;

final readonly class RecordsSearcherService {
    private RecordModel $domainModel;

    public function __construct() {
        $this->domainModel = new RecordModel();
    }

    /** @return Record[] */
    public function search(): array
    {
        return $this->domainModel->search();
    }
}