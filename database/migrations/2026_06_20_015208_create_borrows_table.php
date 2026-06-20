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
    Schema::create('borrows', function (Blueprint $table) {
        $table->id();
        $table->string('student_name');
        $table->string('student_code');
        $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
        $table->date('borrow_date');
        $table->date('return_date')->nullable();
        $table->string('status')->default('borrowing');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
