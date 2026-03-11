@extends('layouts.app')

@section('title','Détail challenge')

@section('content')
<h1 class="text-2xl font-bold mb-4">Détail du challenge</h1>
<div class="bg-white p-4 rounded shadow">
    <p><strong>Titre :</strong> Exemple de challenge</p>
    <p><strong>Description :</strong> Description du challenge.</p>
    <p><strong>Nombre de questions :</strong> 10</p>
    <p><strong>Durée :</strong> 30 minutes</p>
    <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Démarrer le challenge</button>
</div>
@endsection