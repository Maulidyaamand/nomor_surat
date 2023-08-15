@extends('layouts.master')

<aside class="main-sidebar">
  <section class="sidebar">
      <div class="custom-container">
        <div class="row">
          <div class="col-2" style="border-radius:10px; margin-right:10px; margin-left:5px; margin-top:10px;">
            <ul class="nav flex-column" style="background-color:white; border-radius:10px; margin-top:5px">
              {{-- Beranda --}}
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-home"></i> <span>Beranda</span>
                </a>
              </li>
              {{-- menu --}}
              <li class="nav-item">
                <a class=""></a> <span>Menu</span>
              </li>
              {{-- Surat Masuk --}}
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="toggleSubmenu(this)">
                  <i class="fas fa-envelope"></i> <span>Surat Masuk</span>
                </a>
                {{-- sub Surat masuk --}}
                <ul class="submenu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Imigrasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">P2l</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sumaumum2023">Umum</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Yankumham</a>
                  </li>
                </ul>
              </li>
                {{-- Surat Keluar --}}
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="toggleSubmenu(this)">
                  <i class="fas fa-envelope"></i> <span>Surat Keluar</span>
                </a>
                {{-- Sub Surat Keluar --}}
                <ul class="submenu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Imigrasi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><span>Umum</span></a>
                  </li>
                </ul>
              </li>
          </ul>
        </div>
        <div class="col-9 custom-content">
          @yield('section')
        </div>
      {{-- end row --}}
      </div>
    </div>
  </section>
</aside>
  





      
        
