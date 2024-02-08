<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de Belleza y Cosmetologia</title>
    <style>
        body {
    font-family: 'Georgia', 'Times New Roman', serif;
    margin: 0;
    padding: 0;
    background-color: #F9F1E6;
    color: #083831;
    position: relative;
}

header {
    background-color: #E56130;
    color: #F9F1E6;
    padding: 20px;
    text-align: center;
}

h1 {
    margin: 0;
    font-size: 2.5em; /* Ajusta el tamaño del texto según tus preferencias */
    font-weight: bold; /* Texto en negrita */
    letter-spacing: 2px; /* Espaciado entre caracteres */
    animation: fadeInUp 1.5s ease-out;
}

p {
    margin-top: 10px; /* Mayor espacio entre título y párrafo */
    font-size: 1.2em; /* Ajusta el tamaño del texto según tus preferencias */
    animation: fadeInUp 1.5s ease-out;
}

/* Resto de tu código... */


        section {
        background-color: #ffff;
        margin: 20px;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(8, 56, 49, 0.1);
        }

        h2 {
        color: #E56130;
        animation: fadeInUp 1.5s ease-out;
        }

        iframe {
        width: 100%;
        max-width: 560px;
        height: 315px;
        border: none;
        }


        .video-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            animation: fadeInUp 1.5s ease-out;
            background-color: #fff; /* Fondo blanco para resaltar el video */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Sutil sombra */
            padding: 20px;
            margin: 20px 0; /* Espaciado entre secciones */
        }

        .video-description {
            flex: 1;
            margin-left: 20px;
        }

        .social-buttons {
        position: absolute;
        top: 30px;
        right: 20px;
        display: flex;
        gap: 10px;
        opacity: 0;
        animation: fadeIn 1s ease-out 3s forwards;
        }

        .social-buttons a {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #333;
        color: #fff;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        text-decoration: none;
        transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .social-buttons i {
        font-size: 20px;
        }

        .social-buttons a:hover {
        background-color: #555;
        transform: scale(1.2); /* Aumenta el tamaño al pasar el ratón sobre el botón */
        }



        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<head>
    <!-- Otros elementos head... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

<?php
$informacion = array(
    'titulo' => 'Belleza y Cosmetología',
    'descripcion' => ''
);

$secciones = array(
    array('titulo' => 'Únete!!', 'contenido' => '¡Es hora de desatar tu creatividad y pasión en el apasionante mundo de la belleza y la cosmetología! Nuestro curso te ofrece la oportunidad única de adquirir las habilidades necesarias para destacar en la industria de la belleza y transformar la vida de tus clientes.
    Desde el primer día, tendrás la oportunidad de poner en práctica tus habilidades en un entorno de aprendizaje dinámico. Desde cortes de cabello y coloración hasta técnicas de maquillaje y cuidado de la piel, te convertirás en un experto en el arte de realzar la belleza.'),
    // Agrega más secciones según sea necesario
);
?>

<header>
    <h1><?php echo $informacion['titulo']; ?></h1>
    <p><?php echo $informacion['descripcion']; ?></p>
</header>

<!-- Botones Sociales en la parte superior derecha -->

<div class="social-buttons">
    <a href="https://wa.me/+50494890823" target="_blank"><i class="fab fa-whatsapp"></i></a>
    <a href="https://www.facebook.com/etaoo.src9" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/etaoo_src" target="_blank"><i class="fab fa-instagram"></i></a>
</div>


<?php foreach ($secciones as $seccion) : ?>
    <section>
        <h2><?php echo $seccion['titulo']; ?></h2>
        <p><?php echo $seccion['contenido']; ?></p>
    </section>
<?php endforeach; ?>

<section class="video-info">
    <div class="video-description">
        <h2>Cuidado de la Piel y Maquillaje</h2>
        <p class="text-justify">
        Profundizarás en el cuidado de la piel y las técnicas de maquillaje, adquiriendo conocimientos sobre los productos y herramientas más avanzados del mercado. Desde maquillaje de día hasta looks para eventos especiales, te convertirás en un artista de la belleza.
        </p>
        <h2>Nuestro Curso</h2>
        <p class="text-justify">
        Jornadas y horarios accesibles
        <p>Duración: 80 horas</p>
        <p> Nivel: Básico a avanzado</p>
        <p> Materiales incluidos</p>
        </p>
        <!-- Más párrafos según sea necesario -->
    </div>

    <iframe width="560" height="315" src="https://www.youtube.com/embed/jL64tnt3RU0?si=gCvfB5pAfzaaKIgE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>

</body>
</html>