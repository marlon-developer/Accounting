<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanBalanceSheetResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_sheet_results', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('balance_sheets_id')->unsigned();
            $table->foreign('balance_sheets_id')->references('id')->on('balance_sheets')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->float('bs_current_act')->nullable();
            $table->float('bs_noncurrent_act')->nullable();
            $table->float('bs_current_psv')->nullable();
            $table->float('bs_noncurrent_psv')->nullable();
            $table->float('bs_patrimony_liquid')->nullable();
            $table->float('bs_total_act')->nullable();
            $table->float('bs_total_psv')->nullable();
            $table->float('bs_debit')->nullable();
            $table->float('bs_credit')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_balance_sheet_results');
    }
}
