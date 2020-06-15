<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->integer('quantity')->unsigned();
            $table->timestamps();
        });
    }
    /*
    SELECT
   order_product.quantity,products.name,products.image,products.price,orders.billing_email,orders.billing_name,orders.billing_city,orders.billing_phone
FROM
    `order_product`
INNER JOIN products on products.id = order_product.product_id
Inner JOIN orders on order_product.order_id = orders.id

    */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
