<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('perfectmoneyuserid');
            $table->string('amount');
            $table->string('bitcoinaddress');
            $table->string('advcash');
            $table->string('cashemail');
            $table->string('JazzCashName');
            $table->string('JazzCashphone');
            $table->string('paisaName');
            $table->string('easypaisaphone');
            $table->string('skrillmail');
            $table->string('payeeremail');
            $table->string('platform');
            $table->string('app');
            $table->string('del');
           
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
        Schema::dropIfExists('withdraws');
    }
}
