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
      <section class="py-lg-7" id="page-portfolio">

        <div class="container">
          <div class="row mb-5 mb-lg-7">
            <div class="col-lg-6">
              <h1 class="text-underline d-inline fs-4 fs-md-5"><?= $row[0] ?></h1>
              <p class="mt-3"><?= $row[1] ?></p>
            </div>
          </div>
          <div class="sortable minh-100vh" data-options='{"layoutMode":"packery"}'>
            <div class="menu mb-2">
              <!--<div class="item active" data-filter="*">all</div>-->
              <!--<div class="item" data-filter=".<?= $row[2] ?>"><?= $row[2] ?></div>-->
              <!--<div class="item" data-filter=".<?= $row[3] ?>"><?= $row[3] ?></div>-->
              <!--<div class="item" data-filter=".<?= $row[4] ?>"><?= $row[4] ?></div>-->
              <!--<div class="item" data-filter=".<?= $row[5] ?>"><?= $row[5] ?></div>-->
            </div>
            <div class="row no-gutters sortable-container sortable-container-gutter-fix">
              <div class="col-6 col-md-3 sortable-item p-2 interior">
                <div class="hoverbox rounded overflow-hidden" data-zanim-xs='{"animation":"zoom-in"}' data-zanim-trigger="scroll">
                  <img class="w-100" src="img/<?= $rowImg[0] ?>" alt="" />
                  <div class="hoverbox-content bg-dark d-flex align-items-center justify-content-center text-center">
                    <div class="px-4">
                      <h5 class="text-white"><?= $row[6] ?></h5>
                      <a class="btn btn-outline-light btn-xs mt-3" href="page-casestudy.html"><?= $row[7] ?></a>
                    </div>
                  </div>
                </div>
              </div>
              <a class="col-6 col-md-3 sortable-item p-2 photography" href="img/<?= $rowImg[1] ?>" data-lightbox="image" data-title="my caption">
                <img class="rounded w-100 fit-cover" src="img/<?= $rowImg[1] ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
              </a>
              <a class="col-6 col-md-3 sortable-item p-2 photography" href="img/<?= $rowImg[2] ?>" data-lightbox="image" data-title="my caption">
                <img class="rounded w-100 fit-cover" src="img/<?= $rowImg[2] ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.7}' data-zanim-trigger="scroll" />
              </a>
              <a class="col-6 col-md-3 sortable-item p-2 studio" href="img/<?= $rowImg[3] ?>" data-lightbox="image" data-title="my caption">
                <img class="rounded w-100 fit-cover" src="img/<?= $rowImg[3] ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.4}' data-zanim-trigger="scroll" />
              </a>
              <div class="col-6 col-md-3 sortable-item p-2 interior">
                <div class="hoverbox rounded overflow-hidden" data-zanim-xs='{"animation":"zoom-in","delay":0.2}' data-zanim-trigger="scroll">
                  <img class="w-100 fit-cover" src="img/<?= $rowImg[4] ?>" alt="" />
                  <div class="hoverbox-content bg-dark d-flex align-items-center justify-content-center text-center">
                    <div class="px-4">
                      <h5 class="text-white"><?= $row[8] ?></h5>
                      <a class="btn btn-outline-light btn-xs mt-3" href="page-casestudy.html"><?= $row[9] ?></a>
                    </div>
                  </div>
                </div>
              </div>
              <a class="col-6 col-md-3 sortable-item p-2 studio illustration" href="img/<?= $rowImg[5] ?>" data-lightbox="image" data-title="my caption">
                <img class="rounded w-100 fit-cover" src="img/<?= $rowImg[5] ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.3}' data-zanim-trigger="scroll" />
              </a>
              <a class="col-6 col-md-3 sortable-item p-2 photography" href="img/<?= $rowImg[6] ?>" data-lightbox="image" data-title="my caption">
                <img class="rounded w-100 fit-cover" src="img/<?= $rowImg[6] ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.5}' data-zanim-trigger="scroll" />
              </a>
              <div class="col-6 col-md-3 sortable-item p-2 illustration">
                <div class="position-relative">
                  <img class="rounded w-100 fit-cover" src="img/<?= $rowImg[7] ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.6}' data-zanim-trigger="scroll" />
                  <a class="video-modal d-flex align-items-end justify-content-end h-100 pb-3 pr-3 position-absolute b-0 r-0" href="https://www.youtube.com/watch?v=HbAzApdYtdw" data-start="01" data-end="64">
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 274.19 274.19" data-zanim-svg='{"duration":2,"ease":"CubicBezier","trigger":"scroll"}'>
                      <defs>
                        <style>
                          .play-path {
                            fill: none;
                            stroke: #ffffff;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 12px;
                          }
                        </style>
                      </defs>
                      <g>
                        <path class="play-path" d="M208.31,29.4A129.12,129.12,0,1,1,137.1,8m-1.48,170.53L199.94,137,104.07,79.46v113"></path>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="col-12 col-sm-6 sortable-item p-2 illustration">
                <div class="embed-responsive embed-responsive-4by3">
                  <div class="owl-carousel owl-theme owl-dots-inner owl-theme-white embed-responsive-item" data-options='{"items":1,"autoplay":true,"loop":true,"animateOut":"fadeOut","nav":true}' data-zanim-xs='{"animation":"zoom-in","delay":0.8}' data-zanim-trigger="scroll">
                    <img class="w-100 fit-cover rounded" src="img/<?= $rowImg[8] ?>" alt="" />
                    <!--<img class="w-100 fit-cover rounded" src="img/<?= $rowImg[9] ?>" alt="" />-->
                  </div>
                </div>
              </div>
              <a class="col-6 col-md-3 sortable-item p-2 interior" href="img/<?= $rowImg[10] ?>" data-lightbox="image" data-title="my caption">
                <img class="rounded w-100 fit-cover" src="img/<?= $rowImg[10] ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.3}' data-zanim-trigger="scroll" />
              </a>
              <a class="col-6 col-md-3 sortable-item p-2 photography" href="img/<?= $rowImg[11] ?>">
                <img class="rounded w-100 fit-cover" src="img/<?= $rowImg[11] ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.4}' data-zanim-trigger="scroll" />
              </a>
            </div>
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