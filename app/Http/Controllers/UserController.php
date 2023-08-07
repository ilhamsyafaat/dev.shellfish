<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Destination;
use App\Models\DestinationFoto;
use App\Models\SpecialOffer;
use App\Models\Transportation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Transportation() {
        $data = Transportation::all();
        return view('user.transportation', compact('data'));
    }
    public function Detail_Transportation(string $id) {
        $data = Transportation::find($id);
        return view('user.detail-transportation', compact('data'));
    }
 
    public function Detail_Destination(string $id) {
        $data = Destination::findOrFail($id);
        return view('user.detail-destination', compact('data'));
    }
    public function Destination() {
        $data = City::with('items')->get();
       
        return view('user.destination', compact('data'));
    }
    public function Special() {
        $data = SpecialOffer::all();
       
        return view('user.special', compact('data'));
    }
}
