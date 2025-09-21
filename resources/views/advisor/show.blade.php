<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseiller - Recommandation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #3490dc;
            margin-bottom: 20px;
        }
        .advice-box {
            background-color: #f8f9fa;
            border-left: 4px solid #3490dc;
            padding: 20px;
            margin: 20px 0;
        }
        .user-info {
            color: #6c757d;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Recommandation de votre conseiller</h1>
        
        <div class="user-info">
            <p>Âge: <strong>{{ $age }}</strong> ans | Centre d'intérêt: <strong>{{ $interest }}</strong></p>
        </div>
        
        <div class="advice-box">
            <p>{{ $advice }}</p>
        </div>
        
        <p><a href="{{ url('/advisor?age=' . $age . '&interet=development') }}">Voir les conseils en développement</a> | 
           <a href="{{ url('/advisor?age=' . $age . '&interet=design') }}">Voir les conseils en design</a></p>
    </div>
</body>
</html>