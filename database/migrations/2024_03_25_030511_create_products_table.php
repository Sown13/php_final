<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('product_name');
            $table->string('product_img');
            $table->double('price', 15, 2)->unsigned()->default(1);
            $table->unsignedBigInteger('quantity')->default(1);
            //use text in php make db create nvarchar at max size
            $table->text('description');
            $table->unsignedInteger('sale_price')->default(0);
            $table->boolean('is_active')->default(false);
            $table->string('type', 255);

            // DB::statement('ALTER TABLE products ADD CONSTRAINT check_price CHECK (price > 0)');

            // // Check constraint for sale_price <= 100
            // DB::statement('ALTER TABLE products ADD CONSTRAINT check_sale CHECK (sale_price <= 100)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
