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
    <meta name="description" content="<?=$dataArtikel->meta_deksripsi?>" />
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/aos.css" />
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
        
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-8">
                      <div>
                        <h1 class="font-weight-600 mb-1">
                           <?=$dataArtikel->judul;?>
                        </h1>
                        
                        <div class="rotate-img">
                          <img
                          src="<?=base_url();?>/assets/img/<?=$dataArtikel->photo?>"
                            alt="banner"
                            class="img-fluid mt-4 mb-4"
                          />
                        </div>
                        <p class="mb-4 fs-15">
                        <?=$dataArtikel->isi;?>
                          </p>
                      </div>
                     
                        
                      
                      <div class="post-comment-section">
                          <h2  style="text-align:left;" > <i> <u style="
                            text-decoration-color:rgb(209, 166, 26)"> READ </u>NEXT IN MOVIE </i></h2>
                            <br/>
                        <div class="row">
                        <?php
                        foreach ($dataArtikelKategori as $ArtikelKategori) {
                        ?>
                            <div class="col-sm-6">
                            <div class="post-author">
                              <div class="rotate-img">
                                <img
                                src="<?=base_url();?>/assets/img/<?=$ArtikelKategori->photo?>"
                                  alt="banner"
                                  class="img-fluid"
                                />
                              </div>
                              <div class="post-author-content">
                                  
                                <h5 class="mb-1">
                                    <a style=":black" href="<?=base_url("Blog/artikel/")?><?=$ArtikelKategori->id?>">
                                    <?=$ArtikelKategori->judul?>
                                    </a>
                                </h5>
                                
                              </div>
                            </div>
                          </div>
                        <?PHP }?> 
                        </div>
                      </div>
                    </div>

                      
                    <div class="col-lg-4">
                      
                      
                      <div class="trending">
                          <h1  style="text-align:left;" > <i> <u style="
                            text-decoration-color:rgb(209, 166, 26)"> POPULAR</u> NOW </i></h1>
                            <br/>
                            <?php
                    foreach ($dataArtikelTerbaru as $ArtikelTebaru) {
                    ?>
                        <div class="mb-4">
                          <div class="rotate-img">
                            <img
                              src="<?=base_url();?>/assets/img/<?=$ArtikelTebaru->photo?>"
                              alt="banner"
                              class="img-fluid"
                            />
                          </div>
                          <h3 class="mt-3 font-weight-600">
                              <a style="color:black" href="<?=base_url("Blog/artikel/")?><?=$ArtikelTebaru->id?>">
                                  <?=$ArtikelTebaru->judul?>
                                </a>
                          </h3>
                          
                        </div>
                        <?PHP } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:../partials/_footer.html -->
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
    <!-- End custom js for this page-->
    <script src="<?php echo base_url(); ?>assets/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="<?php echo base_url(); ?>assets/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="<?php echo base_url(); ?>assets/demo.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery.easeScroll.js"></script>
  </body>
</html>
