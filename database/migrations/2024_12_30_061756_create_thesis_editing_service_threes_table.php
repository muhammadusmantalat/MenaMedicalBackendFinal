<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThesisEditingServiceThreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thesis_editing_service_threes', function (Blueprint $table) {
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
        Schema::dropIfExists('thesis_editing_service_threes');
    }
}
