<?php 

namespace Src\Entity\Record\Exception;

use Exception;

final class RecordNotFoundException extends Exception {
    public function __construct(int $id) {
        parent::__construct("No se encontro el Registro correspondiente. Id: ".$id);
    }
}