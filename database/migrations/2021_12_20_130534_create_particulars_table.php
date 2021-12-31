<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particulars', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable()->default('nothing');
            $table->string('surname', 50)->nullable()->default('nothing');
            $table->string('adresse', 50)->nullable()->default('nothing');
            $table->string('tel', 20)->nullable()->default('0620446100');
            $table->string('choice', 50)->nullable()->default('nothing');
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
        Schema::dropIfExists('particulars');
    }
}
