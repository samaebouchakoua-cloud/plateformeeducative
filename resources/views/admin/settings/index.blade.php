@extends('layouts.app')

@section('title','Paramètres plateforme')

@section('content')
<h1 class="text-2xl font-bold mb-4">Paramètres</h1>
<div class="bg-white p-6 rounded shadow">
    <h2 class="font-semibold mb-2">Matières</h2>
    <p class="text-sm">Gérer les matières (ex: Mathématiques, Français…)</p>
</div>
<div class="mt-4 bg-white p-6 rounded shadow">
    <h2 class="font-semibold mb-2">Niveaux scolaires</h2>
    <p class="text-sm">Ajouter/supprimer des niveaux (Primaire, Collège, Lycée…)</p>
</div>
<div class="mt-4 bg-white p-6 rounded shadow">
    <h2 class="font-semibold mb-2">Catégories de challenges</h2>
    <p class="text-sm">Organiser les challenges par catégorie.</p>
</div>
<div class="mt-4 bg-white p-6 rounded shadow">
    <h2 class="font-semibold mb-2">Notifications</h2>
    <p class="text-sm">Paramétrer les emails et notifications de la plateforme.</p>
</div>
@endsection