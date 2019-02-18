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
      <section class="py-0" id="cafe-header">

        <div class="bg-holder overlay overlay-1" style=background-image:url(img/{{ $rowImg[0]->source }}); data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">
        </div>
        <!--/.bg-holder-->

        <div class="container overflow-hidden">
          <div data-zanim-timeline='{"delay":0.6}' data-zanim-trigger="scroll">

          @include('components.errorMessages')
          
            <div class="row minh-100vh align-items-center py-8 justify-content-center text-center">
              <div class="col-lg-8">          
                <div class="overflow-hidden">
                  <h1 class="text-white fs-3 fs-sm-4 fs-lg-5 px-2 px-lg-0 text-smallcaps parallax display-4" data-rellax-speed="5"><span class="overflow-hidden d-block"><span class="d-inline-block" data-zanim-xs='{"delay":0.1}'>{{ $row[0]->body }}</span></span><span class="overflow-hidden d-block"><span class="d-inline-block" data-zanim-xs='{"delay":0.2}'>{{ $row[1]->body }}</span></span>
                    <span
                      class="overflow-hidden d-block"><span class="d-inline-block" data-zanim-xs='{"delay":0.3}'>{{ $row[2]->body }}</span></span>
                  </h1>
                </div>
                <div class="overflow-hidden parallax" data-rellax-speed="3">
                  <h5 class="fs-0 fs-sm-1 mt-3 mt-md-5 text-white" data-zanim-xs='{"delay":0.4}'>{{ $row[3]->body }}</h5>
                </div>
              </div>
            </div>
          </div>
          <a class="indicator indicator-down" data-zanim-timeline='{"delay":2}' data-zanim-trigger="scroll" href="#target-down" data-fancyscroll="data-fancyscroll"><span class="indicator-arrow indicator-arrow-one" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.25}'></span><span class="indicator-arrow indicator-arrow-two" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.5}'></span></a>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <div id="target-down"></div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-center pb-0" id="cafe-about">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 overflow-hidden">
              <p class="fs-2 text-sans-serif font-weight-normal text-dark">{{ $row[4]->body }}<span class="text-underline font-weight-extra-bold ml-1">{{ $row[5]->body }}</span>{{ $row[6]->body }}</p>
            </div>
          </div>
          <div class="row mt-6">
            <div class="col-6 col-lg-3">
              <img class="rounded img-fluid" src="img/<{{ $rowImg[1]->source }}" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
            </div>
            <div class="col-6 col-lg-3">
              <img class="rounded img-fluid" src="img/<{{ $rowImg[2]->source }}" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.2}' data-zanim-trigger="scroll" />
            </div>
            <div class="col-6 col-lg-3 mt-4 mt-lg-0">
              <img class="rounded img-fluid" src="img/<{{ $rowImg[3]->source }}" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.3}' data-zanim-trigger="scroll" />
            </div>
            <div class="col-6 col-lg-3 mt-4 mt-lg-0">
              <img class="rounded img-fluid" src="img/<{{ $rowImg[4]->source }}" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.4}' data-zanim-trigger="scroll" />
            </div>
          </div>
          <div class="row justify-content-center mt-6">
            <div class="col-lg-9 overflow-hidden">
              <p class="lead">{{ $row[7]->body }}</p>
            </div>
          </div>
          <div class="row mt-6 no-gutters">
            <div class="col-6 col-sm-4 px-2">
              <img class="rounded img-fluid" src="img/{{ $rowImg[5]->source }}" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll" />
            </div>
            <div class="col-6 col-sm-4 px-2">
              <img class="rounded img-fluid" src="img/{{ $rowImg[6]->source }}" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.2}' data-zanim-trigger="scroll" />
            </div>
            <div class="col-sm-4 mt-3 mt-sm-0 px-2">
              <img class="rounded img-fluid" src="img/{{ $rowImg[7]->source }}" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.3}' data-zanim-trigger="scroll" />
            </div>
          </div>
          <div class="row justify-content-center mt-6">
            <div class="col-lg-9 overflow-hidden">
              <p class="fs-2 text-sans-serif font-weight-normal text-dark" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">{{ $row[8]->body }}<span class="text-underline font-weight-extra-bold ml-1">{{ $row[9]->body }}</span>{{ $row[10]->body }}</p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section id="cafe-menu-1">
        <div class="border-bottom border-top border-300 pt-1"></div>
        <div class="position-absolute w-25 a-0" data-zanim-sm='{"delay":0.1}' data-zanim-trigger="scroll">
          <div class="h-100 w-100 parallax shadow-lg d-none d-sm-block" data-rellax-percentage="0.5" data-rellax-speed="3">
            <div class="bg-holder rounded-right" style="background-image:url(img/{{ $rowImg[8]->source }});">
            </div>
            <!--/.bg-holder-->

          </div>
        </div>
        <div class="container">
          <div class="row justify-content-end text-center pt-8">
            <div class="col-sm-8">
              <h2 class="px-lg-4 text-underline">{{ $row[11]->body }}</h2>
              <p class="text-sans-serif px-lg-4">{{ $row[12]->body }}
                <br class="d-none d-md-block" />{{ $row[13]->body }}<span class="fa fa-star text-danger"></span>{{ $row[14]->body }}</p>
              <div class="row text-center text-sans-serif mt-7">
                <div class="col-sm-8 col-lg-6 px-sm-5">
                  <h4 class="py-2 border border-300 mb-5">{{ $row[15]->body }}</h4>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[16]->body }}</h5>
                  <p>{{ $row[17]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0"><span class='fas fa-star text-danger'></span>{{ $row[18]->body }}</h5>
                  <p>{{ $row[19]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[20]->body }}</h5>
                  <p>{{ $row[21]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[22]->body }}</h5>
                  <p>{{ $row[23]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[24]->body }}</h5>
                  <p>{{ $row[25]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[26]->body }}</h5>
                  <p>{{ $row[27]->body }}</p>
                </div>
                <div class="col-sm-8 col-lg-6 px-sm-5 mt-6 mt-lg-0">
                  <h4 class="py-2 border border-300 mb-5">{{ $row[28]->body }}</h4>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[29]->body }}</h5>
                  <p>{{ $row[30]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[31]->body }}</h5>
                  <p>{{ $row[32]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[33]->body }}</h5>
                  <p>{{ $row[34]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0"><span class='fas fa-star text-danger'></span>{{ $row[35]->body }}</h5>
                  <p>{{ $row[36]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[37]->body }}</h5>
                  <p>{{ $row[38]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[39]->body }}</h5>
                  <p>{{ $row[40]->body }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="cafe-banner">

        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6 py-5 py-lg-11 d-flex justify-content-center text-center text-lg-left">
              <h1 class="fs-4 fs-sm-5 font-weight-light display-4">{{ $row[41]->body }}
                <br class="d-none d-lg-block" />{{ $row[42]->body }}
                <br class="d-none d-lg-block" /><span class="font-weight-black text-underline">{{ $row[43]->body }}</span>{{ $row[44]->body }}</h1>
            </div>
            <div class="col-lg-6 ml-auto px-0">
              <div class="parallax" data-rellax-percentage="0.5" data-rellax-speed="3">
                <div class="py-11 shadow-lg" data-zanim-xs='{"delay":0.1,"animation":"zoom-out"}' data-zanim-lg='{"delay":0.1}' data-zanim-trigger="scroll">
                  <div class="bg-holder rounded-left" style=background-image:url(img/{{ $rowImg[12]->source }});>
                    <!--<div class="bg-youtube" data-property='{"videoURL":"https://www.youtube.com/watch?v=Kra1eWAiKvE","startAt":0,"stopAt":57,"mute":true,"showYTLogo":false}'></div>-->
                  </div>
                  <!--/.bg-holder-->

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="border-bottom border-300" id="cafe-menu-2">
        <div class="position-absolute w-25 a-0" data-zanim-sm='{"delay":0.1}' data-zanim-trigger="scroll">
          <div class="h-100 w-100 parallax shadow-lg d-none d-sm-block" data-rellax-percentage="0.5" data-rellax-speed="3">
            <div class="bg-holder rounded-right" style=background-image:url(img/{{ $rowImg[9]->source }});>
            </div>
            <!--/.bg-holder-->

          </div>
        </div>
        <div class="container">
          <div class="row justify-content-end text-center">
            <div class="col-lg-8">
              <div class="row text-center text-sans-serif justify-content-end">
                <div class="col-sm-8 col-lg-6 px-sm-5">
                  <h4 class="py-2 border border-300 mb-5">{{ $row[45]->body }}</h4>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[46]->body }}</h5>
                  <p>{{ $row[47]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[48]->body }}</h5>
                  <p>{{ $row[49]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[50]->body }}</h5>
                  <p>{{ $row[51]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[52]->body }}</h5>
                  <p>{{ $row[53]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0"><span class='fas fa-star text-danger'></span>{{ $row[54]->body }}</h5>
                  <p>{{ $row[55]->body }}</p>
                </div>
                <div class="col-sm-8 col-lg-6 px-sm-5 mt-6 mt-lg-0">
                  <h4 class="py-2 border border-300 mb-5">{{ $row[56]->body }}</h4>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[57]->body }}</h5>
                  <p>{{ $row[58]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0"><span class='fas fa-star text-danger'></span>{{ $row[59]->body }}</h5>
                  <p>{{ $row[60]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[61]->body }}</h5>
                  <p>{{ $row[62]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[63]->body }}</h5>
                  <p>{{ $row[64]->body }}</p>
                  <h5 class="text-uppercase fs-0 font-weight-bold mt-4 mb-0">{{ $row[65]->body }}</h5>
                  <p>{{ $row[66]->body }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="cafe-big-image">

        <div class="container-fluid px-0">
          <img class="img-fluid" src="img/{{ $rowImg[10]->source }}" alt="" />
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="cafe-contact">

        <form class="container" action="/information" method="POST">

          @csrf

          <div class="row justify-content-center mb-lg-6" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="col-md-10 col-lg-7 col-xl-6 text-center">
              <h2 class="text-underline mb-4 fs-3 fs-sm-4">{{ $row[67]->body }}</h2>
              <p class="mb-4">{{ $row[68]->body }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 order-1 order-lg-0 pr-lg-4">
              <form class="zform" method="post">
                <input class="form-control border-300" type="hidden" name="to" value="{{ $row[69]->body }}" />
                <input class="form-control border-300" name="fullName" type="text" placeholder="{{ $row[70]->body }}" required="required" />
                <input class="form-control border-300 mt-3" name="header" type="text" placeholder="{{ $row[71]->body }}" required="required" />
                <textarea class="form-control border-300 mt-3" name="message" rows="9" placeholder="{{ $row[72]->body }}" required="required"></textarea>
                <button class="btn btn-block btn-dark mt-4" type="submit"><span class="text-uppercase">{{ $row[73]->body }}</span><span class="fas fa-paper-plane text-white ml-1"></span></button>
                <div class="zform-feedback mt-4"></div>
              </form>
            </div>
              <div class="row align-items-center mb-8 mb-lg-3 text-center text-lg-center mt-4">
                <div class="col-lg">
                  <p class="mb-0"><span class="text-black font-weight-black">{{ $row[77]->body }}</span><span>{{ $row[78]->body }}</span></p>
                  <p class="mb-0"><span class="text-black font-weight-black">{{ $row[79]->body }}</span><span class="font-italic"><a class="text-700" href="mailto:info@sparrow.com">{{ $row[79]->body }}</a></span></p>
                  <p class="mb-0"><span class="text-black font-weight-black">{{ $row[79]->body }}</span><span><a class="text-700" href="tel:+13234324534">{{ $row[79]->body }}</a></span></p>
                </div>
                <!--<div class="col-lg-auto mt-3 mt-lg-0">-->
                <!--  <a class="btn btn-outline-dark btn-sm border-400 mr-2" href="#"><span class="fab fa-twitter"></span></a>-->
                <!--  <a class="btn btn-outline-dark btn-sm border-400 mr-2" href="#"><span class="fab fa-facebook-f"></span></a>-->
                <!--  <a class="btn btn-outline-dark btn-sm border-400" href="#"><span class="fab fa-google-plus-g"></span></a>-->
                <!--</div>-->
              </div>
            </div>
          </form>
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