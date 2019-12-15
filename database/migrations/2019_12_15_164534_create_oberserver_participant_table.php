<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOberserverParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oberserver_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('observer_id');
            $table->bigInteger('parcipant_id');
            $table->integer('session');
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
        Schema::dropIfExists('oberserver_user');
    }
}
