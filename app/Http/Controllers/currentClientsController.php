<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Room;
use Illuminate\Http\Request;

class currentClientsController extends Controller
{
    //
    public function index(){
        $clients = Client::all()->where('status', '=', '1');
        return view('currentClients.index')->with('clients', $clients);
    }
    public function destroy(Request $request, $id){
        $updateDetails = Room::where('room_no', '=', $id)->first();
        $updateDetails->status = 0;
        $updateDetails->save();

        $updateDetails = Client::where('room_no', '=', $id)->first();
        $updateDetails->status = 0;
        $updateDetails->save();
        $request->session()->flash('status', 'Exit successfully');
        $clients = Client::all()->where('status', '=', '1');
        // dd($clients);
        return view('currentClients.index')->with('clients', $clients);
    }
}
