<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
//     public function up()
// {
//     Schema::create('rooms', function (Blueprint $table) {
//         $table->id();
//         $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
//         $table->string('room_type');
//         $table->decimal('price', 10, 2);
//         $table->integer('capacity');
//         $table->boolean('availability')->default(true);
//         $table->timestamps();
//     });
// }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
