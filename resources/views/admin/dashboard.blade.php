@extends('layouts.app')

@section('title','Dashboard admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tableau de bord administrateur</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white p-4 rounded shadow">
        <h2 class="font-semibold mb-2">Nombre d'utilisateurs</h2>
        <p class="text-xl">0</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="font-semibold mb-2">Challenges actifs</h2>
        <p class="text-xl">0</p>
    </div>
</div>
<div class="mt-6 bg-white p-4 rounded shadow">
    <h2 class="font-semibold mb-2">Participation</h2>
    <p class="text-sm">Statistiques de participation globales.</p>
</div>
<div class="mt-6 bg-white p-4 rounded shadow">
    <h2 class="font-semibold mb-2">Performance globale</h2>
    <p class="text-sm">Graphiques et données globales.</p>
</div>
@endsection