<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   
    <title>Kanwil Kemenkumham Aceh</title>

    
    <script>
  // Fungsi untuk mengatur visibilitas submenu
  function toggleSubmenu(menu, submenuId) {
    var submenu = document.getElementById(submenuId);
    var isOpen = submenu.classList.contains("show");

    // Menutup semua submenu
    var submenus = document.getElementsByClassName("submenu");
    for (var i = 0; i < submenus.length; i++) {
      submenus[i].classList.remove("show");
    }

    // Membuka submenu yang sesuai
    if (!isOpen) {
      submenu.classList.add("show");
    }

    // Simpan status terbuka atau tertutupnya submenu ke localStorage
    var submenuStatus = {};
    submenuStatus[submenuId] = !isOpen;
    localStorage.setItem("submenuStatus", JSON.stringify(submenuStatus));
  }

    // Memeriksa localStorage saat halaman dimuat
    window.onload = function () {
    var menuItems = document.getElementsByClassName("nav-item");
    for (var i = 0; i < menuItems.length; i++) {
      var menuItem = menuItems[i];
      var link = menuItem.querySelector("a");
      if (link.getAttribute("href") === window.location.href) {
        menuItem.classList.add("active");
      } else {
        menuItem.classList.remove("active");
      }
    }

    var submenuStatus = localStorage.getItem("submenuStatus");
    if (submenuStatus) {
      submenuStatus = JSON.parse(submenuStatus);
      for (var submenuId in submenuStatus) {
        var submenuToOpen = document.getElementById(submenuId);
        if (submenuToOpen && submenuStatus[submenuId]) {
          submenuToOpen.classList.add("show");
        } else if (submenuToOpen) {
          submenuToOpen.classList.remove("show");
        }
      }
    }
  };
</script>

</head>

<body>
  {{-- navbar --}}
  <nav class="navbar navbar-expand-lg bg-body-tertiary;" style="background-color:white">
    <div  class="container-fluid">
    <a class="navbar-brand" href="home">
        <div class="logo-container" >
          <img src="../assets/images/logo.jpg" alt="" width="46" height="46" >
          <div class="text-container">
            <h6 style="margin-top: 12 px; font-weight:bold; color: #000000;">
              Pengambilan Nomor Surat
            </h6>
            <h7 style="margin-top:1 px; color: #000000; font-size:small">Kementerian Hukum dan HAM Aceh</h7>
          </div>
        </div>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Logout</a>
        </li>
      </ul>
    </div>    
  </nav>

  <div class="custom-container">
    <div class="row">
      <div class="col-2">
        <ul class="nav flex-column custom-nav" style=" border-radius:10px;">
          {{-- Beranda --}}
            <li class="nav-item">
              <a class="nav-link" href="home">
                <i class="fas fa-home"></i> <span>Beranda</span>
              </a>
            </li>
          {{-- menu --}}
            <li class="nav-itemm">
              <a class=""></a> <span>MENU</span>
            </li>
          {{-- Surat Masuk --}}
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="toggleSubmenu(this, 'submenu_surat_masuk')">
                <i class="fas fa-envelope"></i> <span>Surat Masuk</span>
              </a>
              {{-- sub Surat masuk --}}
              <ul class="submenu" id="submenu_surat_masuk">
                <li class="nav-item">
                  <a class="nav-link" href="sumaimig023"><span>Imigrasi</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sumap2l023"><span>PAS</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sumap2l023"><span>P2l</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sukerimig2023"><span>P2l</span></a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="sumaumum2023"><span>Umum</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sumayankum023"><span>Yankumham</span></a>
                </li>
              </ul>
            </li>
          {{-- Surat Keluar --}}
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="toggleSubmenu(this, 'submenu_surat_keluar')">
                <i class="fas fa-envelope"></i> <span>Surat Keluar</span>
              </a>
              {{-- Sub Surat Keluar --}}
                <ul class="submenu" id="submenu_surat_keluar">
                  <li class="nav-item">
                    <a class="nav-link" href="sukerimig2023"><span>Imigrasi</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sukerumum2023"><span>PAS</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sukerimig2023"><span>P2l</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sukerimig2023"><span>Plh/plt</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sukerumum2023"><span>Umum</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sukerumum2023"><span>Yankumham</span></a>
                  </li>
                </ul>
            </li>
          {{-- Surat Keluar --}}
          <li class="nav-item">
            <a class="nav-link" href="Surat Cuti">
              <i class="fas fa-envelope"></i> <span>Surat Cuti</span>
            </a>
          </li>
          {{-- Surat Keluar --}}
          <li class="nav-item">
            <a class="nav-link" href="Surat Perintah">
              <i class="fas fa-envelope"></i> <span>Surat Perintah</span>
            </a>
          </li>
          {{-- Surat sk.ka.kanwil --}}
          <li class="nav-item">
            <a class="nav-link" href="SK.Ka.Kanwil">
              <i class="fas fa-envelope"></i> <span>SK.Ka.Kanwil</span>
            </a>
          </li>
        </ul>
      </div>
          <div class="col-9 custom-content" style="width:120px">
            @yield('content')
          </div>
</body>
</html>