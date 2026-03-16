@extends('layouts.admin')

@section('title', 'Détail du Challenge - ' . $challenge->name)
@section('page-title', 'Détail du Challenge')

@section('content')
<div class="mb-4 d-flex justify-content-between align-items-start">
    <div>
        <h2 style="margin-bottom:12px; font-size:1.5rem; color:var(--text-main);">{{ $challenge->name }}</h2>
        <div class="d-flex align-items-center gap-2">
            <span class="badge {{ $challenge->type == 'national' ? 'badge-primary' : 'badge-secondary' }}">{{ ucfirst($challenge->type) }}</span>
            <span class="badge badge-success">{{ $challenge->subject }}</span>
            <span class="badge badge-warning" style="background:#fff3cd; color:#856404;"><i class="fas fa-clock"></i> {{ $challenge->duration_minutes }} min</span>
        </div>
    </div>
    <a href="{{ route('challenges.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Retour
    </a>
</div>

<!-- Tabs Navigation -->
<div class="tabs-nav card" style="padding:0; margin-bottom:24px; border-bottom-left-radius:0; border-bottom-right-radius:0; display:flex; flex-direction:row;">
    <button class="tab-btn active" onclick="openTab(event, 'questions')">
        <i class="fas fa-list-ul"></i> Questions ({{ $challenge->questions->count() ?? 0 }})
    </button>
    <button class="tab-btn" onclick="openTab(event, 'participants')">
        <i class="fas fa-users"></i> Participants
    </button>
    <button class="tab-btn" onclick="openTab(event, 'classement')">
        <i class="fas fa-trophy"></i> Classement
    </button>
</div>

<!-- Questions Tab -->
<div id="questions" class="tab-pane active card" style="border-top-left-radius:0; border-top-right-radius:0; margin-top:-25px; min-height:400px;">
    <div class="card-header" style="border-bottom:1px solid var(--border); padding-bottom:15px; margin-bottom:15px;">
        <h3 class="card-title">Liste des questions ({{ $challenge->questions->count() ?? 0 }} / {{ $challenge->num_questions }})</h3>
        <button class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Lier des questions</button>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Matière</th>
                    <th>Niveau</th>
                    <th>Difficulté</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($challenge->questions))
                    @forelse($challenge->questions as $question)
                    <tr>
                        <td>{{ Str::limit($question->content, 60) }}</td>
                        <td>{{ $question->subject }}</td>
                        <td>{{ $question->level }}</td>
                        <td>{{ $question->difficulty }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted" style="padding:40px;">
                            <i class="fas fa-question-circle fa-3x mb-3" style="opacity:0.2;"></i><br>
                            Aucune question associée à ce challenge.
                        </td>
                    </tr>
                    @endforelse
                @else
                    <tr>
                        <td colspan="4" class="text-center text-muted" style="padding:40px;">
                            <i class="fas fa-question-circle fa-3x mb-3" style="opacity:0.2;"></i><br>
                            Aucune question associée à ce challenge.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<!-- Participants Tab -->
<div id="participants" class="tab-pane card" style="border-top-left-radius:0; border-top-right-radius:0; margin-top:-25px; min-height:400px;">
    <div class="card-header" style="border-bottom:1px solid var(--border); padding-bottom:15px; margin-bottom:15px;">
        <h3 class="card-title">Participants inscrits</h3>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Nom de l'élève</th>
                    <th>Établissement</th>
                    <th>Date d'inscription</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="text-center text-muted" style="padding:40px;">
                        <i class="fas fa-user-graduate fa-3x mb-3" style="opacity:0.2;"></i><br>
                        Aucun participant n'a rejoint ce challenge pour le moment.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Classement Tab -->
<div id="classement" class="tab-pane card" style="border-top-left-radius:0; border-top-right-radius:0; margin-top:-25px; min-height:400px;">
    <div class="card-header" style="border-bottom:1px solid var(--border); padding-bottom:15px; margin-bottom:15px;">
        <h3 class="card-title">Résultats et Classement</h3>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Rang</th>
                    <th>Nom de l'élève</th>
                    <th>Score</th>
                    <th>Temps réalisé</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" class="text-center text-muted" style="padding:40px;">
                        <i class="fas fa-medal fa-3x mb-3" style="opacity:0.2;"></i><br>
                        Le classement n'est pas encore disponible car le challenge n'a pas commencé ou aucun élève n'a participé.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('scripts')
<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    
    // Hide all tab panes
    tabcontent = document.getElementsByClassName("tab-pane");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].className = tabcontent[i].className.replace(" active", "");
    }
    
    // Deactivate all tab buttons
    tablinks = document.getElementsByClassName("tab-btn");
    for (i = 0; i < tablinks.length; i++) {
        // remove active class
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    
    // Show current tab and add active class to button
    document.getElementById(tabName).className += " active";
    evt.currentTarget.className += " active";
}
</script>
@endsection
