<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    theme: {
      extend: {
        gridTemplateRows: {
          '[auto,auto,1fr]': 'auto auto 1fr',
        },
      },
    },
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->


<x-template-layout>
<h1 class="text-3xl text-black pb-6">{{$title}}</h1>




<div class="bg-white">
  <div class="pt-6">
    <nav aria-label="Breadcrumb">
      <ol role="list" class="mx-auto flex max-w-2100 items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
     

       
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Carousel Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    

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

    
    <!-- Custom styles for this template -->
    <link href="{{asset('front/carousel.css')}}" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Carousel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://www.nonteek.com/wp-content/uploads/2018/06/yologo_2.png" alt="chair">
        <div class="container">
          
          <div class="carousel-caption text-start">
          <div class="carousel-caption">
          <p>Yolo Merupakan salah satu fitur yang kami gunakan untuk merancang aplikasi visual tech plant</p>
            <p><a class="btn btn-lg btn-primary" href="/gallery">Learn more</a></p>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://www.educba.com/academy/wp-content/uploads/2019/12/TensorFlow-Versions.jpg" alt="chair">
        <div class="container">
          <div class="carousel-caption">
            <p><a class="btn btn-lg btn-primary" href="/gallery">Learn more</a></p>
           
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://apkresult.com/Logos/apk-pensionskasseresult.jpg" alt="chair">
        <div class="container">
        <div class="carousel-caption">
            <p><a class="btn btn-lg btn-primary" href="/gallery">Browse Gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://asset.kompas.com/crops/pit1UBfCAWOIXnCAgPhVCwBTDhw=/275x56:725x507/340x340/data/photo/2022/04/24/6265658bd0983.jpg" alt="chair">
        <h2 class="fw-normal">Tumbuhan Hidrofit</h2>
        <p>Merupakan tumbuhan yang hidup di kawasan perairan. Karakteristik tumbuhan hidrofit, yakni berdaun lebar dan tipis, batangnya berongga, serta punya akar serabut dan stomata. Contohnya tanaman bakau, eceng gondok, teratai, dan kangkung air.</p>
        <p><a class="btn btn-secondary" href="/gallery">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://asset.kompas.com/crops/HMZcaDUPsQiHYHbsQiUu6dBjIaA=/193x0:1633x1440/340x340/data/photo/2022/03/10/622a2bb222a6c.jpg" alt="chair">
       <h2 class="fw-normal">Tumbuhan Higrofit</h2>
        <p>Jenis tumbuhan ini menyukai lingkungan yang lembab. Karakteristiknya, antara lain berdaun lebar dan tipis, mempunyai banyak stomata untuk mempercepat penguapan (transpirasi), serta memiliki lapisan kutikula (lilin) yang tipis. Contohnya lumut, kemunting, dan paku.</p>
        <p><a class="btn btn-secondary" href="/gallery">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://asset.kompas.com/crops/8wMui3IswesPUmAEgsOH3xn6Msw=/257x0:1108x851/340x340/data/photo/2022/08/18/62fe417de10da.jpg" alt="chair">
        <h2 class="fw-normal">Tumbuhan Xerofit</h2>
        <p>Merupakan jenis tumbuhan yang bisa hidup di kawasan kering, seperti gurun. Contoh tumbuhannya, yakni lidah buaya, kaktus, dan lidah mertua. Karakteristik tumbuhan xerofit adalah berdaun terbal, beberapa spesiesnya tidak memiliki daun tetapi duri, struktur akarnya panjang, dan memiliki lapisan kutikula di permukaan daunnya.</p>
        <p><a class="btn btn-secondary" href="/gallery">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Visual Tech Plant, <span class="text-muted">website berbasis Aplikasi pendeteksi Tumbuhan</span></h2>
        <p class="lead">Sebuah Aplikasi yang nantinya akan mendetksi berbagai macam jenis tumbuhan, ketika kamera dihadapkan ke tumbuhan, maka aplikasi akan secara langsung memberitahukan nama dari tumbuhan tersebut.</p>
      </div>
      <div class="col-md-5">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://agrozine.id/wp-content/uploads/2020/12/Aplikasi-prediksi-penyakit-tanaman.jpg" alt="chair">
       </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Komponen apa saja yang tersedia <span class="text-muted">di aplikasi Visual Tech Plant.</span></h2>
        <p class="lead">Yolo dan TensorFlow merupakan salah satu Komponen yang kami gunakan untuk merancang Aplikasi Visual Tech Plant.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://www.opensourceagenda.com/projects/tiny-yolo-tensorflow/image.png" alt="chair">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Fitur apa saja yang tersedia di <span class="text-muted">Aplikasi Visual Tech Plant.</span></h2>
        <p class="lead">Fitur yang tersedia salah satunya yaitu fitur pendeteksi Tumbuhan.</p>
      </div>
      <div class="col-md-5">
      <img class="w-full mx-auto rounded-xl shadow-soft-3xl" src="https://tse1.mm.bing.net/th?id=OIP.B6SjDG2O6mrxjhnWkY61fgHaEK&pid=Api&P=0" alt="chair">
        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
 
</main>


    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      
  </body>
</html>

</x-template-layout>