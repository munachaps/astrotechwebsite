@extends('layouts.maincontent')
@section('content')
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
        <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="freeimages/eWallet-credit.png" alt="slider-image" />
                <div class="tp-caption sfl title-slide text-left" data-x="left" data-y="303" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">                            
                    Our role in the <br>
                   finacial community
                </div>   
                <div class="tp-caption sfb flat-down" data-x="left" data-y="403" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                    <a href="#"><img src="images/slides/button1.png" alt="slider-image"></a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="site-content">
    <div id="page-header" style="background-color:#F7F7F7">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <h2 class="title">Here's what we do</h2>
                </div>
                <div id="page-breadcrumbs">            
                    <nav class="breadcrumb-trail breadcrumbs">
                        <h2 class="trail-browse">Learn About Us:</h2>
                    </nav>           
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /#page-header -->

</div><!-- /#site-content -->

<div class="slider_spacing"></div>
<div class="flat-row pad-top0px pad-bottom20px">
    <div class="image-single style_1 clearfix">
        <div class="item-two-column section-iconlist">
            <div class="title-section style_1">
            <div class="page-title">
                    <h2 class="title">Enhancing ease of access to credit</h2>
                </div> 
                
                <div class="desc">
                Through AstroCred people from different parts of the country can now easily apply for product and cash loans 
                digitally within the quickest turnover times.
                </div>                      
            </div>
            <div class="flat-divider d30px"></div>
        
            <div class="flat-divider d30px"></div>
            <a href="#" class="button lg dark">Read More</a>
        </div><!-- /.item-two-column -->
        <div class="item-two-column mag-left flat-single-image-autoheight-style1">
             <img src="freeimages/Connectinglives.jpg">
        </div><!-- /.item-two-column -->
    </div><!-- /.image-single -->
</div><!-- /.flat-row -->

<div class="flat-row bg-f7f7f7 pad-top0px pad-bottom0px">
    <div class="image-single style_1 clearfix">
        <div class="item-two-column flat-single-image-autoheight-style2">
            <img src="freeimages/Digital-Inclusion.jpg">
        </div><!-- /.item-two-column -->
        <div class="item-two-column">
            <div class="section-progress">
                <div class="title-section style_1">
                    <h3 class="title">Enabling credit offering merchants to grow their businesses</h3>  
                    <div class="desc">
                        Since AstroCred is digital , merchants can register and manage their profile in sync wih their products.
                        Merchants can now drive credit sales faster digitally and reach a wider border-less customer base using the eShagi platform.
                    </div>                      
                </div>

                <div class="flat-divider d40px"></div>

                <div class="flat-progress-bar">
                   
                    <a href="#" class="button lg dark">How can we help you?</a>
                </div><!-- /.flat-progress -->
            </div><!-- /.section-accordion -->
        </div><!-- /.item-two-column -->
    </div><!-- /.image-single -->
</div><!-- /.flat-row -->
<!-- /.flat-row -->
<section class="row mobile-app" style="background-image: url('/freeimages/Connectinglives.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-6 wow fadeIn">
                <h2>Get the AstroCred App</h2>
                <p>Download the AstroCred App for free and starting enjoying endless benefits</p>
                <div class="row m0 downloads-btns">
                    <a href="" class="dload-link"><img src="freeimages/app-store.png" alt=""></a>
                    <a href="https://play.google.com/store/apps/details?id=com.algebratech.pulse_wellness" class="dload-link" target="_blank"><img src="freeimages/google-play.png" alt=""></a>
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6 wow fadeInUp">

            </div>
        </div>
    </div>
</section>
@endsection