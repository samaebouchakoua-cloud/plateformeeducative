@extends('layouts.app')

@section('title','Dashboard élève')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tableau de bord</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-4 rounded shadow">
        <h2 class="font-semibold mb-2">Challenges disponibles</h2>
        <ul class="list-disc pl-5 text-sm">
            <li>Aucun challenge pour le moment</li>
        </ul>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="font-semibold mb-2">Challenges en cours</h2>
        <ul class="list-disc pl-5 text-sm">
            <li>Vous n'êtes pas inscrit à un challenge actif.</li>
        </ul>
    </div>
</div>
<div class="mt-6 bg-white p-4 rounded shadow">
    <h2 class="font-semibold mb-2">Progression</h2>
    <p class="text-sm">Votre progression globale sera affichée ici.</p>
</div>
@endsection