<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suma_Umum2023;
use App\Models\Suma_Umum2022;
use App\Models\Suma_Umum2021;

use App\Models\Suma_P2L2021;
use App\Models\Suma_P2L2022;
use App\Models\Suma_P2L2023;

use App\Models\Suma_Pas2021;
use App\Models\Suma_Pas2022;
use App\Models\Suma_Pas2023;

use App\Models\Suma_Imig2021;
use App\Models\Suma_Imig2022;
use App\Models\Suma_Imig2023;

use App\Models\Suma_Yankum2021;
use App\Models\Suma_Yankum2022;
use App\Models\Suma_Yankum2023;

use App\Models\Suma_Plh2021;
use App\Models\Suma_Plh2022;
use App\Models\Suma_Plh2023;


class SuratMasukController extends Controller
{

    // Surat Masuk Umum

    public function indexSumaUmum2023(Request $request){

        $keyword = $request->query('keyword');

        // if(!empty($keyword)){
        //     $suma_umum2023 = Suma_Umum2023::where('isi_ringkasan', 'LIKE', '%'.$keyword.'%')
        //     ->orWhere('nomor_urut', 'LIKE', '%'.$keyword.'%')
        //     ->orWhere('pengirim', 'LIKE', '%'.$keyword.'%')
        //     ->paginate(10)->fragment('std');
        // }
        // else{
        //     $suma_umum2023 = Suma_Umum2023::paginate(10)->fragment('std');
        // } 
        
        $suma_umum2023 = Suma_Umum2023::where('isi_ringkasan', 'LIKE', '%'.$keyword.'%')
        ->orWhere('nomor_urut', 'LIKE', '%'.$keyword.'%')
        ->orWhere('pengirim', 'LIKE', '%'.$keyword.'%')
        ->get();

        $jumlahbaris = 10;      
        $suma_umum2023 = Suma_Umum2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_umum.2023', compact(['suma_umum2023', 'keyword']));       
    }

    public function storeSumaUmum2023(Request $request){
        
        Suma_Umum2023::create($request->except(['_token', 'submit']));
        return redirect('/sumaumum2023');
    }
    
    public function indexSumaUmum2022(Request $request){

        $jumlahbaris = 10; 
        $suma_umum2022 = Suma_Umum2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_umum.2022', compact(['suma_umum2022']));       
    }

    public function indexSumaUmum2021(Request $request){

        $jumlahbaris = 10; 
        $suma_umum2021 = Suma_Umum2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_umum.2021', compact(['suma_umum2021']));       
    }

    

    // Surat Masuk P2L

    public function indexSumaP2L2023(Request $request){
        
        $jumlahbaris = 10;
        $suma_p2l2023 = Suma_P2L2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_p2l.2023', compact(['suma_p2l2023']));       
    }

    public function storeSumaP2L023(Request $request){
        
        Suma_P2L2023::create($request->except(['_token', 'submit']));
        return redirect('/sumap2l2023');
    }

    public function indexSumaP2L2022(Request $request){
        
        $jumlahbaris = 10;
        $suma_p2l2022 = Suma_P2L2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_p2l.2022', compact(['suma_p2l2022']));       
    }

    public function indexSumaP2L2021(Request $request){
        
        $jumlahbaris = 10;
        $suma_p2l2021 = Suma_P2L2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_p2l.2021', compact(['suma_p2l2021']));       
    }
    

    // Surat Masuk PAS

    public function indexSumaPas2023(Request $request){
        
        $jumlahbaris = 10;
        $suma_pas2023 = Suma_Pas2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_pas.2023', compact(['suma_pas2023']));       
    }

    public function storeSumaPas023(Request $request){
        
        Suma_Pas2023::create($request->except(['_token', 'submit']));
        return redirect('/sumapas2023');
    }

    public function indexSumaPas2022(Request $request){
        
        $jumlahbaris = 10;
        $suma_pas2022 = Suma_Pas2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_pas.2022', compact(['suma_pas2022']));       
    }

    public function indexSumaPas2021(Request $request){
        
        $jumlahbaris = 10;
        $suma_pas2021 = Suma_Pas2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_pas.2021', compact(['suma_pas2021']));       
    }
    
    // Surat Masuk Imigrasi

    public function indexSumaImig2023(Request $request){
        
        $jumlahbaris = 10;
        $suma_imig2023 = Suma_Imig2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_imig.2023', compact(['suma_imig2023']));       
    }

    public function storeSumaImig023(Request $request){
        
        Suma_P2L2023::create($request->except(['_token', 'submit']));
        return redirect('/sumaimig2023');
    }

    public function indexSumaImig2022(Request $request){
        
        $jumlahbaris = 10;
        $suma_imig2022 = Suma_Imig2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_imig.2022', compact(['suma_imig2022']));       
    }

    public function indexSumaImig2021(Request $request){
        
        $jumlahbaris = 10;
        $suma_imig2021 = Suma_Imig2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_imig.2021', compact(['suma_imig2021']));       
    }
    
    // Surat Masuk Yankum

    public function indexSumaYankum2023(Request $request){
        
        $jumlahbaris = 10;
        $suma_yankum2023 = Suma_Yankum2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_yankum.2023', compact(['suma_yankum2023']));       
    }

    public function storeSumaYankum023(Request $request){
        
        Suma_Yankum2023::create($request->except(['_token', 'submit']));
        return redirect('/sumayankum2023');
    }

    public function indexSumaYankum2022(Request $request){
        
        $jumlahbaris = 10;
        $suma_yankum2022 = Suma_Yankum2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_yankum.2022', compact(['suma_yankum2022']));       
    }

    public function indexSumaYankum2021(Request $request){
        
        $jumlahbaris = 10;
                
        // $suma_umum2023 = Suma_Umum2023::all();
        $suma_yankum2021 = Suma_Yankum2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_yankum.2021', compact(['suma_yankum2021']));       
    }


    // Surat Masuk PLH/PLT

      public function indexSumaPlh2023(Request $request){
        
        $jumlahbaris = 10;
        $suma_plh2023 = Suma_Plh2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_plh.2023', compact(['suma_plh2023']));       
    }

    public function storeSumaPlh023(Request $request){
        
        Suma_Plh2023::create($request->except(['_token', 'submit']));
        return redirect('/sumaplh2023');
    }

    public function indexSumaPlh2022(Request $request){
        
        $jumlahbaris = 10;
        $suma_plh2022 = Suma_Plh2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_plh.2022', compact(['suma_plh2022']));       
    }

    public function indexSumaPlh2021(Request $request){
        
        $jumlahbaris = 10;
        $suma_plh2021 = Suma_Plh2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_masuk.suma_plh.2021', compact(['suma_plh2021']));       
    }
    

    















    
    public function redirectToRoute(Request $request)
    {
        $selectedOption = $request->input('selectedOption');

        switch ($selectedOption) {
            case '2021':
                return redirect('/sumaumum2021');
            case '2022':
                return redirect('/sumaumum2022');
            case '2023':
                return redirect('/sumaumum2023');
        }
    }
}