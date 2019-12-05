<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_accounts', function (Blueprint $table) {
            $table->bigIncrements('plan_accounts_id')->unsigned();
            $table->string('pa_type_id', 7)->nullable();
            $table->string('pa_type', 7)->nullable();
            $table->string('pa_subtype', 7)->nullable();
            $table->string('pa_desc', 250)->nullable();
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
        Schema::dropIfExists('plan_account');
    }
}
