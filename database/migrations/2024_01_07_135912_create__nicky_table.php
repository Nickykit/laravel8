<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNickyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nicky', function (Blueprint $table) {
                $table->date('Nongnine')->nullable();
                $table->string('Nongning')->nullable();
                $table->integer('Nongjane')->nullable();
                $table->float('Nongtob')->nullable();
                $table->text('Nongnook')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Nicky');
    }
}
