@extends('layout')

@section('content')
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
      <section class="py-0" id="page-about">

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 px-0 order-lg-2">
              <div class="sticky-top h-lg-100vh py-9">
                <div class="bg-holder" style=background-image:url(img/<?= $rowImg[0]->source ?>); data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-left","delay":0.4}'>
                </div>
                <!--/.bg-holder-->

              </div>
            </div>
            <div class="col-lg-6 bg-white py-6">
              <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-10">
                  <div class="mb-5">
                    <div class="overflow-hidden">
                      <h1 class="text-underline fs-4 fs-md-5 mb-0" data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll"><?= $row[0]->body ?></h1>
                    </div>
                  </div>
                  <p class="dropcap" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll"><?= $row[1]->body ?></p>
                  <div class="row mt-5">
                    <div class="col-6">
                      <img class="rounded img-fluid" src="img/<?= $rowImg[1]->source ?>" alt="" data-zanim-xs='{"delay":0.6,"animation":"zoom-in"}' data-zanim-trigger="scroll" />
                    </div>
                    <div class="col-6">
                      <img class="rounded img-fluid" src="img/<?= $rowImg[2]->source ?>" alt="" data-zanim-xs='{"delay":0.7,"animation":"zoom-in"}' data-zanim-trigger="scroll" />
                    </div>
                  </div>
                  <blockquote class="blockquote text-center my-6 border p-5 px-xl-7 border-300 rounded" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                    <p class="blockquote-content"><?= $row[2]->body ?></p>
                    <footer class="blockquote-footer"><span class="text-900"><?= $row[3]->body ?></span><?= $row[4]->body ?></footer>
                  </blockquote>
                </div>
                <div class="col-xl-6 text-center" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">
                  <h2 class="fs-3 fs-sm-4 mb-1"><?= $row[5]->body ?></h2>
                  <p class="font-italic text-500"><?= $row[6]->body ?></p>
                </div>
                <!--<div class="col-xl-4 text-center mt-4 mt-xl-0" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">-->
                <!--  <h2 class="fs-3 fs-sm-4 mb-1 text-danger"><?= $row[7]->body ?></h2>-->
                <!--  <p class="font-italic text-500"><?= $row[8]->body ?></p>-->
                <!--</div>-->
                <div class="col-lg-10 mt-5">
                  <img class="rounded img-fluid" src="img/<?= $rowImg[3]->source ?>" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
                  <div class="row mt-6">
                    <div class="col-md col-lg-12 col-xl">
                      <div class="overflow-hidden">
                        <h6 class="text-uppercase ls" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll"><?= $row[9] ->body?></h6>
                      </div>
                      <div class="overflow-hidden">
                        <p class="text-justify" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll"><?= $row[10]->body ?></p>
                      </div>
                    </div>
                    <div class="col-md col-lg-12 col-xl mt-4 mt-md-0 mt-lg-4 mt-xl-0">
                      <div class="overflow-hidden">
                        <h6 class="text-uppercase ls" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll"><?= $row[11]->body ?></h6>
                      </div>
                      <div class="overflow-hidden">
                        <p class="text-justify" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll"><?= $row[12]->body ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
@endsection