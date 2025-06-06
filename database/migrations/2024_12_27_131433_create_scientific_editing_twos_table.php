<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScientificEditingTwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scientific_editing_twos', function (Blueprint $table) {
            $table->id();
            $table->string('feature_title')->nullable();
            $table->longtext('feature')->nullable();
            $table->string('service_title')->nullable();
            $table->longtext('service')->nullable();
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
        Schema::dropIfExists('scientific_editing_twos');
    }
}
