<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>
            Teste PHP | OnCar
        </title>
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
                        <i class="fas fa-plus text-light"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container border border-2 mt-3">
            <div class="row">
                <div class="col-lg-8 col-md-7 p-lg-3 p-sm-0">
                    <div class="bg-light pt-4 px-3 pb-2 shadow-sm">
                        <h5 class="text-secondary">Lista de veículos</h5>
                        <ul class="list-group striped-list">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div class="d-inline-block">
                                    <h6>FIAT</h6>
                                    <strong class="text-primary">Uno Vivace</strong>
                                    <p class="text-secondary"><b>2015</b></p>
                                </div>
                                <span class="d-flex">
                                    <a class="btn text-primary">
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
                                    <a class="btn text-primary">
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
                                    <a class="btn text-primary">
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
                                    <a class="btn text-primary">
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
                <div class="col-lg-4 col-md-5 p-3">
                    <div class="bg-light w-100">

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
