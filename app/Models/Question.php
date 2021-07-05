<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function answers()
    {
        $this->hasMany(Answer::class);
    }
}