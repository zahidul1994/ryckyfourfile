<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawbies', function (Blueprint $table) {
            $table->id();
            $table->string('withdrawby')->unique();
            $table->string('phone')->nullable();
            $table->string('bankaccoutn')->nullable();
            $table->string('branch')->nullable();
            $table->string('banktype')->nullable();
            $table->string('note',500)->nullable();
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
        Schema::dropIfExists('withdrawbies');
    }
}
