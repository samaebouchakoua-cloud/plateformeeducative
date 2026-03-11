@extends('layouts.app')

@section('title','Banque de questions (admin)')

@section('content')
<h1 class="text-2xl font-bold mb-4">Banque de questions</h1>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="px-4 py-2">Question</th>
            <th class="px-4 py-2">Matière</th>
            <th class="px-4 py-2">Niveau</th>
            <th class="px-4 py-2">Difficulté</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="5" class="text-center py-4">Aucune question</td>
        </tr>
    </tbody>
</table>
@endsection