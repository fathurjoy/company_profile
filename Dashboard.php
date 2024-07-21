<?php
include 'config.php';
session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: order.php");
// }
// ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/order.css">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- link aos animated -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/LOGO1 1.png" alt="" srcset="" style="width : 40px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link " href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#crew">Crew</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#product">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" style="color: #0550A3;">LogOut</a>
              </li>
              
            </div>
          </div>
        </div>
      </nav>
      <div class="container-fluid banner">
        <div class="container text-left">
          <h1 class="display-2">PT.Samshan</h1>
          <h1 class="display-2">Tech</h1>
        </div>
      </div>
      <section id="visi">
        <div class="container-fluid">
          <div class="row text-center visi pt-5 pb-3">
            <div class="coloumn" data-aos="fade-down" data-aos-duration="1000">
                <h2>Visi Misi</h2>
            </div>
            <div class="coloumn" >
                <p style="color: #fff;" data-aos="fade-right" data-aos-duration="1000">“Menjadi pusat pembelajaran, penelitian dan konsultasi AI pertama dan terdepan di Indonesia untuk membangun sumber daya manusia yang berkualitas dan unggul di bidang AI”</p>
                <p style="color: #fff;" data-aos="fade-left" data-aos-duration="1500">Menerapkan pembelajaran di bidang kecerdasan buatan untuk siswa dari tingkat SMA/SMK hingga perguruan tinggi. Menyelenggarakan pelatihan di bidang kecerdasan buatan untuk guru dari tingkat SMA/MA dan SMK. Konsultasi pengembangan
                  kecerdasan buatan di Indonesia. Melakukan penelitian di bidang kecerdasan buatan untuk menghasilkan produk yang bermanfaat bagi kemajuan bangsa Indonesia. Menumbuhkan sumber daya manusia yang unggul dan berdaya saing di bidang
                  kecerdasan buatan.</p>
            </div>
            <div class="coloumn" data-aos="fade-up" data-aos-duration="1000">
              <h4 class="pt-5" style="color: white"><a href="https://www.instagram.com/herman_dwi_yulianto/" style="color: white">Herman Dwi Yulianto</a>, Direktur Utama PT Samshan Teach</h4>
            </div>
        </div>
        </div>
      </section>
    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row pt-3">
            <div class="col text-center">
                <h1 >About</h1>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col">
                <img src="img/Samping_About.jpg" alt="" width="400px" class="rounded" data-aos="fade-right" data-aos-duration="1000">
            </div>
            <div class="col">
                <p data-aos="fade-left" data-aos-duration="1000">Sebuah perusahaan yang didirikan oleh mahasiswa Universitas Amikom Yogyakarta Fakultas Informatika yang bergerak dalam bidang teknologi, khususnya penerapan kecerdasan buatan (artificial intelligence) karena saat ini komputer dengan kecerdasan buatannya sudah dapat melakukan berbagai kegiatan berpikir layaknya manusia dan siap mendukung berbagai pekerjaan yang sebelumnya dikerjakan oleh manusia secara penuh dan peluang bisnis di bidang artificial intelligence cukup besar dan terbuka luas. Sejak awal dibuat pada tahun 2022, perusahaan ini bertujuan untuk mengembangkan sumber daya manusia di bidang kecerdasan buatan untuk membangun kapabilitas bangsa menyongsong revolusi industri 4.0.</p>
            </div>
        </div>
      </div>
      <div class="container">
      <div class="row pt-4">
          <div class="col">
              <p data-aos="fade-right" data-aos-duration="1000">Sebuah perusahaan yang didirikan oleh mahasiswa Universitas Amikom Yogyakarta Fakultas Informatika yang bergerak dalam bidang teknologi, khususnya penerapan kecerdasan buatan (artificial intelligence) karena saat ini komputer dengan kecerdasan buatannya sudah dapat melakukan berbagai kegiatan berpikir layaknya manusia dan siap mendukung berbagai pekerjaan yang sebelumnya dikerjakan oleh manusia secara penuh dan peluang bisnis di bidang artificial intelligence cukup besar dan terbuka luas. Sejak awal dibuat pada tahun 2022, perusahaan ini bertujuan untuk mengembangkan sumber daya manusia di bidang kecerdasan buatan untuk membangun kapabilitas bangsa menyongsong revolusi industri 4.0.</p>
          </div>
          <div class="col text-end" data-aos="fade-left" data-aos-duration="1000">
            <img src="img/img3.png" alt="" width="300px" class="rounded">
          </div>
        </div>
      </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#014998" fill-opacity="1" d="M0,224L80,240C160,256,320,288,480,266.7C640,245,800,171,960,160C1120,149,1280,203,1360,229.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <section id="crew">
      
      <div class="container-fluid" style="background-color: #014998;">
        <div class="container">
            <div class="row text-center">
                <div class="coloumn">
                    <h2 style="color: #FFF;">CREW</h2>
                </div>
            </div>
            <div class="row">
                <div class="col aboutus-kiri" data-aos="fade-right" data-aos-duration="1000">
                    <img src="img/hendri 1.png" alt="" srcset="" class="foto">
                    <h3>Hendri Nelwan</h3>
                    <h4>20.11.3705</h4>
                </div>
                <div class="col" id="task">
                    <h4 class="border border-0 rounded-2 task shadow-lg">Slicing Visi dan Misi</h4>
                </div>
            </div>
            <div class="row text-end">
              <div class="col task">
                <h4 class="border border-0 rounded-2 task shadow-lg">UI/UX</h4>
              </div>
                <div class="col aboutus-kanan" data-aos="fade-left" data-aos-duration="1000">
                    <img src="img/FOTO 8.png" alt="" srcset="" class="foto">
                    <h3>Chamdan Chaqul M</h3>
                    <h4>20.11.3713</h4>
                </div>
            </div>
            <div class="row">
              <div class="col aboutus-kiri" data-aos="fade-right" data-aos-duration="1000">
                <img src="img/Ayyasy 1.png" alt="" srcset="" class="foto">
                <h3>Ayyasy Ulfah F</h3>
                <h4>20.11.3718</h4>
            </div>
            <div class="col" id="task">
                <h4 class="border border-0 rounded-2 task shadow-lg">Slicing Login and Registration</h4>
            </div>
            </div>
            <div class="row text-end">
              <div class="col" id="task" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="border border-0 rounded-2 task shadow-lg">HEADER AND FOOTER</h4>
              </div>
                <div class="col aboutus-kanan" data-aos="fade-left" data-aos-duration="1000">
                    <img src="img/fathur 1.png" alt="" srcset="" class="foto">
                    <h3>Muhammad Fathur NK</h3>
                    <h4 >20.11.3730</h4>
                </div>
            </div>
            <div class="row text-start">
                <div class="col aboutus-kiri" data-aos="fade-right" data-aos-duration="1000">
                    <img src="img/herman 1.png" alt="" srcset="" class="foto">
                    <h3>Herman Dwi Yulianto</h3>
                    <h4>20.11.3731</h4>
                </div>
                <div class="col task" >
                  <h4 class="border border-0 rounded-2 task shadow-lg">UI/UX & SLICING ABOUT</h4>
              </div>
            </div>
            <div class="row text-end" >
              <div class="col task" data-aos="fade-right" data-aos-duration="1000">
                <h4 class="border border-0 rounded-2 task shadow-lg">SLICING CREW, ORDER, BACKEND</h4>
              </div>
                <div class="col aboutus-kanan" data-aos="fade-left" data-aos-duration="1000">
                    <img src="img/sugeng (2) 1.png" alt="" srcset="" class="foto">
                    <h3>Bambang Sugeng M</h3>
                    <h4 >20.11.3732</h4>
                </div>
            </div>
            <div class="row text-start">
                <div class="col aboutus-kiri" data-aos="fade-right" data-aos-duration="1000">
                    <img src="img/hamdan123 2.png" alt="" srcset="" class="foto">
                    <h3>Hamdan Surya N</h3>
                    <h4>20.11.3718</h4>
                </div>
                <div class="col task">
                  <h4 class="border border-0 rounded-2 task shadow-lg">TYPE WRITTER & PRODUCT</h4>
                </div>
            </div>
        </div>
    </div>
    </section>
    <Section>

    </Section>
    
    <!-- About -->

    <!-- Service -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#014998"
        fill-opacity="1"
        d="M0,192L60,181.3C120,171,240,149,360,160C480,171,600,213,720,202.7C840,192,960,128,1080,106.7C1200,85,1320,107,1380,117.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"
      ></path>
    </svg>
    <section id="product">
      <div class="row justify-content-center">
        <div class="col-sm-3 mb-5">
          <div class="card text-center shadow rounded" data-aos="fade-right" data-aos-duration="1500">
            <div class="text-center">
              <img src="img/ai logo1.png" class="card-img-top" alt="product 1" style="width: 250px" />
            </div>

            <div class="card-body">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AS">Asisten Virtual</button>

              <!-- Modal -->
              <div class="modal fade" id="AS" tabindex="-1" aria-labelledby="AS" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="AS">Asisten Virtual</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Siri, Google Now, dan Cortana merupakan asisten virtual yang sudah tersedia dalam tiga platform (iOS, Android, dan Windows Mobile). Secara singkat, asisten virtual membantu kita untuk menemukan informasi dengan
                      menggunakan suara kita. Kamu dapat bertanya, “Di mana restoran terdekat?” atau “Apa jadwal saya hari ini?” pada asisten virtual dari platform yang kamu miliki. Teknologi AI sangat penting bagi aplikasi-aplikasi ini.
                      Teknologi ini berusaha mengumpulkan informasi dan mengenali suara kamu agar dapat menyuguhkan hasil yang sesuai dengan keinginanmu.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-5">
          <div class="card text-center shadow rounded" data-aos="fade-down" data-aos-duration="1500">
            <div class="text-center">
              <img src="img/ai logo2.png" class="card-img-top" alt="product 2" style="width: 250px" />
            </div>

            <div class="card-body">
              <!-- Button trigger modal -->

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#LM">Layanan musik dan film daring</button>

              <!-- Modal -->
              <div class="modal fade" id="LM" tabindex="-1" aria-labelledby="LM" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="LM">Layanan musik dan film daring</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Pernah menggunakan Spotify, Pandora, atau Netflix? Berarti kamu pernah menggunakan produk AI. Aplikasi penyedia layanan streaming musik dan film biasanya memiliki fitur untuk merekomendasikan judul musik atau film
                      sesuai minat atau berdasarkan musik atau film yang kamu pilih sebelumnya. Dengan menggunakan algoritme khusus, aplikasi-aplikasi ini mempelajari musik atau film pilihan kamu untuk mengenali seleramu. Misalnya, untuk
                      mengenali sebuah lagu memiliki vokal yang dinamis, petikan gitar akustik, dan dimainkan pada kunci nada yang rendah. Apabila kamu memutar beberapa lagu dengan karakteristik tersebut, kamu akan mendapat rekomendasi lagu
                      lain dengan karakteristik serupa.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 mb-5">
          <div class="card text-center shadow rounded" data-aos="fade-left" data-aos-duration="1500">
            <div class="text-center">
              <img src="img/ai logo3.png" class="card-img-top" alt="product 3" style="width: 250px" />
            </div>

            <div class="card-body">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#PK">Pelayan konsumen virtual</button>

              <!-- Modal -->
              <div class="modal fade" id="PK" tabindex="-1" aria-labelledby="PK" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="PK">Pelayan konsumen virtual</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Hampir semua situs belanja daring berusaha memenuhi kebutuhan pelanggan, termasuk menyediakan fitur pelayan konsumen atau customer service. Namun, tak semua situs belanja memiliki karyawan khusus yang fokus mengerjakan
                      hal itu. Oleh karena itu, kehadiran AI sangat diperlukan. Kamu dapat menemukan situs-situs belanja daring yang menerapkan fitur chatbot untuk merespons masukan atau pertanyaan kamu secara otomatis. Fitur berbasis
                      teknologi AI ini dapat memahami bahasa dan pilihan kata yang kamu gunakan untuk menemukan keinginan kamu. Fitur ini dikembangkan dari salah satu cabang ilmu AI, yaitu pemrosesan bahasa alami atau natural language
                      processing (NLP).
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="text-center mb-2" data-aos="fade-up" data-aos-duration="1000">
      <img src="img/43160 [Converted].png" class="rounded" alt="order now" />
      <div class="text-center">
        <h3><a href="order.php">Order Now</a></h3>
      </div>
    </div>
    <!-- akhir dari service -->
    <!-- footer -->
    <section id="contact" class="contact">
      <div class="container pt-5 " data-aos="fade-left" data-aos-duration="1000">
        <div class="row justify-content-center">
          <div class="col-4 logobw">
            <img src="img/LOGO1 1.png" alt="">
          </div>
          <div class="col contact-data" data-aos="fade-right" data-aos-duration="1000">
              <i class="fa fa-map-marker"> Jln. Tluki 04, Semagar, Gunung Kidul, Cirebon, Jawa Timur</i>
              <br>
              <i class="fa fa-mobile"> +62 888 5130 7570 </i>
              <br>
              <i class="fa fa-envelope"><a href="#"> @amigos_gandos. ac.id</a></i>
              
          </div>
        </div>
      </div>
    </section >
    
    <footer class="footer" >
      <div class="row text-center visi pt-5">
        <p style="border-bottom: 3px solid #fff;"></p>
          <p style="color: #fff;">copyright &copy; 2022 | Samshan Tech</p>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script src="./js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>