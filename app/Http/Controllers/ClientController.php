<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Room;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        $clients = Client::where('status', '=', '0')
                            ->orWhere('status', '=', '1')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(6);
        return view('clients.index')->with('clients', $clients);
    }
    public function create(){
        $rooms = Room::all()->where('status', '=', '0');
        return view('clients.create')->with('rooms', $rooms);
    }
    public function store(Request $request){
        {
            $validateData = $request->validate([
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'room_no' => 'required',
                // 'price' => 'required'
            ]);
            try {
                $c = Client::create($validateData);
                $room = $c->room_no;
                $updateDetails = Room::where('room_no', '=', $room)->first();
                $updateDetails->status = 1;
                $updateDetails->save();
                $request->session()->flash('status', 'New Client added successfully');
                return redirect()->route('currentClients.index');
            }
            catch(\Exception $e) {
                $request->session()->flash('status', 'New Client added failed');
                return redirect()->route('clients.create');
            }
        }
    }
}
