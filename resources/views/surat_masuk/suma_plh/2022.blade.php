@extends('layouts.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/tabel.css" type="text/css" rel="stylesheet">

@section('content')


    <h4 style="margin-top:-10px; font-weight:bold; color: #A09F9F;">Surat Masuk PLH/PLT 2022</h4>
    <div class="input-group w-25">
        <h6 style="margin-right:10px">Periode:</h6>

        @php
        $selectedYear = '2022'; 
        @endphp

        <select class="form-control" onchange="window.location.href=this.options[this.selectedIndex].value;">
            <option value="sumaplh2021" {{ $selectedYear == '2021' ? 'selected' : '' }}>2021</option>
            <option value="sumaplh2022" {{ $selectedYear == '2022' ? 'selected' : '' }}>2022</option>
            <option value="sumaplh2023" {{ $selectedYear == '2023' ? 'selected' : '' }}>2023</option>
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
      <th>Pengirim</th>
      <th>Tanggal</th>
      <th>Isi Ringkasan</th>
  </tr>
</thead>
<tbody>
  @foreach($suma_plh2022 as $smplh22)
  <tr>
      <td>{{ $smplh22->nomor_urut }}</td>
      <td>{{ $smplh22->nomor_surat }}</td>
      <td>{{ $smplh22->pengirim }}</td>
      <td>{{ $smplh22->tanggal }}</td>
      <td>{{ $smplh22->isi_ringkasan }}</td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>


<!-- Memuat Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
