
<!DOCTYPE html>
<html lang="es">
    <?php
        include "vistas/global/head.html";
    ?>

<body>

    <?php include "vistas/global/header.html"; ?>

    <main>

    <?php 

    if (isset($_GET["pagina"])) {

        if($_GET["pagina"]== "galeria" ||
            $_GET["pagina"]== "inicio" ||
            $_GET["pagina"]=="eventos" ||
            $_GET["pagina"]=="carta" ||
            $_GET["pagina"]=="contacto"){
                include "paginas/".$_GET["pagina"].".php";
            }
    } else {
        include "paginas/inicio.php";
    }

    ?>

    </main>

    <?php include "vistas/global/footer.html"; ?>
</body>
</html>