@extends('layouts.app')

@section('title','Créer un challenge')

@section('content')
<h1 class="text-2xl font-bold mb-4">Création de challenge</h1>
<form action="#" method="POST" class="bg-white p-6 rounded shadow">
    <h2 class="font-semibold mb-2">Informations générales</h2>
    <div class="mb-4">
        <label class="block mb-1">Titre du challenge</label>
        <input type="text" name="title" class="w-full border rounded px-3 py-2" />
    </div>
    <div class="mb-4">
        <label class="block mb-1">Description</label>
        <textarea name="description" class="w-full border rounded px-3 py-2"></textarea>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <label class="block mb-1">Matière</label>
            <input type="text" name="subject" class="w-full border rounded px-3 py-2" />
        </div>
        <div class="mb-4">
            <label class="block mb-1">Niveau scolaire</label>
            <input type="text" name="grade" class="w-full border rounded px-3 py-2" />
        </div>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Niveau de difficulté</label>
        <select name="difficulty" class="w-full border rounded px-3 py-2">
            <option value="facile">Facile</option>
            <option value="moyen">Moyen</option>
            <option value="difficile">Difficile</option>
        </select>
    </div>
    <h2 class="font-semibold mb-2">Paramètres</h2>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <label class="block mb-1">Nombre de questions</label>
            <input type="number" name="question_count" class="w-full border rounded px-3 py-2" />
        </div>
        <div class="mb-4">
            <label class="block mb-1">Durée totale (minutes)</label>
            <input type="number" name="total_time" class="w-full border rounded px-3 py-2" />
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <label class="block mb-1">Durée par question (secondes)</label>
            <input type="number" name="time_per_question" class="w-full border rounded px-3 py-2" />
        </div>
        <div class="mb-4">
            <label class="block mb-1">Nombre de tentatives</label>
            <input type="number" name="attempts" class="w-full border rounded px-3 py-2" />
        </div>
    </div>
    <div class="mb-4">
        <label class="inline-flex items-center">
            <input type="checkbox" name="random_order" class="form-checkbox" />
            <span class="ml-2">Ordre aléatoire des questions</span>
        </label>
    </div>
    <h2 class="font-semibold mb-2">Planification</h2>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            <label class="block mb-1">Date début</label>
            <input type="date" name="start_date" class="w-full border rounded px-3 py-2" />
        </div>
        <div class="mb-4">
            <label class="block mb-1">Date fin</label>
            <input type="date" name="end_date" class="w-full border rounded px-3 py-2" />
        </div>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Statut</label>
        <select name="status" class="w-full border rounded px-3 py-2">
            <option value="draft">Brouillon</option>
            <option value="active">Actif</option>
            <option value="closed">Fermé</option>
        </select>
    </div>
    <h2 class="font-semibold mb-2">Participants</h2>
    <div class="mb-4">
        <label class="block mb-1">Groupes</label>
        <select name="groups" class="w-full border rounded px-3 py-2" multiple>
            <option value="">Aucun</option>
        </select>
    </div>
    <div class="mb-4">
        <label class="block mb-1">Élèves</label>
        <select name="students" class="w-full border rounded px-3 py-2" multiple>
            <option value="">Aucun</option>
        </select>
    </div>
    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Enregistrer</button>
</form>
@endsection