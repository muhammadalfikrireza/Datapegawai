<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sijawara</title>

    <!-- ============== Icon ============== -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- ============= Style ================== -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

    <!-- =====================maps================= -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>



</head>

<body>
    <!-- ========================  Navigation ====================== -->

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="<?= base_url('Dashboard.php') ?>">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('Data_pegawai') ?>">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Pegawai</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('Data_instansi') ?>">
                        <span class="icon">
                            <ion-icon name="business-outline"></ion-icon>
                        </span>
                        <span class="title">Data Instansi</span>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url('Views/Data_absensi.php') ?>">
                        <span class="icon">
                            <ion-icon name="file-tray-full-outline"></ion-icon>
                        </span>
                        <span class="title">Data Absensi</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ====================== main =================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <div class="search">
                <label>
                    <input type="text" placeholder="Search Here!">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <div class="user">
                <img src="<?= base_url('assets/img/profile.png') ?>" alt="">
            </div>
        </div>



        <!-- =================== cards ================ -->

        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">3,540</div>
                    <div class="cardName">Total Pegawai</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-circle-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">3,000</div>
                    <div class="cardName">Hadir</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="person-add-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">540</div>
                    <div class="cardName">Tidak Hadir</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="person-remove-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">30</div>
                    <div class="cardName">Total Instansi</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="briefcase-outline"></ion-icon>
                </div>
            </div>
        </div>

        <!-- ================ Data Absen ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Absensi</h2>
                    <a href="#" class="btn">View All</a>
                </div>

                <table>
                    <thead>
                        <tr>
                            <td>Tanggal</td>
                            <td>Name</td>
                            <td>NIP</td>
                            <td>Instansi</td>
                            <td>Status</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>18/08/2023</td>
                            <td>Acep Sunandar</td>
                            <td>6253712981728</td>
                            <td>Diskominfo</td>
                            <td><span class="status delivered">Hadir</span></td>
                        </tr>

                        <tr>
                            <td>18/08/2023</td>
                            <td>Antip Suhesi</td>
                            <td>3828923892</td>
                            <td>Diskominfo</td>
                            <td><span class="status pending">Izin</span></td>
                        </tr>

                        <tr>
                            <td>18/08/2023</td>
                            <td>Budi Sasono</td>
                            <td>38728739829</td>
                            <td>Diskominfo</td>
                            <td><span class="status return">Tidak Hadir</span></td>
                        </tr>

                        <tr>
                            <td>18/08/2023</td>
                            <td>Andi Tulihosa</td>
                            <td>3473948302</td>
                            <td>Diskominfo</td>
                            <td><span class="status delivered">Hadir</span></td>
                        </tr>

                        <tr>
                            <td>18/08/2023</td>
                            <td>Ceceindra</td>
                            <td>3228937829</td>
                            <td>Diskominfo</td>
                            <td><span class="status delivered">Hadir</span></td>
                        </tr>

                        <tr>
                            <td>18/08/2023</td>
                            <td>Saep Horison</td>
                            <td>32938282909</td>
                            <td>Diskominfo</td>
                            <td><span class="status pending">Izin</span></td>
                        </tr>

                        <tr>
                            <td>18/08/2023</td>
                            <td>Teti Suriati</td>
                            <td>232987389247</td>
                            <td>Diskominfo</td>
                            <td><span class="status return">Tidak Hadir</span></td>
                        </tr>

                        <tr>
                            <td>18/08/2023</td>
                            <td>Zakaria</td>
                            <td>32839283890</td>
                            <td>Diskominfo</td>
                            <td><span class="status inProgress">Izin</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- ================= Kegiatan ================ -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Kegiatan</h2>
                </div>

                <table>
                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4> Nopal<br> <span>Rapat di Dinas Kesehatan</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>Rapat di Dinas Kehutanan</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>David <br> <span>Rapat di Dinas parawisata</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Juniar <br> <span>Rapat di Dinas Komunikasi</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>David <br> <span>Rapat di Dinas Lingkungan</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>Rapat di Dinas Parawisata</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>David <br> <span>Rapat di Dinas Kesehatan</span></h4>
                        </td>
                    </tr>

                    <tr>
                        <td width="60px">
                            <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                        </td>
                        <td>
                            <h4>Amit <br> <span>Rapat di Dinas Kelautan</span></h4>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- ========================= Lokasi ============================ -->
            <div class="recentLokasi">
                <div class="cardheader">
                    <h2>Lokasi</h2>
                    <div id='map'></div>
                </div>
            </div>
        </div>














        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Wilayah Dinas</a></li>
                            <li><a href="#">Kegiatan</a></li>
                            <li><a href="#">Kepala Dinas</a></li>
                        </ul>
                    </div>
                    <!-- <div class="footer-col">
                        <h4>online shop</h4>
                        <ul>
                            <li><a href="#">watch</a></li>
                            <li><a href="#">bag</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">dress</a></li>
                        </ul>
                    </div> -->
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- ================================== Scripts ======================================== -->
        <script src="<?= base_url('assets/js/main.js') ?>"></script>

        <!-- ============================= Icon =========================================== -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

</body>

</html>