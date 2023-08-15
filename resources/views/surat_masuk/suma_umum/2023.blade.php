@extends('layouts.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/tabel.css" type="text/css" rel="stylesheet">


@section('content')

    <h4 style="margin-top:-10px; font-weight:bold; color: #A09F9F;">Surat Masuk Umum 2023</h4>
    <div class="input-group w-25">
        <h6 style="margin-right:10px">Periode:</h6>
        
          @php
          $selectedYear = '2023'; 
          @endphp

          <select class="form-control" onchange="window.location.href=this.options[this.selectedIndex].value;">
              <option value="sumaumum2021" {{ $selectedYear == '2021' ? 'selected' : '' }}>2021</option>
              <option value="sumaumum2022" {{ $selectedYear == '2022' ? 'selected' : '' }}>2022</option>
              <option value="sumaumum2023" {{ $selectedYear == '2023' ? 'selected' : '' }}>2023</option>
          </select>

    </div>
  <div class="d-flex justify-content-between mb-3">
      
      

     <!-- Button Tambah -->
    <button data-toggle="modal" data-target="#mydaftar" style="font-size:10px;"
    class="btn btn-primary mt-1">Tambah</button>

     <!-- Input Cari dan Tombol Cari -->
    {{-- <div class="input-group w-25">
      <input type="text" class="form-control" placeholder="Cari">
      <button class="btn btn-outline-secondary" type="button">Search</button>
    </div> --}}
  </div>

  <!-- Modal daftar -->
<div id="mydaftar" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"></h4>
  </div>
  <div class="modal-body">
    <form action="/sumaumum2023" method="POST">
      @csrf

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nomor Surat</label>
        <input type="text" name="nomor_surat" class="form-control" id="exampleInputEmail1">
      </div>

      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Pengirim</label>
          <input type="text" name="pengirim" class="form-control" id="exampleInputEmail1">
        </div>

      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tanggal</label>
          <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1">
        </div>

      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Isi Ringkasan</label>
          <input type="text" name="isi_ringkasan" class="form-control" id="exampleInputEmail1">
        </div>  

        <div class="modal-footer">
   
          <input type="submit" name="submit" class="btn btn-success" value="Simpan">
   
           <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
         </div> 
  </form>
  </div>
 
  
</div>
</div>
</div>
<!-- end modal daftar -->

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
  @foreach($suma_umum2023 as $smu23)
  <tr>
      <td>{{ $smu23->nomor_urut }}</td>
      <td>{{ $smu23->nomor_surat }}</td>
      <td>{{ $smu23->pengirim }}</td>
      <td>{{ $smu23->tanggal }}</td>
      <td>{{ $smu23->isi_ringkasan }}</td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>


<!-- Memuat Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
