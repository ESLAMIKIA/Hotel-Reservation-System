<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use App\Models\Hotel;

class BookingController extends Controller
{
    public function bookHotel(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'check_in' => 'required|date|after:today',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer|min:1',
        ]);

        $booking = Booking::create([
            'user_id' => Auth::id(),
            'hotel_id' => $request->hotel_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'guests' => $request->guests,
        ]);

        return response()->json([
            'message' => 'The hotel was successfully booked!',
            'booking' => $booking
        ], 201);
    }

    public function getUserBookings()
    {
        $bookings = Booking::where('user_id', Auth::id())->with('hotel')->get();
        return response()->json($bookings);
    }
}
