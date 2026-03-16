@extends('layouts.admin')

@section('title', 'Ajouter une Question')
@section('page-title', 'Ajouter une Question')

@section('content')
<div class="card" style="max-width: 800px; margin: 0 auto;">
    <div class="card-header">
        <h2 class="card-title">Nouvelle Question</h2>
        <a href="{{ route('questions.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Matière *</label>
                    <input type="text" name="subject" class="form-control" required value="{{ old('subject') }}" placeholder="Ex: Mathématiques">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Niveau scolaire *</label>
                    <select name="level" class="form-control" required>
                        <option value="">Sélectionner</option>
                        <option value="Primaire">Primaire</option>
                        <option value="Collège">Collège</option>
                        <option value="Lycée">Lycée</option>
                        <option value="Supérieur">Supérieur</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Difficulté *</label>
                    <select name="difficulty" class="form-control" required>
                        <option value="Facile">Facile</option>
                        <option value="Moyen" selected>Moyen</option>
                        <option value="Difficile">Difficile</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group mt-3">
            <label class="form-label">Énoncé de la question *</label>
            <textarea name="content" class="form-control" required placeholder="Saisissez la question ici...">{{ old('content') }}</textarea>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="form-group option-card">
                    <label class="form-label d-flex align-items-center mb-3">
                        <input type="radio" name="correct_option" value="A" required style="margin-right:8px; accent-color:var(--success); width:18px; height:18px;">
                        <strong>Réponse A</strong>
                    </label>
                    <input type="text" name="option_a" class="form-control" required value="{{ old('option_a') }}" placeholder="Texte de la réponse A">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group option-card">
                    <label class="form-label d-flex align-items-center mb-3">
                        <input type="radio" name="correct_option" value="B" required style="margin-right:8px; accent-color:var(--success); width:18px; height:18px;">
                        <strong>Réponse B</strong>
                    </label>
                    <input type="text" name="option_b" class="form-control" required value="{{ old('option_b') }}" placeholder="Texte de la réponse B">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group option-card">
                    <label class="form-label d-flex align-items-center mb-3">
                        <input type="radio" name="correct_option" value="C" required style="margin-right:8px; accent-color:var(--success); width:18px; height:18px;">
                        <strong>Réponse C</strong>
                    </label>
                    <input type="text" name="option_c" class="form-control" required value="{{ old('option_c') }}" placeholder="Texte de la réponse C">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group option-card">
                    <label class="form-label d-flex align-items-center mb-3">
                        <input type="radio" name="correct_option" value="D" required style="margin-right:8px; accent-color:var(--success); width:18px; height:18px;">
                        <strong>Réponse D</strong>
                    </label>
                    <input type="text" name="option_d" class="form-control" required value="{{ old('option_d') }}" placeholder="Texte de la réponse D">
                </div>
            </div>
        </div>
        <p class="text-muted" style="font-size: 0.85rem; margin-top:-10px; margin-bottom:20px;">
            <i class="fas fa-check-circle" style="color:var(--success)"></i> Sélectionnez le bouton radio correspondant à la bonne réponse.
        </p>

        <div class="d-flex justify-content-end gap-3 mt-4" style="border-top:1px solid var(--border); padding-top:20px;">
            <button type="submit" class="btn btn-primary" style="padding:12px 24px; font-size:1rem;">
                <i class="fas fa-save"></i> Enregistrer la question
            </button>
        </div>
    </form>
</div>
@endsection
