<div class="hero__background">
    <div class="background-wrapper" data-parallax="scroll" data-parallax-speed="3">
        <div class="background">
            <div class="owl-carousel hero__slider parallax-element" data-owl-items="1" data-owl-autoplay="1" data-owl-dots="0" data-owl-nav="1" data-owl-loop="1" data-owl-fadeout="1" data-owl-nav-container=".slider-nav">
                <div class="slide img-into-bg">
                    <img src="images/servicesimg/firealarm1.jpg" alt="Hal Systems Ltd Fire Alarms">
                </div>
                <div class="slide img-into-bg">
                    <img src="images/Elec-Install.jpg" alt="Hal Systems Ltd Electrical Instalations">
                </div>
                <div class="slide img-into-bg">
                    <img src="images/CCTV.jpg" alt="Hal Systems Ltd CCTV">
                </div>
            </div>
        </div>
    </div>
    <!--end background-->
</div>

<div class="container">
    <div class="row">
        <div class="hero__outer-wrapper">
            <div class="hero__inner-wrapper align-bottom">
                <div class="col-xl-5 col-lg-5 col-md-7 floatr">
                    <div class="hero__caption has-dark-background">
                        @foreach ($slider as $box)
                        {!! $box->text_above_line !!}
                        <hr>
                        {!! $box->text_below_line !!}
                    </div>
                    @endforeach
                </div>
                <div class="slider-nav"></div>
            </div>
            <!--end container-->
        </div>
        <!--end hero__inner-wrapper-->
    </div>
</div>
<!--end hero__outer-wrapper-->
