<x-template-layout>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Album example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    

    

<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Gallery Album</h1>
        <p class="lead text-muted">Terdapat beberapa macam gambar dari Tumbuhan yang dideteksi serta komponen yang akan digunakan dalam merancang Aplikasi Visual Tech Plant.</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://www.educba.com/academy/wp-content/uploads/2019/12/TensorFlow-Versions.jpg" alt="chair">
            <div class="card-body">
              <p class="card-text">Tensorflow memungkinkan developer untuk membuat grafik aliran data (dataflow graph), yaitu struktur yang mendeskripsikan bagaimana data yang digunakan bergerak melalui tampilan grafis atau serangkaian pemprosesan node. Setiap node di dalam grafik mewakili operasi matematika, dan setiap koneksi atau ujung antara node tersebut merupakan baris data multidimensi (multidimentional data array) atau yang disebut juga tensor. Tensorflow menyediakan itu semua untuk programmer dengan menggunakan bahasa pemrograman Python. Python sangat mudah dipelajari dan digunakan, jika Anda belum familiar, Anda dapat membaca artikel : Dasar bahasa pemrograman Python. Node dan Tensor di dalam Tensorflow merupakan suatu object pada Python. Selain itu, aplikasi Tensorflow itu sendiri adalah aplikasi yang ada di dalam Python.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://www.nonteek.com/wp-content/uploads/2018/06/yologo_2.png" alt="chair">
            <div class="card-body">
              <p class="card-text">Algoritma YOLO ini adalah merupakan Real Object Deteciton yang baru-baru ini sangat populer untuk dikembangkan. Kebanyakan sistem deteksi sebelumnya menggunakan pengklasifikasian atau localizer untuk melakukan deteksi dengan menerapkan model ke gambar di beberapa lokasi dan skala dan memberi nilai pada gambar sebagai bahan untuk pendeteksian. YOLO menggunakan pendekan yang sangat berbeda dengan algoritma sebelumnya, yakni menerapkan jaringan syaraf tunggal pada keseluruhan gambar. Jaringan ini akan membagi gambar menjadi wilayah-wilayah kemudian memprediksi kotak pembatas dan probabilitas, untuk setiap kotak wilayah pembatas ditimbang probabilitasnya untuk mengklasifikasian sebagai objek atau bukan.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Carica_papaya_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-029.jpg/220px-Carica_papaya_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-029.jpg" alt="chair">
          <div class="card-body">
              <p class="card-text">Pepaya (Carica papaya L.), atau battek adalah tumbuhan yang diperkirakan berasal dari Meksiko bagian selatan dan bagian utara dari Amerika Selatan. Pepaya kini telah menyebar luas dan banyak ditanam di seluruh daerah tropis untuk diambil buahnya. C. papaya adalah satu-satunya jenis dalam genus Carica. Nama pepaya dalam bahasa Indonesia diambil dari bahasa Belanda, "papaja", yang pada gilirannya juga mengambil dari nama bahasa Arawak, "papaya". Dalam bahasa Jawa pepaya disebut "katès" dan dalam bahasa Sunda "gedang".</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Mangga_gedong_gincu_071021-0845_tmo.jpg/250px-Mangga_gedong_gincu_071021-0845_tmo.jpg" alt="chair">
            <div class="card-body">
              <p class="card-text">Mangga termasuk ke dalam genus Mangifera, yang terdiri dari 35-40 anggota dari famili Anacardiaceae. Nama "mangga" berasal dari bahasa Tamil, mankay, yang berarti man "pohon mangga" + kay "buah".[2] Kata ini dibawa ke Eropa oleh orang-orang Portugis dan diserap menjadi manga (bahasa Portugis), mango (bahasa Spanyol dan Inggris) dan lainnya.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Syzygium_samarangense_%28jamalac_ou_jambose%29.jpg/250px-Syzygium_samarangense_%28jamalac_ou_jambose%29.jpg" alt="chair">
            <div class="card-body">
              <p class="card-text">Jambu air adalah tumbuhan dalam suku jambu-jambuan atau Myrtaceae yang berasal dari Asia Tenggara. Jambu air sebetulnya berbeda dengan jambu semarang (Syzygium samarangense), kerabat dekatnya yang memiliki pohon dan buah hampir serupa. Beberapa kultivarnya bahkan sukar dibedakan, sehingga keduanya kerap dinamai dengan nama umum jambu air atau jambu saja. Jambu air mudah ditanam dan dibudidaya.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Psidium_guajava_fruit.jpg/250px-Psidium_guajava_fruit.jpg" alt="chair">
            <div class="card-body">
              <p class="card-text">Jambu biji (Psidium guajava) atau sering juga disebut jambu batu, jambu siki dan jambu klutuk adalah tanaman tropis yang berasal dari Brasil, disebarkan ke Indonesia melalui Thailand. Jambu batu memiliki buah yang berwarna hijau dengan daging buah berwarna hijau atau merah dan berasa asam-manis. Buah jambu batu dikenal mengandung banyak vitamin C.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">        
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://asset.kompas.com/crops/8wMui3IswesPUmAEgsOH3xn6Msw=/257x0:1108x851/340x340/data/photo/2022/08/18/62fe417de10da.jpg" alt="chair">
            <div class="card-body">
              <p class="card-text">Lidah buaya (Aloe vera) adalah spesies tumbuhan dengan daun berdaging tebal dari genus Aloe. Tumbuhan ini bersifat menahun, berasal dari Jazirah Arab, dan tanaman liarnya telah menyebar ke kawasan beriklim tropis, semi-tropis, dan kering di berbagai belahan dunia. Tanaman lidah buaya banyak dibudidayakan untuk pertanian, pengobatan, dan tanaman hias, dan dapat juga ditanam di dalam pot.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://asset.kompas.com/crops/pit1UBfCAWOIXnCAgPhVCwBTDhw=/275x56:725x507/340x340/data/photo/2022/04/24/6265658bd0983.jpg" alt="chair">
            <div class="card-body">
              <p class="card-text">Eceng gondok hidup mengapung di air dan kadang-kadang berakar dalam tanah. Tingginya sekitar 0,4–0,8 meter. Tidak mempunyai batang. Daunnya tunggal dan berbentuk oval. Ujung dan pangkalnya meruncing, pangkal tangkai daun menggelembung. Permukaan daunnya licin dan berwarna hijau.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
              
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://asset.kompas.com/crops/HMZcaDUPsQiHYHbsQiUu6dBjIaA=/193x0:1633x1440/340x340/data/photo/2022/03/10/622a2bb222a6c.jpg" alt="chair">
           <div class="card-body">
              <p class="card-text">Tumbuhan lumut adalah sekumpulan tumbuhan kecil yang termasuk dalam Bryophytina (dari bahasa Yunani bryum, "lumut"). Tumbuhan ini sudah menunjukkan diferensiasi tegas antara organ penyerap hara dan organ fotosintetik namun belum memiliki akar dan daun sejati. Kelompok tumbuhan ini juga belum memiliki pembuluh sejati.</p>
              <div class="d-flex justify-content-between align-items-center">
 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

 <script src="{{asset('front/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      
  </body>
</html>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <p>
          <a href="#" class="btn btn-primary my-2">Next</a>
          <a href="/dashboard" class="btn btn-secondary my-2">Previous</a>
        </p>
</div>
</x-template-layout>