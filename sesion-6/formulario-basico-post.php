<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Basico</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/_vendor/prismjs/themes/prism-okaidia.css">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
</head>

<body>
    <div class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
        <div class="container">
            <a href="../" class="navbar-brand">CURSO PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Mi Formulario</div>
                    <div class="card-body">
                       <form action="formulario-basico-post.php" method="POST" enctype="multipart/form-data" >
                           <div class="mb-3"><div class="row">
                                <div class="col-12">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" class="form-control" name="nombre">
                                </div>
                                <div class="col-12">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email">
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-success btn-lg w-100" type="submit">Enviar</button>
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
<?php
    /*
        *HTTP METHODS
        - GET 
        - POST
        - PATH 
        - PUT
        - OPTIONS
        - DELETE
        ----------------
        GET Y POST

    */
    if(isset($_POST["nombre"])){
        echo "NOMBRE: ".$_POST["nombre"]."<br>";
    }
    if(isset($_POST["email"])){
        echo "EMAIL: ".$_POST["email"];
    }