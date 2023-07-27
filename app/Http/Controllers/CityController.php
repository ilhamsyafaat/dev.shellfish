<?php

namespace App\Http\Controllers;

use App\Models\City;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = City::all();
        return view('admin.destination.add_city', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new City();
        $data->city = $request->city;
        $data->save();
        return redirect()->back()->withSuccess('Data successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = City::find($id);
        $data->delete();
        return redirect()->back();
    }
}
