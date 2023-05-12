<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class AvailableRoom extends Controller
{
    public function index(){
        $rooms = Room::all()->where('status', '=', '0');
        return view('available.index')->with('rooms', $rooms);
    }
}
