<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Todos nuestros Talleres</title>
<style>
  body {
            background-image: url('https://i.postimg.cc/cCpJdF8J/pexels-edward-jenner-4252672.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 25px; /* Espacio entre las tarjetas */
  }

  .container {
    width: 300px; /* Ancho de cada tarjeta */
    height: 300px; /* Altura de cada tarjeta */
    perspective: 1000px;
  }

  .card {
    width: 100%;
    height: 100%;
    transition: transform 0.6s;
    transform-style: preserve-3d;
  }

  .card:hover {
    transform: rotateY(180deg);
  }

  .card-front, .card-back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
  }

  .card-front {
    background-color: #f7e9e1;
  }

  .card-back {
    background-color: #gray;
    transform: rotateY(180deg);
  }

  .card-content {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: justify;

  }

  img {
    width: 80%;
    height: auto;
    border-radius: 0%;
    margin-bottom: 20px;
  }

  h2, p {
    margin: 10px;
    text-justify: auto;
  }
</style>
</head>
<body>

<div class="card-container">
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
        
          <h2>Talleres de Gastronomía</h2>
          <p>¡Descubre los secretos de la cocina en nuestros talleres de gastronomía!

Aprende nuevas recetas, técnicas culinarias y disfruta de una experiencia culinaria única. No pierdas la oportunidad de convertirte en un experto culinario.</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
          <img src="" alt="">
          <h2>Contenido</h2>
          <p> <p>❖ Módulo de pizzas. <br>
              ❖ Módulo de hamburguesas <br>
              ❖ Módulo de alitas y chicken Fingers <br>
              ❖ Módulo de Comida asiática <br>
              ❖ Módulo de comida china <br>
              ❖ Módulo de comida italiana (Pastas) <br>
              ❖ Módulo de Tablas de queso <br>
              ❖ Módulo de boquitas <br>
              ❖ Módulo de encurtidos y jaleas <br>
              ❖ Módulo de lácteos. 

            </p>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Repite esta estructura para cada tarjeta adicional -->

  <!-- Tarjeta 2 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
         
          <h2>Talleres de Repostería</h2>
          <p>Únete a nuestros talleres de repostería y aprende a crear deliciosos postres como un profesional. ¡No te pierdas la oportunidad de endulzar tus habilidades culinarias! Regístrate ahora.</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Talleres</h2>
         
            <p>❖ Módulo de postres fríos <br>
            ❖ Módulo de elaboración y decoración de pasteles <br> </p> 
           
            
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 3 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
          
          <h2>Elaboración de jabones y velas</h2>
          <p>¿Te gustaría aprender a hacer jabones y velas naturales? Únete a nuestros talleres prácticos y descubre todos los secretos detrás de la elaboración de productos artesanales. ¡Inscríbete hoy mismo y empieza a crear tus propios productos de cuidado personal!</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
          <p>La elaboración de velas y jabones es un arte antiguo que combina creatividad y cuidado personal. Aprender a hacer velas implica derretir cera, añadir fragancias y verter en moldes, resultando en hermosas creaciones aromáticas.La fabricación de jabones implica mezclar ingredientes como aceites y sosa cáustica para crear barras de jabón únicas, que pueden ser personalizadas con colores y fragancias. </p>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 4 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
         
          <h2>Elaboración de vinos artesanales</h2>
          <p>Descubre los secretos de la vinificación artesanal en nuestros talleres especializados. Aprende técnicas tradicionales y modernas para crear tus propios vinos únicos y personalizados.</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
          <p>Sumérgete en la creación de vinos con nuestro taller. Aprende a elaborar vinos tintos, blancos, rosados y espumosos. Descubre los procesos de fermentación y crianza para cada tipo. ¡Explora la diversidad enológica y perfecciona tus habilidades en la vinificación!
            </p>
        </div>
      </div>
    </div>
  </div>




  <div class="card-container">
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
        
          <h2>Elaboración de Piñatas</h2>
          <p>¿Quieres aprender a hacer piñatas originales y divertidas? Únete a nosotros en nuestro taller especializado y descubre todos los secretos detrás de la elaboración de estas decoraciones festivas. ¡Inscríbete hoy mismo y convierte tus fiestas en un éxito!</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
          <img src="" alt="">
          <h2>Contenido</h2>
          <p> Descubre la diversión de crear tus propias piñatas en nuestro taller especializado. Aprende técnicas para dar forma, decorar y rellenar piñatas únicas para tus celebraciones. Sumérgete en una experiencia creativa y personaliza cada detalle según tus gustos y eventos. ¡Inscríbete ahora!<p>

            </p>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Repite esta estructura para cada tarjeta adicional -->

  <!-- Tarjeta 2 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
         
          <h2>Taller de Bartender</h2>
          <p>¡Mejora tus habilidades de coctelería en nuestro taller especializado! Aprende técnicas profesionales de preparación, mezcla y presentación de cócteles. Sumérgete en el mundo de la mixología y sorprende a tus amigos con tus creaciones únicas. ¡Reserva tu lugar ahora y eleva tus habilidades detrás de la barra!</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
         
            <p>Aprende las habilidades clave de la mixología en nuestro taller de bartender. Descubre técnicas de preparación de cócteles, combinación de licores y presentación profesional. Domina el arte de crear bebidas deliciosas y sorprende a tus invitados en cualquier ocasión. </p> 
            
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 3 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
          
          <h2>Taller de Primeros Auxilios</h2>
          <p>
¡Inscríbete en nuestro taller de primeros auxilios! Aprende habilidades vitales de socorro, desde RCP hasta manejo de heridas. Obtén la confianza para actuar en situaciones de emergencia y salva vidas. ¡Reserva tu lugar ahora!</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
          <p>Recibir un taller de primeros auxilios es crucial para estar preparado ante emergencias. Proporciona conocimientos vitales para ofrecer asistencia inmediata en situaciones críticas.  </p>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 4 -->
  



 
  </div>
  
  