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
            $table->increments('id');
            $table->integer('item_types_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            // FK
            $table->foreign('item_types_id')->references('id')->on('item_types')
                ->onUpdate('cascade')->onDelete('cascade');
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
