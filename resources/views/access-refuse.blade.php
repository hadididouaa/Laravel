<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès refusé</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            color: #333;
        }
        .container {
            text-align: center;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #e3342f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Accès refusé</h1>
        <p>Désolé, vous devez avoir au moins 18 ans pour accéder à ce service.</p>
        <p><a href="{{ url('/') }}">Retour à l'accueil</a></p>
    </div>
</body>
</html>