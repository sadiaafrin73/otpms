<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutionlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutionlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->constrained('users')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('student_id')->constrained('users')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('tution_id');
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
        Schema::dropIfExists('tutionlists');
    }
}
