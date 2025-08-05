<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('iduser')->constrained('users')->onDelete('cascade');
            $table->foreignId('idduescategory')->constrained('dues_category')->onDelete('cascade');
            $table->foreignId('petugas')->constrained('officers')->onDelete('cascade');
            $table->date('period');
            $table->decimal('nominal', 12, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
