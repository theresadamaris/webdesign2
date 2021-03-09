<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Screen Rant</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="<?php echo base_url(); ?>assets/materialdesignicons.min.css"
    />
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/aos.css" />

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              
                
              <div class="navbar-bottom">
                <br/>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="#"
                      >  <h1 style="color:white">SCREEN<span style="color:rgb(209, 166, 26)">RANT</span></h1></a>
                 
                    </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link"  href="<?=base_url()?>">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="<?=base_url("Blog/kategori/Exclusive")?>">EXCLUSIVE</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="<?=base_url("Blog/kategori/Movie News")?>">MOVIE NEWS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="<?=base_url("Blog/kategori/TV News")?>">TV NEWS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link"  href="<?=base_url("Blog/kategori/Review")?>">REVIEW</a>
                          </li>
                        
                      </ul>
                    </div>
                  </div>
                  
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial -->
       
          
         
        </div>
        <div class="content-wrapper" >

            <br/>
          <div class="container">
          <div class="row" data-aos="fade-up">
              <div class="col-xl-7 stretch-card grid-margin">
                <div class="position-relative">
                  <img
                    src="<?=base_url();?>/assets/img/<?=$dataArtikelHeader->photo?>"
                    alt="banner"
                    class="img-fluid"
                  />
                  <div class="banner-content">
                   
                    <h2 style="color:rgb(209, 166, 26)" ><?=$dataArtikelHeader->kategori?></h2>
                    <a style="color:white" href="<?=base_url("Blog/artikel/")?><?=$dataArtikelHeader->id?>">
                    <h1 class="mb-2">
                    <?=$dataArtikelHeader->judul?>
                    </h1>
                    </a>
                    
                  </div>
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                
                
                  <div class="card-body">
                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                      <div class="col-sm-8">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                            src="<?=base_url();?>/assets/img/<?=$dataArtikelHeader2->photo?>"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="fs-12">
                              <span style="color:rgb(209, 166, 26)" > <?=$dataArtikelHeader2->kategori?></span>
                            </div>
                        <a style="color:white" href="<?=base_url("Blog/artikel/")?><?=$dataArtikelHeader2->id?>">
                        <h5 style="color:white"><?=$dataArtikelHeader2->judul?></h5>
                        </a>
                        </div>
                      </div>
                      <div class="col-sm-8">
                          <div class="position-relative">
                            <div class="rotate-img">
                              <img
                              src="<?=base_url();?>/assets/img/<?=$dataArtikelHeader3->photo?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                            <div class="fs-12">
                                <span style="color:rgb(209, 166, 26)" > <?=$dataArtikelHeader3->kategori?></span>
                              </div>
                          <a style="color:white"  href="<?=base_url("Blog/artikel/")?><?=$dataArtikelHeader3->id?>">
                          <h6 style="color:white"><?=$dataArtikelHeader3->judul?></h6>
                          </a>
                        </div>
                      </div>
                          
                    </div>

                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between" >
                     <div class="col-sm-8">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                            src="<?=base_url();?>/assets/img/<?=$dataArtikelHeader4->photo?>"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="fs-12">
                              <span style="color:rgb(209, 166, 26)" > <?=$dataArtikelHeader4->kategori?> </span>
                            </div>
                        <a style="color:white"  href="<?=base_url("Blog/artikel/")?><?=$dataArtikelHeader4->id?>">
                        <h6 style="color:white"><?=$dataArtikelHeader4->judul?></h6>
                        </a>
                        </div>
                      </div>
                      <div class="col-sm-8">
                          <div class="position-relative">
                            <div class="rotate-img">
                              <img
                              src="<?=base_url();?>/assets/img/<?=$dataArtikelHeader5->photo?>"
                                alt="thumb"
                                class="img-fluid"
                              />
                            </div>
                            <div class="fs-12">
                                <span style="color:rgb(209, 166, 26)" > <?=$dataArtikelHeader5->kategori?> </span>
                              </div>
                          <a style="color:white" href="<?=base_url("Blog/artikel/")?><?=$dataArtikelHeader5->id?>">
                          <h6 style="color:white"><?=$dataArtikelHeader5->judul?></h6>
                          </a>
                          </div>
                          </div>
                      </div>

                  
               
                
                </div> 
              </div> 
            </div> 
          </div>
           
        </div>
           
         <!-- lates -->
       
        
              <div class="col-lg-12 stretch-card grid-margin">
              
                  <div class="col-sm-1">
                      <div class="row">
                          
                      </div>
                    </div>
                <div class="card">
                    
                  <div class="card-body">
                      <h2  style="text-align:left;" > <i> <u style="
                         text-decoration-color:rgb(209, 166, 26)"> <?=$nama_kategori;?></u> </i></h2>
                   <?php
                    foreach ($dataArtikelKategori as $ArtikelKategori) {
                    ?>
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img
                              src="<?=base_url();?>/assets/img/<?=$ArtikelKategori->photo?>"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                          <div class="fs-12">
                              <strong style="color:rgb(209, 166, 26)" ><?=$ArtikelKategori->kategori?></strong>
                            </div>
                        
                          <a style="color:black" href="<?=base_url("Blog/artikel/")?><?=$ArtikelKategori->id?>">
                          <h2 class="mb-2 font-weight-600">
                          <?=$ArtikelKategori->judul?>
                          </h2>
                          </a>
                          
                        
                        <p class="mb-0">
                          <?php
                          $isi=substr($ArtikelKategori->isi,0,150);
                          echo $isi; ?>...
                        </p>
                      </div>
                    </div>
                      <?PHP } ?>
                  
                  </div>
                </div>
              
              
                
               <!-- Trending -->
                
              <div class="col-sm-4">
                <div class="card-title">
                  <br/>
                    <h2 style="text-align:left;" > <i> 
                    <u style=" text-decoration-color:rgb(209, 166, 26)"> RANDOM</u>POST </i></h2>
                   
                </div>
                <?php
                    foreach ($dataArtikelRandom as $ArtikelRandom) {
                    ?>
                <div class="border-bottom pb-3">
                  <div class="rotate-img">
                    <img
                    src="<?=base_url();?>/assets/img/<?=$ArtikelRandom->photo?>"
                      alt="thumb"
                      class="img-fluid"
                    />
                  </div>
                  <div class="fs-12">
                      <strong style="color:rgb(209, 191, 26)" > <?=$ArtikelRandom->kategori?></strong>
                    </div>
                  <a style="color:rgb(255, 255, 255)" href="<?=base_url("Blog/artikel/")?><?=$ArtikelRandom->id?>">
                  <p class="fs-16 font-weight-600 mb-0 mt-3">
                  <?=$ArtikelRandom->judul?>
                  </p>
                  </a>
                  
                </div>
                <?PHP } ?>

                </div>
              </div>
              <div class="col-sm-1">
                  <div class="row">
                      
                  </div>
                </div>
            </div>
          
           
            
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="footer-top">
            <div class="container">
                <h1 style="color:white;text-align:center">SCREEN<span style="color:rgb(209, 166, 26)">RANT</span></h1></a>
                 <br/>
                 <h5 style="color:white;text-align:center"> HOME  &nbsp; &nbsp; CONTACT US  &nbsp; &nbsp; TERMS &nbsp; &nbsp; PRIVACY &nbsp; &nbsp; COPYRIGHT &nbsp;&nbsp; ABOUT US</h5>
                 <h5 style="color:white;text-align:center"> CORRECTION POLICY &nbsp; &nbsp; OWNERSHIP POLICY</h5>
                 <p  style="color:white;text-align:center"> Copyright 2021 screenrant.com </p>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="<?php echo base_url(); ?>assets/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="<?php echo base_url(); ?>assets/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url(); ?>assets/demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
