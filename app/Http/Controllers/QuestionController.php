<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
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
            ],
            [
                'id' => 3,
                'content' => 'Quelle est la capitale de l\'Australie ?',
                'option_a' => 'Sydney',
                'option_b' => 'Melbourne',
                'option_c' => 'Canberra',
                'option_d' => 'Perth',
                'correct_option' => 'C',
                'subject' => 'Géographie',
                'level' => 'Collège',
                'difficulty' => 'Moyen'
            ]
        ]));
    }

    public function index()
    {
        $questions = $this->getMockQuestions();
        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('questions.index')->with('success', 'Maquette : Question créée avec succès.');
    }

    public function show(string $id)
    {
        $question = collect($this->getMockQuestions())->firstWhere('id', (int)$id) ?? $this->getMockQuestions()[0];
        return view('questions.show', compact('question'));
    }

    public function edit(string $id)
    {
        $question = collect($this->getMockQuestions())->firstWhere('id', (int)$id) ?? $this->getMockQuestions()[0];
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('questions.index')->with('success', 'Maquette : Question mise à jour avec succès.');
    }

    public function destroy(string $id)
    {
        return redirect()->route('questions.index')->with('success', 'Maquette : Question supprimée avec succès.');
    }
}
