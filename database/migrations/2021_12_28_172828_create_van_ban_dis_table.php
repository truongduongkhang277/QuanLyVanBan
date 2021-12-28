<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVanBanDisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_ban_di', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('so_vb_di');
            $table->string('ki_hieu');
            $table->date('ngay_gui');
            $table->integer('so_trang');
            $table->integer('so_luong');
            $table->string('trich_yeu');
            $table->text('ds_file');
            $table->date('han_xu_ly');
            $table->string('trang_thai')->default(0);            
            $table->string('ghi_chu')->nullable();
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
        Schema::dropIfExists('van_ban_di');
    }
}
