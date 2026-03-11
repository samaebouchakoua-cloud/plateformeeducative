@extends('layouts.app')

@section('title','Gestion utilisateurs')

@section('content')
<h1 class="text-2xl font-bold mb-4">Utilisateurs</h1>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-4 py-2">Nom</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Rôle</th>
            <th class="px-4 py-2">Statut</th>
            <th class="px-4 py-2">Date d'inscription</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="6" class="text-center py-4">Aucun utilisateur</td>
        </tr>
    </tbody>
</table>
@endsection