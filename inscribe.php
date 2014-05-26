<?php
        $conexion = mysql_connect("localhost","root","") or die("No se ha podido conectar");
        mysql_select_db("eartclooks", $conexion);
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $contraseña = $_POST['pass1'];        
        $alias = $_POST['alias'];
        
        $queryInserta = "INSERT INTO `eartclooks`.`usuario` (`Alias`, `Pass`, `Nombre`, `Apellido`, `Edad`, `eMail`) VALUES ('$alias', '$contraseña', '$nombre', '$apellido', '$edad', '$email');";
        $queryVerifAlias = "SELECT COUNT(alias) FROM usuario WHERE alias = '$alias'";
        $queryVerifEMail = "SELECT COUNT(eMail) FROM usuario WHERE eMail = '$email'";
        
        $verifAlias = mysql_query($queryVerifAlias, $conexion)OR die(mysql_error());
        $verifEMail = mysql_query($queryVerifEMail, $conexion)OR die(mysql_error());
        
?>
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
                                    <td>Alias:</td>    <td><input type="text" name="alias"></td>
                                </tr>
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
                <?php
                /*Dos whiles para saber si existen datos que se repitan*/
                while ($comprueba = mysql_fetch_row($verifAlias)) {
                    foreach ($comprueba as $valor){
                        $valor;
                    }
                }
                while ($comprueba2 = mysql_fetch_row($verifEMail)) {
                    foreach ($comprueba2 as $valor2){
                        $valor2;
                    }
                }
                
                if(($valor == '1') || ($valor2 == '1')){
                    echo 'El usuario y/o el correo electrónico ya existen, por favor, siga el siguiente'."<a href='inscribe.php'>".' link'."</a>";           
                }else{
                    mysql_query($queryInserta, $conexion)OR die(mysql_error());
                    echo '<script type="text/javascript">window.location="inicio.php";</script>';
                    die();  
                }
                ?>
                <br>
                <br>
                </center>
                </div><!--Fin del formulario-->
        </div><!--Fin del contenedor-->
        
        
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js"></script>  
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
