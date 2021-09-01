<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSelectedWordsToEnglishWordPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('english_word_posts', function (Blueprint $table) {
            $table->string('selected_words'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('english_word_posts', function (Blueprint $table) {
            $table->string('selected_words'); 
        });
    }
}
