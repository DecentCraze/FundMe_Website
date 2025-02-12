<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAuthTable extends Migration
{
    public function up()
    {
        Schema::create('auth_db', function (Blueprint $table) {
            $table->id();
            $table->string('Name', 100);
            $table->string('Email', 100)->unique();
            $table->string('Password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auth_db');
    }
}
