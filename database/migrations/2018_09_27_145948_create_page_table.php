<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('page',['banner','about-us','example','solutions','contact','join-us','footer'])->comment('页面');
            $table->string('title')->default('Page Title')->comment('标题');
            $table->string('title-animation-in')->defalut('fadeInUp');
            $table->string('title-animation-out')->defalut('fadeOutUp');
            $table->string('title-animation-delay')->nullable()->defalut(null);
            $table->string('title-animation-duration')->nullable()->defalut(null);
            $table->string('description')->default('Description')->comment('描述');
            $table->string('desc-animation-in')->defalut('fadeInUp');
            $table->string('desc-animation-out')->defalut('fadeOutUp');
            $table->string('desc-animation-delay')->nullable()->defalut(null);
            $table->string('desc-animation-duration')->nullable()->defalut(null);
            $table->string('content')->nullable()->default(null)->comment('描述');
            $table->string('content-animation-in')->defalut('fadeInUp');
            $table->string('content-animation-out')->defalut('fadeOutUp');
            $table->string('content-animation-delay')->nullable()->defalut(null);
            $table->string('content-animation-duration')->nullable()->defalut(null);
            $table->enum('background-type',['image','color'])->defalut('image');
            $table->string('background')->nullable();
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
        Schema::dropIfExists('page');
    }
}
