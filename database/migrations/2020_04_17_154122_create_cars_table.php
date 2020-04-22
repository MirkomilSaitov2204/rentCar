<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('vehicle_id')->unsigned();
            $table->string('name');

            $table->float('start_value');
            $table->float('current_value');
            $table->float('rent_price');
            $table->float('ev_range')->nullable();
            $table->float('max_speed')->nullable();
            $table->float('max_range')->nullable();
            $table->float('weight')->nullable();

            // $table->string('color');
            $table->enum('type', ['SYNS Light', 'SYNS Pro'])->default('SYNS Light');

            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->foreign('vehicle_id')->references('id')->on('vehicles')
                    ->onUpdate('cascade')->onDelete('cascade');


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
        Schema::dropIfExists('cars');
    }
}
