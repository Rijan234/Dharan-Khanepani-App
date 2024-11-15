<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            // Set customer_id as the primary and auto-increment field.
    $table->unsignedBigInteger('customer_id')->primary()->autoIncrement();

    $table->string('customer_first_name');
    $table->string('customer_last_name');
    $table->string('phone_number');
    $table->unsignedBigInteger('meter_id');
    $table->enum('ward_no', ['Ward-7', 'Ward-8', 'Ward-15']);
    $table->string('tole');
    $table->string('customer_photo')->nullable();
    $table->longText('api_token')->nullable();
    $table->timestamps();
        });

        // Set the initial value for customer_id to start from 1000
        DB::statement('ALTER TABLE customers AUTO_INCREMENT = 1000;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
