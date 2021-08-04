<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventThingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_things', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events');
            $table->unsignedBigInteger('thing_id');
            $table->foreign('thing_id')->references('id')->on('things');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_things');
        Schema::table('event_things', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('event_id');
            $table->dropForeign('event_things_event_id_foreign');
            $table->dropColumn('thing_id');
            $table->dropForeign('event_things_thing_id_foreign');
        });
    }
}
