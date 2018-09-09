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

					<section class="block" id="investment">
							<div class="container">
									<div class="block__wrapper">
											<div class="row">
													<div class="col-md-10">
															<div class="push-down">
                                                                @foreach($newpage as $newpage)
                                                                <?php if($newpage->page_name=='Home') { ?>
																	<h2 class="text-align-right" data-scroll-reveal="enter left and move 10px">{{ $newpage->header }}</h2>
																	<hr class="hr">
																	<div class="pstandard" data-scroll-reveal="enter left and move 10px after 0.1s">
                                                                        {!! $newpage->text !!}
                                                                        {{-- <h5>Welcome to Hal Systems Ltd. </h5>
                                                                        <p>We are a small NICEIC certified company providing people and businesses with a high 
                                                                            quality electrical service at reasonable cost.We are a friendly, professional and 
                                                                            highly skilled firm of local electrical contractors. We provide a full range of 
                                                                            electrical services to meet all your home and business needs.</p> --}}
																	</div>
																	<div class="text-align-right">
                                                                            {{-- <img class="accreditimg" style="float: left;" src="{{Request::root()}}/images/electricianCrawley.jpg" alt="NIC EIC Approved Contractor" title="NIC EIC Approved Contractor"> --}}
                                                                            {{-- <img class="accreditimg" style="float: left;" src="{{Request::root()}}/images/NICEIC.jpg" alt="NIC EIC Domestic Installer" title="NIC EIC Domestic Installer"> --}}
                                                                    <a href="{{Request::root()}}/about" class="btn btn-primary btn-framed" alt="Hal Systems Ltd About Page">{{ $newpage->button_text }}</a>
                                                                </div>
                                                            <?php } else { continue; } ?>
                                                                @endforeach
															</div>
													</div>
													<div class="col-md-2">
                                                            <div class="aboutvid">
                                                                    <video loop autoplay muted playsinline poster="{{Request::root()}}/images/llogo1111.png">
                                                                        <source src="{{Request::root()}}/videos/Hal Systems Vid.mp4" type="video/mp4">
                                                                    </video>
                                                                </div>
													</div>
											</div>
											<!--end row-->
											<div class="background-wrapper">
													<div class="background background--image opacity-70 background--repeat-repeat height-50">
															<img class="imgsize" src="{{Request::root()}}/images/triangle-up.png" alt="triangle pattern">
													</div>
											</div>
											<!--end background-->
									</div>
									<!--end block__wrapper-->
							</div>
							<!--end container-->
					</section>
					<!--end #text-image-block.block-->

            
              <!--IMAGE BOXES******************************************************************************************-->

              <section class="block" id="news">
                    <div class="container">
                        <div class="block__wrapper">
                            <div class="block__title text-center">
                                <h2 data-scroll-reveal="enter left and move 10px">Services</h2>
                                <hr class="hr">
                            </div>
                            <!--end block-title-->
    
                                    <div class="wrappercard">
                                            <div class="colscard" data-scroll-reveal="enter bottom and move 15px">
                                            <?php $i=0; ?>
                                                    @foreach($post as $post)
                                                    <?php  if ($i < 3) { ?>
                                                    <a href="{{Request::root()}}/servicetemp/{{ $post->slug }}" alt="{{ $post->seo_title }}"><div class="colcard" ontouchstart="this.classList.toggle('hover');">
                                                          <div class="containercard">
                                                              <div class="front" style="background-image: url({{ Voyager::image( $post->image ) }})">
                                                                  <div class="inner">
                                                                      <p>{{ $post->title }}</p>
                                                                  </div>
                                                              </div>
                                                              <div class="back">
                                                                  <div class="inner">
                                                                    <p>{{ $post->excerpt }}</p>
                                                                    <p><a class="extendlink" href="{{Request::root()}}/servicetemp/{{ $post->slug }}" alt="{{ $post->seo_title }}">Click to read more</a></p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    </a>
                                                    <?php $i++; ?>
                                                    <?php } else { ?>
                                                    <?php break; } ?>
                                                    @endforeach
                                                  </div>
                                           </div>
                                <div class="centerme">
                                    <a href="{{Request::root()}}/services" alt="Hal Systems Ltd Services"><button class="btn btn-primary btn-framed">Check all our services</button></a>
                                </div>
                     
                        </div>
                        <!--end block__wrapper-->
                    </div>
                    <!--end container-->
                    <div class="background-wrapper" data-background-color="#f9f9f9">
                        <div class="background--image opacity-10 background--repeat-repeat">
                            <img src="{{Request::root()}}/images/marble.jpg" alt="marble background">
                        </div>
                    </div>
                    <!--end background-->
                </section>
                <!--end #image-blocks.block-->
                <div class="block__title text-center">
                        <h2 data-scroll-reveal="enter left and move 10px">Testimonials</h2>
                        <hr class="hr">
                    </div>
            <section class="block" id="blockquote">
                <!-- TESTIMONIALS -->
                <div class="testimonialbox">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-12">
                                <div id="testimonial-slider" class="owl-carousel">
                                    @foreach ($testimony as $testimony)
                                    <div class="testimonial">
                                            <div class="pic">
                                                <img src="{{ Voyager::image( $testimony->image ) }}" alt="">
                                            </div>
                                            <h3 class="testimonial-title">{{ $testimony->name }} {{ $testimony->surname }}</h3>
                                            <small class="post">{{ $testimony->jobtype }}</small>
                                            <p class="description">
                                                {!! $testimony->testimony !!}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END TESTIMONIALS -->
                <!--end container-->
                <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3" data-background-color="#f1f1f1">
                    <div class="background--image opacity-70 parallax-element">
                        <img src="{{Request::root()}}/images/electric.jpg" alt="testimonial background electricity">
                    </div>
                </div>
                <!--end background-->
            </section>
            <!--end #blockquote.block-->

        </div>
        <!--end content-->
        @include('partials.accreditations')
        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        @include('partials.footer')
        <!--end footer-->
    </div>
    <!--end page-->
@include('partials.scripts')
</body>
</html>
