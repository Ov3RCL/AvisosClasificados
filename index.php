<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avisos Clasificados</title>
    <!-- libreria bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- libreria font awesome  para insertar iconos -->
    <script src="https://kit.fontawesome.com/7ff0a0897d.js"></script>


</head>
<body>
    <!-- inicio navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Avisos Clasificados</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Registro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Entrar</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar Aviso..." aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>  
    <!-- fin navbar -->

    <div class="container mt-5" id="principal">
        <div class="row">
            <div class="col-3">
                  <!-- menu categorias -->
                  <p><i class="fas fa-box-open"></i> Categorias</p>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Automoviles</a>
                    <a href="#" class="list-group-item list-group-item-action">Computadores</a>
                    <a href="#" class="list-group-item list-group-item-action">Servicios</a>
                    <a href="#" class="list-group-item list-group-item-action">Hogar</a>
                </div>
                <!-- fin menu categorias -->

            </div>

            <div class="col-9">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Listado de avisos</h5>
                        </div>
                        
                        <div class="col-md-5 mb-3">
                            
                            <div class="card " style="width: 18rem;">
                                <img src="http://lorempixel.com/300/200" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo del Aviso</h5>
                                    <p class="card-text">Descripcion del aviso ... </p>
                                    <a href="#" class="btn btn-primary">Informacion</a>
                                </div>
                            </div>
                        
                        </div>
                            
                        <div class="col-md-6 mb-3">
                            
                            <div class="card " style="width: 18rem;">
                                <img src="http://lorempixel.com/300/200" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo del Aviso</h5>
                                    <p class="card-text">Descripcion del aviso ... </p>
                                    <a href="#" class="btn btn-primary">Informacion</a>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                
                
                </div>

            </div>

        </div>
        
    </div>


  






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>