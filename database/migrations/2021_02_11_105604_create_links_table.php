<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->unsignedBigInteger('linkable_id');
            $table->string('linkable_type');
            $table->enum('icon', ['icofont-twitter', 'icofont-facebook' , 'icofont-instagram' , 'icofont-linkedin' , 'icofont-skype'])->nullable();
            $table->enum('s_icon', ['bxl-twitter','bxl-facebook','bxl-instagram','bxl-linkedin','bxl-skype'])->nullable();
            
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
        Schema::dropIfExists('links');
    }
}
