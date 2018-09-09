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

                <section class="block" id="news">
                        <div class="container">
                            <div class="block__wrapper">
                                <div class="block__title text-center">
                                    <h2 data-scroll-reveal="enter left and move 10px">Services</h2>
                                    <hr class="hr">
                                </div>
                                <!--end block-title-->
                                <div class="centerme">
                                            <h5 data-scroll-reveal="enter bottom and move 10px">Our  electrical services include: </h5>
                                </div>
                        
                                        <div class="wrappercard">
                                                <div class="colscard" data-scroll-reveal="enter bottom and move 15px">
                                                        @foreach($post as $post)
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
                                                      @endforeach
                                                      </div>
                                               </div>
                            </div>
                            <!--end block__wrapper-->
                        </div>
                        <!--end container-->
                        <div class="background-wrapper" data-background-color="#f9f9f9">
                            <div class="background--image opacity-10 background--repeat-repeat">
                                <img src="images/marble.jpg" alt="marble background">
                            </div>
                        </div>
                        <!--end background-->
                    </section>

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