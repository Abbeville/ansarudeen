<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->double('amount', 16, 8);
            $table->string('txref');
            $table->string('invoice_pin')->nullable();
            $table->string('flwref')->nullable();
            $table->string('type')->nullable();
            $table->string('fee_code')->nullable();
            $table->string('currency');
            $table->enum('status', ['success', 'pending', 'failed']);
            $table->string('chargecode')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('transactions');
    }
};
