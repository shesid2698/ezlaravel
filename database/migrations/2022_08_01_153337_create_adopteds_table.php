<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopteds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('adid', 50);
            $table->string('adname', 50);
            $table->integer('admoney');
            $table->string('remark', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adopteds');
    }
}