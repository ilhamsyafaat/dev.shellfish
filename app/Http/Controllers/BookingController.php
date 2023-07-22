<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Booking::all();
        return view('admin/booking/view',compact('data'));
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
        $data = new Booking();
        $data->firstname        = $request->firstname;
        $data->lastname        = $request->lastname;
        $data->start        = $request->start;
        $data->end        = $request->end;
        $data->participant        = $request->participant;
        $data->country        = $request->country;
        $data->email        = $request->email;
        $data->phone        = $request->phone;
        $data->message        = $request->message;
        $data->save();
        return view('user/alert');
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
        //
    }
}
