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
                    <button class="btn btn-outline-secondary border border-secondary border-2 bg-primary" type="button">
                        <i class="fas fa-plus text-white"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-lg-8 col-md-12 p-lg-2 p-sm-0">
                    <div class="bg-light pt-4 px-3 pb-2 shadow-sm">
                        <h5 class="text-secondary"><b>Lista de veículos</b></h5>
                        <ul class="list-group striped-list">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div class="d-inline-block">
                                    <h6>FIAT</h6>
                                    <strong class="text-primary">Uno Vivace</strong>
                                    <p class="text-secondary"><b>2015</b></p>
                                </div>
                                <span class="d-flex">
                                    <a class="btn text-primary" data-toggle="modal" data-target="#modalVeiculo">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </a>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div class="d-inline-block">
                                    <h6>FIAT</h6>
                                    <strong class="text-primary">Uno Vivace</strong>
                                    <p class="text-secondary"><b>2015</b></p>
                                </div>
                                <span class="d-flex">
                                    <a class="btn text-primary" data-toggle="modal" data-target="#modalVeiculo">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </a>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div class="d-inline-block">
                                    <h6>FIAT</h6>
                                    <strong class="text-primary">Uno Vivace</strong>
                                    <p class="text-secondary"><b>2015</b></p>
                                </div>
                                <span class="d-flex">
                                    <a class="btn text-primary" data-toggle="modal" data-target="#modalVeiculo">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </a>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div class="d-inline-block">
                                    <h6>FIAT</h6>
                                    <strong class="text-primary">Uno Vivace</strong>
                                    <p class="text-secondary"><b>2015</b></p>
                                </div>
                                <span class="d-flex">
                                    <a class="btn text-primary" data-toggle="modal" data-target="#modalVeiculo">
                                        <i class="fas fa-edit fa-2x"></i>
                                    </a>
                                </span>
                            </li>
                        </ul>
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
                <div class="col-lg-4 col-md-12 p-lg-2 p-sm-0 mt-lg-0 mt-md-2">
                    <div class="bg-light pt-4 px-3 pb-2 shadow-sm d-inline-block h-100 position-relative">
                        <h6 class="text-secondary"><b>Detalhes do veículo</b></h6>
                        <hr>
                        <h5 class="text-primary"><b>Uno Vivace</b></h5>
                        <div class="row">
                            <div class="col-6">
                                <span class="text-light">MARCA</span><br>
                                <strong>FIAT</strong>
                            </div>
                            <div class="col-6">
                                <span class="text-light">ANO</span><br>
                                <strong>2015</strong>
                            </div>
                        </div>
                        <div class="row">
                            <p class="mt-3 pb-sm-5">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur arcu sit amet odio dapibus, et auctor eros porttitor. Nulla non nisi vitae ante porttitor rhoncus et eu dui.
                                Fusce ac neque in sapien tempus feugiat. Nulla non augue congue, egestas lectus et, posuere elit.
                            </p>
                        </div>
                        <div class="row px-3 d-flex justify-content-end position-absolute bottom-0 w-100 mb-3 mt-sm-5 mb-sm-2">
                            <hr>
                            <button type="button" class="btn btn-primary w-auto rounded-0 px-5" data-toggle="modal" data-target="#modalVeiculo">EDITAR</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalVeiculo" tabindex="-1" role="dialog" aria-labelledby="modalVeiculo" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content rounded-0 px-2">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalVeiculo">Detalhes</h5>
                            </div>
                            <div class="modal-body">
                                <form action="Vehicle.update">
                                    <div class="form-group my-3">
                                        <label for="modelo-carro">Veículo</label>
                                        <input type="email" class="form-control" id="modelo-carro" aria-describedby="emailHelp" value="Uno Vivace">
                                    </div>
                                    <div class="row my-3">
                                        <div class="form-group col-6">
                                            <label for="marca-carro">Marca</label>
                                            <input type="text" class="form-control" id="marca-carro" value="FIAT">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="ano-carro">Ano</label>
                                            <input type="text" class="form-control" id="ano-carro" value="2015">
                                        </div>
                                    </div>
                                    <div class="form-check my-3">
                                        <input type="checkbox" class="form-check-input" id="veiculo-vendido" checked="true">
                                        <label class="form-check-label" for="veiculo-vendido">Vendido</label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary rounded-0 px-5">SALVAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
