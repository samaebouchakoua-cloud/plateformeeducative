@extends('layouts.app')

@section('title','Profil élève')

@section('content')
<h1 class="text-2xl font-bold mb-4">Profil</h1>
<div class="bg-white p-4 rounded shadow">
    <p><strong>Nom :</strong> Jean Dupont</p>
    <p><strong>Email :</strong> jean@example.com</p>
    <p><strong>Rôle :</strong> Élève</p>
    <p><strong>Niveau scolaire :</strong> Collège</p>
</div>
<div class="mt-6 bg-white p-4 rounded shadow">
    <h2 class="font-semibold mb-2">Historique de participation</h2>
    <p class="text-sm">Aucune participation pour le moment.</p>
</div>
<div class="mt-6 bg-white p-4 rounded shadow">
    <h2 class="font-semibold mb-2">Statistiques</h2>
    <p class="text-sm">Vos statistiques seront affichées ici.</p>
</div>
@endsection