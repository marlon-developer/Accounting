<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_accounts', function (Blueprint $table) {
            $table->bigIncrements('id', true)->unsigned();
            $table->string('pa_type', 250)->nullable();
            $table->string('pa_subtype', 250)->nullable();
            $table->string('pa_desc', 250)->nullable();
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
        Schema::dropIfExists('plan_accounts');
    }
}
