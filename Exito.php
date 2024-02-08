<!DOCTYPE html>
<html>
<head>
    <title>CASOS DE EXITO</title>
    <style>
        /* Estilo común para texto */
        .texto-comun {
            text-align: justify;
            color: #083831;
        }

        /* Estilo para hacer que la imagen ocupe toda la pantalla */
        img {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Para mantener la relación de aspecto de la imagen */
            z-index: -1; /* Para enviar la imagen al fondo */
        }

        /* Estilo para el contenedor del texto principal */
        .texto-container {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 30px auto; /* Ajusta el margen para centrar horizontalmente */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave alrededor del contenedor */
            width: 50%; /* Ajusta este valor para cambiar la anchura del contenedor */
        }

        /* Estilo para el contenedor de los recuadros */
        .recuadro-container {
            position: fixed;
            top: calc(30%); /* Ajusta este valor para cambiar la posición vertical */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            width: 70%; /* Ancho total de los recuadros */
            z-index: 1; /* Para que los recuadros estén sobre la imagen */
        }

        /* Estilo para los recuadros */
        .recuadro {
            width: 100%; /* Ancho fijo del recuadro */
            height: 400px; /* Altura fija del recuadro */
            border: 2px solid white; /* Borde blanco */
            border-radius: 15px; /* Bordes redondeados */
            overflow: hidden; /* Ocultar contenido que se desborde */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .recuadro iframe {
            width: 100%;
            height: 100%;
        }

        .recuadro p {
            margin: 15px;
            color: black; /* Cambia este valor al color que desees (en formato hexadecimal, RGB, etc.) */
        }

        /* Pie de página */
        footer {
            position: fixed;
            bottom: 0; /* Añadido para fijar el pie de página en la parte inferior */
            width: 100%;
            text-align: center;
            color: black;
            z-index: 1; /* Para que el pie de página esté sobre la imagen */
        }

        footer a {
            margin: 0 10px;
            color: black;
            text-decoration: none;
        }

        /* Estilo para la cabecera */
        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Cabecera -->
    <div class="texto-comun header"></div>
    
    <!-- Contenedor para el texto principal -->
    <div class="texto-container">
        <!-- Texto sobre los recuadros -->
        <div class="texto-comun">Descubre cómo nuestra dedicación y compromiso transformaron desafíos en triunfos, 
            <br>brindando soluciones innovadoras que impactaron positivamente vidas. 
            <br>En ETAOO, cada historia es un testimonio del poder de la generosidad y la solidaridad, 
            <br>construyendo un camino hacia un futuro más brillante juntos.</div>
    </div>
    
    <!-- Contenedor de los recuadros -->
    <div class="recuadro-container">
        <!-- Recuadro 1 con video de YouTube y texto -->
        <div class="recuadro recuadro1">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/b48K5liuZeQ?si=u2Mxj9qrHmnNbhLc" frameborder="0" allowfullscreen></iframe>
            <p>Enrique cumplió su sueño de abrir una cafetería. Cada taza cuenta una historia de dedicación y amor por el café. Su rincón se convirtió en un espacio acogedor donde se entrelazan aromas, risas y amistades. En cada sorbo, descubre la pasión de un emprendimiento que transforma momentos cotidianos en experiencias inolvidables.</p>
        </div>
        <!-- Recuadro 2 con el mismo video y texto -->
        <div class="recuadro recuadro2">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/N9v8V_Ilhc4?si=pT-tl5OWzpkc-nUm"  frameborder="0"  allowfullscreen></iframe>
            <p>Lucas Tabora, inició su travesía emprendedora. Con el respaldo y la inspiración de esta comunidad, transformó su pasión por la barbería en un exitoso negocio. Cada corte de pelo es una muestra de su dedicación y la conexión que construye con sus clientes. </p>
        </div>
    </div>

    <!-- Imagen de fondo -->
    <?php
        // URL de la imagen
        $imagen_url = "https://i.postimg.cc/Y2dcqcNG/etaomural.jpg";
    ?>
    <img src="<?php echo $imagen_url; ?>" alt="Imagen" style="width: 100%; height: 100%;">

    <!-- Pie de página -->
    <footer>
        Síguenos en nuestras redes sociales:
        <a href="https://www.facebook.com/etaoo.src9/">Facebook</a>
        <a href="https://youtube.com/channel/UCkyjPSVjwjdU9GgHoSK94Zg">YouTube</a>
        <a href="https://www.instagram.com/etaoo_src/">Instagram</a>
    </footer>
</body>
</html>
