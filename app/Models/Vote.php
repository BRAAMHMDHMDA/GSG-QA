<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Vote extends Pivot
{
    protected $table = 'votes';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

}
