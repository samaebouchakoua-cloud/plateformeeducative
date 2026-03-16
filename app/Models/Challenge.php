<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'subject', 'level', 'num_questions',
        'duration_minutes', 'max_attempts', 'type', 'start_date', 'end_date', 'status'
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
