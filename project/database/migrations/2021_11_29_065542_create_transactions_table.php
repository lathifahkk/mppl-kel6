<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('mobile');
            $table->string('address1');
            $table->string('address2');
            $table->string('province');
            $table->string('city');
            $table->integer('postalcode');
            $table->integer('amount');
            $table->decimal('totalprice',50,2);
            $table->unsignedBigInteger('id_products');

            //FK
            $table->foreign('id_products')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
