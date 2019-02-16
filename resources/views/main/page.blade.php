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
      <section class="py-0">

        <div class="bg-holder overlay" style="background-image:url(assets/img/headers/header-single-blog.jpg);" data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-end minh-100vh">
            <div class="col-lg-8 mb-6">
              <h2 class="text-white display-4 fs-3 fs-md-4" data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll"><?= $page->getTitle() ?></h2>
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
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col">
                      <a class="text-sans-serif text-500" href="#"><?= $page->getCreated() ?></a>
                    </div>
                  <!--<?php include('includes/likes.inc.php') ?>-->
                  </div>
                  <h3 class="mt-4"><?= $page->getDesciption() ?></h3>
                  <p class="mt-4"><?= $page->getBody() ?></p>

                  <!--<?php include('includes/sideBar.inc.php'); ?>-->
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
