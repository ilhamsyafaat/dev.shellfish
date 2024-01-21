<?php

namespace App\Http\Controllers;

use App\Exports\ExportBooking;
use App\Models\Booking;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class BookingController extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Booking::paginate(5)->withQueryString();
        return view('admin/booking/view', compact('data'));
    }

    /**
     * Show the form for searching a data.
     */
    public function search(Request $request)
    {
        $search = $request->search;
        $data = Booking::where('firstname', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orWhere('country', 'LIKE', '%' . $search . '%')
            ->orWhere('phone', 'LIKE', '%' . $search . '%')
            ->orWhere('start', 'LIKE', '%' . $search . '%')->paginate(5)->withQueryString();

        return view('admin/booking/view', compact('data', 'search'));
    }

    /**
     * Show the form for export a data.
     */
    public function export_excel()
    {
        return Excel::download(new ExportBooking, "booking.xlsx");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Booking();
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->start = $request->start;
        $data->end = $request->end;
        $data->participant = $request->participant;
        $data->country = $request->country;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
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
        $data = Booking::find($id);
        return view('admin.booking.detail', compact('data'));
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
        $data = Booking::find($id);
        $data->delete();
        return redirect()->route('view.booking');
    }
}
