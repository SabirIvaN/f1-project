<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('address');
            $table->text('comment');
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
        Schema::dropIfExists('orders');
    }
}
