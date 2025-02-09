<?php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return response()->json(Room::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'room_type' => 'required|string',
            'price' => 'required|numeric',
            'capacity' => 'required|integer',
            'availability' => 'required|boolean'
        ]);

        $room = Room::create($request->all());
        return response()->json($room, 201);
    }

    public function show($id)
    {
        return response()->json(Room::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        $room->update($request->all());
        return response()->json($room, 200);
    }

    public function destroy($id)
    {
        Room::findOrFail($id)->delete();
        return response()->json(['message' => 'Room deleted'], 200);
    }
}
