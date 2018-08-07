<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id');
            $table->foreign('article_id')
            ->references('id')->on('articles');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('import');
            $table->unsignedInteger('sale_price');
            $table->unsignedInteger('sale_id');
            $table->foreign('sale_id')
            ->references('id')->on('sales');
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
        Schema::dropIfExists('detail_sales');
    }
}
