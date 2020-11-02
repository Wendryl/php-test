<?php

namespace App\Controllers;

use App\Models\Carros;

/**
 * Description of Router
 *
 * @author wendryl
 */
class Router {

    public function route($url, $method) {

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

}
