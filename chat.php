<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
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
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="artistas.php">Artistas</a></li>
      <li><a href="error.php">Próximos Eventos</a></li>
      <li><a href="chat.php">Chatea con Nosotros</a></li>
      <li><a href="ayuda.php">Ayuda</a></li>
      <li><a href="login.php">Unete a nosotros</a></li>
    </ul>
  </nav>
 <section>
  <h2>Contacto</h2>
  <p>Si tienes alguna pregunta o consulta, no dudes en contactarnos.
Te contestaremos lo antes posible
  </p>
  
  <div class="contact-form">
    <div class="form-group">
      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" class="form-control" rows="4"></textarea>
    </div>
    <button class="btn btn-primary">Enviar</button>
  </div>
  
  
</section>
<script>
    // ID de chat y token de Telegram
    const chatId = '1013141314';
    const token = '6135103775:AAFYpphFbnpatlMj0aNqa303bp975BIsR7c';

    // Número máximo de mensajes a mostrar
    const maxMessages = 10;

    // Función para enviar un mensaje
    function sendMessage(message) {
      // ...
    }

    // Función para recibir mensajes
    function receiveMessages() {
      // ...
    }

    // Agregar mensaje al contenedor de mensajes
    function addMessageToContainer(sender, text) {
      const messageContainer = $('#message-container');
      const newMessage = $('<div class="message"></div>').addClass(sender === 'Tú' ? 'sender' : 'receiver').text(`${sender}: ${text}`);
      messageContainer.append(newMessage);

      // Eliminar mensajes antiguos si se supera el número máximo
      const messages = messageContainer.children('.message');
      if (messages.length > maxMessages) {
        messages.slice(0, messages.length - maxMessages).remove();
      }
    }

    // Manejar el envío del formulario
    $('#message-form').submit(function(event) {
      event.preventDefault();
      const messageInput = $('#message-input');
      const messageText = messageInput.val().trim();

      if (messageText !== '') {
        sendMessage(messageText);
        addMessageToContainer('Tú', messageText);
        messageInput.val('');
      }
    });

    // Iniciar la recepción de mensajes al cargar la página
    $(document).ready(function() {
      receiveMessages();
    });
  </script>




</body>
</html>