<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->double('cost');

            $table->unsignedBigInteger('workable_id');
            $table->string('workable_type');
            $table->string('done_by');
            $table->unsignedBigInteger('worker_id')->nullable();
            $table->date('execute_date');
            $table->date('date_paid')->nullable();
            $table->boolean('paid')->default(false);

            $table->foreign('worker_id')->references('id')->on('workers')->onDelete('set null');
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
        Schema::dropIfExists('works');
    }
}
