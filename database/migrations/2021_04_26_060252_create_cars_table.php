<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->enum('class',['Econom', 'Business', 'Premium', 'Busses & Minivans', 'Crossovers & SUVs']);
            $table->string('year');
            $table->string('engine');
            $table->enum('fuel',['Fuel', 'Diesel', 'Electric']);
            $table->enum('transmission',['Mechanic', 'Automatic']);
            $table->integer('price');
            $table->string('slug');
            $table->boolean('status')->default(0)->comment('0:passiv, 1:aktiv');
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
        Schema::dropIfExists('cars');
    }
}
