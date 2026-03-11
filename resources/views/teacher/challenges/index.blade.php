@extends('layouts.app')

@section('title','Liste des challenges (enseignant)')

@section('content')
<h1 class="text-2xl font-bold mb-4">Challenges (enseignant)</h1>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-4 py-2">Titre</th>
            <th class="px-4 py-2">Matière</th>
            <th class="px-4 py-2">Niveau</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4" class="text-center py-4">Aucun challenge créé</td>
        </tr>
    </tbody>
</table>
@endsection