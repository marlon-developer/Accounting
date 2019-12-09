<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanBalanceSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_sheets', function (Blueprint $table) {
            $table->increments('id', true)->unsigned();

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->string('bs_desc', 250);
            $table->float('bs_value');
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
        Schema::dropIfExists('plan_balance_sheets');
    }
}
