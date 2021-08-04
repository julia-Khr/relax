<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('avatar');
            $table->text('text');
            $table->timestamp('date');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
        Schema::table('responses', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('author');
            $table->dropColumn('avatar');
            $table->dropColumn('text');
            $table->dropColumn('date');
            $table->dropColumn('event_id');
            $table->dropForeign('responses_event_id_foreign');
        });
    }
}
