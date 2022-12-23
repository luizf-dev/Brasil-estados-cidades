<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estados e Cidades do Brasil</title>
        <link rel="shortcut icon" href="assets/img/map-marker-alt-solid.svg" type="image/x-icon">
        <link rel="stylesheet" href="assets/bootstrap-css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--Header Inicio -->
        <header id="header">
            <nav class="navbar navbar-expand-md navbar-light fixed-top bg-dark">
                <div class="container">
                    <a href="index.php" class="navbar-brand">
                        <i class="icon fas fa-map-marker-alt fa-2x text-white"></i>
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-menu">
                        <i class="fas fa-bars text-white"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="nav-menu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>  
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
         <!--Header Fim-->

        <!-- Tabela inicio -->
        <div class="table-container">
                <div class="search"> 
                    <input class="input-field" id="myInput" type="text" placeholder="Digite o nome da cidade ou UF">
                </div> 
            <div>
            </div>
            <table class="table" id="tableClient">
                <thead class="bg-dark">
                    <tr>
                        <th>#</th>
                        <th>Cidade</th>
                        <th>UF</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php require_once('listar-cidades.php');?>
                </tbody>
            </table>
        </div>
        <!-- Tabela fim -->

    <!-- JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>