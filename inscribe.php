<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
         
        <title>Inscripción a Eartclooks</title>
        
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.10.3.custom.min.css">
    </head>
    <body background="img\fondo_1.jpg" style=" background-attachment: fixed">
        <div id="contenedor">
            <div id="cabecera">
                <center>
                <img src="img/eartclooks.png" id="eartclooks">
                </center>
            </div><!--Fin de la cabecera-->
            <div id="formulario">
                    <form>
                        <fieldset>
                            <center>
                            <table id="formTable">
                                <tr>
                                    <td>Nombre:</td>    <td><input type="text" name="nombre"></td>
                                </tr>
                                <tr>
                                    <td>Apellido:</td>    <td><input type="text" name="apellido"></td>
                                </tr>
                                <tr>
                                    <td>e-Mail:</td>    <td><input type="text" name="email"></td>
                                </tr>
                                <tr>
                                    <td>Edad:</td>    <td><input type="text" name="edad"></td>
                                </tr>
                                <tr>
                                    <td>Contraseña:</td>    <td><input type="password" name="pass1"></td>
                                </tr>
                                <tr>
                                    <td>Repite contraseña:</td>    <td><input type="password" name="pass2"></td>
                                </tr>
                            </table>
                            </center>
                        </fieldset>
                    </form>
                <center>
                <input id="boton" name="boton" type="submit" value="Suscribirse"/>
                <br>
                <br>
                <a href="index.php">Volver a la página de inicio</a>
                <br>
                <br>
                </center>
                </div><!--Fin del formulario-->
        </div><!--Fin del contenedor-->
        <?php
        $conexion = mysql_connect("localhost","root","") or die("No se ha podido conectar");
        mysql_select_db("eartclooks", $conexion);
        
        
        ?>
        
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js"></script>  
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
