
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- AOS Animate CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <title>Rayscar</title>
      <style>
        /* Style navbar */
        .logonav {
          width: 90px;
          height: 40px;
          transition: 0.5s;
        }

        .navbar-brand:hover .logonav{
          scale: 1.2;
        }

        .nav-item a{
          color: white !important;
          transition: 0.5s;
        }

        .nav-item:hover a{
          color: orange !important;
        }

        .dropdown-menu a{
          color: black !important;
          transition: 0.5s;
        }

        .dropdown-menu:hover a{
          color: orange !important;
          transition: 0.5s;
        }

        /* Produk terbaru */
        .linkproduk{
          color: orange !important;
        }

        /* Produk lainnya */
        * {box-sizing: border-box;}

        .produklainnya-thumbnail {
          position: relative;
          width: 100%;
          max-width: 400px;
        }

        .overlay {
          position: absolute;
          bottom: 0;
          background: rgb(0, 0, 0);
          background: rgba(0, 0, 0, 0.5); /* Black see-through */
          color: #f1f1f1;
          width: 100%;
          transition: .5s ease;
          opacity:0;
          color: white;
          font-size: 20px;
          padding: 20px;
          text-align: center;
        }

        .produklainnya-thumbnail:hover .overlay {
          opacity: 1;
        }

        .card {
        transition: all 0.3s ease;
        cursor: pointer
        }

        .card:hover {
        box-shadow: 5px 6px 6px 2px #e9ecef;
        transform: scale(1.1)
        }

        /* Style Footer */
        .footernav {
          width: 90px;
          height: 40px;
          transition: 0.5s;
        }

        .footer-content:hover .footernav{
          scale: 1.1;
        }

        .footeritem a{
          color: white;
          transition: 0.5s;
        }

        .footeritem:hover a{
          color: orange ;
        }
      </style>
  </head>
  <body>

<!-- Navbar -->
@include('NavFotViews.navbar')
<!-- /.navbar -->

<!-- Section Home Page slider -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('adminlte3')}}/dist/img/lamboheaderaventador.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-lg-block ">
        <h1>Lamborghini Aventador</h1>
        <h5><b>Create Your Aventador</b></h5>
        <p> 700 hp Power | 690Nm MaxSpeed | 350 kmph acceleration</p>
        <h3 class="mt-4">$517,770</h3>
        <a href=""><button type="button" class="btn btn-outline-light">Buy Now!</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('adminlte3')}}/dist/img/teslah2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-lg-block my-4">
        <h1>Tesla Model S</h1>
        <h5><b>Create Your Tesla Model S</b></h5>
        <h5 class="mt-2">396 mi Range | 200 mph Top Speed | 1020 hp Peak Power</h5>
        <h3 class="mt-4">$91,190</h3>
        <a href=""><button type="button" class="btn btn-outline-light">Buy Now!</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('adminlte3')}}/dist/img/urush2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-lg-block my-4">
      <h1>Lamborghini Urus </h1>
        <h5><b>Create Your Urus</b></h5>
        <p>3660 cc Power | 850Nm MaxSpeed | 305 kmph acceleration</p>
        <h3 class="mt-4">$272,000</h3>
        <a href=""><button type="button" class="btn btn-outline-light">Buy Now!</button></a>

      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Section Produk Terbaru -->
<section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-center mt-5" data-aos="fade-up">Recomandation Car</h1>
            <div class="row d-flex align-items-center">
                <div class="col-md-6 p-5 d-flex order-md-last justify-content-center align-items-center" >
                    <img src="{{asset('adminlte3')}}/dist/img/lamboaven.png" class="w-75" alt="">
                </div>
                <div class="col-md-6 p-5" >
                    <h4>Lamborghini Aventador</h4>
                    <p class="text-black-50 my-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, quas,
                    iure sed nihil pariatur dolor delen...</p>
                    <a href="#" class="linkproduk text-decoration-none"> &rarr; Lihat Produk</a>
                </div>
            </div>

            <div class="row d-flex align-items-center">
                <div class="col-md-6 p-5 d-flex justify-content-center align-items-center order-md-first" data-aos="fade-up">
                    <img src="{{asset('adminlte3')}}/dist/img/tesla1.png" class="w-75" alt="">
                </div>
                <div class="col-md-6 p-5 justify-content-center align-items-center" data-aos="fade-up">
                    <h4>Tesla Model S</h4>
                    <p class="text-black-50 my-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, quas,
                        iure sed nihil pariatur dolor delen...</p>
                    <a href="#" class="linkproduk text-decoration-none"> &rarr; Lihat Produk</a>
                </div>
            </div>

            <div class="row d-flex align-items-center">
                <div class="col-md-6 p-5 d-flex order-md-last justify-content-center align-items-center" data-aos="fade-up">
                    <img src="{{asset('adminlte3')}}/dist/img/lambourus.png" class="w-75" alt="">
                </div>
                <div class="col-md-6 p-5" data-aos="fade-up">
                    <h4>Lamborghini Urus</h4>
                    <p class="text-black-50 my-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, quas,
                        iure sed nihil pariatur dolor delen...</p>
                    <a href="#" class="linkproduk text-decoration-none"> &rarr; Lihat Produk</a>
                </div>
            </div>

            <div class="row d-flex align-items-center">
                <div class="col-md-6 p-5 d-flex justify-content-center align-items-center order-md-first" data-aos="fade-up">
                    <img src="{{asset('adminlte3')}}/dist/img/lambohurucan.png" class="w-75" alt="">
                </div>
                <div class="col-md-6 p-5 " data-aos="fade-up">
                    <h4>Lamborghini Hurucan</h4>
                    <p class="text-black-50 my-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit, quas,
                        iure sed nihil pariatur dolor delen...</p>
                    <a href="#" class="linkproduk text-decoration-none"> &rarr; Lihat Produk</a>
                </div>
            </div>

        </div>
    </section>

     <!-- Section: Iframe Produk baru andalan kami-->
  <section class="text-center text-white" style="background-image: linear-gradient(to right, #45637d , black);" data-aos="fade-up">
  <div class="container p-4">
      <div class="row d-flex justify-content-center">

        <div class="col-lg-12">
        <h1 class="text-white mt-3" data-aos="fade-up"><b>Best Recomendation!</b></h1>
        </div>
        <div class="col-lg-6">
        <h2 class="text-white mb-4 mt-4" data-aos="fade-up">Lamborghini Aventador</h2>
          <div class="ratio ratio-16x9" data-aos="fade-up">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8j_Oef0mN80" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-6">
        <h2 class="text-white mb-4 mt-4" data-aos="fade-up">Tesla Model S</h2>
          <div class="ratio ratio-16x9" data-aos="fade-up">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XB2g7-HgE_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Iframe -->



    <!-- Section Produk lainnya -->
    <section id="portfolio">
        <div class="container text-center py-5">
            <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <a href="" class="text-decoration-none portfolio-button mx-3">
                    <div class="card">
                        <div
                            class="produklainnya-thumbnail w-100 d-flex align-items-center justify-content-center overflow-hidden">
                            <img src="{{asset('adminlte3')}}/dist/img/lamboaven.png" class="img-produklainnya img-fluid" style="max-height:200px"
                                loading="lazy" alt="">
                                <div class="overlay">$517,770</div>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center" style="min-height: 100px;">
                            <h6 class="card-title text-secondary">Lamborghini Aventador</h6>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                <a href="" class="text-decoration-none portfolio-button mx-3">
                    <div class="card">
                        <div
                            class="produklainnya-thumbnail w-100 d-flex align-items-center justify-content-center overflow-hidden">
                            <img src="{{asset('adminlte3')}}/dist/img/tesla1.png" class="img-produklainnya img-fluid" style="max-height:200px"
                                loading="lazy" alt="">
                                <div class="overlay">$91,190</div>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center" style="min-height: 100px;">
                            <h6 class="card-title text-secondary">Tesla Model S</h6>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                <a href="" class="text-decoration-none portfolio-button mx-3">
                    <div class="card">
                        <div
                            class="produklainnya-thumbnail w-100 d-flex align-items-center justify-content-center overflow-hidden">
                            <img src="{{asset('adminlte3')}}/dist/img/lambourus.png" class="img-produklainnya img-fluid" style="max-height:200px"
                                loading="lazy" alt="">
                                <div class="overlay">$272,000</div>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center" style="min-height: 100px;">
                            <h6 class="card-title text-secondary">Lamborghini Urus</h6>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center text-white" style="background-image: linear-gradient(to right, #45637d , black);" data-aos="fade-up">
        <div class="container p-4">
            <div class="row d-flex justify-content-center">

              <div class="col-lg-12 mt-4">
                <h1 class="text-center">Do You want Some Battle Tanks?</h1>
              </div>
              <div class="col-lg-6 mt-5">
                <div class="ratio ratio-16x9" data-aos="fade-up">
                    <img src="{{asset('adminlte3')}}/dist/img/Leopard-1A5-3.png" class="w-75" alt="">
                </div>
              </div>
              <div class="col-lg-6 mt-5">
              <h2 class="text-white mb-4 mt-4" data-aos="fade-up">Leopard 1A5 Main Battle Tank</h2>
                <div class="" data-aos="fade-up">
                    <p class=" my-4">
                        Our Leopards are our most popular tanks.  A true tank that is big, fast, and easy to drive.   While not as heavily armored as other tanks from the Cold War era,  it was faster and more maneuverable, making the Leopard truly a “fast cat” as the name implies.</p>
                </div>
                <a href=""><button type="button" data-aos="fade-up" class="btn btn-outline-light">Buy Now!</button></a>
              </div>
            </div>
          </section>

    <section id="portfolio">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up">
                <a href="" class="text-decoration-none portfolio-button mx-3">
                    <div class="card">
                        <div
                            class="produklainnya-thumbnail w-100 d-flex align-items-center justify-content-center overflow-hidden">
                            <img src="{{asset('adminlte3')}}/dist/img/lambohurucan.png" class="img-produklainnya img-fluid" style="max-height:200px"
                                loading="lazy" alt="">
                                <div class="overlay">$331,469</div>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center" style="min-height: 100px;">
                            <h6 class="card-title text-secondary">Lamborghini Hurucan</h6>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                <a href="" class="text-decoration-none portfolio-button mx-3">
                    <div class="card">
                        <div
                            class="produklainnya-thumbnail w-100 d-flex align-items-center justify-content-center overflow-hidden">
                            <img src="{{asset('adminlte3')}}/dist/img/Leopard-1A5-3.png" class="img-produklainnya img-fluid" style="max-height:200px"
                                loading="lazy" alt="">
                                <div class="overlay">$559,119</div>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center" style="min-height: 100px;">
                            <h6 class="card-title text-secondary">Leopard-1A5-3</h6>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                <a href="" class="text-decoration-none portfolio-button mx-3">
                    <div class="card">
                        <div
                            class="produklainnya-thumbnail w-100 d-flex align-items-center justify-content-center overflow-hidden">
                            <img src="{{asset('adminlte3')}}/dist/img/tesla3.png" class="img-produklainnya img-fluid" style="max-height:200px"
                                loading="lazy" alt="">
                                <div class="overlay">$39,490</div>
                        </div>
                        <div class="card-body d-flex justify-content-center align-items-center" style="min-height: 100px;">
                            <h6 class="card-title text-secondary">Tesla Model 3</h6>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </section>

  <!-- Navbar -->
@include('NavFotViews.footer')
<!-- /.navbar -->
 <!-- Section: Iframe -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/54e3c01814.js" crossorigin="anonymous"></script>
    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
      });

    </script>
    <!-- script -->
  </body>
</html>
