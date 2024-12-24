<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MajVel - Wisata Majalengka</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    
    <!-- Header -->
    <header>
        <a href="#" class="logo">MajVel</a>
        <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="pemesanan.php">Pemesanan</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#destinasi">Destinasi</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
    </header>   

    <!-- Home Section -->
    <section class="home" id="home" style="background-image: url(asset/img/home.jpg);">
        <div class="home-text">
            <h1>Imajinasimu Adalah <br> Satu-satunya Batasanmu</h1>
        </div>
    </section>

    <!-- container -->
    <section class="container" id="about">
        <div class="text">
            <h2>Tempat Wisata Populer di Majalengka</h2>
        </div>
            <div class="row">   
                <div class="about-col-1">
                    <img src="asset/img/map.jpg" alt="peta majalengka">
                </div>
                <div class="about-col-2">
                    <div class="destinasi">
                        <div class="about-img-1">
                            <img src="asset/img/panyaweuyan.jpg" alt="Tempat Wisata Panyaweuyan">
                        </div>
                        <div class="text-about">
                        <h1>Terasering Panyaweuyan</h1>
                        <p>Tempat ini menyuguhkan panorama alam cantik nan asri, dari gugusan bukit</p>
                        </div>
                    </div>
                </div>
                <div class="about-col-3">
                    <div class="destinasi">
                        <div class="about-img-1">
                            <img src="asset/img/cipanten.jpg" alt="Tempat Wisata Situ Cipanten">
                        </div>
                        <div class="text-about">
                        <h1>Situ Cipanten</h1>
                        <p>Situ Cipanten memiliki air yang jernih hingga bisa melihat dasarsitu serta ikan-ikan yang berenang di danau ini.</p>
                        </div>
                    </div>
                </div>
                <div class="about-col-4">
                    <div class="destinasi">
                        <div class="about-img-1">
                            <img src="asset/img/talaga herang.jpg" alt="Tempat Wisata Talaga Herang">
                        </div>
                        <div class="text-about">
                        <h1>Talaga Herang</h1>
                        <p>tempat ini memiliki danau yang jernihdan dapat berenang didanau tersebut</p>
                        </div>
                    </div>
                </div>
    </section>

    <!-- Destinasi -->
    <section class="destinasi" id="destinasi" style="background-color: #ECF1F0;">
        <div class="destinasi-text">
            <h1>Harga Tempat Wisata</h1>
            <p>Hanya disini harga tempat wisata di majalengka murah...</p>
        </div>
        <div class="card-container">
            <div class="card">
                <img src="asset/img/harga panyaweuyan.png" alt="panyaweuyan">
                <div class="card-content">
                    <h1>15k/orang</h1>
                    <p>Melihat pemandangan gunung-gunung dan tanaman dari atas bukit</p>
                </div>
                <div class="card-content-2">
                    <h1>panyaweuyan</h1>
                    <a href="#" class="btn">Lebih Lanjut</a>
                </div>
            </div>
            <div class="card">
                <img src="asset/img/harga cipanten.png" alt="Situ Cipanten">
                <div class="card-content">
                    <h1>15k/orang</h1>
                    <p>Menikmati indahnya air jernih dan ikan-ikanyang ada di dalamnya</p>
                </div>
                <div class="card-content-2">
                    <h1>Situ Cipanten</h1>
                    <a href="#" class="btn">Lebih Lanjut</a>
                </div>
            </div>
            <div class="card">
                <img src="asset/img/harga talagaherang.png" alt="Talaga Herang">
                <div class="card-content">
                    <h1>20k/orang</h1>
                    <p>Menikmati indahnya danau alami dan sangat nyaman untuk bersantai</p>
                </div>
                <div class="card-content-2">
                    <h1>Talaga Herang</h1>
                    <a href="#" class="btn">Lebih Lanjut</a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="testimoni">
        <div class="destinasi-text">
            <h1>Testimoni</h1>
            <p>Ini adalah testimoni dari orang orang yang sudah <br> memesan tiket di web kami</p>
        </div>
        <div class="card-container">
            <div class="card" style="background-color: #A5A5A5; height: 250px; border-radius: 5px;">
                <div class="card-content" style="font-style: italic; margin-top: 30px;">
                    Saya sangat puas memesan tiket di web ini selain cepat disini juga sudah memiliki harga yang sangat murah
                </div>
                <div class="card-content-2" style="font-weight: bold; margin-left: 20px;">
                    Budi
                </div>
            </div>
            <div class="card" style="background-color: #A5A5A5; height: 250px; border-radius: 5px;" >
                <div class="card-content" style="font-style: italic; margin-top: 30px;">
                    Memesan tiket disini sangat simple dan bisa di pesan kapanpun dan dimanapun, serta pelayanan yang sangat baik
                </div>
                <div class="card-content-2" style="font-weight: bold; margin-left: 20px;">
                    Syifa
                </div>
            </div>
            <div class="card" style="background-color: #A5A5A5; height: 250px; border-radius: 5px;">
                <div class="card-content" style="font-style: italic; margin-top: 30px;">
                    Destinasi-destinasi yang direkomendasikan sangat indah dan memanjakan mata, sehingga membuat pengunjung nyaman
                </div>
                <div class="card-content-2" style="font-weight: bold; margin-left: 20px;">
                    Wilson
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="gallery" id="gallery">
        <div class="gallery-text">
            <h1>Gallery</h1>
        </div>
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide-1" src="asset/img/gallery1.png" alt="gallery">
                <img id="slide-2" src="asset/img/gallery2.jpeg" alt="gallery">
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
            </div>
        </div>
    </section>

    <!-- footer -->
    <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="col">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Booking</a></li>
                        <li><a href="#">Privacy & Policy</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href="#">Majalengka</a></li>
                        <li><a href="#">+62 82125931889</a></li>
                        <li><a href="#">Raza@gmail.com</a></li>
                    </ul>
                </div> 

                <div class="col">
                    <h4>Experience</h4>
                    <ul>
                        <li><a href="#">Party</a></li>
                        <li><a href="#">Adventure</a></li>
                        <li><a href="#">Nature</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Contact Us</h4>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>  

            <!-- <div class="box">
            <div class="box-text">
                <h1>Anda memiliki pertanyaan?</h1>
            </div>
            <div class="box-email">
                <h1>your email</h1>
                <div class="box-send">
                    <a href="#">Kirim</a>
                </div>
            </div> -->

    <!-- link to js -->
    <script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>