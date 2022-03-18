<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta description="Hito 1 - Lenguaje de Marcas - Manipulacion de un JSON atraves de JS">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="asset/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="asset/css/formulario.css">
    <link rel="stylesheet" type="text/css" href="asset/css/tabla.css">

	<!-- Latest compiled and minified CSS /*BOOTSTRAP*/-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title>Document</title>
</head>
<body>
    <header>
        <?php
            require_once('cabecera.php');
        ?>
    </header>
    <main>
        <div class="margen">
            <div class="principal">
                <div class="contenido">
                    <div class="summary">
                        <h1>MVC MYSQL</h1>
                        <div class="fecha">11/03/2022</div>
                    </div>
                    <?php
                        require_once('routing.php');
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center text-lg-start" style="background-color: #240000;">
        <?php
            require_once('footer.php');
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>