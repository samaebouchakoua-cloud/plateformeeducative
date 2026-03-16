@extends('layouts.admin')

@section('title', 'Modifier le challenge')
@section('page-title', 'Modifier le challenge')

@section('content')
<div class="card" style="max-width: 900px; margin: 0 auto;">
    <div class="card-header">
        <h2 class="card-title">Modification - {{ $challenge->name }}</h2>
        <a href="{{ route('challenges.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>

    <form action="{{ route('challenges.update', $challenge) }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- Informations générales -->
        <h3 style="font-size:1.1rem; border-bottom:1px solid #eee; padding-bottom:10px; margin-bottom:20px; color:var(--primary)">
            <i class="fas fa-info-circle"></i> Informations générales
        </h3>
        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Nom du challenge *</label>
                    <input type="text" name="name" class="form-control" required value="{{ old('name', $challenge->name) }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" style="min-height:80px;">{{ old('description', $challenge->description) }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Matière *</label>
                    <input type="text" name="subject" class="form-control" required value="{{ old('subject', $challenge->subject) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Niveau scolaire *</label>
                    <select name="level" class="form-control" required>
                        <option value="Primaire" {{ $challenge->level == 'Primaire' ? 'selected' : '' }}>Primaire</option>
                        <option value="Collège" {{ $challenge->level == 'Collège' ? 'selected' : '' }}>Collège</option>
                        <option value="Lycée" {{ $challenge->level == 'Lycée' ? 'selected' : '' }}>Lycée</option>
                        <option value="Supérieur" {{ $challenge->level == 'Supérieur' ? 'selected' : '' }}>Supérieur</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Paramètres -->
        <h3 style="font-size:1.1rem; border-bottom:1px solid #eee; padding-bottom:10px; margin-top:20px; margin-bottom:20px; color:var(--primary)">
            <i class="fas fa-cog"></i> Paramètres
        </h3>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Nombre de questions *</label>
                    <input type="number" name="num_questions" class="form-control" required min="1" value="{{ old('num_questions', $challenge->num_questions) }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Durée du challenge (min) *</label>
                    <input type="number" name="duration_minutes" class="form-control" required min="1" value="{{ old('duration_minutes', $challenge->duration_minutes) }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="form-label">Nombre de tentatives *</label>
                    <input type="number" name="max_attempts" class="form-control" required min="1" value="{{ old('max_attempts', $challenge->max_attempts) }}">
                </div>
            </div>
        </div>

        <div class="form-group mt-2 mb-4">
            <label class="form-label">Type de challenge *</label>
            <div class="radio-group" style="background:#f8f9fa; padding:15px; border-radius:8px; border:1px solid #e9edf7;">
                <label class="radio-item">
                    <input type="radio" name="type" value="établissement" required {{ old('type', $challenge->type) == 'établissement' ? 'checked' : '' }}>
                    <span>Établissement</span>
                </label>
                <label class="radio-item" style="margin-left:20px;">
                    <input type="radio" name="type" value="national" required {{ old('type', $challenge->type) == 'national' ? 'checked' : '' }}>
                    <span>National</span>
                </label>
            </div>
        </div>

        <!-- Planification -->
        <h3 style="font-size:1.1rem; border-bottom:1px solid #eee; padding-bottom:10px; margin-top:20px; margin-bottom:20px; color:var(--primary)">
            <i class="fas fa-calendar-alt"></i> Planification
        </h3>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Date et heure de début *</label>
                    <input type="datetime-local" name="start_date" class="form-control" required value="{{ old('start_date', \Carbon\Carbon::parse($challenge->start_date)->format('Y-m-d\TH:i')) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Date et heure de fin *</label>
                    <input type="datetime-local" name="end_date" class="form-control" required value="{{ old('end_date', \Carbon\Carbon::parse($challenge->end_date)->format('Y-m-d\TH:i')) }}">
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
