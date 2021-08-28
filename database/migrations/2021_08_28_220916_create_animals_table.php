<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->double('initial_weight')->nullable();
            $table->double('initial_price')->nullable();
            $table->date('purchased_date');
            $table->string('purchased_from');
            $table->date('born_date')->nullable();
            $table->date('sell_date')->nullable();
            $table->double('sell_weight')->nullable();
            $table->double('sell_price')->nullable();

            //indexes
            $table->unsignedBigInteger('animal_type_id')->nullable();
            $table->foreign('animal_type_id')->references('id')->on('animal_types')->onDelete('set null');

            $table->unsignedBigInteger('color_id')->nullable();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('set null');

            $table->unsignedBigInteger('deal_type_id')->nullable();
            $table->foreign('deal_type_id')->references('id')->on('deal_types')->onDelete('set null');

            $table->unsignedBigInteger('breed_id')->nullable();
            $table->foreign('breed_id')->references('id')->on('breeds')->onDelete('set null');

            $table->unsignedBigInteger('paddock_id')->nullable();
            $table->foreign('paddock_id')->references('id')->on('paddocks')->onDelete('set null');
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
        Schema::dropIfExists('animals');
    }
}
