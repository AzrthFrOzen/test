<?php require_once __DIR__ . '/../templates/header.php' ?>

<?php require_once __DIR__ . '/../templates/sidenav.php' ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Inicio</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                Calendario
            </button>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-1 m-md-3 text-center">
        <div class="col-md-7 p-lg-5 mx-auto my-5">
            <h1>Interes Compuesto - Calculo</h1>
            <br>
            <form action="http://testabraham.test/home/icompuesto" method="post">
                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <label for="capini" class="form-label">Capital Inicial</label>
                            <input type="number" class="form-control" id="capini" name="capini" value="<?= $capini ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-4">
                            <label for="tasainteres" class="form-label">Tasa de Interes (%)</label>
                            <input type="number" class="form-control" id="tasainteres" name="tasainteres" value="<?= $tasainteres ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-4">
                            <label for="periodo" class="form-label">Período (Meses)</label>
                            <input type="number" class="form-control" id="periodo" name="periodo" value="<?= $periodo ?>">
                        </div>
                    </div>
                </div>
                <br>
                <div class="mb-6">
                    <button type="submit" class="btn btn-primary form-control">Aceptar</button>
                </div>
            </form>
            <hr>
            <div class="mb-3">
                <label>Resultado de la operación: </label>
                <br>
                <br>
                <input type="text" class="form-control" id="rpta" value="<?= $rpta ?>" readonly>
            </div>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../templates/footer.php' ?>