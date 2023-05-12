<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Client;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //
    public function index() {
        $rooms = Room::all();
        return view('rooms.index')->with('rooms', $rooms);
    }
    public function create(){
        return view('rooms.create');
    }
    public function store(Request $request) {
        $validateData = $request->validate([
            'room_no' => 'required|unique:rooms',
            'price' => 'required',
            'people' => 'required|max:6'
        ]);
        try {
            $c = Room::create($validateData);
            $room = $c->room_no;
            $updateDetails = Room::where('room_no', '=', $room)->first();
            $updateDetails->status = 0;
            $updateDetails->save();
            $request->session()->flash('status', 'New Room added successfully');
            return redirect()->route('rooms.index');
        } catch(\Exception $e) {
            $request->session()->flash('status', 'New Room added failed');
            return redirect()->route('rooms.create');
        }
    }
    public function edit($id){
        $room = Room::findOrFail($id);
        return view('rooms.edit')->with('room', $room);
    }
    public function update(Request $request, $id){
        $room = Room::findOrFail($id);
        $client = Client::where('room_no', '=', $room->room_no);
        $validateData = $request->validate([
            'room_no' => 'required',
            'price' => 'required',
            'people' => 'required|max:6'
        ]);
        try {
            $room->fill($validateData);
            $client->update([
                'room_no' => $room->room_no,
            ]);
            $room->save();
            $request->session()->flash('status', 'Room updated successfully');
            return redirect()->route('rooms.index');
        } catch(\Exception $e) {
            $request->session()->flash('status', 'New Client added failed');
            return view('rooms.edit')->with('room', $room);
        }
    }
    public function destroy(Request $request, $id){
        $checkClient = Client::where('room_no', '=', $id)->first();
        // dd($checkClient);
        if ($checkClient == null or $checkClient->status==0) {
            $room = Room::where('room_no', '=', $id)->first();
            $room->delete();
            $request->session()->flash('status', 'Room deleted successfully');
            return redirect()->route('rooms.index');
        }
        if($checkClient->status==1){
            $request->session()->flash('status', 'Room deleted failed because room is using');
            return redirect()->route('rooms.index');
        }
    }
}
