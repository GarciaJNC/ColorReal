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
      <section class="py-0" id="page-contact">
          
          <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 px-0 order-lg-2">
              <div class="sticky-top h-lg-100vh py-9">
                <div class="bg-holder" style=background-image:url(img/{{ $rowImg[0]->source }}); data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-left","delay":0.4}'>
                </div>
                <!--/.bg-holder-->

              </div>
            </div>

            <div class="col-lg-6 bg-white pt-8 pb-4 pt-lg-8">
              <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-8" data-zanim-lg='{"animation":"slide-left","delay":0.6}' data-zanim-trigger="scroll">

                  @include('components.errorMessages')

                  <h1 class="text-underline d-inline-block mb-4 mb-lg-6"><?= $row[0]->body ?></h1>
                  <p class="font-weight-bold mb-0"><?= $row[1]->body ?><span class="ml-2 font-weight-normal"><?= $row[2]->body ?></span></p>
                  <p class="font-weight-bold mb-0"><?= $row[3]->body ?><span class="ml-2 font-weight-normal"><a class="text-700" href="<?= $row[4]->body ?>"><?= $row[5]->body ?></a></span></p>
                  <p class="font-weight-bold mb-4"><?= $row[6]->body ?><span class="ml-2 font-weight-normal font-italic"><a class="text-700" href="<?= $row[7]->body ?>"><?= $row[8]->body ?></a></span></p>
                  <div class="mt-3">
                    <!--<a class="btn btn-dark btn-sm mr-2" href="#"><span class="fab fa-twitter" data-fa-transform="grow-6"></span></a>-->
                    <!--<a class="btn btn-dark btn-sm mr-2" href="#"><span class="fab fa-facebook-f" data-fa-transform="grow-6"></span></a>-->
                    <!--<a class="btn btn-dark btn-sm mr-2" href="#"><span class="fab fa-google-plus-g" data-fa-transform="grow-6"></span></a>-->
                    <!--<a class="btn btn-dark btn-sm" href="#"><span class="fab fa-linkedin-in" data-fa-transform="grow-6"></span></a>-->
                  </div>
                  <h3 class="mt-7"><?= $row[9]->body ?></h3>
                  <form class="zform mt-4" method="POST" action="/information">
                    
                    @csrf

                    <input class="form-control border-300 mt-3" type="text" name = "fullName" placeholder="<?= $row[10]->body  ?>" aria-label="Text input with dropdown button">
                    <input class="form-control border-300 mt-3" type="text" name = "header" placeholder="<?= $row[11]->body  ?>" aria-label="Text input with dropdown button">
                    <textarea class="form-control border-300 mt-3" rows="11" name = "message" placeholder="<?= $row[12]->body  ?>" required></textarea>
                    <button class="btn btn-block btn-dark mt-4" type="submit"><?= $row[13]->body  ?><span class="fa fa-paper-plane ml-1"></span></button>
                    <div class="zform-feedback mt-4"></div>
                  </form>
                </div>
              </div>
            </div>
            
                <!--Mobile Fallback-->
<!--                   <div class="marker-content py-3">
                    <h5><?= $row[13]->body  ?></h5>s
                    <p><?= $row[13]->body  ?>
                      <br><?= $row[13]->body  ?></p>
                  </div> -->
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