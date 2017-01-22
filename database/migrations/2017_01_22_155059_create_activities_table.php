<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
             $table->string('act_no', 6)->nullable();       //活動編號
            $table->string('act_name', 60)->nullable();  //活動名稱
            $table->date('act_beg_date')->nullable();  //活動開始日期
            $table->date('act_end_date')->nullable();      //活動結束日期
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
