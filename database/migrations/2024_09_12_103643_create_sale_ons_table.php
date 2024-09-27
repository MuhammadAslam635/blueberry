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

        Schema::create('sale_ons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->double('discount');
            $table->enum('type', ["fixed","percentage"]);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ["active","inactive"]);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_ons');
    }
};
