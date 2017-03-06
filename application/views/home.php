<!DOCTYPE html>
<html class="load-full-screen">
<head>
    <?php $this->load->view('inc/head'); ?>
    <style>
        .home_form { background-color:#feba02;     border-radius: 6px;webkit-box-shadow: 0 3px 4px 0 rgba(0,0,0,0.17); */
            /* box-shadow: 0 3px 4px 0 rgba(0,0,0,0.17); */}
        .new-top .search-top {
            text-align:center;

        }
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
        }
        .overlay:target {
            visibility: visible;
            opacity: 1;
        }

        .popup {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }
        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }
        .popup .close:hover {
            color: #06D85F;
        }
        .popup .content {
            max-height: 30%;
            overflow: auto;
        }

        @media screen and (max-width: 700px){
            .box{
                width: 70%;
            }
            .popup{
                width: 70%;
            }
        }
        .search-box { text-align:right;}
        .search-box a { font-size:16px;}
    </style>
</head>
<body class="load-full-screen">


<div class="site-wrapper">
    <!-- BEGIN: NAV SECTION -->
    <?php $this->load->view('inc/header'); ?>
    <!-- END: NAV SECTION -->

    <!-- BEGIN: SEARCH SECTION -->
    <section>
        <div class="row full-width-search">
            <div class="container clear-padding">
                <div class="col-md-12 search-section">
                    <div role="tabpanel">
                        <!-- BEGIN: CATEGORY TAB -->
                        <div class="new-top col-md-2"></div>
                        <div class="new-top col-md-10">
                            <ul class="nav nav-tabs search-top" role="tablist" id="searchTab">
                                <li role="presentation" class="active text-center">
                                    <a href="#hotel" aria-controls="flight" role="tab" data-toggle="tab">
                                        <i class="fa fa-bed"></i>
                                        <span>HOTELS</SPAN>
                                    </a>
                                </li>
                                <li role="presentation" class="text-center">
                                    <a href="#apartments" aria-controls="hotel" role="tab" data-toggle="tab">
                                        <i class="fa fa-building"></i>
                                        <span>APARTMENTS</span>
                                    </a>
                                </li>
                                <li role="presentation" class="text-center">
                                    <a href="#house" aria-controls="holiday" role="tab" data-toggle="tab">
                                        <i class="fa fa-home"></i>
                                        <span>HOUSES</span>
                                    </a>
                                </li>
                                <li role="presentation" class="text-center">
                                    <a href="#villa" aria-controls="taxi" role="tab" data-toggle="tab">
                                        <i class="fa fa-picture-o"></i>
                                        <span>VILLA</span>
                                    </a>
                                </li>

                                <li role="presentation" class="text-center">
                                    <a href="#last_minitue_deal" aria-controls="cruise" role="tab" data-toggle="tab">
                                        <i class="fa fa-paper-plane"></i>
                                        <span>LAST MINITUE DEALS</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                        <div class="new-top col-md-2"></div>
                        <!-- END: CATEGORY TAB -->

                        <!-- BEGIN: TAB PANELS -->
                        <div class="tab-content">
                            <!-- BEGIN: FLIGHT SEARCH -->

                            <!-- END: FLIGHT SEARCH -->

                            <!-- START: HOTEL SEARCH -->
                            <div role="tabpanel" class="tab-pane active" id="hotel">


                                <form >

                                    <div class="col-md-12 product-search-title">Book Hotel Rooms</div>
                                    <div class="home_form col-md-12">
                                        <div class="col-md-2a search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="destination-city" class="form-control" required placeholder="I WANT TO GO">
                                                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - IN">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2b col-sm-2 search-col-padding">

                                            <select onChange="trigger_pop($(this).val())" class="selectpicker" name="rooms">
                                                <option>NIGHTS</option>
                                                <option  >1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - OUT">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <select class="selectpicker" name="rooms">
                                                <option>1 adult</option>
                                                <option>
                                                    2 adults (1 room)</option>
                                                <option>
                                                    1 adult</option>
                                                <option onClick="alert()" >
                                                    More options ...</option>

                                            </select>
                                        </div>
                                        <div class="col-md-2 search-col-padding">

                                            <button type="submit" class="search-button btn transition-effect">Search Hotels</button>
                                        </div>

                                    </div>



                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="apartments">
                                <form >

                                    <div class="col-md-12 product-search-title">Apartments</div>
                                    <div class="home_form col-md-12">
                                        <div class="col-md-2a search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="destination-city" class="form-control" required placeholder="I WANT TO GO">
                                                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - IN">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2b col-sm-2 search-col-padding">
                                            <select onChange="trigger_pop($(this).val())" class="selectpicker" name="rooms">
                                                <option>NIGHTS</option>
                                                <option  >1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - OUT">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <select class="selectpicker" name="rooms">
                                                <option>1 adult</option>
                                                <option>
                                                    2 adults (1 room)</option>
                                                <option>
                                                    1 adult</option>
                                                <option onClick="alert()" >
                                                    More options ...</option>

                                            </select>
                                        </div>
                                        <div class="col-md-2 search-col-padding">

                                            <button type="submit" class="search-button btn transition-effect">Search Hotels</button>
                                        </div>

                                    </div>



                                    <div class="clearfix"></div>
                                </form>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="house">
                                <form >
                                    <div class="col-md-12 product-search-title">House</div>

                                    <div class="home_form col-md-12">
                                        <div class="col-md-2a search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="destination-city" class="form-control" required placeholder="I WANT TO GO">
                                                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - IN">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2b col-sm-2 search-col-padding">

                                            <select onChange="trigger_pop($(this).val())" class="selectpicker" name="rooms">
                                                <option>NIGHTS</option>
                                                <option  >1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - OUT">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <select class="selectpicker" name="rooms">
                                                <option>1 adult</option>
                                                <option>
                                                    2 adults (1 room)</option>
                                                <option>
                                                    1 adult</option>
                                                <option onClick="alert()" >
                                                    More options ...</option>

                                            </select>
                                        </div>
                                        <div class="col-md-2 search-col-padding">

                                            <button type="submit" class="search-button btn transition-effect">Search Hotels</button>
                                        </div>

                                    </div>



                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="villa">
                                <form >
                                    <div class="col-md-12 product-search-title">Villa</div>

                                    <div class="home_form col-md-12">
                                        <div class="col-md-2a search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="destination-city" class="form-control" required placeholder="I WANT TO GO">
                                                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - IN">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2b col-sm-2 search-col-padding">

                                            <select onChange="trigger_pop($(this).val())" class="selectpicker" name="rooms">
                                                <option>NIGHTS</option>
                                                <option  >1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - OUT">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <select class="selectpicker" name="rooms">
                                                <option>1 adult</option>
                                                <option>
                                                    2 adults (1 room)</option>
                                                <option>
                                                    1 adult</option>
                                                <option onClick="alert()" >
                                                    More options ...</option>

                                            </select>
                                        </div>
                                        <div class="col-md-2 search-col-padding">

                                            <button type="submit" class="search-button btn transition-effect">Search Hotels</button>
                                        </div>

                                    </div>



                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="last_minitue_deal">
                                <form >

                                    <div class="col-md-12 product-search-title">Last Minitue Deals</div>
                                    <div class="home_form col-md-12">
                                        <div class="col-md-2a search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="destination-city" class="form-control" required placeholder="I WANT TO GO">
                                                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - IN">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2b col-sm-2 search-col-padding">

                                            <select onChange="trigger_pop($(this).val())" class="selectpicker" name="rooms">
                                                <option>NIGHTS</option>
                                                <option  >1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <div class="input-group">
                                                <input type="text" name="check-out" id="check_out" class="form-control" placeholder="CHECK - OUT">
                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 search-col-padding">

                                            <select class="selectpicker" name="rooms">
                                                <option>1 adult</option>
                                                <option>
                                                    2 adults (1 room)</option>
                                                <option>
                                                    1 adult</option>
                                                <option onClick="alert()" >
                                                    More options ...</option>

                                            </select>
                                        </div>
                                        <div class="col-md-2 search-col-padding">

                                            <button type="submit" class="search-button btn transition-effect">Search Hotels</button>
                                        </div>

                                    </div>



                                    <div class="clearfix"></div>
                                </form>


                            </div>

                        </div>
                        <br/><br/><br/><br/><br/><br/><br/>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END: SEARCH SECTION -->

    <!-- BEGIN: HOW IT WORK -->
    <section id="how-it-work">
        <div class="row work-row">
            <div class="container">

                <div class="work-step">
                    <div class="col-md-4 col-sm-4 first-step text-center">
                        <i class="fa fa-search"></i>
                        <h5>SEARCH</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 second-step text-center">
                        <i class="fa fa-heart-o"></i>
                        <h5>SELECT</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-md-4 col-sm-4 third-step text-center">
                        <i class="fa fa-shopping-cart"></i>
                        <h5>BOOK</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END: HOW IT WORK -->

    <!-- START: PRODUCT SECTION-->
    <section class="hotel-product home-product">
        <!-- START: PRODUCT ROW 1 -->
        <div class="row light-row">
            <div class="col-md-6 clear-padding wow slideInLeft">
                <div class="product-wrapper">
                    <div class="col-md-6 col-sm-6 home-product-padding tooltip-right">
                        <h4>Romantic Paris</h4>
                        <h5><i class="fa fa-map-marker"></i> France</h5>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                        <div class="rating-box">
                            <div class="pull-left">
                                <img src="images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>$999/Person</span>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="wow fadeIn">BOOK NOW</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 clear-padding image-sm text-center">
                        <img src="images/tour12.jpg" alt="cruise">
                        <div class="detail-link-wrapper">
                            <div class="detail-link">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="product-wrapper">
                    <div class="col-md-6 col-sm-6 clear-padding image-sm text-center">
                        <img src="images/tour11.jpg" alt="cruise">
                        <div class="detail-link-wrapper">
                            <div class="detail-link">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 home-product-padding tooltip-left">
                        <h4>Blue Beach</h4>
                        <h5><i class="fa fa-map-marker"></i> Dubai</h5>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                        <div class="rating-box">
                            <div class="pull-left">
                                <img src="images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>$899/Person</span>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="wow fadeIn">BOOK NOW</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-6 clear-padding image-lg wow slideInRight">
                <img src="images/home31.jpg" alt="cruise">
                <div class="overlay">
                    <div class="product-detail text-center">
                        <h3>Africa Safari</h3>
                        <h5><i class="fa fa-map-marker"></i> KENYA</h5>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing.</p>
                        <div class="rating-box">
                            <div class="pull-left">
                                <img src="images/tripadvisor.png" alt="cruise"><span>4.0/5</span>
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><span>4.5/5</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pricing-info">
                            <div class="pull-left">
                                <span>$499/Person</span>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="wow fadeIn">BOOK NOW</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: PRODUCT ROW 1 -->
    </section>
    <!-- END: PRODUCT SECTION -->

    <!-- BEGIN: TOP DESTINATION SECTION -->
    <section id="home-top-destination">
        <div class="row image-background">
            <div class="td-overlay">
                <div class="container">
                    <div class="light-section-title text-center">
                        <h2>TOP DESTINATION</h2>
                        <h4>EXPLORE</h4>
                        <div class="space"></div>
                        <p>
                            Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div>
                    <div class="col-md-10 col-md-offset-1 on-top clear-padding">
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="images/tour1.jpg" alt="cruise">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>FRANCE</h5>
                                    <h3><span>ROMANTIC PARIS</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <a href="#">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
                            <img src="images/tour2.jpg" alt="cruise">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>BANGKOK</h5>
                                    <h3><span>DISENYLAND BANGKOK</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <a href="#">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-md-block"></div>
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.1s">
                            <img src="images/tour3.jpg" alt="cruise">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>DUBAI</h5>
                                    <h3><span>SKY HIGH DUBAI</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <a href="#">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 td-product text-center clear-padding wow slideInUp" data-wow-delay="0.2s">
                            <img src="images/tour5.jpg" alt="cruise">
                            <div class="overlay">
                                <div class="wrapper">
                                    <h5>AUSTRIA</h5>
                                    <h3><span>HILLY VIEW</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <a href="#">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix visible-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: TOP DESTINATION SECTION -->

    <!-- BEGIN: RECENT BLOG POST -->
    <section id="recent-blog">
        <div class="row top-offer">
            <div class="container">
                <div class="section-title text-center">
                    <h2>RECENT BLOG POSTS</h2>
                    <h4>NEWS</h4>
                </div>
                <div class="owl-carousel" id="post-list">
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.1s">
                        <img src="images/offer1.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.2s">
                        <img src="images/offer2.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.3s">
                        <img src="images/offer3.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.4s">
                        <img src="images/offer4.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.5s">
                        <img src="images/offer3.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="room-grid-view wow slideInUp" data-wow-delay="0.6s">
                        <img src="images/offer2.jpg" alt="cruise">
                        <div class="room-info">
                            <div class="post-title">
                                <h5>POST TITLE GOES HERE</h5>
                                <p><i class="fa fa-calendar"></i> Jul 15, 2015</p>
                            </div>
                            <div class="post-desc">
                                <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="room-book">
                                <div class="col-md-8 col-sm-6 col-xs-6 clear-padding post-alt">
                                    <h5><i class="fa fa-comments"></i> 2 <i class="fa fa-share-alt"></i> 20 </h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 clear-padding">
                                    <a href="#" class="text-center">MORE</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: RECENT BLOG POST -->

    <!-- START: WHY CHOOSE US SECTION -->
    <section id="why-choose-us">
        <div class="row choose-us-row">
            <div class="container clear-padding">
                <div class="light-section-title text-center">
                    <h2>WHY CHOOSE US?</h2>
                    <h4>REASONS TO TRUST US</h4>
                    <div class="space"></div>
                    <p>
                        Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInLeft">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon"><i class="fa fa-suitcase"></i></div>
                        <h4>Handpicked Tour</h4>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">KNOW MORE</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInUp">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon"><i class="fa fa-phone"></i></div>
                        <h4>Dedicated Support</h4>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">KNOW MORE</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 wow slideInRight">
                    <div class="choose-us-item text-center">
                        <div class="choose-icon"><i class="fa fa-smile-o"></i></div>
                        <h4>Lowest Price</h4>
                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: WHY CHOOSE US SECTION -->

    <!-- START: HOT  DEALS -->
    <section>
        <div class="row hot-deals">
            <div class="container clear-padding">
                <div class="section-title text-center">
                    <h2>HOT DEALS</h2>
                    <h4>SAVE MORE</h4>
                </div>
                <div role="tabpanel" class="text-center">
                    <!-- BEGIN: CATEGORY TAB -->
                    <ul class="nav nav-tabs" role="tablist" id="hotDeal">
                        <li role="presentation" class="active text-center">
                            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                                <i class="fa fa-bed"></i>
                                <span>HOTELS</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                                <i class="fa fa-suitcase"></i>
                                <span>HOLIDAYS</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
                                <i class="fa fa-plane"></i>
                                <span>FLIGHTS</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">
                                <i class="fa fa-taxi"></i>
                                <span>CARS</SPAN>
                            </a>
                        </li>
                        <li role="presentation" class="text-center">
                            <a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab">
                                <i class="fa fa-bed"></i>
                                <span>HOTEL+FLIGHTS</SPAN>
                            </a>
                        </li>
                    </ul>
                    <!-- END: CATEGORY TAB -->
                    <div class="clearfix"></div>
                    <!-- BEGIN: TAB PANELS -->
                    <div class="tab-content">
                        <!-- BEGIN: FLIGHT SEARCH -->
                        <div role="tabpanel" class="tab-pane active fade in" id="tab1">
                            <div class="col-md-6 hot-deal-list wow slideInLeft">
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="images/offer1.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Hotel Grand Lilly</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$499</h4>
                                        <h6>Per Night</h6>
                                        <a href="#">BOOK</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="images/offer2.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Royal Resort</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$399</h4>
                                        <h6>Per Night</h6>
                                        <a href="#">BOOK</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="images/offer3.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Hotel Grand Lilly</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$499</h4>
                                        <h6>Per Night</h6>
                                        <a href="#">BOOK</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-6 hot-deal-grid wow slideInRight">
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="images/tour1.jpg" alt="Cruise">
                                        <h5>Paris Starting From $49/Night</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="images/tour2.jpg" alt="Cruise">
                                        <h5>Bangkok Starting From $69/Night</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="images/tour3.jpg" alt="Cruise">
                                        <h5>Dubai Starting From $99/Night</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="images/tour4.jpg" alt="Cruise">
                                        <h5>Italy Starting From $59/Night</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="col-md-6 hot-deal-list">
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="images/offer3.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Hotel Grand Lilly</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$499</h4>
                                        <h6>Per Night</h6>
                                        <a href="#">BOOK</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="images/offer2.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Royal Resort</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$399</h4>
                                        <h6>Per Night</h6>
                                        <a href="#">BOOK</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="item">
                                    <div class="col-xs-3">
                                        <img src="images/offer1.jpg" alt="Cruise">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Hotel Grand Lilly</h5>
                                        <p class="location"><i class="fa fa-map-marker"></i> New York, USA</p>
                                        <p class="text-sm">Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$499</h4>
                                        <h6>Per Night</h6>
                                        <a href="#">BOOK</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-6 hot-deal-grid">
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="images/tour5.jpg" alt="Cruise">
                                        <h5>Paris Starting From $49/Night</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="images/tour6.jpg" alt="Cruise">
                                        <h5>Bangkok Starting From $69/Night</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="images/tour7.jpg" alt="Cruise">
                                        <h5>Dubai Starting From $99/Night</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 item">
                                    <div class="wrapper">
                                        <img src="images/tour8.jpg" alt="Cruise">
                                        <h5>Italy Starting From $59/Night</h5>
                                        <a href="#">DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            Lorem Lpsum 3
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab4">
                            Lorem Lpsum 4
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab5">
                            Lorem Lpsum 5
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: HOT DEALS -->

    <!-- START: FOOTER -->
    <?php $this->load->view('inc/footer'); ?>
    <!-- END: FOOTER -->
</div>



<div id="popup1" class="overlay">
    <div class="popup">
        <h2>Here i am</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
            Thank to pop me out of that button, but now i'm done so you can close this window.
        </div>
    </div>
</div>

<!-- END: SITE-WRAPPER -->

<!-- Load Scripts -->
<script src="js/respond.js"></script>
<script src="js/jquery.js"></script>
<script src="js/plugins/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/plugins/wow.min.js"></script>
<script type="text/javascript" src="js/plugins/supersized.3.1.3.min.js"></script>
<script src="js/js.js"></script>

<script type="text/javascript">
    /* SLIDER SETTINGS */
    jQuery(function($){
        "use strict";
        $.supersized({

            //Functionality
            slideshow               :   1,		//Slideshow on/off
            autoplay				:	1,		//Slideshow starts playing automatically
            start_slide             :   1,		//Start slide (0 is random)
            random					: 	0,		//Randomize slide order (Ignores start slide)
            slide_interval          :   10000,	//Length between transitions
            transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
            transition_speed		:	500,	//Speed of transition
            new_window				:	1,		//Image links open in new window/tab
            pause_hover             :   0,		//Pause slideshow on hover
            keyboard_nav            :   0,		//Keyboard navigation on/off
            performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
            image_protect			:	1,		//Disables image dragging and right click with Javascript

            //Size & Position
            min_width		        :   0,		//Min width allowed (in pixels)
            min_height		        :   0,		//Min height allowed (in pixels)
            vertical_center         :   1,		//Vertically center background
            horizontal_center       :   1,		//Horizontally center background
            fit_portrait         	:   1,		//Portrait images will not exceed browser height
            fit_landscape			:   0,		//Landscape images will not exceed browser width

            //Components
            navigation              :   1,		//Slideshow controls on/off
            thumbnail_navigation    :   1,		//Thumbnail navigation
            slide_counter           :   1,		//Display slide numbers
            slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
            slides 					:  	[		//Slideshow Images
                {image : 'images/switzerland.jpg', title : 'Slide 1'},
                {image : 'images/slide18.jpg', title : 'Slide 2'},
                {image : 'images/beach.jpg', title : 'Slide 3'},
            ]

        });
    });



</script>

</body>
</html>
