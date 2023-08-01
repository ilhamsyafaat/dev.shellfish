<?php

namespace App\Http\Controllers;

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
}
