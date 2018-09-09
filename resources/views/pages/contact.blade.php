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
            <div class="container">
                    <hr class="hr">
                <div class="row padtb50">
                    <div class="col-md-6">
                     {!! forms(1) !!}
                    </div>
                    <div class="col-md-6">
                       <div class="centerme contactusbox">
                           <h3>Find us on:</h3>
                           <p><i class="fas fa-map-marked-alt conticon"></i> Address:<br/>5 Upper Wortley Road, Rotherham, 
                            South Yorkshire, S61 2AE</p>
                           <p><i class="fas fa-envelope-square conticon"></i> E-mail:<br/><a class="contactlink" href="mailto:info@halsystemsltd.co.uk?subject=Enquiry" alt="Hal Systems Ltd E-mail">info@halsystemsltd.co.uk</a></p>
                           <p><i class="fab fa-facebook-square conticon"></i> Facebook:<br/><a class="contactlink" href="https://www.facebook.com/halsystemsltd/?ref=br_rs" alt="Hal Systems Ltd Facebook" title="Hal Systems Ltd">Hal Systems Ltd Facebook</a></p>
                       </div>
                    </div>
                </div>
            </div>

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
