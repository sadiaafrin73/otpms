<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->constrained('users')->onUpdate('cascade')
            ->onDelete('cascade');
        
            $table->string('name_id');
            $table->string('group_id');
            $table->string('classnumber_id');
            $table->string('comments_id')->nullable();
            $table->string('schedule_day');
            $table->string('schedule_time');
            $table->string('address');
            $table->string('tution_duration');
            $table->string('tution_fee');

            $table->string('is_approved')->nullable();
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
        Schema::dropIfExists('tutions');
    }
}
