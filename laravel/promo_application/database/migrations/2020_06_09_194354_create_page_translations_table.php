<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_translations', function (Blueprint $table) {
                    // mandatory fields
            $table->bigIncrements('id'); // Laravel 5.8+ use bigIncrements() instead of increments()
            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unsignedInteger('page_id');
            $table->unique(['page_id', 'locale']);
            $table->foreign('id')->references('id')->on('pages')->onDelete('cascade');

            // Actual fields you want to translate
            $table->string('page_title');
            $table->text('page_intro');

            $table->string('section_title');
            $table->text('content');
            
            $table->string('button_text');
            $table->string('button_link')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_translations');
    }
}
