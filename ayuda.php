<!DOCTYPE html>
<html>
<head>
  <title>Booking de Artistas - Ayuda</title>
  <!-- Enlace a los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- CSS personalizado -->
  <style>
    body {
      background-color: #9FA6B2;
      color: #332D2D;
    }
    .container {
      margin-top: 50px;
    }
  </style>
  <style>
    /* Estilos para el navbar */
    .navbar {
      overflow: hidden;
      background-color: #333;
    }

    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Estilos para el navbar responsivo */
    @media screen and (max-width: 600px) {
      .navbar a {
        float: none;
        display: block;
        text-align: left;
      }
    }
  </style>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
    }

    nav {
      background-color: #000;
      color: #fff;
      padding: 10px;
    }

    nav ul {
      margin: 0;
      padding: 0;
      list-style-type: none;
      text-align: center;
    }

    nav ul li {
      display: inline;
      margin-right: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 5px;
    }

    section {
      padding: 20px;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
   <nav>
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="artistas.php">Artistas</a></li>
      <li><a href="error.php">Próximos Eventos</a></li>
      <li><a href="#">Acerca de Nosotros</a></li>
      <li><a href="chat.php">Chatea con Nosotros</a></li>
      <li><a href="ayuda.php">Ayuda</a></li>
    </ul>
  </nav>
  
  <div class="container">
    <h1>Ayuda - Booking de Artistas</h1>
    <p>¡Bienvenido a nuestra página de ayuda! Aquí encontrarás respuestas a preguntas frecuentes sobre nuestro servicio de booking de artistas.</p>

    <h2>Preguntas frecuentes</h2>
    <div class="accordion" id="accordionExample">

      <!-- Pregunta 1 -->
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ¿Cómo puedo reservar a un artista?
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Para reservar a un artista, sigue estos pasos:
            <ol>
              <li>Ingresa a nuestro sitio web y busca el artista que deseas reservar.</li>
              <li>Envianos un mensaje en la seccion de chat</li>
              <li>Confirma tu reserva y realiza el pago.</li>
              <li>Recibirás un correo de confirmación con los detalles de tu reserva.</li>
            </ol>
            ¡Y listo! Has reservado a un artista para tu evento.
          </div>
        </div>
      </div>

      <!-- Pregunta 2 -->
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ¿Cuáles son los métodos de pago aceptados?
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Aceptamos los siguientes métodos de pago:
            <ul>
              <li>Tarjeta de crédito (Visa, MasterCard, American Express)</li>
              <li>PayPal</li>
              <li>Transferencia bancaria</li>
            </ul>
            Puedes elegir el método de pago que más te convenga durante el proceso de reserva.
          </div>
        </div>
      </div>

      <!-- Pregunta 3 -->
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ¿Puedo cancelar una reserva?
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Sí, puedes cancelar una reserva siguiendo nuestro proceso de cancelación. Ponte en contacto con nuestro equipo de soporte al cliente y te ayudaremos con la cancelación. Ten en cuenta que puede haber cargos por cancelación dependiendo de la política de cancelación del artista.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Enlace a los archivos JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
