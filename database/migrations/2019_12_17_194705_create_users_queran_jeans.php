<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersQueranJeans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //$table->bigIncrements('id');
            //$table->string('name');
            $table->string('surname');
            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            $table->string('avatar');
            $table->string('question');
            $table->string('answer');
            $table->tinyInteger('sex_id');
            $table->tinyInteger('mailing');
            $table->date('date_of_birth');
            //$table->rememberToken();
            //$table->timestamps();
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
            //$table->bigIncrements('id');
            //$table->string('name');
            $table->dropColumn('surname');
            //$table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            //$table->string('password');
            $table->dropColumn('avatar');
            $table->dropColumn('question');
            $table->dropColumn('answer');
            $table->dropColumn('sex_id');
            $table->dropColumn('mailing');
            $table->dropColumn('date_of_birth');
            //$table->rememberToken();
            //$table->timestamps();
        });
    }
}
