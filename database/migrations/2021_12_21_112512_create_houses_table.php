<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->default('nom');
            $table->string('city', 50)->default('city');
            $table->string('tel', 50)->default('tel');
            $table->integer('chambre')->default(1);
            $table->integer('salon')->default(1);
            $table->integer('douche')->default(1);
            $table->integer('cuisine')->default(1);
            $table->integer('price')->default(2000);
            $table->string('mode', 50)->default('LOUER');
            $table->text('description')->default('...');
            $table->string('photo', 100);            
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
        Schema::dropIfExists('houses');
    }
}
