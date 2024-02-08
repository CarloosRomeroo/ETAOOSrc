<!DOCTYPE html>
<html>
<head>
    <title>DONACIONES</title>
    <style>
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
        /* Estilo para la cabecera */
        .header {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 24px; /* Tamaño de letra más grande */
            font-weight: bold; /* Texto en negrita */
            text-align: center;
            z-index: 1; /* Para que la cabecera esté sobre la imagen */
        }
        /* Estilo para el texto sobre los recuadros */
        .texto-recuadros {
            position: fixed;
            top: 110px; /* Distancia desde la parte superior */
            left: 50%;
            transform: translateX(-50%);
            color: #083831;
            font-size: 18px;
            text-align: center;
             /* Agregar efecto de brillo */
            text-shadow: 0 0 10px rgba(255, 255, 255, 10); /* Color blanco con 50% de opacidad */
            z-index: 1; /* Para que el texto esté sobre la imagen */
        }
        /* Estilo para los recuadros */
        .recuadro-container {
            position: fixed;
            top: calc(35% ); /* Centrado vertical hacia abajo */
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            width: 400px; /* Ancho total de los recuadros */
            z-index: 1; /* Para que los recuadros estén sobre la imagen */
        }
        .recuadro {
            width: 180px; /* Ancho fijo del recuadro */
            max-height: calc(100% - 100px); /* Altura máxima del recuadro (altura de la pantalla menos el espacio para la cabecera y el pie de página) */
            border: 2px solid white; /* Borde blanco */
            border-radius: 15px; /* Bordes redondeados */
            opacity: 1.5; /* Transparencia */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px; /* Espaciado interno */
            shadow: 0 0 10px rgba(255, 255, 255, 10); /* Color blanco con 50% de opacidad */
            overflow-y: auto; /* Agregar barra de desplazamiento vertical si el contenido es demasiado largo */
        }
        /* Estilo para separar los recuadros */
        .recuadro2 {
            margin-left: 40px; /* Separación entre el recuadro 1 y el recuadro 2 */
        }
        /* Estilo para el pie de página */
        footer {
            position: fixed;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: white;
            z-index: 1; /* Para que el pie de página esté sobre la imagen */
        }
        footer a {
            margin: 0 10px;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Cabecera -->
    <div class="header">Se un héroe y ayuda a los jóvenes donando a ETAOO</div>
    <!-- Texto sobre los recuadros -->
    <div class="texto-recuadros">Puedes donar a nuestra cuenta de banco, cada lempira donado cuenta</div>
    <!-- Contenedor de los recuadros -->
    <div class="recuadro-container">
        <!-- Recuadro 1 con texto -->
        <div class="recuadro recuadro1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis at metus vitae luctus. Nullam ut sagittis diam. Fusce euismod porta finibus. Morbi feugiat lectus at lorem interdum efficitur.</div>
        <!-- Recuadro 2 con texto -->
        <div class="recuadro recuadro2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mollis at metus vitae luctus. Nullam ut sagittis diam. Fusce euismod porta finibus. Morbi feugiat lectus at lorem interdum efficitur.</div>
    </div>
    <?php
        // URL de la imagen
        $imagen_url = "https://images.pexels.com/photos/401213/pexels-photo-401213.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";
    ?>
    <!-- Mostrar la imagen -->
    <img src="<?php echo $imagen_url; ?>" alt="Imagen">

    <!-- Pie de página -->
    <footer>
        Síguenos en nuestras redes sociales:
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
    </footer>
</body>
</html>
