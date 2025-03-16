<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id',
        'answer_id',
        'time_taken',
        'quiz_stage',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan model Question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // Relasi dengan model Answer
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
