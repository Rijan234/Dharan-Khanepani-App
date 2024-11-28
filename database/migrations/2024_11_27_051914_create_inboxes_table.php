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
        Schema::create('inboxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->enum('issue_type',['complain','leakage','others']);
            $table->enum('status',['pending','follow-up','completed'])->nullable();
            $table->longText('description');
            $table->string('photo_path')->nullable();
            $table->time('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inboxes');
    }
};
