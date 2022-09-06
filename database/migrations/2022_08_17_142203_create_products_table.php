<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug');
            $table->text('sdescription')->nullable();
            $table->text('description')->nullable();
            $table->text('tags')->nullable();
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->integer('quantity')->default(1);
            $table->integer('price');
            $table->integer('offerprice')->nullable();
            $table->integer('featured')->default(2)->comment('1 = yes, 2 = no');
            $table->integer('status')->default(2)->comment('1 = Active, 2 = Inactive');
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
        Schema::dropIfExists('products');
    }
};
