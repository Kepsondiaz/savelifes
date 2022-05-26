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
        Schema::create('donneurs__alertes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donneur_id')->constrained('donneurs');
            $table->foreignId('alerte°')->constrained('donneurs');
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
        Schema::dropIfExists('donneurs__alertes');
    }
};
