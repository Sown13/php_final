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
    public function up()
    {
        DB::statement('ALTER TABLE products ADD CONSTRAINT check_price CHECK (price > 0)');

        // Check constraint for sale_price <= 100
        DB::statement('ALTER TABLE products ADD CONSTRAINT check_sale CHECK (sale_price <= 100)');
    }

    public function down()
    {
        DB::statement('ALTER TABLE products  DROP CONSTRAINT check_price');

        // Check constraint for sale_price <= 100
        DB::statement('ALTER TABLE products  DROP CONSTRAINT check_sale');
    }
};
