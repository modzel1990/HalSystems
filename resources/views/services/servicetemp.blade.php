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
     
                        @include('partials.nav')
      
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <div id="content">
            <!-- NO STYLING TO CLASSESS ADDED YET, JUST TEMPLATE -->
           <div class="servicebox">
                <h1 class="centerme" data-scroll-reveal="enter bottom and move 25px">{{ $post->title }}</h1>
                <hr class="hr">
               <div class="row padtb50">
                   <!-- Picture Area -->
                   <div class="col-md-4">
                       <div data-scroll-reveal="enter left and move 25px">
                       <a href="{{ Voyager::image( $post->image ) }}" alt="{{ $post->seo_title }}"><img class="serviceimg" src="{{ Voyager::image( $post->image ) }}" style="width:100%" alt="{{ $post->seo_title }}"></a>
                       </div>
                    </div>
                   <!-- Text Area -->
                   <div class="col-md-8">
                       <div class="servicepbox" data-scroll-reveal="enter right and move 25px">
                         <p class="servicep" data-scroll-reveal="enter left and move 15px after 1s">{!! $post->body !!}</p>
                         <div class="centerme">    
                                <a href="{{Request::root()}}/services" class="btnservice floatl" alt="Hal Systems Ltd Services">Back to Services</a>
                                <a href="tel:07956277046" class="btnservice floatr" alt="Call Now! Hal Systems Ltd">Call Now!</a>
                               </div>
                        </div>
                    </div>
               </div>
           </div>
           <div class="background-wrapper">
                <div class="background background--image opacity-70 background--repeat-repeat height-40">
                        <img class="imgsize" src="{{Request::root()}}/images/triangle-up.png" alt="triangle pattern">
                </div>
        </div>
        </div>
        <!--end content-->

      
    </div>
    @include('partials.accreditations')
        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        @include('partials.footer')
        <!--end footer-->
    <!--end page-->
@include('partials.scripts')

</body>
</html>
