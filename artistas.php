<!DOCTYPE html>
<html>
<head>
    <title>Sistema de búsqueda de cartas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
    <style>
        .card {
            width: 200px;
            margin: 10px;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-title {
            margin-top: 5px;
        }

        .search-container {
            text-align: center;
            margin-bottom: 10px;
        }

        .search-container input[type="text"] {
            padding: 5px;
        }

        .search-container button {
            padding: 5px 10px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>

<body>
	<header>
    <h1>Booking de Artistas</h1>
  </header>
 <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="artistas.php">Artistas</a></li>
      <li><a href="error.php">Próximos Eventos</a></li>
      <li><a href="chat.php">Chatea con Nosotros</a></li>
      <li><a href="ayuda.php">Ayuda</a></li>
      <li><a href="login.php">Unete a nosotros</a></li>
    </ul>
  </nav> <br> <br>
    <div class="container">
    <h2><center>BUSCA AQUI TODOS NUESTROS ARTISTAS</center></h2>
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Buscar por título" class="form-control">
        </div>

        <div class="card-container" id="cardContainer">
            <!-- Aquí se mostrarán las cartas -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var cards = [
            {
                title: "Bad Bunny",
                image: "https://artwork.jaxsta.com/995/BadBunnyOfficial.jpg?d=500x500"
            },
            {
                title: "The strokes",
                image: "https://cdns-images.dzcdn.net/images/artist/88e8ecd06aae5cd69d414af57a67f339/500x500.jpg"
            },
            {
                title: "Gorillaz",
                image: "https://storage.googleapis.com/stateless-elclubdelrock-com/2018/02/Gorillaz-500x500.jpg"
            },
            {
                title: "Charles ans",
                image: "https://cdns-images.dzcdn.net/images/artist/e041fdd2ed2585068886c87d9b1066c2/500x500.jpg"
            },
            {
                title: "Cafe Tacvba",
                image: "https://akamai.sscdn.co/letras/500x500/fotos/2/4/1/f/241f11624d0c87f439a12d4cdba483c7.jpg"
            },
            {
                title: "Natalia Lafurcade",
                image: "https://akamai.sscdn.co/letras/500x500/fotos/e/6/1/6/e616de3dbf7f81ece500f22a2a6d4e19.jpg"
            },
            {
                title: "Julieta Venegas",
                image: "https://i.pinimg.com/originals/68/c5/b0/68c5b0815a0fa05eed87830edb788cbc.jpg"
            },
            {
                title: "The Guadaloops",
                image: "https://cdns-images.dzcdn.net/images/artist/64d4963ceeac1cc73317b49ee6633181/500x500.jpg"
            },
            {
                title: "Gera MX",
                image: "https://akamai.sscdn.co/letras/500x500/fotos/5/9/0/4/5904ef9d9482551584cf2cf85acb5187.jpg"
            },
            {
                title: "Mago de Oz",
                image: "https://1.bp.blogspot.com/-NPDsT_97jLk/X_bzuCFYdmI/AAAAAAAAwKc/MssWkFREanUXug4rHVZHth0nziV1vGpNACLcBGAsYHQ/s0/MagoDeOz.jpg"
            },
            // Añade más objetos de carta aquí
        ];

        function searchCards() {
            var input = $("#searchInput").val().toLowerCase();
            var filteredCards = cards.filter(function(card) {
                return card.title.toLowerCase().includes(input);
            });

            displayCards(filteredCards);
        }

        function displayCards(filteredCards) {
            var cardContainer = $("#cardContainer");
            cardContainer.empty();

            filteredCards.forEach(function(card) {
                var cardElement = createCardElement(card);
                cardContainer.append(cardElement);
            });
        }

        function createCardElement(card) {
            var cardElement = $("<div>").addClass("card");

            var imgElement = $("<img>").attr("src", card.image).attr("alt", card.title);

            var titleElement = $("<div>").addClass("card-title").text(card.title);

            cardElement.append(imgElement).append(titleElement);

            return cardElement;
        }

        // Búsqueda automática mientras se escribe en el campo de búsqueda
        $("#searchInput").on("input", function() {
            var input = $(this).val().toLowerCase();
            var filteredCards = cards.filter(function(card) {
                return card.title.toLowerCase().includes(input);
            });

            displayCards(filteredCards);
        });

        // Mostrar todas las cartas al cargar la página
        displayCards(cards);
    </script> <br> <br>
    <footer>
    &copy; 2023 Booking de Artistas. Todos los derechos reservados.
  </footer>
</body>
</html>
