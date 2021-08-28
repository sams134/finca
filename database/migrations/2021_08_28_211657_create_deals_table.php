<?php

use App\Models\Deal;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->string('deal_with',250);
            $table->enum('paid_status',[Deal::PAID_STATUS_PAID,
                                        Deal::PAID_STATUS_UNPAID,
                                        Deal::PAID_STATUS_HALFPAID,
                                        Deal::PAID_STATUS_GRANTED                            
            ])->default(Deal::PAID_STATUS_UNPAID);
            $table->enum('buy_sell',[Deal::DEAL_BUY,Deal::DEAL_SELL]);
            $table->date('execute_date');
            $table->date('paid_date');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('deals');
    }
}
