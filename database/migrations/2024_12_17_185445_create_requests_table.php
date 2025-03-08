<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->integer('order_number');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('pay_method_id');
            $table->decimal('purchase_price', 8, 2);
            $table->dateTime('date');
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->boolean('read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
