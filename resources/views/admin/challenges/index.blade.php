@extends('layouts.app')

@section('title','Gestion challenges')

@section('content')
<h1 class="text-2xl font-bold mb-4">Challenges</h1>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-4 py-2">Titre</th>
            <th class="px-4 py-2">Matière</th>
            <th class="px-4 py-2">Niveau</th>
            <th class="px-4 py-2">Nombre de questions</th>
            <th class="px-4 py-2">Statut</th>
            <th class="px-4 py-2">Date début</th>
            <th class="px-4 py-2">Date fin</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="8" class="text-center py-4">Aucun challenge</td>
        </tr>
    </tbody>
</table>
@endsection