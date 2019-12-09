<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceSheetResultsTable extends Migration
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
            $table->float('bsr_current_act')->nullable();
            $table->float('bsr_noncurrent_act')->nullable();
            $table->float('bsr_current_psv')->nullable();
            $table->float('bsr_noncurrent_psv')->nullable();
            $table->float('bsr_patrimony_liquid')->nullable();
            $table->float('bsr_total_act')->nullable();
            $table->float('bsr_total_psv')->nullable();
            $table->float('bsr_debit')->nullable();
            $table->float('bsr_credit')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // FK
            $table->foreign('balance_sheets_id')
                ->references('id')
                ->on('balance_sheets')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance_sheet_results');
    }
}
