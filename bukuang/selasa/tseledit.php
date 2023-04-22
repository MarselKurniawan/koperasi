<?php
include "../../config.php";
if(!isset($_GET['id'])){
    header('Location:selasa.php?SuksesMendapatId');
}
$id = $_GET['id'];

$sql = "SELECT * FROM tselasa WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if(!$query){
    die("Gagal Tersambung ke Server");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Koperasi Bumper</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../../img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Marsel Kurniawan</h6>
                        <span>Admin Ganteng</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../../index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="../../bukuharian/bharian.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Buku Harian</a>
                    <a href="../../bnasabah.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Buku Nasabah</a>
                    <div class="nav-item dropdown active">
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
                            <h2 class="text-primary"style="font-family:Rockwell;">Form Tambah Data</h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 container-fluid pt-4 px-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="col-sm-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Edit Hari Senin</h6>
                        <form action="proeditsel.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingPassword"
                                    placeholder="Tanggal" name="tanggal" value="<?php echo $data['tanggal'];?>">
                                <label for="floatingPassword">Tanggal</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="Nama Ketua" name="nm_ketua" value="<?php echo $data['nm_ketua'];?>">
                                <label for="floatingPassword">Nama Ketua</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingPassword"
                                    placeholder="Nama" name="masuk" value="<?php echo $data['masuk'];?>">
                                <label for="floatingPassword">Masuk</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="Nama" name="ket" value="<?php echo $data['ket'];?>">
                                <label for="floatingPassword">Keterangan</label>
                            </div>
                            <?php $angsuran = $data['angsuran'];?>
                            <select class="form-select mb-3" aria-label="Default select example" name="angsuran">
                                <option selected>Pilih Angsuran Ke Berapa</option>
                                <option <?php ($angsuran == 1)? "selected": ""?>>1</option>
                                <option <?php ($angsuran == 2)? "selected": ""?>>2</option>
                                <option <?php ($angsuran == 3)? "selected": ""?>>3</option>
                                <option <?php ($angsuran == 4)? "selected": ""?>>4</option>
                                <option <?php ($angsuran == '5')? "selected": ""?>>5</option>
                                <option <?php ($angsuran == '6')? "selected": ""?>>6</option>
                                <option <?php ($angsuran == '7')? "selected": ""?>>7</option>
                                <option <?php ($angsuran == '8')? "selected": ""?>>8</option>
                                <option <?php ($angsuran == '9')? "selected": ""?>>9</option>
                                <option <?php ($angsuran == '10')? "selected": ""?>>10</option>
                            </select>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="Nama" name="penerima" value="<?php echo $data['penerima'];?>">
                                <label for="floatingPassword">Penerima</label>
                            </div>
                            <div class="form-floating">
                                <button type="submit" name="edit" class="btn btn-primary" >Edit</button>
                                <a href="selasa.php"><button type="button" name="submit" class="btn btn-warning" >Kembali</button></a>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <!-- Table End -->

        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/chart/chart.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
</body>

</html>