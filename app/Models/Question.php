<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'user_id', 'status'];
    protected $with = ['user', 'tags'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function views()
    {
        return $this->hasMany(CounterViews::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'question_tags', 'question_id', 'tag_id', 'id', 'id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable', 'commentable_type', 'commentable_id', 'id');
    }

    public function votes()
    {
        return $this->morphMany(Vote::class, 'voteable', 'voteable_type', 'voteable_id', 'id');
    }

}
