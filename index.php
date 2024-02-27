
<?php include 'config/model/class.php';?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atltetista</title>
    <link rel="stylesheet" href="assets/library/bootstrap-5.3.3-dist/css/bootstrap.css">
</head>

<body>
    
    <div class="container-md p-5 border my-5 bg-primary bg-opacity-50 rounded-5">

        <div class="row p-0 m-0 border border-black bg-white">
            <div class="row p-0 m-0">
                <div class="col-md-12 w text-center p-0 m-0">
                    <img src="<?php echo $link[0]?>" alt="" width="140" height="160">
                </div>
            </div>

            <div class="row p-0 m-0 overflow-hidden">
                <div class="col-md-12 p-0 m-0">
                    <img id="piso" class="position-relative" src="<?php echo $link[1]?>">
                </div>
            </div>
        </div>

        <form method="POST">
            <div class="row text-center my-4 mx-5 p-4 bg-black bg-opacity-25 rounded-2">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success" name="boton" value="correr">Correr</button>
                </div>
                <div class="col-md-4 d-lg-block">
                    <button type="submit" class="btn btn-danger" name="boton" value="parar">Parar</button>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning" name="boton" value="saltar">Saltar</button>
                </div>
            </div>
        </form>
    </div>

</body>

<script src="assets/library/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>

</html>