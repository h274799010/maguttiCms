<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain', 255);
            $table->date('date');
            $table->string('title', 255);
            $table->text('description');
            $table->string('slug', 255)->nullable();
            $table->string('doc', 255);
            $table->string('image', 255);
            $table->text('video')->comment('elenco di video separata da;');
            $table->string('link', 255)->nullable();
            $table->integer('sort');
            $table->tinyInteger('pub')->nullable()->default(1);
            $table->integer('created_by');
            $table->timestamps();
            $table->string('lang', 4)->nullable();
            $table->string('subtitle', 255)->nullable();
            $table->string('intro', 255)->nullable();
            $table->string('abstract', 255);
            $table->string('banner', 255);

            

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
