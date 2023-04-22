<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Koperasi Bumper</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="../index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Koperasi Bumper</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Marsel Kurniawan</h6>
                        <span>Admin Ganteng</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="../bukuharian/bharian.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Buku Harian</a>
                    <a href="bnasabah.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Buku Nasabah</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Buku Uang</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="../bukuang/senin/senin.php" class="dropdown-item">Senin</a>
                            <a href="../bukuang/selasa/selasa.php" class="dropdown-item">Selasa</a>
                            <a href="../bukuang/rabu/rabu.php" class="dropdown-item">Rabu</a>
                            <a href="../bukuang/kamis/kamis.php" class="dropdown-item">Kamis</a>
                            <a href="../bukuang/jumat/jumat.php" class="dropdown-item">Jumat</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4 p-2">
                    <input class="form-control bg-dark border-0 " type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Main Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            <a href="bhdata.php"><button type="button" class="btn btn-primary m-2">+ Tambah Data</button></a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 container-fluid pt-4 px-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Buku Nasabah</h6>
                    <div class="">
                        <table class="table table-striped data" id="data">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Ketua</th>
                                    <th scope="col">Nama</th> 
                                    <th scope="col">KTP</th>
                                    <th scope="col">KK</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" colspan="3">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../config.php";
                                $sql = "SELECT * FROM tnasabah ORDER BY nm_ketua";
                                $no = 1;
                                $query = mysqli_query($db, $sql);

                                while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['nm_ketua']?></td>
                                    <td><?php echo $data['nm']?></td>
                                    <td><?php echo $data['ktp']?></td>
                                    <td><?php echo $data['kk']?></td>
                                    <td><?php echo $data['status']?></td>
                                    <td>
                                        <a href="tnedit.php?id=<?php echo $data['id']?>"><img width=80% src="../img/edit.png" alt=""></a>  
                                    </td>
                                    <td>|</td>
                                    <td>
                                    <a href="tnhapus.php?id=<?php echo $data['id']?>"><img width=80% src="../img/hapus.png" alt=""></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table End -->

            <!-- Main End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; Marsel ni bosch Senggol dongg slebew 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script type="text/javascript">
	$(document).ready(function(){
		$('#data').DataTable(); 
	});
    </script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/chart/chart.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>