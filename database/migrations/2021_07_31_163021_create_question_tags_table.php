<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_tags', function (Blueprint $table) {
            $table->foreignId('question_id')->constrained('questions','id');
            $table->foreignId('tag_id')->constrained('tags','id');
            $table->primary(['question_id','tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_tags');
    }
}
