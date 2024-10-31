<?php
    session_start();
    if(isset($_SESSION["usuario"])){
        header("Location: index.php");
    }
    $users = [
        "jhony"=>"JHONY CREATIVO",
        "franklin"=>"FRANKLIN S. C.",
        "wilson"=>"WILSON MARCA",
        "cynthia"=>"CYNTHIA AILEE",
        "junior" => "streamsc0"
    ];
    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
        if(isset($users[$usuario])){
            
            $_SESSION["usuario"] = $users[$usuario];
            header("Location: index.php");
        }else{
            ?>
            <div class="alert alert-danger m-4" role="alert">
                <strong>Alerta!</strong> El usuario no existe
            </div>
            <?php
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-4 mt-4">
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesion 
                    </div>
                    <div class="card-body">
                       <form action="login.php" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Usuario</label>
                                    <input type="text" class="form-control" name="usuario" id="">
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-success w-100" type="submit">Ingresar</button>
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