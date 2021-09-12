<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstAliyahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_aliyahs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('first_aliyahs');
    }
}
