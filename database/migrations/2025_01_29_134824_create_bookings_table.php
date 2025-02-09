<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    // public function up()
    // {
    //     Schema::create('bookings', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('user_id')->constrained()->onDelete('cascade');
    //         $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
    //         $table->date('check_in');
    //         $table->date('check_out');
    //         $table->integer('guests')->default(1);
    //         $table->timestamps();
    //     });
    // }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};

