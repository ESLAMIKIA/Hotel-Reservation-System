<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingList extends Controller
{
    public function index()
    {
        return response()->json(Booking::all());
    }
}
