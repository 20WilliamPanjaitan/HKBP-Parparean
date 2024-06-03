<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/img/logo-hkbp.png" rel="icon">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <div class="logo">
                    <img src="img/HKBP-removebg-preview.png" alt="Logo" style="max-width: 63px; max-height: 63px" />
                </div>
                <div class="sidebar-brand-text mx-3">HKBP Parparean</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Beranda -->
            <li class="nav-item {{($title === "beranda")? 'active' : ''}}">
                <a class="nav-link" href="index">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            

            <!-- Nav Item  Berita -->
            <li class="nav-item {{($title === "berita")? 'active' : ''}}">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseBerita"
                    aria-expanded="true" aria-controls="collapseBerita">
                    <i class="fas fa-bullhorn"></i>
                    <span>Berita</span>
                </a>
                <div id="collapseBerita" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="berita">Berita</a>
                        <a class="collapse-item" href="pengumuman">Pengumuman</a>
                        <a class="collapse-item" href="acara">Acara & Kegiatan</a>
                    </div>
            </li>

            <!-- Nav Item  Tentang -->
            <li class="nav-item {{($title === "tentang")? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTentang"
                    aria-expanded="true" aria-controls="collapseTentang">
                    <i class="fas fa-info-circle"></i>
                    <span>Tentang</span>
                </a>
                <div id="collapseTentang" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="jemaat">Jemaat</a>
                        <a class="collapse-item" href="parhalado">Parhalado</a>
                    </div>
            </li>


            <!-- Nav Item  Layanan -->
            <li class="nav-item {{($title === "layanan")? 'active' : ''}}">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseLayanan"
                    aria-expanded="true" aria-controls="collapseLayanan">
                    <i class="fas fa-church"></i>
                    <span>Layanan</span>
                </a>
                <div id="collapseLayanan" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="renungan_harian">Renungan Harian</a>
                        <a class="collapse-item" href="pranikah">Pranikah</a>
                        <a class="collapse-item" href="pernikahan"> Pernikahan</a>
                        <a class="collapse-item" href="naik_sidi"> Naiki Sidi</a>
                        <a class="collapse-item" href="babtis"> Babtis</a>
                        <a class="collapse-item" href="jemaat_baru"> Jemaat Baru</a>
                        <a class="collapse-item" href="jemaat_pindah"> Permohonan Pindah</a>
                    </div>
            </li>

            <!-- Nav Item  Koinonia -->
            <li class="nav-item {{($title === "koinonia")? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKoinonia"
                    aria-expanded="true" aria-controls="collapseKoinonia">
                    <i class="fas fa-users"></i>
                    <span>Koinonia</span>
                </a>
                <div id="collapseKoinonia" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <a class="collapse-item" href="dewan_koinonia">Dewan Koinonia</a> --}}
                        <a class="collapse-item" href="sekolah_minggu"> Sekolah Minggu</a>
                        <a class="collapse-item" href="remaja"> Remaja</a>
                        <a class="collapse-item" href="naposo">Naposo</a>
                        <a class="collapse-item" href="parompuan">Parompuan</a>
                        <a class="collapse-item" href="ama">Ama</a>
                    </div>
            </li>

            <!-- Nav Item  Marturia -->
            <li class="nav-item {{($title === "marturia")? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMarturia"
                    aria-expanded="true" aria-controls="collapseMarturia">
                    <i class="fas fa-newspaper"></i>
                    <span>Marturia</span>
                </a>
                <div id="collapseMarturia" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <a class="collapse-item" href="dewan_marturia">Dewan Marturia</a> --}}
                        <a class="collapse-item" href="sending">Sending</a>
                        <a class="collapse-item" href="musik">Musik</a>
                    </div>
            </li>

            <!-- Nav Item  Diakonia -->
            <li class="nav-item {{($title === "diakonia")? 'active' : ''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDiakonia"
                    aria-expanded="true" aria-controls="collapseDiakonia">
                    <i class="fas fa-hands-helping"></i>
                    <span>Diakonia</span>
                </a>
                <div id="collapseDiakonia" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        {{-- <a class="collapse-item" href="dewan_diakonia">Dewan Diakonia</a> --}}
                        <a class="collapse-item" href="sosial">Sosial</a>
                        <a class="collapse-item" href="kemasyarakatan">Kemasyarakatan</a>
                    </div>
            </li>

            <!-- Nav Item - Galery -->
            <li class="nav-item {{($title === "galeri")? 'active' : ''}}">
                <a class="nav-link"  href="galeri">
                    <i class="fas fa-images"></i>
                    <span>Galery</span></a>
            </li>

            <li class="nav-item {{($title === "kontak")? 'active' : ''}}">
                <a class="nav-link"  href="kontak">
                    <i class="fas fa-phone"></i>
                    <span>Kontak</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->name }}
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                            </a>
                            <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->



                @yield('side_bar')



                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        
                        <a class="btn btn-primary" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>
