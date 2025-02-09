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
//     Schema::create('reservations', function (Blueprint $table) {
//         $table->id();
//         $table->foreignId('user_id')->constrained()->onDelete('cascade');
//         $table->foreignId('room_id')->constrained()->onDelete('cascade');
//         $table->date('check_in_date');
//         $table->date('check_out_date');
//         $table->decimal('total_price', 10, 2);
//         $table->string('status')->default('pending');
//         $table->timestamps();
//     });
// }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
