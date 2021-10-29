<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterViews extends Model
{
    use HasFactory;
    protected $table = 'counter_views';
    protected $fillable = ['ip_address','question_id'];

}
