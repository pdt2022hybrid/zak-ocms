<?php namespace Zak\Test\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('zak_test_posts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('title'); //kokot to si sem ty dal 

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zak_test_posts');
    }
}
