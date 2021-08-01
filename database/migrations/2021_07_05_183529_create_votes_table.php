<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
//            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete();
            $table->morphs('voteable');
            $table->primary(['user_id', 'voteable_type', 'voteable_id']);
            $table->unsignedInteger('score')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
