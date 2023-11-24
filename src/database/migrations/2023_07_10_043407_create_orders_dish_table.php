<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dish_menu_order', function (Blueprint $table) {
            $table->uuid('menu_id');
            $table->uuid('order_id');
            $table->uuid('dish_id');
            $table
                ->foreign('menu_id')
                ->references('id')
                ->on('menus')
                ->onDelete('cascade');
            $table
                ->foreign('dish_id')
                ->references('id')
                ->on('dishes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_menu_order');
    }
};