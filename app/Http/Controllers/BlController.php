<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BlController extends Controller
{
    public function index()
    {
        return response()->json(Booking::with(['user', 'hotel'])->get());
    }
}
