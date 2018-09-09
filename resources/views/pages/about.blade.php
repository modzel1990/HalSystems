<!doctype html>
<html lang="en">
<head>
	@include('partials.head')

</head>
<body data-spy="scroll" data-target=".navbar">
    <div class="page-wrapper" id="page-top">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="hero">
                        @include('partials.nav')
                        @include('partials.header')
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <div id="content">

          <!--TEXT with IMAGE BLOCK********************************************************************************-->

          <section class="block" id="about">
              <div class="container">
                  <div class="block__wrapper">
                      <div class="row">
                          <div class="col-md-8">
                              <div class="push-down">
                                    @foreach($newpage as $newpage)
                                    <?php if($newpage->page_name=='About') { ?>
                                  <h2 class="text-align-right" data-scroll-reveal="enter left and move 10px">{{ $newpage->header }}</h2>
                                        <hr class="hr">
                                        <div data-scroll-reveal="enter left and move 10px after 0.1s" class="pleft">
                                            {!! $newpage->text !!}
                                    </div>
                                        <div class="text-align-right">
                                        <a href="{{Request::root()}}/contact" class="btn btn-primary btn-framed" alt="Hal Systems Ltd Contact">{{ $newpage->button_text }}</a>
                                        </div>
                                    <?php } else { continue; } ?>
                                    @endforeach
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="aboutvid">
                                <video loop autoplay muted playsinline poster="{{Request::root()}}/images/llogo.png">
                                    <source src="{{Request::root()}}/videos/Hal Systems Vid.mp4" type="video/mp4">
                                </video>
                            </div>
                          </div>
                      </div>
                      <!--end row-->
                      <div class="background-wrapper">
                          <div class="background background--image opacity-70 background--repeat-repeat height-50">
                              <img src="{{Request::root()}}/images/triangle-up.png" alt="triangle pattern">
                          </div>
                      </div>
                      <!--end background-->
                  </div>
                  <!--end block__wrapper-->
              </div>
              <!--end container-->
          </section>
          <!--end #text-image-block.block-->

        </div>
        @include('partials.accreditations')
        <!--end content-->
   <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
       
                @include('partials.footer')
            
                <!--end footer-->
    <!--end page-->
    </div>

    <!--end page-->
@include('partials.scripts')

</body>
</html>
