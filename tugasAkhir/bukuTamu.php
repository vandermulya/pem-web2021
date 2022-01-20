<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu | EksploraSea</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="styleBuTam.css">
</head>

<body>
    <!-- START AREA HEADER -->
    <header>
        <div class="header_img">
            <a href="home.html">
                <img src="img/logo_eksea_drop.png" alt="Logo EksploraSea">
            </a>
        </div>
        <div class="header_nav">
            <a href="signup.html" class="signup">Daftar</a>
            <a href="login.html" class="login">Masuk</a>
            <a href="produk.html" class="produk">Produk</a>
            <a href="about.html" class="about">About</a>
            <a href="home.html" class="beranda">Beranda</a>
        </div>
    </header>
    <!-- AKHIR AREA HEADER -->

    <!-- START AREA KONTEN -->
    <div class="container">
        <div class="container-top">
            <h1 class="title" style="margin: 95px 422px; font-size: 80px;">BUKU TAMU</h1>
        </div>
        <div class="container-mid">
            <div class="form_body">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <label class="fname">Nama</label>
                    <input type="text" name="fname" placeholder="Your Name"><br>
                    <label class="femail">Email</label>
                    <input type="text" name="femail" placeholder="yourname@example.com"><br>
                    <label class="falamat">Alamat</label>
                    <input type="text" name="falamat" placeholder="Jalan Melon no. 3"><br>
                    <label class="fphone">Nomor Telepon</label>
                    <input type="text" name="fphone" placeholder="+62 812345678"><br>
                    <label class="fproduk">Keranjang</label>
                    <input type="text" name="fproduk" placeholder="Produk yang dipilih"><br>
                    <input type="submit" value="KIRIM" class="btn_submit">
                </form>
            </div>
        </div>
        <div class="container-low">
            <div class="print_php">
                <?php 
                    if(isset($_POST['fname'])) {
                        $name = $_POST['fname'];
                        $email = $_POST['femail'];
                        $alamat = $_POST['falamat'];
                        $phone = $_POST['fphone'];
                        $produk = $_POST['fproduk'];
                        echo "<h2>DATA TAMU</h2><hr>Nama: $name <br> Email: $email <br> Alamat: $alamat <br> Nomor Telepon: $phone <br> Keranjang: $produk";
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- AKHIR AREA KONTEN -->

    <!-- START AREA FOOTER -->
    <footer>
        <div class="jam_digital" id="jam_digital">
            <div class="kotak">
                <p id="jam"></p>
            </div>
            <div class="kotak">
                <p id="menit"></p>
            </div>
            <div class="kotak">
                <p id="detik"></p>
            </div>
            <h3 style="color: #f7ede2; align-content: center; margin: 26px 0; margin-left: 465px;">Copyright &copy;2022
                EksploraSea by
                Vander Mulya</h3>
            <a href="https://github.com/vandermulya/"><i class="fab fa-github" style="margin: 0 5px;"></i></a>
            <a href="https://www.instagram.com/vandermulya/"><i class="fab fa-instagram"
                    style="margin: 0 45px;"></i></a>
            <a href="https://www.linkedin.com/in/vandermulya"><i class="fab fa-linkedin"
                    style="margin: 0 85px;"></i></a>
            <a href="#"><i class="fab fa-youtube" style="margin: 0 125px;"></i></a>
        </div>
    </footer>
    <!-- AKHIR AREA FOOTER -->

    <!-- SCRIPT ALL PAGE (JAVASCRIPT) -->
    <script src="app.js" type="text/javascript"></script>
</body>

</html>