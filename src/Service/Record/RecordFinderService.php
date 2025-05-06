<?php 

declare(strict_types = 1);

namespace Src\Service\Record;

use Src\Model\Record\RecordModel;
use Src\Entity\Record\Record;
use Src\Entity\Record\Exception\RecordNotFoundException;

final readonly class RecordFinderService {

    private RecordModel $model;

    public function __construct() 
    {
        $this->model = new RecordModel();
    }

    public function find(int $id): Record 
    {
        $domain = $this->model->find($id);

        if ($domain === null) {
            throw new RecordNotFoundException($id);
        }

        return $domain;
    }

}

