<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',
                ["qq","wechat","wechat_qrcode",'email','phone','mobile','text', 'link']
            )->default('text')->comment('联系方式类型');
            $table->string('title')->comment('标题');
            $table->string('value')->comment('值');
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
        Schema::dropIfExists('website_contact');
    }
}
