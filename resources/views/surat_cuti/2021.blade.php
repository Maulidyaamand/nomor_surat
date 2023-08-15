@extends('layouts.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/tabel.css" type="text/css" rel="stylesheet">

@section('content')


    <h4 style="margin-top:-10px; font-weight:bold; color: #A09F9F;">Surat Cuti 2021</h4>
    <div class="input-group w-25">
        <h6 style="margin-right:10px">Periode:</h6>

        @php
          $selectedYear = '2021'; 
          @endphp

          <select class="form-control" onchange="window.location.href=this.options[this.selectedIndex].value;">
              <option value="suratcuti2021" {{ $selectedYear == '2021' ? 'selected' : '' }}>2021</option>
              <option value="suratcuti2022" {{ $selectedYear == '2022' ? 'selected' : '' }}>2022</option>
              <option value="suratcuti2023" {{ $selectedYear == '2023' ? 'selected' : '' }}>2023</option>
          </select>

    </div>
  <div class="d-flex justify-content-between mb-3">
    
     <!-- Input Cari dan Tombol Cari -->
    {{-- <div class="input-group w-25">
      <input type="text" class="form-control" placeholder="Cari">
      <button class="btn btn-outline-secondary" type="button">Search</button>
    </div>
  </div> --}}

  <table class="table">
    <thead>
        <tr>
            <th>Nomor Urut</th>
            <th>Nomor Surat</th>
            <th>Isi Ringkasan</th>
            <th>Alamat</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
        </tr>   
    </thead>

    <tbody>
        @foreach($surat_cuti2021 as $sc21)
    <tr>
        <td>{{ $sc21->nomor_urut }}</td>
        <td>{{ $sc21->nomor_surat }}</td>
        <td>{{ $sc21->isi_ringkasan }}</td>
        <td>{{ $sc21->alamat }}</td>
        <td>{{ $sc21->tanggal }}</td>
        <td>{{ $sc21->keterangan }}</td>
    </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>


<!-- Memuat Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection