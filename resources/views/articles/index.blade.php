<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1000px;
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
            text-align: center;
            margin-bottom: 30px;
        }
        .articles-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .article-card {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .article-card:hover {
            transform: translateY(-5px);
        }
        .article-card h3 {
            color: #3490dc;
            margin-top: 0;
        }
        .article-author {
            color: #6c757d;
            font-style: italic;
            margin-bottom: 15px;
        }
        .article-content {
            color: #495057;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-left: 4px solid #28a745;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border-left: 4px solid #dc3545;
        }
        .alert-info {
            background-color: #d1ecf1;
            color: #0c5460;
            border-left: 4px solid #17a2b8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nos articles</h1>
        
        <div class="alerts">
            <x-alert type="success" message="Opération réussie !" />
            <x-alert type="error" message="Une erreur s'est produite." />
            <x-alert type="info">Ceci est un message d'information avec un slot.</x-alert>
        </div>
        
        <div class="articles-container">
            @foreach($articles as $article)
                <x-article-card 
                    :title="$article['title']" 
                    :author="$article['author']"
                >
                    {{ $article['content'] }}
                </x-article-card>
            @endforeach
        </div>
    </div>
</body>
</html>