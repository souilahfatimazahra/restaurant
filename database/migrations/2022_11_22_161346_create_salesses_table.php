<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("servant_id")->unsigned();
            $table->integer("quantity");
            $table->decimal("total_price")->default(0);
            $table->decimal("tota_received")->default(0);
            $table->decimal("change")->default(0);
            $table->string("payment_type")->default("cash");
            $table->string("payment_status")->default("paid");
            $table->timestamps();
            $table->foreign('servant_id')
            ->references("id")
            ->on("servants")
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesses');
    }
}
