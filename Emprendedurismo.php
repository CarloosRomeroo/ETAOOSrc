<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Propuesta Formativa para Emprendimientos</title>
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
        
          <h2>Elaboración de Curriculum Vitae</h2>
          <p>Aprende a destacar tus habilidades y experiencia con nuestro curso de elaboración de currículum vitae.</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
          <img src="" alt="">
          <h2>Contenido</h2>
          <p>✓ Como crear un CV efectivo <br>
          ✓ Formato y estructura adecuadas <br>
          ✓ Destacar logros y habilidades <br>
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
         
          <h2>Administración de Empresas</h2>
          <p>Desarrolla tu potencial como líder empresarial con nuestro curso especializado en administración. ¡Comienza tu viaje hacia el éxito hoy!</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
         
            <p>✓ Procedimientos administrativos. <br>
                ✓ Análisis financiero y toma de decisiones. <br>
                ✓ Contabilidad de costos <br>
                ✓ Estructura de costos  <br>
                ✓ Educación financiera <br>
                ✓ Contabilidad Básica <br>
                ✓ Cálculo de impuestos sobre venta y rent </p> 
            
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 3 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
          
          <h2>Mercadeo y Comercialización</h2>
          <p>Obtén las habilidades necesarias para triunfar en el mercado competitivo actual. ¡Inscríbete en nuestro curso de mercadeo y comercialización!</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
          <p>✓ Exportación e Importación de Productos y Maquinaria <br>
          ✓ Atención al Cliente <br>
          ✓ Planes y Modelos de Negocios <br>
          ✓ Estudio de Mercado</p>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 4 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
         
          <h2>Agro Transformación</h2>
          <p>¿Quieres aprender a agregar valor a tus productos agrícolas y maximizar tus ganancias? Inscríbete en nuestro curso de agro-transformación.</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
         
          <h2>Contenido</h2>
          <p>✓ Controles de Producción 
            ✓ Buenas Prácticas de Manufactura  <br>
            ✓ Trazabilidad <br>
            ✓ Manejo de Desechos y Valor Agregado <br>
            ✓Creación de Subproductos
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
         
          <h2>Cartas de presentación</h2>
          <p>¿Quieres destacar entre los candidatos y causar una buena impresión desde el principio? ¡Únete a nuestro curso de cartas de presentación y abre las puertas a nuevas oportunidades laborales!</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
        
          <h2>Contenido</h2>
          <p>✓ Cómo redactar una carta de presentación persuasiva. <br>
            ✓ Personalización para diferentes empleadores. <br>
            ✓ Acompañar el CV de manera efectiva.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Tarjeta 6 -->
  <div class="container">
    <div class="card">
      <div class="card-front">
        <div class="card-content">
         
          <h2>Entrevistas de trabajo</h2>
          <p>Obtén las herramientas y técnicas necesarias para aumentar tu confianza y mejorar tus habilidades de entrevista. Regístrate hoy mismo y prepárate para el éxito profesional.</p>
        </div>
      </div>
      <div class="card-back">
        <div class="card-content">
        
          <h2>Contenido</h2>
          <p>✓ Preparación para entrevistas. <br>
            ✓ Preguntas comunes en entrevistas y respuestas adecuadas. <br>
            ✓ Técnicas de comunicación no verbal</p>
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
           
            <h2>Búsqueda de empleo</h2>
            <p>Potencia tus habilidades de búsqueda de empleo y aumenta tus posibilidades de conseguir el trabajo que deseas. ¡No esperes más para inscribirte en nuestro curso y dar el primer paso hacia tu futuro profesional!</p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
           
            <h2>Contenido</h2>
            <p>✓ Estrategias de búsqueda de trabajo. <br>
                ✓ Uso de redes profesionales y sitios web de empleo. <br>
                ✓ Cómo aprovechar las ferias de empleo.</p> <br>
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
            
            <h2>Desarrollo de habilidades interpersonales</h2>
            <p>¡Desarrolla habilidades que te ayudarán en todas las áreas de tu vida! Únete a nuestro curso de Desarrollo de Habilidades Interpersonales y mejora tus relaciones personales y profesionales.</p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
           
            <h2>Contenido</h2>
            <p>✓ Habilidades de comunicación efectiva. <br>
                ✓ Trabajo en equipo y colaboración. <br>
                ✓ Gestión del conflicto en el entorno laboral</p> <br>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 3 -->
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
           
            <h2>Desarrollo de habilidades de liderazgo</h2>
            <p>Aprende las técnicas más efectivas para inspirar, motivar y guiar a tu equipo hacia el éxito. ¡Inscríbete ahora en nuestro curso especializado!</p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
          
            <h2>Contenido</h2>
            <p>✓ Liderazgo efectivo en el trabajo. <br>
                ✓ Toma de decisiones y resolución de problemas. <br>
                ✓ Motivación y gestión de equipos.</p> <br>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 4 -->
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
           
            <h2>Gestión de Tiempo y Productividad</h2>
            <p>Obtén las herramientas y estrategias necesarias para gestionar eficazmente tu tiempo y lograr más en tu vida personal y profesional. Regístrate hoy mismo y haz que cada minuto cuente.</p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
           
            <h2>Contenido</h2>
            <p> ✓ Técnicas de gestión del tiempo. <br>
                ✓ Priorización de tareas. <br>
                ✓ Evitar la procrastinación</p> <br>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 5 -->
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
           
            <h2>Habilidades Digitales</h2>
            <p>Aprende a navegar por el mundo digital con confianza y domina las herramientas tecnológicas más importantes. ¡Inscríbete ahora en nuestro curso especializado!
            </p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
            
            <h2>Contenido</h2>
            <p>✓ Uso de herramientas de productividad en línea. <br>
                ✓ Conocimientos básicos de programación. <br>
                ✓ Seguridad en línea y privacidad.</p> <br>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Tarjeta 6 -->
    <div class="container">
      <div class="card">
        <div class="card-front">
          <div class="card-content">
            
            <h2>Desarrollo profesional y educación continua</h2>
            <p>Obtén las habilidades y conocimientos que necesitas para destacarte en tu campo y mantener tu carrera en constante evolución. Regístrate hoy en nuestro programa de Educación Continua y Desarrollo Profesional.</p>
          </div>
        </div>
        <div class="card-back">
          <div class="card-content">
          
            <h2>Contenido</h2>
            <p>✓ Inicio de un negocio propio. <br>
                ✓ Planificación empresarial. <br> 
                ✓ Finanzas para emprendedores. <br>
                </p>
          </div>
        </div>
      </div>
    </div>
  

    <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Ética en el trabajo</h2>
              <p>¡Haz de la ética tu sello distintivo en el mundo laboral! Únete a nosotros y aprende cómo integrar principios éticos en todas tus actividades laborales.</p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
              
              <h2>Contenido</h2>
              <p> ✓ Comportamiento ético en el lugar de trabajo.<br>
                ✓ Responsabilidad social corporativa.<br>
                ✓ Toma de decisiones éticas.</p> <br>
            </div>
          </div>
        </div>
      </div>
  
      
      <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Diversidad e inclusión en el trabajo</h2>
              <p>Descubre la importancia de la diversidad y la inclusión en el éxito empresarial. ¡Inscríbete ahora en nuestro programa especializado y haz la diferencia en tu lugar de trabajo!</p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
            
              <h2>Contenido</h2>
              <p>✓ Promoción de la diversidad en el lugar de trabajo. <br>
                ✓ Creación de un entorno inclusivo. <br>
                ✓ Prevención de la discriminación y el acoso laboral. <br>
                </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Resiliencia y manejo del estrés</h2>
              <p>Aprende a manejar el estrés y construir resiliencia en tu vida personal y profesional. ¡Regístrate hoy mismo en nuestro programa especializado y transforma la forma en que enfrentas los obstáculos!</p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
              
              <h2>  Contenido</h2>
              <p>✓ Desarrollo de resiliencia emocional. <br> 
                ✓ Técnicas de manejo del estrés. <br>  
                ✓ Cómo mantener el equilibrio entre trabajo y vida personal. <br>
                </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Negociación y resolución de conflictos</h2>
              <p>Descubre cómo transformar los conflictos en oportunidades de colaboración y crecimiento. ¡Inscríbete ahora en nuestro programa de Negociación y Resolución de Conflictos y desbloquea tu potencial!</p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
             
              <h2>Contenido</h2>
              <p>✓ Técnicas de negociación. <br>
                ✓ Resolución de conflictos en el trabajo. <br>
                ✓ Habilidades de mediación.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Comunicación efectiva en el lugar de trabajo</h2>
              <p>Descubre cómo mejorar tus habilidades de comunicación para construir relaciones más sólidas y productivas en el trabajo. ¡Regístrate hoy mismo en nuestro programa especializado y transforma tu forma de comunicarte!</p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
             
              <h2>Contenido</h2>
              <p>✓ Comunicación con colegas, superiores y subordinados. <br>
                ✓ Presentaciones efectivas. <br>
                ✓ Comunicación en entornos virtuales.</p> <br>
            </div>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="card">
          <div class="card-front">
            <div class="card-content">
             
              <h2>Éxito en el primer empleo</h2>
              <p>Asegura tu éxito profesional desde el primer momento. Inscríbete en nuestro curso especializado y obtén las herramientas y estrategias para triunfar en tu primer empleo.</p>
            </div>
          </div>
          <div class="card-back">
            <div class="card-content">
              
              <h2>Contenido</h2>
              <p>✓ Transición exitosa de la escuela al trabajo. <br>
                ✓ Expectativas en el primer empleo. <br>
                ✓ Desarrollo de habilidades iniciales en el trabajo</p>
            </div>
          </div>
        </div>
      </div>


  </div>
  
  