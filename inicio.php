<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/ico" />
        
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.10.3.custom.min.css">
        
        <title>Eartclooks</title>
        
    </head>
    <body background="img\fondo_1.jpg" style=" background-attachment: fixed">
        
        <div id="contenedor"> 
            <div id="cabecera">
                <a href="inicio.php"><img src="img/favicon.png" id="imgLogo"></a>
                <button id="button1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
                    <a href="libros.php"><span class="ui-button-text">Libros</span></a>
                </button>
                <button id="button1" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button" aria-disabled="false">
                    <a href="libros.php"><span class="ui-button-text">Compras</span></a>
                </button>
            </div><!--Fin de la cabecera-->
            <div id="cuerpo">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/narnia.jpg">
                        </div>
                        <div class="item">
                            <img src="img/JDT.jpg">
                        </div>
                        <div class="item">
                            <img src="img/LOTR.jpg">
                        </div>
                    </div>
                </div>
            </div><!--Fin del cuerpo-->
            <div id="contenido">
                <div id="contenido_contenido">
                    <h3 align="center">Libro del día</h3>
                    <div id="escrito">
                    <p>
                       <img src="img/lewis-carroll.jpg" id="libroDia" align="left">
                       Las aventuras de Alicia en el país de las maravillas, es una obra de literatura creada por el matemático, 
                       lógico y escritor británico Charles Lutwidge Dodgson, más conocido bajo el seudónimo de Lewis Carroll. 
                       El cuento está lleno de alusiones satíricas a los amigos de Dodgson, la educación inglesa y temas políticos de la época. 
                       El País de las Maravillas que se describe en la historia es creado básicamente a través de juegos con la lógica, de una forma tan especial que la obra ha llegado a tener 
                       popularidad en los más variados ambientes, desde niños o matemáticos hasta psiconáutas.
                    </p>
                    <p>
                       En esta obra aparecen algunos de los personajes más famosos de Carroll, como el Conejo Blanco, El Sombrerero, la Oruga azul, 
                       el Gato de Cheshire o la Reina de Corazones; quienes han cobrado importancia suficiente para ser reconocidos fuera del mundo de Alicia.
                    </p>
                    <p>
                       Sólo se conservan 23 copias de la primera edición de 1865, de las cuales 17 pertenecen a distintas bibliotecas, y las restantes están en manos privadas. 
                       El libro tiene una segunda parte, menos conocida, llamada "A través del espejo y lo que Alicia encontró allí". 
                       Varias adaptaciones cinematográficas combinan elementos de ambos libros.
                    </p>
                    <p>
                       La obra ha sido traducida a numerosos idiomas, incluido el esperanto. En 1998, un ejemplar de la primera edición del libro se vendió en subasta por la suma de 1,5 
                       millones de dólares, y se convirtió así en el libro para niños más caro hasta ese momento.
                    </p>
                    </div>
                </div><!--Fin del contenido-contenido-->
                <div id="contenido_contenido2">
                    <center>
                        <img src="img/libros3.jpg" id="libros">
                        <h2>Eartclooks</h2>
                        <br>
                        <br>
                        <p><i>"Cada vez que abres un libro y te dispones a leerlo, un árbol sonríe al ver que sí hay vida después de la muerte."</i></p>
                    </center>
                </div><!--Fin del contenido2-->
            </div><!--Fin del contenido-->
            <div id="pie">
                <p>Quiénes somos</p>
            </div>
        </div><!--Fin del contenedor-->    
        
        <?php
        // put your code here
        ?>
        
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui-1.10.3.custom.min.js"></script>  
        <script src="js/bootstrap.min.js"></script>
        
        <script>
            $( "#menu" ).menu();
            $('.carousel').carousel();
        </script>
        
    </body>
</html>
