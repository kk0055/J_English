<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSelectedWordsToJapaneseWordPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('japanese_word_posts', function (Blueprint $table) {
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
        Schema::table('japanese_word_posts', function (Blueprint $table) {
            $table->string('selected_words'); 
        });
    }
}
