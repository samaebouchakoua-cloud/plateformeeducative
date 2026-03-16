<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ChallengeController extends Controller
{
    private function getMockChallenges()
    {
        return json_decode(json_encode([
            [
                'id' => 1,
                'name' => 'Olympiades de Mathématiques',
                'description' => 'Un grand challenge annuel de mathématiques pour tester les capacités logiques.',
                'subject' => 'Mathématiques',
                'level' => 'Lycée',
                'num_questions' => 20,
                'duration_minutes' => 60,
                'max_attempts' => 1,
                'type' => 'national',
                'start_date' => Carbon::now()->addDays(2)->format('Y-m-d H:i:s'),
                'end_date' => Carbon::now()->addDays(5)->format('Y-m-d H:i:s'),
                'status' => 'upcoming',
            ],
            [
                'id' => 2,
                'name' => 'Test de Physique Appliquée',
                'description' => 'Évaluation des connaissances en mécanique et électricité.',
                'subject' => 'Physique',
                'level' => 'Supérieur',
                'num_questions' => 15,
                'duration_minutes' => 45,
                'max_attempts' => 2,
                'type' => 'établissement',
                'start_date' => Carbon::now()->subDays(1)->format('Y-m-d H:i:s'),
                'end_date' => Carbon::now()->addDays(1)->format('Y-m-d H:i:s'),
                'status' => 'active',
            ],
            [
                'id' => 3,
                'name' => 'Quiz d\'Histoire Géo',
                'description' => 'Test général de connaissances.',
                'subject' => 'Histoire-Géo',
                'level' => 'Collège',
                'num_questions' => 10,
                'duration_minutes' => 20,
                'max_attempts' => 1,
                'type' => 'établissement',
                'start_date' => Carbon::now()->subDays(10)->format('Y-m-d H:i:s'),
                'end_date' => Carbon::now()->subDays(5)->format('Y-m-d H:i:s'),
                'status' => 'completed',
            ]
        ]));
    }

    private function getMockQuestions()
    {
        return json_decode(json_encode([
            [
                'id' => 1,
                'content' => 'Quelle est la racine carrée de 144 ?',
                'option_a' => '10',
                'option_b' => '12',
                'option_c' => '14',
                'option_d' => '16',
                'correct_option' => 'B',
                'subject' => 'Mathématiques',
                'level' => 'Collège',
                'difficulty' => 'Facile'
            ],
            [
                'id' => 2,
                'content' => 'Qui a écrit les Misérables ?',
                'option_a' => 'Molière',
                'option_b' => 'Victor Hugo',
                'option_c' => 'Balzac',
                'option_d' => 'Zola',
                'correct_option' => 'B',
                'subject' => 'Français',
                'level' => 'Lycée',
                'difficulty' => 'Moyen'
            ]
        ]));
    }

    public function index()
    {
        $challenges = $this->getMockChallenges();
        return view('challenges.index', compact('challenges'));
    }

    public function create()
    {
        return view('challenges.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('challenges.index')->with('success', 'Maquette : Challenge créé avec succès.');
    }

    public function show(string $id)
    {
        $challenge = collect($this->getMockChallenges())->firstWhere('id', (int)$id) ?? $this->getMockChallenges()[0];
        $challenge->questions = collect($this->getMockQuestions()); 
        return view('challenges.show', compact('challenge'));
    }

    public function edit(string $id)
    {
        $challenge = collect($this->getMockChallenges())->firstWhere('id', (int)$id) ?? $this->getMockChallenges()[0];
        return view('challenges.edit', compact('challenge'));
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('challenges.index')->with('success', 'Maquette : Challenge mis à jour avec succès.');
    }

    public function destroy(string $id)
    {
        return redirect()->route('challenges.index')->with('success', 'Maquette : Challenge supprimé avec succès.');
    }
}
