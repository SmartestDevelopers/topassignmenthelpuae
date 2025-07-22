<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdernowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordernows', function (Blueprint $table) {
            $table->id();
            $table->string('referencing');
            $table->string('subject');
            $table->string('academic_level');
            $table->string('word_count');
            $table->string('deadline', 50);
            $table->string('user_email');
            $table->string('country_code', 10);
            $table->string('phone', 20);
            $table->text('requirements')->nullable();
            $table->string('file_path')->nullable();
            $table->enum('status', ['pending', 'processed', 'completed', 'cancelled'])->default('pending');
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
        Schema::dropIfExists('ordernows');
    }
}
