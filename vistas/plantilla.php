
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sergio Ramirez"></meta>
    <meta name="description" content="comidas rapidas perro mono"></meta>
    <meta name="keywords" content="salchipapa, amburguesa, perro caliente,"></meta>
    <title>Perro Mono Quirigua</title>
    <link rel="stylesheet" href="./vistas/css/style.css">
    <link rel="stylesheet" href="./vistas/css/index2.css">
</head>
<body>
    <header>
        <div class="container-logo">
            <img class="logo" src="" alt="Logo perromono">
        </div>

        <nav>
            <b><a href="index.php?pagina=galeria">Delicias</a>
            <a href="index.php?pagina=eventos">Eventos</a>
            <a href="index.php?pagina=carta">Carta</a>
            <a href="index.php?pagina=contacto">Contactos</a></b> 
        </nav>
    </header>

    <?php 
        if(isset($_GET["pagina"])){

            if($_GET["pagina"]== "galeria" ||
                $_GET["pagina"]=="eventos" ||
                $_GET["pagina"]=="carta" ||
                $_GET["pagina"]=="contacto"){
                    include "paginas/".$_GET["pagina"].".php";
                }
        }else{
            include "paginas/inicio.php";
        }
        
    ?>

    <footer>
        <div class="contactos">
            <h4>contactanos :</h4>
            <div>
                <address>
                    <ol>
                        <li>tel:</li> 
                        <li>mail:</li> 
                        <li>Dir:</li> 
                    </ol> 
                </address>

            </div>
        </div>
        <div class="terminos">
            <ol>
                <li>terminos y condiciones</li>
                <li>PQRS</li>
                <li>Pagos y envios</li>
                <li>Trabaja con nosotros</li>
            </ol>
        </div>
        <div class="redes">
            <h4>Redes</h4>
        </div>
    </footer>
</body>
</html>