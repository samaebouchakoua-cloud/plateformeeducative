@extends('layouts.app')

@section('title','Dashboard enseignant')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tableau de bord enseignant</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-4 rounded shadow">
        <h2 class="font-semibold mb-2">Progression élèves</h2>
        <p class="text-sm">Synthèse de la progression des élèves.</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="font-semibold mb-2">Résultats par challenge</h2>
        <p class="text-sm">Voir les performances par challenge.</p>
    </div>
</div>
@endsection