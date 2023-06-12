<!DOCTYPE html>
<html>
    <head>
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/login.css">
        <title>Bienvenido</title>
    </head>
    <body>  

        <div class="container">
            <h1>Bienvenido(a) <span id="username"></span></h1>
                <?php
                    $dato1 = $_POST['usuario'];    
                    echo"El Usuario es: ".$dato1; 
                ?>
                <br>
                <?php
                    $dato2 = $_POST['password'];
                    echo"La Contraseña es: ".$dato2;
                ?>

        </div>

    </body>
</html>

    