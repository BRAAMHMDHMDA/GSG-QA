<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'body', 'parent_id', 'user_id', 'question_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function question()
    {
        $this->belongsTo(Question::class);
    }
}
