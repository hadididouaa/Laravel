<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    public function show(Request $request)
    {
        $age = $request->query('age');
        $interest = $request->query('interet', 'général');
        
        // Génération des conseils personnalisés
        $advice = $this->generateAdvice($age, $interest);
        
        return view('advisor.show', [
            'age' => $age,
            'interest' => $interest,
            'advice' => $advice
        ]);
    }
    
    private function generateAdvice($age, $interest)
    {
        // Base de données de conseils par âge et centre d'intérêt
        $advices = [
            'development' => [
                'young' => "À $age ans, c'est le moment idéal pour approfondir vos compétences en développement. Pensez à apprendre un nouveau framework comme React ou Vue.js.",
                'adult' => "Avec votre expérience, vous pourriez envisager de vous spécialiser dans un domaine particulier du développement, comme l'IA ou la cybersécurité.",
                'senior' => "Votre expérience est précieuse. Pensez à mentorer de jeunes développeurs ou à vous lancer dans l'architecture logicielle."
            ],
            'design' => [
                'young' => "À $age ans, explorez les différentes spécialités du design (UI, UX, graphisme) pour trouver votre voie.",
                'adult' => "Envisagez de développer votre portfolio personnel et de vous spécialiser dans une niche particulière du design.",
                'senior' => "Votre œil expert pourrait être précieux en direction artistique ou en consultation pour de grands projets."
            ],
            'général' => [
                'young' => "À $age ans, explorez différents domaines pour trouver votre passion. Continuez à apprendre et à développer vos compétences.",
                'adult' => "C'est le moment de consolider votre carrière et peut-être de vous spécialiser dans un domaine particulier.",
                'senior' => "Avec votre expérience, vous pourriez envisager des rôles de mentorat, de consultation ou de direction."
            ]
        ];
        
        // Catégorisation par âge
        $category = 'young';
        if ($age >= 25 && $age < 40) {
            $category = 'adult';
        } elseif ($age >= 40) {
            $category = 'senior';
        }
        
        // Sélection du centre d'intérêt (avec fallback sur 'général')
        $interestKey = array_key_exists($interest, $advices) ? $interest : 'général';
        
        return $advices[$interestKey][$category];
    }
}