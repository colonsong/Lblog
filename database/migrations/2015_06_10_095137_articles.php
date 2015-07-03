<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Articles extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      //
      Schema::create('articles',function($table)
      {
        $table->increments('id')->unique();
        //預設不允許NULL
        $table->string('title',100);
        $table->text('contents',100);

        //加入 created_at 和 updated_at 欄位
        $table->timestamps();
        //宣告一個timestamp型態的published_at 欄位
        $table->timestamp('published_at');


      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      //
      Schema::drop('articles');
  }
}
