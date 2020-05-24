<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayAsYouGoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_as_you_go', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->string('token');
            $table->integer('request_count')->default(0);
            $table->date('due_date')->default(today());
            $table->timestamp('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pay_as_you_gos');
    }
}
