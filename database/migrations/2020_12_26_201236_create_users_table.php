<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->string('first_name');
            $table->string('email');
            $table->string('password');



            $table->foreignID('jury_id')->nullable()->constrained('jurys');
            $table->foreignID('entreprise_id')->nullable()->constrained('entreprises');
            $table->foreignID('tuteur_id')->nullable()->constrained('tuteurs');
            $table->foreignID('students_id')->nullable()->constrained('students');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
