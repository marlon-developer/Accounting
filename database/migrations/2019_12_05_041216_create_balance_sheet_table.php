<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceSheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_sheet', function (Blueprint $table) {
            $table->bigIncrements('id', true)->unsigned();
            $table->string('bs_company', 250)->nullable();
            $table->string('bs_type', 250)->nullable();
            $table->string('bs_subtype', 250)->nullable();
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
        Schema::dropIfExists('balance_sheet');
    }
}
