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
        <header class="newsletterheading">
						@include('partials.nav')
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <div id="content">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="infotext">
                        <h1>Foot Forward Properties</h1>
                        <div class="centerme"><h2><span>Newsletter</span></h2></div>
                    </div>
                    <div class="invitationtext mypad50">
                            <p>Please fill in the form below to let us know which news and offers you're interested in so we can send you emails relating only to those areas.<br/><br/>
                                We would be more than happy to receive your birthday date as well so we can send you a birthday gift each year.<br/>
                                We won't share your data with other companies.                          
                           </p>
                    </div>
             </div>
            </div>
            <div class="row">
             <div class="col-sm-12 col-md-12 col-lg-12 formarea">
                    <h4><span> Your details </span></h4>
                    <div class="form-container">
                            <form>
                                    <div class="form-row">
                                     <div class="form-group col-md-2">
                                        <label for="title">Title</label>
                                         <select class="form-control" id="title" required>
                                             <option>Mr</option>
                                             <option>Mrs</option>
                                             <option>Ms</option>
                                             <option>Miss</option>
                                         </select>
                                     </div>
                                      <div class="form-group col-md-5">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name please" required>
                                      </div>
                                      <div class="form-group col-md-5">
                                        <label for="surname">Surname</label>
                                        <input type="password" class="form-control" id="surname" placeholder="Enter your surname please">
                                      </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="email">Email</label>
                                      <input type="email" class="form-control" id="email" placeholder="Enter your email please" required>
                                      <div class="form-check">
                                            <input class="form-check-input checking" type="checkbox" value="" id="mailcheck"/>
                                            <label class="form-check-label" for="mailcheck">
                                              Please send me emails
                                            </label>
                                          </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="contactnumber">Contact Number</label>
                                      <input type="tel" class="form-control" id="contactnumber" placeholder="Enter your phone number please">
                                      <div class="form-check">
                                            <input class="form-check-input checking" type="checkbox" value="" id="textcheck">
                                            <label class="form-check-label" for="textcheck">
                                              Please send me texts
                                            </label>
                                          </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="dob">Date of Birth</label>
                                          <input type="date" class="form-control" id="dob" placeholder="Enter your date of birth">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="postcode">Post Code</label>
                                          <input type="text" pattern="[0-9]{5}" class="form-control" id="postcode" placeholder="Enter your postcode please">
                                        </div>
                                    </div>
                                    <div class="mypad50"></div>
                                    <h4><span> Select your areas of interest </span></h4>
                                <div class="form-row mypadtb50">
                                    <div class="form-check form-check-inline mypadtb20 mypadlr10 popup">  
                                            <input class="form-check-input check" type="checkbox" id="inlineCheckbox1" value="Newest Properties">
                                            <label class="form-check-label check" for="inlineCheckbox1"><span class="checktext">Newest Properties</span><br/> <img class="img" src="/img/Newsletter/Newest Properties.jpg" title="Newest Properties" alt="Newest Properties"/></label>                                         
                                          </div>
                                          <div class="form-check form-check-inline mypadtb20 mypadlr10 popup">
                                            <input class="form-check-input check" type="checkbox" id="inlineCheckbox2" value="Current Deals">
                                            <label class="form-check-label check" for="inlineCheckbox2"><span class="checktext">Current Deals</span><br/><img class="img" src="/img/Newsletter/Current Deals.jpg" title="Current Deals" alt="Current Deals"/></label>
                                          </div>
                                          <div class="form-check form-check-inline mypadtb20 mypadlr10 popup">                                             
                                            <input class="form-check-input check" type="checkbox" id="inlineCheckbox3" value="Foot Forward Blog">
                                            <label class="form-check-label check" for="inlineCheckbox3"><span class="checktext">Foot Forward Blog</span><br/><img class="img" src="/img/Newsletter/Foot Forward Blog.jpg" title="Foot Forward Blog" alt="Foot Forward Blog"/></label>
                                          </div>
                                          <div class="form-check form-check-inline mypadtb20 mypadlr10 popup">                                              
                                            <input class="form-check-input check" type="checkbox" id="inlineCheckbox4" value="Ways of investing">
                                            <label class="form-check-label check" for="inlineCheckbox4"><span class="checktext">Ways of investing</span><br/> <img class="img" src="/img/Newsletter/Ways to invest.jpg" title="Ways of investing" alt="Ways of investing"/></label>
                                          </div>
                                          <div class="form-check form-check-inline mypadtb20 mypadlr10 popup">                                               
                                            <input class="form-check-input check" type="checkbox" id="inlineCheckbox5" value="Ways to buy properties">
                                            <label class="form-check-label check" for="inlineCheckbox5"><span class="checktext">Ways to buy properties</span><br/><img class="img" src="/img/Newsletter/Ways to buy properties.jpg" title="Ways to buy properties" alt="Ways to buy properties"/></label>
                                          </div>
                                          <div class="form-check form-check-inline mypadtb20 mypadlr10 popup">                                               
                                            <input class="form-check-input check" type="checkbox" id="inlineCheckbox6" value="Upcoming Areas">
                                            <label class="form-check-label check" for="inlineCheckbox6"><span class="checktext">Upcoming Areas</span><br/><img class="img" src="/img/Newsletter/Upcoming Areas.jpg" title="Upcoming Areas" alt="Upcoming Areas"/></label>
                                          </div>
                                        </div>


                                    <div class="mypad50"></div>
                                    <div class="centerme">
                                    <button type="submit" class="btn btn-primary btn-framed centerme">Submit my Newsletter Form</button>
                                    </div>
                                  </form>
                    </div>
             </div>
            </div>
        </div>
     
      
        <!--end content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        <div class="footer">
        @include('partials.footer')
        </div>
        <!--end footer-->
    </div>
    <!--end page-->
@include('partials.scripts')

</body>
</html>
