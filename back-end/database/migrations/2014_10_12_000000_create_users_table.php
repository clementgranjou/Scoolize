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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_name');
            $table->string('littledescription');
            $table->string('bigdescription');
            $table->string('link');
            $table->rememberToken();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('bulletin');
            $table->string('motivation');
            $table->string('results');
            $table->string('personnality');
            $table->string('otheractivities');
            $table->rememberToken();
        });

        Schema::create('formation', function (Blueprint $table) {
            $table->id();
            $table->string('formation_name');
            $table->string('school_name');
            $table->string('formation_type');
            $table->string('department');
            $table->string('long_formation_name');
            $table->rememberToken();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('event_name');
            $table->string('adress');
            $table->string('hour');
            $table->rememberToken();
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
