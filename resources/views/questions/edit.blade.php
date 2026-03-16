@extends('layouts.admin')

@section('title', 'Modifier la Question')
@section('page-title', 'Modifier la Question')

@section('content')
<div class="card" style="max-width: 800px; margin: 0 auto;">
    <div class="card-header">
        <h2 class="card-title">Modification</h2>
        <a href="{{ route('questions.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <form action="{{ route('questions.update', $question) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Matière *</label>
                    <input type="text" name="subject" class="form-control" required value="{{ old('subject', $question->subject) }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Niveau scolaire *</label>
                    <select name="level" class="form-control" required>
                        <option value="Primaire" {{ $question->level == 'Primaire' ? 'selected' : '' }}>Primaire</option>
                        <option value="Collège" {{ $question->level == 'Collège' ? 'selected' : '' }}>Collège</option>
                        <option value="Lycée" {{ $question->level == 'Lycée' ? 'selected' : '' }}>Lycée</option>
                        <option value="Supérieur" {{ $question->level == 'Supérieur' ? 'selected' : '' }}>Supérieur</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Difficulté *</label>
                    <select name="difficulty" class="form-control" required>
                        <option value="Facile" {{ $question->difficulty == 'Facile' ? 'selected' : '' }}>Facile</option>
                        <option value="Moyen" {{ $question->difficulty == 'Moyen' ? 'selected' : '' }}>Moyen</option>
                        <option value="Difficile" {{ $question->difficulty == 'Difficile' ? 'selected' : '' }}>Difficile</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Question *</label>
            <textarea name="content" class="form-control" required>{{ old('content', $question->content) }}</textarea>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="form-group" style="background:#f8f9fa; padding:15px; border-radius:8px; border:1px solid #e9edf7;">
                    <label class="form-label d-flex align-items-center mb-3">
                        <input type="radio" name="correct_option" value="A" required {{ $question->correct_option == 'A' ? 'checked' : '' }} style="margin-right:8px; accent-color:var(--success); width:18px; height:18px;">
                        <strong>Réponse A</strong>
                    </label>
                    <input type="text" name="option_a" class="form-control" required value="{{ old('option_a', $question->option_a) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="background:#f8f9fa; padding:15px; border-radius:8px; border:1px solid #e9edf7;">
                    <label class="form-label d-flex align-items-center mb-3">
                        <input type="radio" name="correct_option" value="B" required {{ $question->correct_option == 'B' ? 'checked' : '' }} style="margin-right:8px; accent-color:var(--success); width:18px; height:18px;">
                        <strong>Réponse B</strong>
                    </label>
                    <input type="text" name="option_b" class="form-control" required value="{{ old('option_b', $question->option_b) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="background:#f8f9fa; padding:15px; border-radius:8px; border:1px solid #e9edf7;">
                    <label class="form-label d-flex align-items-center mb-3">
                        <input type="radio" name="correct_option" value="C" required {{ $question->correct_option == 'C' ? 'checked' : '' }} style="margin-right:8px; accent-color:var(--success); width:18px; height:18px;">
                        <strong>Réponse C</strong>
                    </label>
                    <input type="text" name="option_c" class="form-control" required value="{{ old('option_c', $question->option_c) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="background:#f8f9fa; padding:15px; border-radius:8px; border:1px solid #e9edf7;">
                    <label class="form-label d-flex align-items-center mb-3">
                        <input type="radio" name="correct_option" value="D" required {{ $question->correct_option == 'D' ? 'checked' : '' }} style="margin-right:8px; accent-color:var(--success); width:18px; height:18px;">
                        <strong>Réponse D</strong>
                    </label>
                    <input type="text" name="option_d" class="form-control" required value="{{ old('option_d', $question->option_d) }}">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-3 mt-4" style="border-top:1px solid var(--border); padding-top:20px;">
            <button type="submit" class="btn btn-primary" style="padding:12px 24px; font-size:1rem;">
                <i class="fas fa-save"></i> Mettre à jour
            </button>
        </div>
    </form>
</div>
@endsection
