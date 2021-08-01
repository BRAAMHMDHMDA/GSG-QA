<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('body');
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete();
            $table->unsignedInteger('views')->default('0'); // 4294967295 (unsigned Int)
            $table->unsignedInteger('score')->default('0');
            $table->enum('status',['draft' ,'active']);
            $table->boolean('solved')->default('0');
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
        Schema::dropIfExists('questions');
    }
}
