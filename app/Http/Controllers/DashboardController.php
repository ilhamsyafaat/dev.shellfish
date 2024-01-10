<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
         // $booking = Booking::count();
         $destination = Destination::count();
         $bulanIni = now()->format('Y-m');
         $tahunIni = now()->format('Y');
         $jumlahData = DB::table('booking')
             ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = '$bulanIni'")
             ->count();
         $jumlahDataTahun = DB::table('booking')
             ->whereRaw("DATE_FORMAT(created_at, '%Y') = '$tahunIni'")
             ->count();
         $year = Booking::select(DB::raw("DATE_FORMAT(created_at, '%Y') AS year"))
             ->GroupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
             ->OrderBy(DB::raw('created_at'))
             ->pluck('year');
 
         // $year = Booking::select(DB::raw("YEAR(created_at) as year"))
         //     ->pluck('year');
         $bulan = Booking::select(DB::raw("MONTHNAME(created_at) as bulan"))
             ->GroupBy(DB::raw('MONTHNAME(created_at)'))
             ->orderBy(DB::raw('MONTH(created_at)'))
             ->pluck('bulan');
         $bookingChart = Booking::select(DB::raw("MONTH(created_at) as bulan"), DB::raw("CAST(COUNT(*) AS SIGNED) as pendaftar"))
             ->groupBy(DB::raw("MONTH(created_at)"))
             ->orderBy('created_at')
             ->pluck('pendaftar', 'bulan');
         $results = DB::table('booking')
             ->select(
                 DB::raw("DATE_FORMAT(created_at, '%M') AS nama_bulan"),
                 DB::raw("DATE_FORMAT(created_at, '%Y') AS tahun"),
                 DB::raw("COUNT(*) AS daftar")
             )
             ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M'), DATE_FORMAT(created_at, '%Y')"))
             ->orderBy(DB::raw("Month(created_at)"))
             ->get();
 
         // $datavidio = vidio::select(DB::raw("COUNT(*) as jumlah"))
         //     ->count();
         // $dataevent = event::select(DB::raw("COUNT(*) as jumlah"))
         //     ->count();
         // $dataprestasi = prestasi::select(DB::raw("COUNT(*) as jumlah"))
         //     ->count();
         
         return view('admin.dashboard', compact('destination', 'jumlahData', 'jumlahDataTahun', 'bulan', 'bookingChart', 'results', 'year'));
    }
}
