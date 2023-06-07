@extends('layouts.maincontent')
@section('content')
<div class="tp-banner-container">
    <div class="tp-banner" >
        <ul>
        <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                <img src="freeimages/Connectinglives.jpg" alt="slider-image" />
                <div class="tp-caption sfl title-slide text-left" data-x="left" data-y="303" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">                            
                    Connecting more <br>
                    lives together
                </div>   
                <div class="tp-caption sfb flat-down" data-x="left" data-y="403" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                    <a href="#"><img src="images/slides/button1.png" alt="slider-image"></a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="site-content">
    <div id="page-header" >
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <h2 class="title">See our Products</h2>
                </div>
                <div id="page-breadcrumbs">            
                    <nav class="breadcrumb-trail breadcrumbs">
                        <h2 class="trail-browse">Explore from here:</h2>
                    </nav>           
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /#page-header -->

</div><!-- /#site-content -->

<div class="flat-row parallax parallax4 pad-top40px pad-bottom60px">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="iconbox style_3">
                    <div class="box-header">
                        <!-- <div class="box-icon"><i class="fa icons icon-speech"></i></div> -->
                    </div>
                    <div class="box-content">

                        <p>
                        <img src="JBImages/abantu.png" alt="slider-image" />
                        </p>
                        <br>
                        <p class="box-readmore">
                        <h2>Astro Abantu</h2>
                        </p>
                        <a href="#" class="button lg dark">Know More <span class="fa fa-arrow-right"></a>
                    </div>
                </div><!-- /.iconbox -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="iconbox style_3">
                    <div class="box-header">
                        <!-- <div class="box-icon"><i class="fa icons icon-globe"></i></div> -->
                        <h4 class="box-title"><a href=""></a></h4>
                    </div>
                    <div class="box-content">

                        <p>
                        <img src="JBImages/force.jpeg " alt="slider-image" />
                        </p>
                        <p class="box-readmore">
                         <br>
                        <h2>AstroPulse Force</h2>
                        </p>
                        <a href="#" class="button lg dark">Know More <span class="fa fa-arrow-right"></span></a>
                    </div>
                </div><!-- /.iconbox -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4">
                <div class="iconbox style_3">
                    <div class="box-header">
                        <!-- <div class="box-icon"><i class="fa icons icon-globe"></i></div> -->
                        <h4 class="box-title"><a href=""></a></h4>
                    </div>
                    <div class="box-content">

                        <p>
                        <img src="JBImages/buds.jpg " alt="slider-image" />
                        </p>
                        <p class="box-readmore">
                         <br>
                        <h2> Astro Buds</h2>
                        </p>
                        <a href="#" class="button lg dark"> Know More <span class="fa fa-arrow-right"></span></a>
                    </div>
                </div><!-- /.iconbox -->
            </div><!-- /.col-md-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.flat-row -->


</div><!-- /#site-content -->
<div id="site-content" >
    <div id="page-header">
        <div class="container">
            <div class="row">
                <div class="page-title">
                    <h2 class="title">Subscribe to our news-letter and get special offers from us.</h2>
                </div>
                <div id="page-breadcrumbs">            
                    <nav class="breadcrumb-trail breadcrumbs">
                        <h2 class="trail-browse">Enter email here:</h2>
                    </nav>           
                </div>
            </div><!-- /.row -->
            <div class="flat-row pad-top40px pad-bottom60px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form id="contactform" class="flat-contact-form" method="post" action="">
                                <div class="quick-appoinment">
                             <div class="row">
                                        <div class="col-md-8">
                                            <input type="text" id="name" name="name" class="input-text-name" placeholder="Enter your email address" required="required">

                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-4">
                                            <input type="submit" name="submit" value="Send" class="input-submit">
                                        </div><!-- /.col-md-6 -->

                                    </div><!-- /.row -->

                                    <div class="flat-divider d30px"></div>
                                </div>
                            </form>
                        </div><!-- /.col-md-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.flat-row -->
        </div><!-- /.container -->
    </div><!-- /#page-header -->
   

</div><!-- /#site-content -->

@endsection