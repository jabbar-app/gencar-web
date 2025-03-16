<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question'];

    // Relasi dengan model UserAnswer
    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class);
    }

    // Relasi dengan model Answer
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
