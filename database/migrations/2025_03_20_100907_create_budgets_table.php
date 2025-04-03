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
        Schema::create('budget', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->decimal('limit', 10, 2); // User's saving limit
<<<<<<< HEAD
            $table->decimal('Saving', 10, 2); // Actual savings
=======
            $table->decimal('saving', 10, 2); // Actual savings
>>>>>>> 936f57d7ecc95318b59b7097ee245bc94d7ae8f4
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
