<?php

namespace App\Http\Controllers;

use App\Models\Surat_Cuti2021;
use App\Models\Surat_Cuti2022;
use App\Models\Surat_Cuti2023;

use Illuminate\Http\Request;

class SuratCutiController extends Controller
{
    // Surat Cuti

    public function indexSuratCuti2023(Request $request){
        
        $jumlahbaris = 10;
        $surat_cuti2023 = Surat_Cuti2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_cuti.2023', compact(['surat_cuti2023']));       
    }

    public function storeSuratCuti023(Request $request){
        
        Surat_Cuti2023::create($request->except(['_token', 'submit']));
        return redirect('/suratcuti2023');
    }

    public function indexSuratCuti2022(Request $request){
        
        $jumlahbaris = 10;
        $surat_cuti2022 = Surat_Cuti2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_cuti.2022', compact(['surat_cuti2022']));       
    }

    public function indexSuratCuti2021(Request $request){
        
        $jumlahbaris = 10;
        $surat_cuti2021 = Surat_Cuti2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_cuti.2021', compact(['surat_cuti2021']));       
    }
}