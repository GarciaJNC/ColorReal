    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main minh-100vh" id="top">


      <!-- ============================================-->
      <!-- Preloader ==================================-->
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale-pulse-out-rapid">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
      <!-- ============================================-->
      <!-- End of Preloader ===========================-->


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-9 py-lg-10" id="page-blog" data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">

        <div class="bg-holder" style="background-image:url(img/blog-header.jpg);">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col">
              <div class="overflow-hidden">
                <h1 class="text-white text-underline" data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll">Coloreal's Blog</h1>
              </div>
              <div class="overflow-hidden">
                <h6 class="mb-0 text-white ls-2 text-uppercase" data-zanim-xs='{"delay":0.8}' data-zanim-trigger="scroll">Stories to write home about</h6>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row">
            <div class="col-lg-8">
                

              <?php 
              
              while($page = $result->fetch()) {
              
                  print '<div class="mb-6 mb-xl-8">
                    <a class="text-sans-serif text-500" href="#">May 15, 2018</a>
                    <a class="text-black" href="page-blog-single.html">
                      <h3>
                      <a href="page-blog-single.php?id='. $page->getId() .'">
                      '. $page->getTitle() .'
                      </a>
                      </h3>
                    </a>
                     <h4 class="font-weight-normal text-700 mt-3">
                        '. $page->getDesciption() .'
                     </h4>
                    <a class="btn btn-link pl-0" href="page-blog-single.php?id='. $page->getId() .'">read more<span class="d-inline-block ml-1">&xrarr;</span></a>
                    <br>
                    <a href="#"><span class="far fa-heart text-300 mt-3"></span><span class="text-400 text-sans-serif pl-1">15</span></a>
                    <a href="#"><span class="far fa-comment text-300 mt-3 ml-4"></span><span class="text-400 text-sans-serif pl-1">33</span></a>
                  </div>';
              
              }

             // include('includes/pagination.inc.php');
            
            ?>
              
            </div>
            
        <!--<?php include('includes/sideBarMainBlog.inc.php'); ?>-->
        
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->