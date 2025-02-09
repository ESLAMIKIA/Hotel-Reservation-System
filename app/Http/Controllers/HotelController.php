<?php
namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return response()->json($hotels);
    }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $hotelData = $request->only(['name', 'location', 'description']);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('hotels', 'public');
        $hotelData['image'] = $imagePath;
    }

    $hotel = Hotel::create($hotelData);

    return response()->json($hotel, 201);
}

    public function show($id)
    {
        $hotel = Hotel::find($id);

        if (!$hotel) {
            return response()->json(['message' => 'Hotel not found'], 404);
        }

        return response()->json($hotel);
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        if (!$hotel) {
            return response()->json(['message' => 'Hotel not found'], 404);
        }
    
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);
    
        $hotel->update($request->only(['name', 'location', 'description']));
    
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($hotel->image);
            $imagePath = $request->file('image')->store('hotels', 'public');
            $hotel->image = $imagePath;
        }
    
        $hotel->save();
    
        return response()->json($hotel, 200);
    }
    
    

    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        if (!$hotel) {
            return response()->json(['message' => 'Hotel not found'], 404);
        }
        // delete image from storage
    if ($hotel->image) {
        Storage::disk('public')->delete($hotel->image);
    }
    

    
        $hotel->delete();
        return response()->json(['message' => 'The hotel was successfully removed'], 200);
    }
    
}
