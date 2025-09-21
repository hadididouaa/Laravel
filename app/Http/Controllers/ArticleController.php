<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Données des articles (simulées)
        $articles = [
            [
                'title' => 'Introduction à Laravel',
                'author' => 'Jean Dupont',
                'content' => 'Laravel est un framework PHP robuste et élégant qui facilite le développement d\'applications web.'
            ],
            [
                'title' => 'Les bases de Blade',
                'author' => 'Marie Martin',
                'content' => 'Blade est le moteur de templating de Laravel. Il offre une syntaxe expressive et de nombreuses fonctionnalités.'
            ],
            [
                'title' => 'Les middlewares dans Laravel',
                'author' => 'Pierre Leroy',
                'content' => 'Les middlewares permettent de filtrer les requêtes HTTP entrantes dans votre application.'
            ],
            [
                'title' => 'Les composants Blade',
                'author' => 'Sophie Lambert',
                'content' => 'Les composants Blade permettent de créer des éléments réutilisables dans vos vues.'
            ]
        ];
        
        return view('articles.index', compact('articles'));
    }
}