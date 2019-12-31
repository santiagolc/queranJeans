<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('users', function (Blueprint $table) {
            $avatar = "foto".rand(1,3).".png"; 
            $table->string('surname');
            $table->string('question');
            $table->string('answer');
            $table->string('avatar')->default($avatar);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('question');
            $table->dropColumn('answer');
            $table->string('avatar')->default($avatar);
        });
    }
}
