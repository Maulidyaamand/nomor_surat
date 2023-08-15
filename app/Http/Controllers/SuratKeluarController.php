<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suker_Umum2023;
use App\Models\Suker_Umum2022;
use App\Models\Suker_Umum2021;

use App\Models\Suker_P2L2021;
use App\Models\Suker_P2L2022;
use App\Models\Suker_P2L2023;

use App\Models\Suker_Pas2021;
use App\Models\Suker_Pas2022;
use App\Models\Suker_Pas2023;

use App\Models\Suker_Imig2021;
use App\Models\Suker_Imig2022;
use App\Models\Suker_Imig2023;

use App\Models\Suker_Yankum2021;
use App\Models\Suker_Yankum2022;
use App\Models\Suker_Yankum2023;

use App\Models\Suker_Plh2021;
use App\Models\Suker_Plh2022;
use App\Models\Suker_Plh2023;

class SuratKeluarController extends Controller
{

    // Surat Keluar Umum
    public function indexSukerUmum2023(Request $request){
        
        $jumlahbaris = 10;
        $suker_umum2023 = Suker_Umum2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_umum.2023', compact(['suker_umum2023']));
                
    }

    public function storeSukerUmum2023(Request $request){
        
        Suker_Umum2023::create($request->except(['_token', 'submit']));
        return redirect('/sukerumum2023');
    }


    public function indexSukerUmum2022(Request $request){
        
        $jumlahbaris = 10;
        $suker_umum2022 = Suker_Umum2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_umum.2022', compact(['suker_umum2022']));
                
    }

    public function indexSukerUmum2021(Request $request){
        
        $jumlahbaris = 10;
        $suker_umum2021 = Suker_Umum2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_umum.2021', compact(['suker_umum2021']));
                
    }

    
    // Surat Keluar P2L

    public function indexSukerP2L2023(Request $request){
        
        $jumlahbaris = 10;
        $suker_p2l2023 = Suker_P2L2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_p2l.2023', compact(['suker_p2l2023']));
                
    }

    public function storeSukerP2L2023(Request $request){
        
        Suker_P2L2023::create($request->except(['_token', 'submit']));
        return redirect('/sukerp2l2023');
    }

    public function indexSukerP2L2022(Request $request){
        
        $jumlahbaris = 10;
        $suker_p2l2022 = Suker_P2L2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_p2l.2022', compact(['suker_p2l2022']));
                
    }

    public function indexSukerP2L2021(Request $request){
        
        $jumlahbaris = 10;
        $suker_p2l2021 = Suker_P2L2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_p2l.2021', compact(['suker_p2l2021']));
                
    }

    // Surat Keluar Pas

    public function indexSukerPas2023(Request $request){
        
        $jumlahbaris = 10;
        $suker_pas2023 = Suker_Pas2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_pas.2023', compact(['suker_pas2023']));
                
    }

    public function storeSukerPas2023(Request $request){
        
        Suker_Pas2023::create($request->except(['_token', 'submit']));
        return redirect('/sukerpas2023');
    }

    public function indexSukerPas2022(Request $request){
        
        $jumlahbaris = 10;
        $suker_pas2022 = Suker_Pas2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_pas.2022', compact(['suker_pas2022']));
                
    }

    public function indexSukerPas2021(Request $request){
        
        $jumlahbaris = 10;
        $suker_pas2021 = Suker_Pas2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_pas.2021', compact(['suker_pas2021']));
                
    }


    // Surat Keluar Imigrasi

    public function indexSukerImig2023(Request $request){
        
        $jumlahbaris = 10;
        $suker_imig2023 = Suker_Imig2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_imig.2023', compact(['suker_imig2023']));
                
    }

    public function storeSukerImig2023(Request $request){
        
        Suker_Imig2023::create($request->except(['_token', 'submit']));
        return redirect('/sukerimig2023');
    }

    public function indexSukerImig2022(Request $request){
        
        $jumlahbaris = 10;
        $suker_imig2022 = Suker_Imig2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_imig.2022', compact(['suker_imig2022']));
                
    }

    public function indexSukerImig2021(Request $request){
        
        $jumlahbaris = 10;
        $suker_imig2021 = Suker_Imig2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_imig.2021', compact(['suker_imig2021']));
                
    }


    // Surat Keluar Yankum

    public function indexSukerYankum2023(Request $request){
        
        $jumlahbaris = 10;
        $suker_yankum2023 = Suker_Yankum2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_yankum.2023', compact(['suker_yankum2023']));
                
    }

    public function storeSukerYankum2023(Request $request){
        
        Suker_Yankum2023::create($request->except(['_token', 'submit']));
        return redirect('/sukeryankum2023');
    }

    public function indexSukerYankum2022(Request $request){
        
        $jumlahbaris = 10;
        $suker_yankum2022 = Suker_Yankum2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_yankum.2022', compact(['suker_yankum2022']));
                
    }

    public function indexSukerYankum2021(Request $request){
        
        $jumlahbaris = 10;
        $suker_yankum2021 = Suker_Yankum2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_yankum.2021', compact(['suker_yankum2021']));
                
    }

    // Surat Keluar PLH/PLT
    public function indexSukerPlh2023(Request $request){
        
        $jumlahbaris = 10;
        $suker_plh2023 = Suker_Plh2023::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_plh.2023', compact(['suker_plh2023']));
                
    }

    public function storeSukerPlh2023(Request $request){
        
        Suker_Umum2023::create($request->except(['_token', 'submit']));
        return redirect('/sukerplh2023');
    }


    public function indexSukerPlh2022(Request $request){
        
        $jumlahbaris = 10;
        $suker_plh2022 = Suker_Plh2022::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_plh.2022', compact(['suker_plh2022']));
                
    }

    public function indexSukerPlh2021(Request $request){
        
        $jumlahbaris = 10;
        $suker_plh2021 = Suker_Plh2021::orderBy('nomor_urut', 'desc')->paginate($jumlahbaris);
        return view('surat_keluar.suker_plh.2021', compact(['suker_plh2021']));
                
    }
}