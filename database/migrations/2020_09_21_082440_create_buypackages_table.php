<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuypackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buypackages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('PackageName');
            $table->string('Packageprice');
            $table->string('platform');
            $table->string('Transactionid');
            $table->string('app')->nullable();
            $table->string('del')->nullable();
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
        Schema::dropIfExists('buypackages');
    }
}
