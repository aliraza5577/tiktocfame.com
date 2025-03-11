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
        Schema::create('custom_quote', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->integer('length')->nullable();
            $table->string('quantity');
            $table->integer('width')->nullable();
            $table->integer('dimension')->nullable();
            $table->string('scale')->nullable();
            $table->string('color')->nullable();
            $table->string('image')->nullable();
            $table->text('message')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_quote');
    }
};
