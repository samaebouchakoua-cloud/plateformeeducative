@extends('layouts.admin')

@section('title', 'Banque de Questions')
@section('page-title', 'Banque de Questions')

@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Liste des Questions</h2>
        <a href="{{ route('questions.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Ajouter question
        </a>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Matière</th>
                    <th>Niveau</th>
                    <th>Difficulté</th>
                    <th style="width: 150px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($questions as $question)
                <tr>
                    <td>{{ Str::limit($question->content, 60) }}</td>
                    <td><span class="badge badge-secondary">{{ $question->subject }}</span></td>
                    <td>{{ $question->level }}</td>
                    <td>
                        @if($question->difficulty == 'Facile')
                            <span class="badge badge-success">Facile</span>
                        @elseif($question->difficulty == 'Difficile')
                            <span class="badge badge-warning text-danger" style="background:rgba(230,57,70,0.1);color:var(--danger)">Difficile</span>
                        @else
                            <span class="badge badge-primary">{{ $question->difficulty }}</span>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('questions.edit', $question->id) }}" class="btn-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette question ?');" style="margin:0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon text-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted" style="padding: 30px;">
                        <i class="fas fa-inbox fa-3x mb-3" style="opacity:0.2;"></i><br>
                        Aucune question trouvée.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
