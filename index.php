<DOCTYPE html>
    <html>
    <head>
            <title>AmbarFotografia</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="estilos.css">
            <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/lightbox.min.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            <nav id="botonera_principal">
                <ul>
                    <li><a href="#about">About</a></li> 
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#work">Work</a></li>
                </ul>
            </nav>
        </header>
        <section id="contenido">
            <div id="imagen_principal">
                <img src="imagenes/imagen1.jpg">
            </div>
            <div id="lente_camara">
                <img src="imagenes/logos.png">
            </div>
            <div id="imagen_derecha1">
                <a class="example-image-link" href="imagenes/imagen5.jpg" data-lightbox="example-2" data-title="Juan Ignacio, primer año y bautismo."><img class="example-image" src="imagenes/imagen5.jpg" alt="image-1"/></a>
            </div>
            <div id="imagen_derecha2">
                <a class="example-image-link" href="imagenes/imagen6.jpg" data-lightbox="example-2" data-title="Araceli, sesión de fotos 15 años."><img class="example-image" src="imagenes/imagen6.jpg" alt="image-1"/></a>
            </div>
            <div id="texto_imagen1">
                    <h2>Araceli, 15 años</h2>
                    <p>Sesion de fotos quinceañera en la ciudad de Olavarria el dia 04 de Noviembre del 2017.</p>
            </div>
            <div id="texto_imagen2">
                    <h2>Juan Ignacio, 1 año</h2>
                    <p>Sesion de fotos bautismo en la ciudad de Olavarria el dia 01 de Octubre del 2016.</p>
            </div>
            <article id="texto_principal">
                <h1>"La vida es como una camara"</h1>
                <p>Énfocate solo en lo que es importante, captura los buenos momentos, saca de lo negativo un aprendizaje revelado y si las cosas no salen como esperabas, intenta una nueva <strong> TOMA.</strong></p>
            </article>
        </section>
        <section id="about">
            <h1>¡Bienvenido!</h1>
            <h3>Somos Macarena y Esteban. Somos fotografos y te damos la bienvenida a nuestro sitio. Aquí podras ver todos nuestros trabajos a lo largo de nuestra carrera. Hacemos edición de fotos, videos y backstage. Nos dedicamos a todo tipo de evento tales como: Bautismo, Cumpleaños de 15, Casamientos, eventos empresariales, etc. Si te enteresa nuestro trabajo y queres pedir tu presupuesto, no dudes en dejarnos tus datos y consulta en la sección "Contact". Esperamos tu mensaje. Saludos M&E.</h3> 
        </section>
        <section id="contact">
            <h2>Contacto</h2>
            <form method="POST" action="enviar_datos.php">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="text" name="apellido" placeholder="Apellido" required>
                <input type="mail" name="correo" placeholder="Correo Electrónico" required>
                <textarea name="mensaje" placeholder="Mensaje" rows="10"></textarea>
                <input type="submit" class="boton_formu">
            </form>
            <?php
            if(isset($_GET['e'])) {
                echo "<h3>El mensaje se envió correctamente.</h3>";
            }
            ?>
        </section>
        <section id="work">
            <nav id='botonera_trabajos'>
                <ul>
                    <li><a href="index.php?id=a#work">Araceli</a></li>
                    <li><a href="index.php?id=em#work">Encuentro de Motos</a></li>
                    <li><a href="index.php?id=ji#work">Juan Ignacio</a></li>
                </ul>
            </nav>
            <?php
            // switch ($_GET['id']) --> primer intento fallido con imagen{
                $titulo='';
                $info='';
                $imagen='';
                switch (isset($_GET['id']) ? $_GET['id'] : '') {
                case 'a':
                    $titulo='Araceli, 15 años';
                    $info='Ella es una chica normal con aspiraciones diferentes.
                     Ella no sueña con un príncipe azul que la lleve a su castillo, porque sabe que luchando ella misma lo puede crear. 
                     Ella es amante de la poesía, sin embargo no cree en las palabras de cualquiera.
                     Ella se vuelve loca escuchando música, pero le importa más la letra que el genero.
                     Ella es bonita, no obstante, es un arma que no isa para ser querida.
                     Ella podría ser perfecta, pero prefiere ser ella misma.';
                    $imagen='imagen_work1.jpg';
                    break;
                case 'em':
                    $titulo='Grupo Falconero, Necochea 2016';
                    $info='Un grupo de moteros es una segunda familia, si necesitas de ellos sea donde sea, son capaces de recorrer miles de kilometros por tí.';
                    $imagen='imagen_work2.jpg';
                    break;
                case 'ji':
                    $titulo='Juan Ignacio, 1 año';
                    $info='Ser niño, es vivir entre sueños y juegos, sin saber donde terminan unos y comienzan otros.';
                    $imagen='imagen_work3.jpg';
                    break;
            }
            ?>
            <div id="imagen_trabajo">
            <?php
                $urlini='<img src="imagenes/';
                $urlfin='">';
                if ($imagen <> ''){
                    echo $urlini,$imagen,$urlfin;
                }
            ?>
                 <!-- <img src="imagenes/<?php echo $imagen; ?>"> error de imagen al cargar por primera vez -->
            </div>
            <div id="info_trabajo">
                <h2><?php
                echo $titulo;
                ?></h2>
                <p><?php echo $info?></p>
            </div>
        </section>
        <footer id="pie">
            <img src="imagenes/imagen10.jpg">
        </footer>
        <script src="js/lightbox-plus-jquery.min.js"></script>
    </body>
    </html>