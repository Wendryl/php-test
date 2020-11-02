<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * Description of Carros
 *
 * @author wendryl
 */
class Carros extends DataLayer {

    public function __construct() {
        parent::__construct("carros", ["modelo", "marca", "ano"]);
    }

    /**
     *
     * @return bool
     */
    public function save(): bool {
        if (!$this->validModelo() || !$this->validMarca() || !$this->validAno() || !parent::save()) {
            return false;
        }
        return true;
    }

    /**
     *
     * @return bool
     * @throws Exception
     */
    private function validModelo(): bool {
        if (empty($this->modelo)) {
            $this->fail = new Exception("O campo modelo não pode estar vazio!");
            return false;
        }
        return true;
    }

    private function validMarca(): bool {
        if (empty($this->marca)) {
            $this->fail = new Exception("O campo marca não pode estar vazio!");
            return false;
        }
        return true;
    }

    private function validAno(): bool {
        if (empty($this->ano)) {
            $this->fail = new Exception("O campo ano não pode estar vazio!");
            return false;
        }
        return true;
    }

}
