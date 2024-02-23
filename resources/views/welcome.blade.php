@extends('master')
@section('content')

    <center>
            @if(Session::has('message'))
                <div id="mydiv" class="alert alert-success" style="margin-bottom: 0;">
                    {{ Session::get('message') }}
                </div>
            @endif
    </center>


<div class="header-transporent-bg-black">
   <!-- HEADER -->
   <header id="nav" class="header header-1 black-header">
      <div class="header-wrapper">
         <div class="container-m-30 clearfix">
            <div class="logo-row">
               <!-- LOGO -->
               <div class="logo-container-2">
                  <div class="logo-2" style="visibility:hiddens">
                     <a href="#" class="clearfix">
                     <img src="{{url('/')}}/uploads/logo-nortwell-clear.png" class="logo-img" alt="Logo">
                     </a>
                  </div>
               </div>
               <!-- BUTTON -->
               <div class="menu-btn-respons-container">
                  <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                  <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                  </button>
               </div>
            </div>
         </div>
         <!-- MAIN MENU CONTAINER -->
         <div class="main-menu-container">
            <div class="container-m-30 clearfix">
               <!-- MAIN MENU -->
               <div id="main-menu">
                  <div class="navbar navbar-default" role="navigation">
                     <!-- MAIN MENU LIST -->
                     <nav class="collapse collapsing navbar-collapse right-1024">
                        <ul class="nav navbar-nav">
                           <!-- MENU ITEM -->
                           <li >
                              <a href="{{url('/')}}/#home">
                                 <div class="main-menu-title">HOME</div>
                              </a>
                           </li>
                           <li >
                              <a href="{{url('/')}}/#about">
                                 <div class="main-menu-title">ABOUT US</div>
                              </a>
                           </li>
                           <li >
                              <a href="{{url('/')}}/#services">
                                 <div class="main-menu-title">SERVICES</div>
                              </a>
                           </li>
                           <li >
                              <a href="{{url('/')}}/#news">
                                 <div class="main-menu-title">NEWS</div>
                              </a>
                           </li>
                           <li >
                              <a href="{{url('/')}}/#partners">
                                 <div class="main-menu-title">PARTNERS</div>
                              </a>
                           </li>
                           <li >
                              <a data-toggle="modal" data-target="#editCat" href="{{url('/')}}/#">
                                 <div class="main-menu-title">INVESTMENT</div>
                              </a>
                           </li>
                           <li >
                              <a href="{{url('/')}}/#contact-us">
                                 <div class="main-menu-title">CONTACT US</div>
                              </a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <!-- END main-menu -->
            </div>
            <!-- END container-m-30 -->
         </div>
         <!-- END main-menu-container -->
         <!-- SEARCH READ DOCUMENTATION -->
         {{-- <ul class="cd-header-buttons">
            <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
         </ul> --}}
         <!-- cd-header-buttons -->
         <div id="cd-search" class="cd-search">
            <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
               <input type="text" value="" name="q" id="q" placeholder="Search...">
            </form>
         </div>
      </div>
      <!-- END header-wrapper -->
   </header>
   <!-- STATIC MEDIA IMAGE -->
   <div class="relative" id="home">
      <div class="rs-fullscr-container">
         <div id="rs-fullwidth" class="tp-banner dark-bg" >
            <ul>
               <!-- SLIDE 1 -->
               <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('theme/images/revo-slider/video-ocean-cover-320x200.jpg')}}"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off"  data-title="INTRO SLIDE">
                  <!-- MAIN IMAGE -->
                  <img src="{{url('/')}}/uploads/bannerz.jpg"  alt="video_woman_cover3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                  <!-- LAYERS -->
                  <!-- LAYER NR.0 1 VIDEO -->
                  <div class="tp-caption tp-fade fadeout fullscreenvideo"
                     data-speed="1000"
                     data-start="1100"
                     data-easing="Power4.easeOut"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1"
                     data-endspeed="1500"
                     data-endeasing="Power4.easeIn"
                     data-autoplay="true"
                     data-autoplayonlyfirsttime="false"
                     data-nextslideatend="true"
                     data-volume="mute"
                     data-forceCover="1"
                     data-dottedoverlay="twoxtwo"
                     data-aspectratio="16:9"
                     data-forcerewind="on"
                     style="z-index: 2;">
                     {{--
                     <video preload="none" width="100%" height="100%"
                        poster="images/revo-slider/video-ocean-cover.jpg')}}">
                        <source src='{{asset('theme/video/ocean60-15.webm')}}' type='video/webm' />
                        <source src='{{asset('theme/video/ocean60-15.mp4')}}' type='video/mp4' />
                     </video>
                     --}}
                  </div>

                  <center>
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption font-white light-73-wide sfb tp-resizeme slider-title"
                     data-x="center"
                     data-hoffset="0"
                     data-y="center"
                     data-voffset="-50"
                     data-speed="500"
                     data-start="850"
                     data-easing="Power1.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap; ">WE ARE <span class="bold">NORTWELL</span>
                  </div>
                  </center>
                  <center>
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption font-white norm-16-wide tp-lefat sfb tp-resizeme hide-0-736 slider-text"
                     data-x="center"
                     data-hoffset="0"
                     data-y="center"
                     data-voffset="25"
                     data-speed="900"
                     data-start="1500"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; font-size:20px; margin:0 auto !important;">Law & Investment Firm<span class="slash-divider-10"></span>
                  </div>
                  </center>
                  <!-- LAYER NR. 3 -->
                  {{-- <div class="tp-caption center-0-478 sfb"
                     data-x="center"
                     data-hoffset="0"
                     data-y="center"
                     data-voffset="115"
                     data-speed="900"
                     data-start="1350"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a class="button medium thin hover-dark tp-button white" href="#">SEE MORE</a><a class="button medium thin hover-dark tp-button white ml-20" href="#">CONTACT US</a>
                  </div> --}}
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- FEATURES 5 & TESTIMONIALS 1 -->
<div id="about" class="page-section p-50-cont">
   <div class="container">
      <div class="row">
         <!-- TESTIMONIALS -->
         <div class="col-md-5 pb-40">
            <blockquote class="quote mb-0 pr-50-min-1169">
               <p>Nortwell's foundation rests on an unwavering dedication to excellence, exemplifying a steadfast commitment to providing exceptional services for our clients
               </p>
               {{--
               <footer>John Doe, Google Inc.</footer>
               --}}
            </blockquote>
         </div>
         <!-- FEATURES -->
         <div class="col-md-7">
            <div class="row">
               <div class="col-md-6 col-sm-6 pb-10">
                  <div class="fes5-box wow fadeIn" >
                     <h3 style="font-family: Lato',Arial,Helvetica,sans-serif">IMMIGRATION LAW</h3>
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                        <p style="font-size:16px;">Legal assistance and guidance
                           in immigration, visas,
                           residency, and citizenship.
                        </p>
                     </blockquote>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 pb-10">
                {{--  --}}

                    <div class="fes5-box wow fadeIn" data-wow-delay="400ms">
                       <h3 style="font-family: Lato',Arial,Helvetica,sans-serif">INVESTMENT ADVISORY</h3>
                       <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                          <p style="font-size:16px;">
                             Professional guidance in real
                             estate, investment funds and
                             guaranteed yield investments.
                          </p>
                       </blockquote>

                 </div>
                {{--  --}}

               </div>
               {{--  --}}
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 pb-10">
                  <div class="fes5-box wow fadeIn" data-wow-delay="200ms">
                     <h3 style="font-family: Lato',Arial,Helvetica,sans-serif">LEGAL SERVICES</h3>
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                        <p style="font-size:16px;">
                           Expert legal counsel and support including consultation, property transactions, corporate law and immigration.
                        </p>
                     </blockquote>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 pb-10">
                  <div class="fes5-box wow fadeIn" data-wow-delay="200ms">
                     <h3>RELOCATION SERVICES</h3>
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                        <p style="font-size:16px;">
                           Administrative support in all relocation steps
                        </p>
                     </blockquote>
                  </div>
               </div>
            </div>
            <div class="row">
               {{--  --}}
               <div class="col-md-6 col-sm-6 pb-10">
                  <div class="fes5-box wow fadeIn"  data-wow-delay="600ms">
                  <h3 style="font-family: Lato',Arial,Helvetica,sans-serif">TAX EFFICIENCY</h3>
                  <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                     <p style="font-size:16px;">Tax liability and efficiency
                        advisory for individuals and
                        companies.
                     </p>
                  </blockquote>
               </div>
               {{--  --}}
               <div class="col-md-6 col-sm-6 pb-10">
               </div>
            </div>
         </div>
      </div>
   </div>
   <br><br>
</div>
<style>
   .fes7-box{
   /* min-height:250px; */
   }
   .pt-50-cont{
   padding:50px;
   }
   .fes8-box h3{
   /* text-align: center; */
   font-size: 20px;
   }
</style>
<!-- FEATURES 7 -->
<div class="page-section grey-light-bg pt-50-cont clearfix" id="services">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="mb-50">
               <h2 class="section-title">IMMIGRATION  <span class="bold">LAW</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 fes7-text-cont">
            {{--
            <p class="mb-60">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            </p>
            --}}
            <div class="row">
               <a  data-toggle="modal" data-target=".bs-example-modal-lg">
                  <div class="col-md-6 col-sm-6" style="min-height:200">
                     <div class="fes7-box wow fadeIn" >
                        <h3 style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal;">D2 Entrepreneur Visa</h3>
                        <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal" >
                           Aimed at providing authorization for foreigners (non-EU/EEA/Swiss) who have invested or want to make an investment operation through financial means available in Portugal.
                        </p>
                     </div>
                  </div>
               </a>
               {{--  --}}
               <div class="modal fade bs-example-modal-lg bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-body">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myLargeModalLabel" style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D2 Entrepreneur Visa</h4>
                           </div>
                           <div class="modal-body">
                              <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                                 {{--  --}}
                                 <i>Requirements:</i><br>
                                 * A solid business plan showing investment or intention of investment in Portugal, including the
                                 nature, value, and time range of the outlay. The economic, social, scientific, technological,
                                 environmental, or cultural worth of the investment, as well as the development of job opportunities, will
                                 strengthen the application.<br><br>
                                 * Evidence of having established a corporation under Portuguese jurisdiction or having adequate
                                 financial resources in Portugal, as well as demonstrating financial stability and viability for the
                                 company during its stay in the country.
                                 {{--  --}}
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{--  --}}
               {{--  --}}
               <a  data-toggle="modal" data-target=".bs-example-modal-lg-2">
                  <div class="col-md-6 col-sm-6" style="min-height:200">
                     <div class="fes7-box wow fadeIn" >
                        <h3 style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D3 Highly Qualified Individuals Visa</h3>
                        <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal" >
                           Aimed at non-EU citizens with higher education or higher professional technical qualifications - who have a work contract or a promise of work contract for at least 12 months.
                        </p>
                     </div>
                  </div>
               </a>
               {{--  --}}
               <div class="modal fade bs-example-modal-lg-2 bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-body">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myLargeModalLabel" style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D3 Highly Qualified Individuals Visa</h4>
                           </div>
                           <div class="modal-body">
                              <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                                 {{--  --}}
                                 <i>Requirements:</i><br>
                                 * A professional certificate, where required, for regulated, highly qualified professional positions, as
                                 determined by Law Nr. 9/2009, 4th March, or by specific legislation governing the recognition of
                                 professional qualifications as compulsory for a particular professional role, which must be clearly
                                 outlined in the employment contract or formal job offer.<br><br>
                                 * A valid employment contract or the promise of an employment contract which must be valid for a
                                 minimum period of 12 months.<br><br>
                                 * A monthly pay of at least 1.5X the Portuguese annual minimum gross salary, or 3X the indexed
                                 value of social welfare support (IAS).<br><br>
                                 {{--  --}}
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{--  --}}

               {{--  --}}

            </div>
            <div class="row">
                <a  data-toggle="modal" data-target=".bs-example-modal-lg-8">
                    <div class="col-md-6 col-sm-6" >
                       <div class="fes7-box wow fadeIn" >
                        <h3 style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D4 Study Visa</h3>
                          <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal" >
                             Aimed at foreign citizens who intend to enroll in a university or a Polytechnic Education Institution.
                          </p>
                       </div>
                    </div>
                 </a>

                 <div class="modal fade bs-example-modal-lg-8 bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-body">
                          <div class="modal-content">
                             <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myLargeModalLabel" style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D4 Study Visa</h4>
                             </div>
                             <div class="modal-body">
                                <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                                   {{--  --}}
                                   <i>Requirements:</i><br>
                                   * Letter of acceptance from a university in Portugal, as well as proof of payment of the tuition fees or
                                   demonstration of scholarship.<br>
                                   * A valid proof of residency in Portugal.
                                   {{--  --}}
                                </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <a  data-toggle="modal" data-target=".bs-example-modal-lg-9">
                    <div class="col-md-6 col-sm-6" >
                       <div class="fes7-box wow fadeIn" >
                        <h3 style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D6 Family Reunion Visa</h3>
                          <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                             Aimed at family members of a resident in Portugal also to live, work and study in the country.
                          </p>
                       </div>
                    </div>
                 </a>

                 <div class="modal fade bs-example-modal-lg-9 bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-body">
                          <div class="modal-content">
                             <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myLargeModalLabel" style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D6 Family Reunion Visa</h4>
                             </div>
                             <div class="modal-body">
                                <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                                   {{--  --}}
                                   <i>Requirements:</i><br>
                                   * Evidence of family connections and entitlement to family reunification in Portugal.
                                   {{--  --}}
                                </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
            </div>
            {{--  --}}
         </div>
         <div class="col-md-6  fes7-text-cont">
            {{--
            <p class="mb-60">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            </p>
            --}}
            <div class="row">
                <a  data-toggle="modal" data-target=".bs-example-modal-lg-4">
                    <div class="col-md-6 col-sm-6" >
                       <div class="fes7-box wow fadeIn" >
                        <h3 style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D7 Passive Income Visa</h3>
                          <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                             Aimed at non-EU/EEA/Swiss citizen who intend to relocate to Portugal and have a reasonable net regular passive income.
                             <br><br><br><br>
                          </p>
                       </div>
                    </div>
                 </a>
                 {{--  --}}
                 <div class="modal fade bs-example-modal-lg-4 bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-body">
                          <div class="modal-content">
                             <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myLargeModalLabel" style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D7 Passive Income Visa</h4>
                             </div>
                             <div class="modal-body">
                                <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                                   {{--  --}}
                                   <i>Requirements:</i><br>
                                   * Proof of consistent and steady passive income. It should be at least equivalent to the Portuguese
                                   minimum wage, which is now set at EUR 820 per month or EUR 9840 per year. Pensions, rental
                                   income, dividends, and other non-salaried choices all contribute to passive income.<br>
                                   * Adult family member reunification requires an additional 50% of the primary applicant&#39;s passive
                                   income, with a 30% increase for dependent children.<br>
                                   * A valid proof of residency in Portugal through at least a 6-12 month lease agreement (depending on
                                   the Embassy/Consulate).
                                   {{--  --}}
                                </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 {{--  --}}
                 <a  data-toggle="modal" data-target=".bs-example-modal-lg-5">
                    <div class="col-md-6 col-sm-6" >
                       <div class="fes7-box wow fadeIn" >
                        <h3 style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D8 Digital Nomad Visa</h3>
                          <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                             Aimed at non-EU/EEA/Swiss citizens digital nomads, freelancers, and remote workers.
                          </p>
                       </div>
                    </div>
                 </a>
                 {{--  --}}
                 <div class="modal fade bs-example-modal-lg-5 bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-body">
                          <div class="modal-content">
                             <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myLargeModalLabel" style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">D8 Digital Nomad Visa</h4>
                             </div>
                             <div class="modal-body">
                                <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                                   {{--  --}}
                                   <i>Requirements:</i><br>
                                   * The applicant must be employed by a company outside of Portugal or self-employed.<br>
                                   * Proof of salary over EUR 3280 grossly per month, equivalent to four times the minimum wage in
                                   Portugal.<br>
                                   * A valid proof of residency in Portugal through at least a 6-12 month lease agreement (depending on
                                   the Embassy/Consulate).
                                   {{--  --}}
                                </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 {{--  --}}
            </div>
            {{--  --}}
            <div class="row">
                <a  data-toggle="modal" data-target=".bs-example-modal-lg-6">
                    <div class="col-md-6 col-sm-6" >
                       <div class="fes7-box wow fadeIn" >
                        <h3 style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">Express of Interest Residence Permit</h3>
                          <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                             It is aimed at citizens of the Community of Portuguese-Speaking Countries.
                          </p>
                       </div>
                    </div>
                 </a>

                 <div class="modal fade bs-example-modal-lg-6 bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-body">
                          <div class="modal-content">
                             <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myLargeModalLabel" style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">EXPRESS OF INTEREST Residence Permit</h4>
                             </div>
                             <div class="modal-body">
                                <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                                   {{--  --}}
                                   <i>Requirements:</i><br>
                                   * Employment contract; or Promise of an employment contract; or Document proving the
                                      establishment of a company, declaring the start of activities with the Tax Administration and Social<br>
                                      Security as an individual; or Service provision contract for the exercise of a liberal profession.
                                   {{--  --}}
                                </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <a  data-toggle="modal" data-target=".bs-example-modal-lg-7">
                    <div class="col-md-6 col-sm-6" >
                       <div class="fes7-box wow fadeIn" >
                        <h3 style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">Golden Visa - Portuguese Residence by Investment</h3>
                          <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                             It is aimed at investors who invest in real estate, fund shares, business, cultural and scientific projects, and transfer of capital.
                          </p>
                       </div>
                    </div>
                 </a>

                 <div class="modal fade bs-example-modal-lg-7 bootstrap-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                       <div class="modal-body">
                          <div class="modal-content">
                             <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myLargeModalLabel" style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">Golden Visa - Portuguese Residence by Investment</h4>
                             </div>
                             <div class="modal-body">
                                <p style="font-family: 'Lato',Arial,Helvetica,sans-serif; font-style:normal">
                                   {{--  --}}
                                   <i>Requirements:</i><br>
                                   * Contribution of at least EUR 500,000 to a qualified investment fund, such as a private equity or
                                      venture capital investment fund.<br>

                                      * Investment of EUR 500,000 in the incorporation of a commercial company in Portugal or
                                      reinforcement of a company&#39;s share capital with a head office located in a national territory associated
                                      with the creation or maintenance of five or ten jobs (five of which are permanent).<br>
                                      * Investment or donation in the arts of national cultural heritage reconstruction with a minimum
                                      donation of EUR 250,000.
                                   {{--  --}}
                                </p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
            </div>
            {{--  --}}
         </div>
      </div>
      <!--end of row-->

   </div>
</div>
<!-- FEATURES 8 -->
{{--  --}}
<div class="page-section" style="padding-top:50px">
   <div class="container">
      <!-- FEATURES 8 -->
      <div class="row">
         <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="fes8-box wow fadeIn">
               <h3>INVESTMENT
                  ADVISORY
               </h3>
               <div>
                  <div style="min-height:250px">
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                        <p style="font-size:16px;">
                           Real Estate Properties<br>
                           Commercial Properties<br>
                           Guarantee Return Investments<br>
                           Investment Funds<br>
                           Setting up a Business<br>
                        </p>
                     </blockquote>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="fes8-box wow fadeIn">
               <h3>LEGAL
                  SERVICES
               </h3>
               <div>
                  <div style="min-height:250px">
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                        <p style="font-size:16px;">
                           Legal Consultation and Advisory <br>
                           Investment Due Diligence <br>
                           Property Sale and Acquisition <br>
                           Corporate Law Assistance <br>
                           Immigration and Naturalization Support<br>
                        </p>
                     </blockquote>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="fes8-box wow fadeIn" data-wow-delay="200ms">
               <h3>RELOCATION
                  SERVICES
               </h3>
               <div>
                  <div style="min-height:250px">
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                        <p style="font-size:16px;">
                           Tax Representation<br>
                           Bank account opening<br>
                           National ID Numbers<br>
                           School applications<br>
                           Citizenship<br>
                        </p>
                     </blockquote>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="fes8-box wow fadeIn" data-wow-delay="400ms">
               <h3>TAX
                  EFFICIENCY
               </h3>
               <div>
                  <div style="min-height:200px">
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                        <p style="font-size:16px;">
                           Tax Planning<br>
                           R&amp;D and Innovation Incentives<br>
                           Annual Tax Declaration<br>
                        </p>
                     </blockquote>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{{--  --}}
<!-- ABOUT US 1 -->
{{--
<div class="page-section pt-110-cont grey-light-bg" style="padding-bottom:110px;">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="mb-50">
               <h2 class="section-title">OUR <span class="bold">TEAM</span></h2>
            </div>
         </div>
      </div>
      <div class="row" style="margin:0 auto">
         <div class="member col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="400ms">
            <h3>JOSE CARREIRA</h3>
            <span>MANAGER</span>
            <br>
            <a href="mailto:jose.carreira@Nortwell.ch">jose.carreira@Nortwell.ch</a>
         </div>
         <div class="member col-md-3 col-sm-4 wow fadeInUp">
            <h3>MARLENE REIS</h3>
            <span>INVESTMENT CONSULTANT</span>
            <br>
            <a href="mailto:marlene.reis@Nortwell.pt">marlene.reis@Nortwell.pt</a>
         </div>
         <div class="member col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="200ms">
            <h3>DIANA LIMA</h3>
            <span>LAWYER</span>
            <br>
            <a href="mailto:diana.lima@Nortwell.pt">diana.lima@Nortwell.pt</a>
         </div>
         <div class="member col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="400ms">
            <h3>JOSE SANTOS</h3>
            <span>TAX EXPERT</span>
            <br>
            <a href="mailto:jose.santos@Nortwell.pt">jose.santos@Nortwell.pt</a>
         </div>
      </div>
   </div>
</div>
--}}
{{--  --}}
<hr class="mt-0 mb-0">
<div class="port-view-more-cont-dark">
   <a class="port-view-more-dark " href="#contact-us">LET'S BEGIN TOGETHER</a>
</div>
<div class="page-section pt-110-b-30-cont white-light-bg" id="news">
   <div class="container">
      <div class="mb-50">
         <h2 class="section-title pr-0">Updates <span class="bold"></span>
         </h2>
      </div>
      <div class="row">
         <!-- Post Item 1 -->
         <div class="col-md-12 wow fadeIn pb-30" >
            <div class="row">
               <div class="col-md-4 blog2-post-title-cont">
                  <div class="post-prev-date-cont">
                     <span class="blog2-date-numb">21</span><span class="blog2-month">July</span>
                  </div>
                  <div class="post-prev-title">
                     <h3><a href="#">GOLDEN VISA</a></h3>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="blog2-post-prev-text">
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                     <p style="font-size:16px;">
                        The Golden Visa program will remain active with certain investment
                        options. However, you will no longer be able to apply for a Golden Visa
                        through a real estate investment or a real estate related fund investment.
                        The new law will not apply retroactively to current applications and
                        renewals.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Post Item 2 -->
         <div class="col-md-12 wow fadeIn pb-30" >
            <div class="row">
               <div class="col-md-4 blog2-post-title-cont">
                  <div class="post-prev-date-cont">
                     <span class="blog2-date-numb">20</span><span class="blog2-month">July</span>
                  </div>
                  <div class="post-prev-title">
                     <h3><a href="#">DIGITAL NOMADS</a></h3>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="blog2-post-prev-text">
                     <blockquote class="quote" style="font-size:14px; margin:0px; padding:0px">
                        <p style="font-size:16px;">
                           Portugal most sought out by digital nomads.
                        </p>
                     </blockquote>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- END PORTFOLIO SECTION 1 -->
<!-- CLIENTS 1 & TESTIMONIALS 1 -->
{{--
<div class="page-section p-110-cont" id="partners">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="mb-50">
               <h2 class="section-title">OUR <span class="bold">PARTNERS</span></h2>
            </div>
         </div>
      </div>
      <div class="row">
         <!-- CLIENTS 1 -->
         <div class="col-md-12">
            <div class="row client-row border-bot">
               <div class="col-xs-6 col-sm-3 text-center">
                  <img alt="client" src="{{asset('theme/images/clients/1.png')}}">
               </div>
               <div class="col-xs-6 col-sm-3 text-center">
                  <img alt="client" src="{{asset('theme/images/clients/2.png')}}">
               </div>
               <div class="col-xs-6 col-sm-3 text-center">
                  <img alt="client" src="{{asset('theme/images/clients/3.png')}}">
               </div>
               <div class="col-xs-6 col-sm-3 text-center">
                  <img alt="client" src="{{asset('theme/images/clients/4.png')}}">
               </div>
            </div>
            <div class="row client-row">
               <div class="col-xs-6 col-sm-3 text-center">
                  <img alt="client" src="{{asset('theme/images/clients/5.png')}}">
               </div>
               <div class="col-xs-6 col-sm-3 text-center">
                  <img alt="client" src="{{asset('theme/images/clients/6.png')}}">
               </div>
               <div class="col-xs-6 col-sm-3 text-center">
                  <img alt="client" src="{{asset('theme/images/clients/7.png')}}">
               </div>
               <div class="col-xs-6 col-sm-3 text-center">
                  <img alt="client" src="{{asset('theme/images/clients/8.png')}}">
               </div>
            </div>
         </div>
         <!-- TESTIMONIALS 1 -->
      </div>
   </div>
</div>
--}}
{{--  --}}
<div class="page-section" id="contact-us" style="background-image: url('{{url('/')}}/uploads/bannerz.jpg'); background-size:cover; background-repeat:no-repeat">
      <div class="container">
         <div class="row mb-40 mt-40" >
               <div class="contact-form-cont gray-bg" style="margin:0 auto !important">
                        <!-- TITLE -->
                        <div style="margin-top:-60px">
                            <h2 class="section-title">BEGIN  <span class="bold">HERE</span></h2>
                        </div>
                        <br>
                        <!-- CONTACT FORM -->
                        <form id="contact-form" action="{{url('/')}}/begin-here" method="POST">
                           @csrf
                            <div class="row">
                            <div class="col-md-12 mb-30">
                                <!-- <label>Your name *</label> -->
                                <input type="text" value="" data-msg-required="Please enter your name" maxlength="100" class="controled" name="name" id="name" placeholder="Name" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12 mb-30">
                                <!-- <label>Your email address *</label> -->
                                <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="Email" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12 mb-30">
                                <!-- <label>Your email address *</label> -->
                                <input type="text" value="" data-msg-required="Your Nationality" data-msg-email="Your Nationality" maxlength="100" class="controled" name="nationality" id="email" placeholder="Nationality" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12 mb-30">
                                <!-- <label>Your email address *</label> -->
                                <input type="text" value="" data-msg-required="Your Nationality" data-msg-email="Your Nationality" maxlength="100" class="controled" name="residence" id="email" placeholder="Country of Residence" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12 mb-30">
                                <label>Service *</label>
                                <select name="service">
                                    <option disabled select="selected">
                                        Select Service
                                    </option>
                                    <option value="Immigration Law">
                                        Immigration Law
                                    </option>
                                    <option value="Legal Services">
                                        Legal Services
                                    </option>
                                    <option value="Investment Advisory">
                                        Investment Advisory
                                    </option>
                                    <option value="Relocation Services">
                                        Relocation Services
                                    </option>
                                    <option value="Tax Efficiency">
                                        Tax Efficiency
                                    </option>
                                </select>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Available for a Meeting</label>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-30">
                                            <label>Date</label>
                                            <input type="date" value="" data-msg-required="Date" data-msg-email="Date" maxlength="100" class="controled" name="date" id="email" placeholder="Date" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-30">
                                            <label>Hour</label>
                                            <input type="time" value="" data-msg-required="Time" data-msg-email="Time" maxlength="100" class="controled" name="time" id="email" placeholder="Time" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12 mb-40">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="" required></textarea>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12 text-center-xxs">
                                <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                            </div>
                            </div>
                        </form>
                        <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>
                        <div class="alert alert-danger hidden animated shake" id="contactError">
                            <strong>Error!</strong> There was an error sending your message.
                        </div>
               </div>
      </div>
   </div>
</div>
{{--  --}}
<!-- CONTACT INFO SECTION 1 -->
<div class="page-section p-110-cont">
   <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-6">
            <div class="cis-cont">
               <div class="cis-icon">
                  <div class="icon icon-basic-map"></div>
               </div>
               <div class="cis-text">
                  <h3><span class="bold">ADDRESS</span></h3>
                  <p>Campo dos Martires de Patria, 144ª,Porto</p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="cis-cont">
               <div class="cis-icon">
                  <div class="icon icon-basic-mail"></div>
               </div>
               <div class="cis-text">
                  <h3><span class="bold">EMAIL</span></h3>
                  <p><a href="mailto:info@Nortwell.pt">info@nortwell.pt</a></p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6">
            <div class="cis-cont">
               <div class="cis-icon">
                  <div class="icon icon-basic-smartphone"></div>
               </div>
               <div class="cis-text">
                  <h3><span class="bold">CALL US</span></h3>
                  <p>+351 913 531 537</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{{--  --}}
<!-- NEWS LETTER -->
<div class="page-section nl-cont">
   <div class="container">
      <div class="relative" >
         <div id="mc_embed_signup" class="nl-form-container clearfix">
            <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>
               <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
               <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
               <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
               <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>
               <input type="submit" value="OUR NEWSLETTER" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
            </form>
            <div id="notification_container"  ></div>
         </div>
      </div>
   </div>
</div>
@endsection
