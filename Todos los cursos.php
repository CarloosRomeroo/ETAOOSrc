<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tarjeta Animada con Imágenes</title>
<style>
  body{
    background-image: url('https://i.postimg.cc/Xq42XQVx/colored-7292420-1280.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;

  }
  .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 25px; /* Espacio entre las tarjetas */
   
  }

  .container {
    width: 200px; /* Ancho de cada tarjeta */
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
    border-radius: 15px;
  }

  .card-front {
    background-color: #ffffff;
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
    border-radius: 50%;
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
        
          <h2>Carpintería </h2>
          <p></p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
          <img src="" alt="">
          <h2>Contenido</h2>
          <p>¡Regístrate en nuestro curso de carpintería ahora! Aprende habilidades prácticas de carpintería con expertos. Domina técnicas de trabajo con madera y crea tus propios muebles y proyectos únicos. <br>
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
         
          <h2>Soldadura</h2>
          <p></p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
         
            <p>¡Inscríbete en nuestro curso de soldadura hoy mismo! Aprende técnicas avanzadas de soldadura con instructores expertos. Adquiere habilidades prácticas para trabajar con metal y desbloquea nuevas oportunidades en el campo laboral.</p> 
            
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 3 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
          
          <h2>Electricidad</h2>
          <p></p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
          <p>¡Aprende electricidad con nosotros! Inscríbete en nuestro curso para dominar los fundamentos y técnicas avanzadas. Adquiere habilidades prácticas y aumenta tus oportunidades profesionales en el campo eléctrico.</p>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 4 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
         
          <h2>Corte y Confección</h2>
          <p></p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
          <p>¡Descubre el arte de la moda con nuestro curso de corte y confección! Aprende a diseñar y crear prendas únicas desde cero. Adquiere habilidades prácticas en la manipulación de telas, patrones y técnicas de costura.
            </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 5 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
         
          <h2>Inglés</h2>
          <p></p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
        
          <h2>Contenido</h2>
          <p>¡Mejora tu inglés con nuestro curso! Aprende el idioma de forma efectiva y divertida. Desarrolla habilidades en lectura, escritura, escucha y conversación. ¡Inscríbete ahora y alcanza tus metas lingüísticas!</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 6 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
         
          <h2>Gastronomía

          
          </h2>
          <p>❖ Gastronomía para chef <br>
❖ Gastronomía para sub chef <br>
❖ Ayudantes de cocina <br>
❖ Gastronomía Nacional e Internacional <br></p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
        
          <h2>Contenido</h2>
          <p>¡Explora el mundo culinario con nuestro curso de gastronomía! Aprende técnicas profesionales de cocina y repostería. Descubre secretos de sabores, ingredientes y presentación de platos.</p>
        </div>
      </div>
    </div>
  </div>

</div>

<br><br>



<div class="card-container">
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
           
            <h2>Repostería</h2>
            <p></p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
           
            <h2>Contenido</h2>
            <p>¡Desarrolla tus habilidades en repostería con nosotros! Aprende a crear deliciosos postres y pasteles de forma profesional. Domina técnicas de decoración, horneado y presentación. </p> <br>
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
            
            <h2>Panadería</h2>
            <p></p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
           
            <h2>Contenido</h2>
            <p>¡Conviértete en un maestro panadero con nuestro curso de panadería! Aprende a elaborar una variedad de panes artesanales, desde baguettes hasta panes de masa madre. Domina técnicas de amasado, fermentación y horneado. </p> <br>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 3 -->
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
           
            <h2>Barbería</h2>
            <p></p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
          
            <h2>Contenido</h2>
            <p>¡Eleva tu arte de la barbería con nuestro curso especializado! Aprende las técnicas más avanzadas de corte de cabello, afeitado y cuidado de la barba. Domina el uso de herramientas profesionales y desarrolla habilidades en atención al cliente.</p> <br>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 4 -->
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
           
            <h2>Belleza y Cosmetología</h2>
            <p></p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
           
            <h2>Contenido</h2>
            <p>¡Descubre el mundo de la belleza y la cosmetología con nuestro curso especializado! Aprende técnicas profesionales de maquillaje, cuidado de la piel y tratamientos estéticos. Domina el arte de realzar la belleza natural y proporcionar servicios de calidad a tus clientes.</p> <br>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 5 -->
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
           
            <h2>Uñas acrílicas</h2>
            <p>
            </p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
            
            <h2>Contenido</h2>
            <p>¡Sumérgete en el arte de las uñas acrílicas con nuestro curso especializado! Aprende a aplicar y esculpir uñas acrílicas con técnicas profesionales. Domina el diseño, la decoración y el mantenimiento para ofrecer servicios de calidad a tus clientes. </p> <br>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 6 -->
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
            
            <h2>Refrigeración Básica</h2>
            <p></p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
          
            <h2>Contenido</h2>
            <p>
¡Domina los fundamentos de la refrigeración con nuestro curso especializado! Aprende los principios básicos de la refrigeración, incluyendo ciclos de refrigeración, tipos de refrigerantes y componentes de sistemas de refrigeración.  <br>
                </p>
          </div>
        </div>
      </div>
    </div>
  

    <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Instalación y mantenimiento de aires acondicionados</h2>
              <p></p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
              
              <h2>Contenido</h2>
              <p> ¡Conviértete en un experto en instalación y mantenimiento de aires acondicionados con nuestro curso especializado! Aprende a instalar, mantener y reparar sistemas de aire acondicionado de manera eficiente y segura. </p> <br>
            </div>
          </div>
        </div>
      </div>
  
      
      <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Floristería para eventos</h2>
              <p></p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
            
              <h2>Contenido</h2>
              <p>¡Haz realidad tus sueños florales con nuestro curso especializado en floristería para eventos! Aprende a diseñar y crear impresionantes arreglos florales para bodas, fiestas y otras ocasiones especiales. Descubre técnicas profesionales de selección, manipulación y presentación de flores y follaje.<br>
                </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Bisutería</h2>
              <p></p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
              
              <h2>  Contenido</h2>
              <p>
¡Explora tu creatividad con nuestro curso de bisutería! Aprende a diseñar y crear piezas únicas de joyería utilizando una variedad de materiales y técnicas. Domina el arte de ensamblar collares, pulseras, aretes y más, y sorprende con tus creaciones. <br>
                </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Barismos</h2>
              <p>
              ❖ Barismo básico <br>
              ❖ Barismo Intermedio <br>
              ❖ Catación
              </p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
             
              <h2>Contenido</h2>
              <p>¡Sumérgete en el mundo del barismo con nuestro curso especializado! <br> Aprende: <br>
             - Las técnicas profesionales de preparación de café.  <br> -La extracción perfecta del espresso.</p>
            </div>
          </div>
        </div>
      </div>

      


  </div>
  
  