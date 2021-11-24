<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('筆電');
            $table->integer('vid')->unsigned()->comment('廠商');
            $table->string('graphics_card')->comment('顯示卡');
            $table->tinyInteger('size')->unsigned()->comment('尺寸');
            $table->string('cpu')->comment('中央處理器');
            $table->tinyInteger('price')->unsigned()->comment('價格');
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
        Schema::dropIfExists('laptops');
    }
}
