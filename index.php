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
    <body background="img\sky_1.jpg" style="background-attachment: fixed">
    
        <h1 align="center">Bienvenido a Eartclooks</h1>
        <!--El formulario funciona, pero habrá que ponerle algunas otras cosas con javascript o con html-->
        <form name="contacto" action="index.php" method="POST">
            <table id="tabla1">
                <tr>
                    <td><input id="nombre" type="text" name="nombre" placeholder="Usuario"/></td>
                </tr>
                <tr>
                    <td><input id="pass" type="password" name="pass" placeholder="Contraseña"/></td>
                </tr>
                <tr>
                    <td align="center"><input id="boton" name="boton" type="submit" value="Entrar"/></td>
                </tr>
                <tr>
                    <td align="center"><a href="inscribe.php"><br>Darse de alta</a></td>
                </tr>
            </table>
        </form>
        <?php
        /*Hay que vincular la base de datos para que los compare desde el propio formulario*/
        $conexion = mysql_connect("localhost","root","") or die("No se ha podido conectar");
        mysql_select_db("eartclooks", $conexion);
        
        $postUsuario = $_POST['nombre'];
        $postContrasena = $_POST['pass'];
        
        if($postUsuario == 'Luis' && $postContrasena == 'Luis'){
            echo '<script type="text/javascript">window.location="inicio.php";</script>';
            die();
        }
        ?>
        
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js"></script>  
        <script src="js/bootstrap.min.js"></script>
        
    </body>
</html>
