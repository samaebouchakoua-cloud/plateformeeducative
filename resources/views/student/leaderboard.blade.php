@extends('layouts.app')

@section('title','Classement')

@section('content')
<h1 class="text-2xl font-bold mb-4">Classement</h1>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-4 py-2">Position</th>
            <th class="px-4 py-2">Nom</th>
            <th class="px-4 py-2">Score</th>
            <th class="px-4 py-2">Temps</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4" class="text-center py-4">Aucun résultat pour le moment</td>
        </tr>
    </tbody>
</table>
@endsection