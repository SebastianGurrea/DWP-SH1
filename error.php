<!DOCTYPE html>
<html>
<head>
    <title>Error 404 - Página no encontrada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .emoji {
            font-size: 60px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Error 404</h1>
        <p>Página no encontrada</p>
        <p class="emoji">😔</p>
        <p>
            <a class="btn btn-primary" href="#" onclick="goBack()">Regresar</a>
        </p>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
