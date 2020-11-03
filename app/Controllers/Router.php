<?php

namespace App\Controllers;

use App\Models\Carros;

/**
 * Description of Router
 *
 * @author wendryl
 */
class Router {

    /**
     *
     * @param string $url
     * @param string $method
     * @param string $params = ''
     */
    public function route($url, $method, $params = '') {

        if ($url == "show") {
            $this->exibirCarros();
        }

        if ($url == "new" && $method == "POST") {
            if ($this->novoCarro()) {
                header("Location: " . SITE . "?msg=success&type=create");
            } else {
                header("Location: " . SITE . "?msg=failed&type=create");
            }
        }

        if ($url == "showSingle") {
            $this->exibirCarro($params["id"]);
        }

        if ($url == "update") {
            if ($this->atualizarCarro($params["id"])) {
                header("Location: " . SITE . "?msg=success&type=update");
            } else {
                header("Location: " . SITE . "?msg=failed&type=update");
            }
        }
    }

    private function exibirCarros() {

        $jsonObj;
        $carro = new Carros();
        $result = $carro->find()->fetch(true);
        $i = 0;
        foreach ($result as $carro) {
            $jsonObj[$i]["id"] = $carro->id;
            $jsonObj[$i]["marca"] = $carro->marca;
            $jsonObj[$i]["modelo"] = $carro->modelo;
            $jsonObj[$i]["ano"] = $carro->ano;
            $jsonObj[$i]["descricao"] = $carro->descricao;
            $i++;
        }
        header("Content-Type: application/json");
        echo json_encode($jsonObj);
    }

    /**
     *
     * @param type $id
     */
    private function exibirCarro($id) {
        $jsonObj;
        $carro = new Carros();
        $result = $carro->findById($id);

        $jsonObj["id"] = $result->id;
        $jsonObj["modelo"] = $result->modelo;
        $jsonObj["marca"] = $result->marca;
        $jsonObj["ano"] = $result->ano;
        $jsonObj["descricao"] = $result->descricao;

        header("Content-Type: application/json");
        echo json_encode($jsonObj);
    }

    private function novoCarro(): bool {
        $jsonObj;
        $carro = new Carros();
        $carro->modelo = filter_var($_POST["modelo-carro"], FILTER_SANITIZE_STRING);
        $carro->marca = filter_var($_POST["marca-carro"], FILTER_SANITIZE_STRING);
        $carro->ano = filter_var($_POST["ano-carro"], FILTER_SANITIZE_STRING);
        $carro->descricao = filter_var($_POST["desc-carro"], FILTER_SANITIZE_STRING);

        if (!$carro->save()) {
            header("Content-Type: application/json");
            echo json_encode(["Message", $carro->fail()->getMessage()]);
            return false;
        }
        return true;
    }

    /**
     *
     * @param type $id
     * @return bool
     */
    private function atualizarCarro($id): bool {
        $jsonObj;
        $carro = (new Carros())->findById($id);
        $carro->modelo = filter_var($_POST["modelo-carro"], FILTER_SANITIZE_STRING);
        $carro->marca = filter_var($_POST["marca-carro"], FILTER_SANITIZE_STRING);
        $carro->ano = filter_var($_POST["ano-carro"], FILTER_SANITIZE_STRING);
        $carro->descricao = filter_var($_POST["desc-carro"], FILTER_SANITIZE_STRING);

        if (!$carro->save()) {
            header("Content-Type: application/json");
            echo json_encode(["Message", $carro->fail()->getMessage()]);
            return false;
        }
        return true;
    }

}
