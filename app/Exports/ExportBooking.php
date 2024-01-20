<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Illuminate\Contracts\View\View;

class ExportBooking implements FromCollection
{
    
    public function collection()
    {
        return Booking::all();
        // return view('admin/booking/view', ['data' => $data]);
        // return view('admin/booking/view', compact('data'));
    }
}
