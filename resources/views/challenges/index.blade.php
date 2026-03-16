@extends('layouts.admin')

@section('title', 'Gestion des Challenges')
@section('page-title', 'Gestion des Challenges')

@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Liste des Challenges</h2>
        <a href="{{ route('challenges.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Créer un challenge
        </a>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Nom du challenge</th>
                    <th>Matière</th>
                    <th>Niveau scolaire</th>
                    <th>Type</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                    <th>Statut</th>
                    <th style="width: 150px">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($challenges as $challenge)
                <tr>
                    <td><strong>{{ $challenge->name }}</strong></td>
                    <td>{{ $challenge->subject }}</td>
                    <td>{{ $challenge->level }}</td>
                    <td>
                        <span class="badge {{ $challenge->type == 'national' ? 'badge-primary' : 'badge-secondary' }}">
                            {{ ucfirst($challenge->type) }}
                        </span>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($challenge->start_date)->format('d/m/Y H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($challenge->end_date)->format('d/m/Y H:i') }}</td>
                    <td>
                        @php
                            $now = now();
                            $start = \Carbon\Carbon::parse($challenge->start_date);
                            $end = \Carbon\Carbon::parse($challenge->end_date);
                            
                            if($now < $start) {
                                echo '<span class="badge badge-warning">À venir</span>';
                            } elseif($now >= $start && $now <= $end) {
                                echo '<span class="badge badge-success">En cours</span>';
                            } else {
                                echo '<span class="badge badge-secondary">Terminé</span>';
                            }
                        @endphp
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('challenges.show', $challenge->id) }}" class="btn-icon text-primary" title="Voir" style="background:rgba(67, 97, 238, 0.1);">
                                <i class="fas fa-eye m-0"></i>
                            </a>
                            <a href="{{ route('challenges.edit', $challenge->id) }}" class="btn-icon" title="Modifier">
                                <i class="fas fa-edit m-0"></i>
                            </a>
                            <form action="{{ route('challenges.destroy', $challenge->id) }}" method="POST" onsubmit="return confirm('Souhaitez-vous vraiment supprimer ce challenge ?');" style="margin:0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon text-danger" title="Supprimer">
                                    <i class="fas fa-trash m-0"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center text-muted" style="padding: 30px;">
                        <i class="fas fa-trophy fa-3x mb-3" style="opacity:0.2;"></i><br>
                        Aucun challenge trouvé.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
