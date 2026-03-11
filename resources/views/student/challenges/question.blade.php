@extends('layouts.app')

@section('title','Question du challenge')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <div class="flex justify-between items-center mb-2">
        <span>Question 1/10</span>
        <span class="text-sm text-gray-600">Chronomètre : 00:30</span>
    </div>
    <p class="mb-4">Texte de la question affichée ici...</p>
    <form action="#" method="POST">
        <div class="mb-2">
            <label class="inline-flex items-center">
                <input type="radio" name="answer" value="A" class="form-radio" />
                <span class="ml-2">Réponse A</span>
            </label>
        </div>
        <div class="mb-2">
            <label class="inline-flex items-center">
                <input type="radio" name="answer" value="B" class="form-radio" />
                <span class="ml-2">Réponse B</span>
            </label>
        </div>
        <div class="mb-2">
            <label class="inline-flex items-center">
                <input type="radio" name="answer" value="C" class="form-radio" />
                <span class="ml-2">Réponse C</span>
            </label>
        </div>
        <div class="mb-2">
            <label class="inline-flex items-center">
                <input type="radio" name="answer" value="D" class="form-radio" />
                <span class="ml-2">Réponse D</span>
            </label>
        </div>
        <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Suivant</button>
    </form>
</div>
@endsection