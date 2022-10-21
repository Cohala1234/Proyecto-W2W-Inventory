<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workOrders', function (Blueprint $table) {
            $table->id();
            $table->string('workName');
            $table->timestamps();

            $table->foreignId('orderType_id')->constrained();
            $table->foreignId('subClient_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workOrders');
    }
};
