<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Javaquiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'question', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'correct_answer', 'points'
    ];
}
