<?php

namespace App\Http\Controllers;

use App\Models\Surat_Perintah2021;
use App\Models\Surat_Perintah2022;
use App\Models\Surat_Perintah2023;

use Illuminate\Http\Request;

class SuratPerintahController extends Controller
{
    // Surat Perintah

      public function indexSuratPerintah2023(Request $request){
        
        $jumlahbaris = 10;
        $surat_perintah2023 = Surat_Perintah2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_perintah.2023', compact(['surat_perintah2023']));       
    }

    public function storeSuratPerintah023(Request $request){
        
        Surat_Perintah2023::create($request->except(['_token', 'submit']));
        return redirect('/suratperintah2023');
    }

    public function indexSuratPerintah2022(Request $request){
        
        $jumlahbaris = 10;
        $surat_perintah2022 = Surat_Perintah2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_perintah.2022', compact(['surat_perintah2022']));       
    }

    public function indexSuratPerintah2021(Request $request){
        
        $jumlahbaris = 10;
        $surat_perintah2021 = Surat_Perintah2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_perintah.2021', compact(['surat_perintah2021']));       
    }
    
}