<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->nullable()->constrained();
            $table->foreignId('sub_category_id')->constrained();
            $table->string('name');
            $table->string('slug')->unique();
            $table->double('price', 10, 2);
            $table->double('sale_price', 8, 2);
            $table->integer('qty');
            $table->integer('sale_qty');
            $table->string('sku')->nullable();
            $table->enum('stock', ["in","out"]);
            $table->string('closure')->nullable();
            $table->string('sole')->nullable();
            $table->text('detail')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ["active","inactive"]);
            $table->json('gallery')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
