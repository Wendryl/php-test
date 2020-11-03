<?php require './vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Teste PHP | OnCar
        </title>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="views/assets/styles.css"/>
        <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.css"/>
    </head>
    <body>
        <div class="container bg-light border border-2 p-3">
            <h4 class="text-primary">TESTE</h4>
        </div>
        <div class="container bg-light p-3 border border-secondary border-2">
            <div class="input-group">
                <input type="text" class="form-control border border-secondary border-2 rounded-lg" placeholder="Buscar veículo" aria-label="Buscar veículo" aria-describedby="button-addon4">
                <div class="input-group-append" id="button-addon4">
                    <button class="btn btn-outline-secondary border border-secondary border-2 bg-secondary" type="button">
                        <i class="fas fa-search text-secondary bg-secondary"></i>
                    </button>
                    <button class="btn btn-outline-secondary border border-secondary border-2 bg-primary"
                            type="button" data-toggle="modal" data-target="#modalVeiculo"
                            onclick="novoVeiculo('<?= SITE . "app/?fn=new" ?>')">
                        <i class="fas fa-plus text-white"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-12 bg-danger rounded d-flex align-content-center py-2 d-none" id="info-container">
                    <span class="text-white" id="info-msg"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 p-lg-2 p-sm-0 order-lg-first order-md-last ">
                    <div class="bg-light pt-4 px-3 pb-2 shadow-sm">
                        <h5 class="text-secondary"><b>Lista de veículos</b></h5>
                        <ul class="list-group striped-list" id="lista-veiculos">
                            <?php
                            $return = file_get_contents(SITE . "app/?fn=show");
                            $veiculos = json_decode($return, true);
                            if ($veiculos !== NULL):
                                foreach ($veiculos as $carro):
                                    ?>
                                    <li id="<?= $carro['id'] ?>" class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <div class = "d-inline-block">
                                            <h6><? = $carro['marca']
                                                ?></h6>
                                            <strong class="text-primary"><?= $carro['modelo'] ?></strong>
                                            <p class="text-secondary"><b><?= $carro['ano'] ?></b></p>
                                        </div>
                                        <span class="d-flex">
                                            <a id="<?= $carro['id'] ?>" class="btn text-primary" data-toggle="modal" data-target="#modalVeiculo" onclick="editarVeiculo('<?= $carro['id'] ?>', '<?= SITE . "app/?fn=update&id=" . $carro['id'] ?>')">
                                                <i id="<?= $carro['id'] ?>" class="fas fa-edit fa-2x"></i>
                                            </a>
                                        </span>
                                        <span class="d-none">
                                            <?= $carro['descricao'] ?>
                                        </span>
                                    </li>
                                    <?php
                                endforeach;
                            else:
                                ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <h6>Nenhum veículo cadastrado...</h6>
                                </li>
                            </ul>
                        <?php endif; ?>
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm justify-content-end mt-5">
                                <li class="page-item disabled">
                                    <a class="page-link px-3" href="#">
                                        <i class="fas fa-angle-double-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link px-3" href="#">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link px-3" href="#">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link px-3" href="#">
                                        <i class="fas fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 p-lg-2 p-sm-0 mt-lg-0 mt-md-2 order-lg-last order-md-first mb-md-3">
                    <div class="bg-light pt-4 px-3 pb-2 shadow-sm d-inline-block h-100 position-relative w-100">
                        <h6 class="text-secondary"><b>Detalhes do veículo</b></h6>
                        <hr>
                        <h5 class="text-primary">
                            <b id="cur-vehicle-modelo">
                                <?= $veiculos[0]['modelo'] ?>
                            </b></h5>
                        <div class="row">
                            <div class="col-6">
                                <span class="text-light">MARCA</span><br>
                                <strong id="cur-vehicle-marca">
                                    <?= $veiculos[0]['marca'] ?>
                                </strong>
                            </div>
                            <div class="col-6">
                                <span class="text-light">ANO</span><br>
                                <strong id="cur-vehicle-ano">
                                    <?= $veiculos[0]['ano'] ?>
                                </strong>
                            </div>
                        </div>
                        <div class="row">
                            <p class="mt-3 pb-sm-5" id="cur-vehicle-desc">
                                <?= $veiculos[0]['descricao'] ?>
                            </p>
                        </div>
                        <div class="row px-3 d-flex justify-content-end position-absolute bottom-0 w-100 mb-3 mt-sm-5 mb-sm-2 pt-sm-5">
                            <hr>
                            <button id="btn-edit-din" type="button" class="btn btn-primary w-auto rounded-0 px-5" data-toggle="modal" data-target="#modalVeiculo" onclick="editarVeiculo(<?= $veiculos[0]['id'] ?>)">EDITAR</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalVeiculo" tabindex="-1" role="dialog" aria-labelledby="modalVeiculo" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content rounded-0 px-2">
                            <div class="modal-header">
                                <h5 class="modal-title titulo-modal" id="modalVeiculo">Detalhes</h5>
                            </div>
                            <form action="<?php SITE . "app/?fn=new" ?>" id="form-veiculo" method="post">
                                <div class="modal-body">
                                    <div class="form-group my-3">
                                        <span class="text-danger text-center d-none" id="msg-form">Preencha os campos necessários!</span><br>
                                        <label for="modelo-carro">Veículo</label>
                                        <input type="text" class="form-control" id="modelo-carro" name="modelo-carro" aria-describedby="emailHelp">
                                    </div>
                                    <div class="row my-3">
                                        <div class="form-group col-6">
                                            <label for="marca-carro">Marca</label>
                                            <input type="text" class="form-control" id="marca-carro" name="marca-carro">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ano-carro">Ano</label>
                                            <input type="text" class="form-control" id="ano-carro" name="ano-carro">
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="form-group col-12">
                                            <label for="desc-carro">Descrição</label>
                                            <textarea class="form-control" rows="4" id="desc-carro" name="desc-carro">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-check my-3">
                                        <input type="checkbox" class="form-check-input" id="veiculo-vendido" checked="checked">
                                        <label class="form-check-label" for="veiculo-vendido">Vendido</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary rounded-0 px-5" id="btn-submit">SALVAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="views/assets/script.js"></script>
    </body>
</html>
