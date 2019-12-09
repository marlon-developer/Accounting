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
            $table->increments('id', true)->unsigned();

            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')
                ->onUpdate('cascade')->onDelete('cascade');

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
