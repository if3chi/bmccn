<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreativeWritingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creative_writings', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 32);
            $table->string('lastname', 32);
            $table->string('phone');
            $table->string('email');
            $table->integer('age');
            $table->string('title');
            $table->longText('essay');
            $table->softDeletes();
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
        Schema::dropIfExists('creative_writings');
    }
}
