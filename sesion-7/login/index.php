<?php 
    $usuario ="";
    session_start();
    if(isset($_SESSION["usuario"])){
        $usuario = $_SESSION["usuario"];
    }else{
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-4 mt-4">
                <div class="card">
                    <div class="card-header">
                       SESION
                    </div>
                    <div class="card-body">
                       <form action="cerrar.php" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Usuario</label>
                                    <input type="text" class="form-control" name="usuario" value="<?php echo $usuario; ?>" disabled id="">
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-warning w-100" type="submit">CERRAR</button>
                                </div>
                            </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>