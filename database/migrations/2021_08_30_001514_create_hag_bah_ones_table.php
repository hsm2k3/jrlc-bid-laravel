<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHagBahOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hag_bah_ones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('aliyah');
            $table->string('designation')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('comment')->nullable();
            $table->decimal('amount');
            $table->foreignId('holiday_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hag_bah_ones');
    }
}
