<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInboxExplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inbox_explans', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->bigInteger('sender_id');
            $table->bigInteger('reciver_id');
            $table->bigInteger('third_party')->nullable();
            $table->bigInteger('assginee_id')->nullable();
            $table->longText('explan')->nullable();
            $table->integer('type_id')->nullable();
            $table->string('attachment_id')->nullable();
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
        Schema::dropIfExists('inbox_explans');
    }
}
