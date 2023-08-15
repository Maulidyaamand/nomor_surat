<?php

namespace App\Http\Controllers;

use App\Models\Surat_Kakanwil2021;
use App\Models\Surat_Kakanwil2022;
use App\Models\Surat_Kakanwil2023;

use Illuminate\Http\Request;

class SuratKakanwilController extends Controller
{
    // Surat Kakanwil

    public function indexSuratKakanwil2023(Request $request){
        
        $jumlahbaris = 10;
        $surat_kakanwil2023 = Surat_Kakanwil2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_kakanwil.2023', compact(['surat_kakanwil2023']));       
    }

    public function storeSuratKakanwil023(Request $request){
        
        Surat_Kakanwil2023::create($request->except(['_token', 'submit']));
        return redirect('/suratkakanwil2023');
    }

    public function indexSuratKakanwil2022(Request $request){
        
        $jumlahbaris = 10;
        $suma_kakanwil2022 = Surat_Kakanwil2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_kakanwil.2022', compact(['surat_kakanwil2022']));       
    }

    public function indexSuratKakanwil2021(Request $request){
        
        $jumlahbaris = 10;
        $surat_kakanwil2021 = Surat_Kakanwil2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_kakanwil.2021', compact(['surat_kakanwil2021']));       
    }
}