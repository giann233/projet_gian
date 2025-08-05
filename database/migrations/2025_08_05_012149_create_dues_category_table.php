<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dues_category', function (Blueprint $table) {
            $table->id();
            $table->enum('period', ['mingguan', 'bulanan', 'tahunan']);
            $table->decimal('nominal', 12, 2);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dues_category');
    }
};
