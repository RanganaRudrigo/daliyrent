<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Portmans</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" href="<?= base_url() ?>images/favicon.png" type="image/png" sizes="16x16">
    <style type="text/css">
        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>


    <link rel='stylesheet' href='<?= base_url() ?>css/gdsr.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= base_url() ?>css/rating.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= base_url() ?>css/pagenavi-css.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= base_url() ?>css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='<?= base_url() ?>css/bootstrap-responsive.min.css' type='text/css' media='all'/>
    <!-- multiselect, tagging -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/select2/select2.css">


    <link rel='stylesheet' href='<?= base_url() ?>css/bootstrap-select.css' type='text/css' media='all'/>

    <link rel='stylesheet' href='<?= base_url() ?>css/style.css' type='text/css' media='all'/>
    <!-- Include the Awesome Font stylesheet -->
    <link href="<?= base_url() ?>media2/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Ubuntu%3A400%2C300%2C700&#038;ver=4.2.5'
          type='text/css' media='all'/>
    <script type='text/javascript' src='<?= base_url() ?>js/jquery.js'></script>
    <script type='text/javascript' src='<?= base_url() ?>js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?= base_url() ?>js/gdsr.js'></script>
    <!--    <script type='text/javascript' src='--><?//= base_url() ?><!--js/modernizr-2.8.3-respond-1.1.0.min.js'></script>-->

    <!-- Flexslider stylesheet -->
    <link href="<?= base_url() ?>media2/js/flexslider/flexslider.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>media2/js/prettyphoto/prettyPhoto.css" rel="stylesheet" media="all">

    <!-- Pretty Photo stylesheet -->
    <link href="<?= base_url() ?>media2/js/prettyphoto/prettyPhoto.css" rel="stylesheet" media="all">

    <!-- Pretty Photo stylesheet -->
    <link href="<?= base_url() ?>media2/js/swipebox/swipebox.css" rel="stylesheet" media="all">

    <link rel='stylesheet' href='<?= base_url() ?>media2/css/main.css' type='text/css' media='all'/>

    <style type="text/css">
        .select2-container {
            padding: 0;
        }

        .select2-container.select2-drop-above .select2-choice,
        .select2-container .select2-choice {
            background: none;
            border: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            margin: 3px 0 0;
        }

        .select2-container.select2-drop-above .select2-choice .select2-arrow,
        .select2-container .select2-choice .select2-arrow {
            background: none;
            border: none;
        }

        .select2-container.select2-drop-above .select2-choice > .select2-chosen [class^="flag-"],
        .select2-container .select2-choice > .select2-chosen [class^="flag-"] {
            margin: -2px 4px 0 0;
        }

        .select2-container-multi .select2-choices,
        .select2-choices {
            border: none;
            background: none;
            padding: 1px 0;
        }

        .select2-container-multi .select2-choices .select2-search-choice,
        .select2-choices .select2-search-choice {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            background: #f0f7fc;
            border: 1px solid #2487c9;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            font-size: 13px;
            padding: 5px 22px 4px 5px;
        }

        .select2-container-multi .select2-choices .select2-search-choice [class^="flag-"],
        .select2-choices .select2-search-choice [class^="flag-"] {
            margin: -4px 4px 0 0;
            height: 14px;
        }

        .select2-container-multi .select2-search-choice-close {
            left: auto;
            right: 3px;
            color: #fff;
            background: none !important;
            top: 5px;
        }

        .select2-container-multi .select2-search-choice-close:after {
            font-weight: 700;
            font-size: 17px;
            right: 0;
            color: #ccc;
            content: '×';
        }

        .select2-container-multi .select2-search-choice-close:hover {
            text-decoration: none;
        }

        .select2-container-multi .select2-search-choice-close:hover:after {
            color: #222222;
        }

        .select2-container-multi.select2-container-active .select2-choices {
            border: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .select2-container-multi .select2-choices .select2-search-choice-focus {
            background: #daecf8;
        }

        .select2-drop {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            border-color: transparent #eee #ddd #ddd;
        }

        .select2-results .select2-highlighted {
            background: #f0f7fc;
            color: #222222;
        }

        .select2-dropdown-open.select2-drop-above .select2-choices {
            background: #fff;
            border: none;
        }

        .select2-drop.select2-drop-above {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            border-color: #ddd #eee transparent #ddd;
        }

        .select2-drop.select2-drop-above.select2-drop-active {
            border-top: #ddd;
            margin-bottom: -1px;
        }

        .select2-results .select2-result-label {
            font-size: 13px;
        }

        .select2-results .select2-result-label [class^="flag-"] {
            margin: -2px 4px 0 0;
        }

        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        .tab-finder {
            margin-bottom: 20px;
        }

        .welcome-note h1 {
            text-align: center;
        }

        .welcome-note p {
            text-align: center;
        }

        .footer-widget img {
            margin-bottom: 14px;
            margin-top: 14px;
        }

        .footer-widget h4 {
            text-align: center;
        }

        .textwidget p {
            text-align: justify;
            text-justify: inter-word;
        }

        .header-buttons1 p {
            padding-top: 14px;
            color: #FFF;
            margin-right: 20px;
        }

        .header-buttons1 {
            float: right;
            font-size: 26px;
            margin-top: 10px;
            font-family: "Ubuntu", Arial !important;
        }

        .header-buttons1 span {
            color: #31cbf8;
        }

        @media (max-width: 680px) {
            .header-buttons1 {
                display: none;
            }
        }

        .select2-container {
            width: 100%;
            margin-bottom: 22px;
            cursor: pointer;
            color: #7b8283;
            background: url(<?= base_url()?>images/dropdown-arrow.png) no-repeat right top;
            box-shadow: inset 0 0 2px #e9e9e9;
            border: 1px solid #cdcdcd;
        }

        .select2-search input {
            padding-top: 3px;
            height: 30px !important;
            color: #7b8283;;
        }
        #overview .contact-form {
            float: left;
        }
        .selectwrap input {
            padding: 3px 30px 6px 10px !important; ;
        }
    </style>
</head>
<body class="">
<?php $this->load->view('inc/header'); ?>

<section class="top_form" role='main'>
    <!-- Content -->
    <section class=" container contents lisitng-grid-layout ">
        <h1> &nbsp; </h1>

        <div class="row">
            <div class="span9 main-wrap">

                <!-- Main Content -->
                <div class="main">
                    <div class="inner-wrapper">
                        <article id="post-122" class="post-122 page type-page status-publish hentry clearfix">
                        </article>
                        <div class="map-container clearfix">
                            <div id="map_canvas"></div>

                            <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                            <script type="text/javascript">
                                // Google Map
                                function initialize()
                                {
                                    var geocoder  = new google.maps.Geocoder();
                                    var map;
                                    var latlng = new google.maps.LatLng(-37.817917, 144.965065);
                                    var infowindow = new google.maps.InfoWindow();
                                    var myOptions = {
                                        zoom: 17,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };

                                    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                                    geocoder.geocode( { 'location': latlng },
                                        function(results, status) {
                                            if (status == google.maps.GeocoderStatus.OK)
                                            {
                                                map.setCenter(results[0].geometry.location);
                                                var marker = new google.maps.Marker({
                                                    map: map,
                                                    position: results[0].geometry.location
                                                });
                                                //alert(results[0].formatted_address);
                                                //infowindow.setContent(results[0].formatted_address);
                                                //infowindow.open(map, marker);
                                            }
                                            else
                                            {
                                                alert("Geocode was not successful for the following reason: " + status);
                                            }
                                        });

                                }

                                initialize();
                            </script>
                        </div>
                        <section class="contact-details clearfix">
                            <h3>Real Homes</h3>
                            <address>3015 Grand Ave, Coconut Grove,<br>Merrick Way, FL 12345</address>
                            <ul class="contacts-list">
                                <li class="phone"> Phone: 1-800-555-1234</li>
                                <li class="mobile"> Mobile: 123-456-7890</li>
                                <li class="email"> Email: info@yourwebsite.com</li>
                            </ul>
                        </section>
                        <section id="contact-form-main">
                            <h3 class="form-heading">Send us a message</h3>
                            <form class="contact-form" method="post" action="">
                                <p>
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="required" title="* Please provide your name">
                                </p>

                                <p>
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="email required" title="* Please provide a valid email address">
                                </p>

                                <p>
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject">
                                </p>

                                <p>
                                    <label for="comment">Message</label>
                                    <textarea name="message" id="comment" class="required" title="* Please provide your message"></textarea>
                                </p>

                                <p>
                                    <input type="submit" value="Send Message" id="submit" class="real-btn" name="submit">
                                    <img src="<?= base_url() ?>media2/images/ajax-loader.gif" id="contact-loader" alt="Loading...">
                                    <input type="hidden" name="action" value="send_message">
                                </p>
                                <div class="error-container"></div>
                                <div id="message-sent">&nbsp;</div>
                            </form>
                        </section>

                    </div>
                </div><!-- End Main Content -->

            </div>
            <!-- End span9 -->


            <div class="span3 sidebar-wrap">

                <!-- Sidebar -->
                <aside class="sidebar">

                    <section class="widget advance-search">
                        <h4 class="title search-heading">Find Your Home<i class="icon-search"></i></h4>

                        <div class="as-form-wrap">
                            <form   class="advance-search-form clearfix"   action="<?= base_url() ?>search/" method="get">

                                <label>Location</label>
                                    <span class="selectwrap">
                                        <select name="key" id="s2_basic" class="">
                                            <option value="any" selected="selected">Any</option>
                                            <?php foreach ($key as $k): ?>
                                                <option value="<?= url_title($k) ?>"><?= $k ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </span>
                                <div class="option-bar">
                                    <label>Status</label>
                        <span class="selectwrap">
                            <select name="status" id="select-status" class="search-select">
                                <option value="rent">On Rent</option>
                                <option value="sell">On Sale</option>
                                <option value="New Development">New Development</option>
                                <option value="Land">Land</option>
                                <option value="any" selected="selected">Any</option>
                            </select>
                        </span>
                                </div>

                                <div class="option-bar">
                                    <label>Property Type</label>
                        <span class="selectwrap">
                            <select name="type" id="select-property-type" class="search-select">
                                <option value="any" selected="selected">Any</option>
                                <?php foreach ($type as $k): ?>

                                    <option value="<?=$k->id ?>"><?=$k->title ?></option>
                                <?php endforeach; ?>
                            </select>
                        </span>
                                </div>

                                <div class="option-bar mini first">
                                    <label>Bedrooms</label>
                        <span class="selectwrap">
                            <select name="bedrooms" id="select-bedrooms" class="search-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="any" selected="selected">Any</option>
                            </select>
                        </span>
                                </div>

                                <div class="option-bar mini">
                                    <label>Bathrooms</label>
                        <span class="selectwrap">
                            <select name="bathrooms" id="select-bathrooms" class="search-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="any" selected="selected">Any</option>
                            </select>
                        </span>
                                </div>

                                <div class="option-bar mini first">
                                    <label>Min Price</label>
                        <span class="selectwrap">
                            <select name="min-price" id="select-min-price" class="search-select">
                                <option value="50000">500,000</option>
                                <option value="100000">100,000</option>
                                <option value="200000">200,000</option>
                                <option value="300000">300,000</option>
                                <option value="400000">400,000</option>
                                <option value="500000">500,000</option>
                                <option value="600000">600,000</option>
                                <option value="700000">700,000</option>
                                <option value="800000">800,000</option>
                                <option value="900000">900,000</option>
                                <option value="1000000">1,000,000</option>
                                <option value="any" selected="selected">Any</option>
                            </select>
                        </span>
                                </div>

                                <div class="option-bar mini">
                                    <label>Max Price</label>
                        <span class="selectwrap">
                            <select name="max-price" id="select-max-price" class="search-select">
                                <option value="1000000">1,000,000</option>
                                <option value="2000000">2,000,000</option>
                                <option value="3000000">3,000,000</option>
                                <option value="4000000">4,000,000</option>
                                <option value="5000000">5,000,000</option>
                                <option value="6000000">6,000,000</option>
                                <option value="7000000">7,000,000</option>
                                <option value="8000000">8,000,000</option>
                                <option value="9000000">9,000,000</option>
                                <option value="10000000">10,000,000</option>
                                <option value="any" selected="selected">Any</option>
                            </select>
                        </span>
                                </div>

                                <input type="submit" value="Search" class=" real-btn btn"  >
                            </form>
                        </div>
                    </section>

                </aside>
                <!-- End Sidebar -->

            </div>

        </div>
        <!-- End contents row -->

    </section>
    <!-- End Content -->
</section>
<?php $this->load->view('inc/sub_footer'); ?>
</body>
<script src="<?= base_url() ?>media2/js/jquery.min.js"></script>

<script type='text/javascript' src='<?= base_url() ?>js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/bootstrap-select.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/bootstrap-slider.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/jquery.mousewheel.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/jquery.mCustomScrollbar.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/tinynav.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/jquery.placeholder.min.js'></script>
<!--<script type='text/javascript' src='--><?//= base_url() ?><!--js/gmap3.min.js'></script>-->
<!--<script type='text/javascript'-->
<!--        src='http://maps.google.com/maps/api/js?sensor=false&#038;language=en&#038;ver=4.2.5'></script>-->
<script type='text/javascript' src='<?= base_url() ?>js/jquery.prettyPhoto.js'></script>

<script src="<?= base_url() ?>media2/js/jquery.selectbox.js"></script>
<script>
    URL = { base : '<?= base_url() ?>' , current : '<?= current_url() ?>' };
</script>
<!-- multiselect, tagging -->
<script src="<?= base_url() ?>assets/lib/select2/select2.min.js"></script>

<script src="<?= base_url() ?>media2/js/flexslider/jquery.flexslider.js"></script>
<script src="<?= base_url() ?>media2/js/elastislide/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>media2/js/elastislide/jquery.elastislide.js"></script>
<script src="<?= base_url() ?>media2/js/prettyphoto/jquery.prettyPhoto.js"></script>
<script src="<?= base_url() ?>media2/js/swipebox/jquery.swipebox.min.js"></script>
<script src="<?= base_url() ?>media2/js/jquery.isotope.min.js"></script>
<script src="<?= base_url() ?>media2/js/jquery.jcarousel.min.js"></script>
<script src="<?= base_url() ?>media2/js/jquery.form.js"></script>
<script src="<?= base_url() ?>media2/js/jquery.validate.min.js"></script>
<script type='text/javascript' src='<?= base_url() ?>js/accounting.min.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/main.js'></script>
<script type='text/javascript' src='<?= base_url() ?>js/comment-reply.min.js'></script>
<script>
    jQuery(function ($) {
        /*-------------------------------------------------------*/
        /*	Select Box
         /* -----------------------------------------------------*/
        if (jQuery().selectbox) {
            $('.search-select').selectbox();
        }
        $('#s2_basic').select2({
            allowClear: true,
            placeholder: "Select..."
        });

        $('body').on('click', function (e) {
            if ($(e.target).hasClass('selectbox')) return;
            $('.selectbox-wrapper').css('display', 'none');
        });


        /*-----------------------------------------------------------------------------------*/
        /*	Flex Slider
         /*-----------------------------------------------------------------------------------*/
        if(jQuery().flexslider)
        {
            // Flex Slider for Homepage
            $('#home-flexslider .flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 7000,
                animationSpeed:	1500,
                directionNav: true,
                controlNav: false,
                keyboardNav: true
            });

            // Remove Flex Slider Navigation for Smaller Screens Like IPhone Portrait
            $('.slider-wrapper , .listing-slider').hover(function(){
                var mobile = $('body').hasClass('probably-mobile');
                if(!mobile)
                {
                    $('.flex-direction-nav').stop(true,true).fadeIn('slow');
                }
            },function(){
                $('.flex-direction-nav').stop(true,true).fadeOut('slow');
            });

            // Flex Slider for Detail Page
            $('#property-detail-flexslider .flexslider').flexslider({
                animation: "slide",
                directionNav: false,
                controlNav: "thumbnails"
            });

            // Flex Slider Gallery Post
            $('.listing-slider ').flexslider({
                animation: "slide"
            });

        }


        /*-----------------------------------------------------------------------------------*/
        /*	jCarousel
         /*-----------------------------------------------------------------------------------*/
        if(jQuery().jcarousel){
            // Jcarousel for Detail Page
            jQuery('#property-detail-flexslider .flex-control-nav').jcarousel({
                vertical: true,
                scroll:1
            });

            // Jcarousel for partners
            jQuery('.brands-carousel .brands-carousel-list ').jcarousel({
                scroll:1
            });
        }

        if( jQuery().swipebox )
        {
            $(".swipebox").swipebox();
        }

    })


</script>
</html>
