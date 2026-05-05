<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('showcases', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->unique();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->date('warranty_expiry');
            $table->string('compressor_type');
            $table->string('glass_spec');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('showcases');
    }
};