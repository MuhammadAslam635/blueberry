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

        Schema::create('payment_modules', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ["cod","strip","jazzcash","easypaisa","whatsapp"]);
            $table->enum('status', ["active","inactive"]);
            $table->enum('mode', ["test","live"]);
            $table->string('module_key')->nullable();
            $table->string('module_secret')->nullable();
            $table->string('merchant_id')->nullable();
            $table->string('module_password')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_modules');
    }
};
