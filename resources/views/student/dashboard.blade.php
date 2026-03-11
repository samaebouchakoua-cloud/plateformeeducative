@extends('layouts.app')

@section('title','Dashboard élève')

@section('content')
<h1 class="text-2xl font-bold mb-4 text-blue-800">Tableau de bord</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="card">
        <h2 class="font-semibold mb-2 text-blue-700">Challenges disponibles</h2>
        <ul class="list-disc pl-5 text-sm">
            <li>Aucun challenge pour le moment</li>
        </ul>
    </div>
    <div class="card">
        <h2 class="font-semibold mb-2 text-blue-700">Challenges en cours</h2>
        <ul class="list-disc pl-5 text-sm">
            <li>Vous n'êtes pas inscrit à un challenge actif.</li>
        </ul>
    </div>
</div>
<div class="mt-6 card">
    <h2 class="font-semibold mb-2 text-blue-700">Progression</h2>
    <p class="text-sm">Votre progression globale sera affichée ici.</p>
</div>
@endsection