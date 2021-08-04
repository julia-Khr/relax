<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->date('start_date');
            $table->date('finish_date');
            $table->unsignedBigInteger('enterprise_id');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('name');
            $table->dropColumn('description');
            $table->dropColumn('start_date');
            $table->dropColumn('finish_date');
            $table->dropColumn('enterprise_id');
            $table->dropForeign('events_enterprise_id_foreign');
        });
    }
}
