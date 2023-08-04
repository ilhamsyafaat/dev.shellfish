<?php

namespace App\Http\Controllers;

use App\Models\Transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Ramsey\Uuid\v1;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transportation::all();
        return view('admin.transportation.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transportation.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Transportation();
        $data->name_transportation = $request->name_transportation;
        if ($request->hasFile('picture_transportation')) {
            $picture_transportation = $request->file('picture_transportation')->store('picture_transportation');
            $data->picture_transportation = $picture_transportation;
        }
        $data->price = $request->price;

        $data->details_description = $request->details_description;
        $data->save();
        return redirect()->route('list-transportation')->withSuccess('Data successfully added');
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
        $data = Transportation::find($id);
        return view('admin.transportation.detail',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Transportation::find($id);
        $data->name_transportation = $request->name_transportation;
        $data->price = $request->price;
  
        $data->details_description = $request->details_description;
        if ($request->hasFile('picture_transportation')) {
            Storage::delete($data->picture_transportation);
            $picture_transportation = $request->file('picture_transportation')->store('picture_transportation');
            $data->picture_transportation = $picture_transportation;
        }
        $data->update();
        return redirect()->route('list-transportation')->withSuccess('Data successfully edit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Transportation::find($id);
        if ($data->picture_transportation != null || $data->picture_transportation ='' ){
            Storage::delete($data->picture_transportation);
        }
        $data->delete();
        return redirect()->route('list-transportation');
    }
}
