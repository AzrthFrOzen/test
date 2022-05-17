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
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1>Resta</h1>
            <form action="http://testabraham.test/home/resta" method="post">
                <div class="row">
                    <div class="col">
                        <div class="mb-6">
                            <label for="number1" class="form-label">Número 1</label>
                            <input type="number" class="form-control" id="number1" name="number1" value="<?= $number1 ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-6">
                            <label for="number1" class="form-label">Número 2</label>
                            <input type="number" class="form-control" id="number2" name="number2" value="<?= $number2 ?>">
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