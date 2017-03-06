<!DOCTYPE html>
<html class="load-full-screen">
<head>
    <?php $this->load->view('inc/head'); ?>
    <style>

        .form-control {
            color: #000;
        }
        .filter button {
            height: 45px;
            background: #00ADEF;
            color: #ffffff;
            border-radius: 0;
            font-weight: bold;
            letter-spacing: 1px;
            padding: 10px 0px;
            margin-top: 25px;
            width: 100%;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }
        .filter button:hover {
            color: #00ADEF;
            background: #ffffff;}
        #ajax_loader{
            padding: 10px;
            width: 200px;
            height: 150px;
            background: #ffffff;
            position: fixed;
            top: 300px;
            left: 45%;
            z-index: 99999;
            border: 2px solid #00ADEF ;
            border-radius: 4px;
        }
    </style>
</head>
<body class="load-full-screen">


<div class="site-wrapper">
    <!-- BEGIN: NAV SECTION -->
    <?php $this->load->view('inc/header'); ?>
    <!-- END: NAV SECTION -->

    <!-- START: MODIFY SEARCH -->
    <div class="row modify-search modify-hotel">
        <div class="container clear-padding">
            <form >
                <div class="col-md-4">
                    <div class="form-gp">
                        <label>Location</label>
                        <div class="input-group margin-bottom-sm">
                            <select name="city" class="form-control"  >
                                <option value="" >Eg : London</option>
                                <?php foreach( $city as $fe  ): ?>
                                    <option><?=$fe->city ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="form-gp">
                        <label>Check In</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" id="check_in" name="check_in" class="form-control" placeholder="DD/MM/YYYY">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="form-gp">
                        <label>Check Out</label>
                        <div class="input-group margin-bottom-sm">
                            <input type="text" id="check_out" name="check_out" class="form-control" required placeholder="DD/MM/YYYY">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-6 col-xs-3">
                    <div class="form-gp">
                        <label>Rooms</label>
                        <select name="no_of_room" class="selectpicker">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-9">
                    <div class="form-gp">
                        <button type="submit" class="modify-search-button btn transition-effect">MODIFY SEARCH</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END: MODIFY SEARCH -->

    <!-- START: LISTING AREA-->
    <div class="row">
        <div class="container">
            <!-- START: FILTER AREA -->
            <div class="col-md-3 clear-padding">
                <div class="filter-head text-center">
                    <h4>25 Result Found Matching Your Search.</h4>
                </div>
                <div class="filter-area">
                    <div class="star-filter filter">
                        <h5>  Price</h5>
                        <ul>
                            <li><input type="radio"  name="price" value="price < 10000" class="filer_result" > < 10,000 </li>
                            <li><input type="radio"  name="price" value="price > 10000 AND price < 100000" class="filer_result" > 10,000 > 100,000 </li>
                            <li><input type="radio"  name="price" value="price > 100000" class="filer_result" >  > 100,000 </li>
                        </ul>
                        <div id="price-range"></div>
                    </div>
                    <div class="star-filter filter">
                        <h5><i class="fa fa-star"></i> Star</h5>
                        <ul>
                            <li><input type="checkbox"  name="star[]" value="5" class="filer_result"  > <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li><input type="checkbox"  name="star[]" value="4" class="filer_result" > <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li><input type="checkbox"  name="star[]" value="3" class="filer_result" > <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li><input type="checkbox"  name="star[]" value="2" class="filer_result" > <i class="fa fa-star"></i><i class="fa fa-star"></i></li>
                            <li><input type="checkbox"  name="star[]" value="1" class="filer_result" > <i class="fa fa-star"></i></li>
                            <li><input type="checkbox"  name="star" value="0" class="filer_result" > <i class="fa fa-star"></i> Any</li>
                        </ul>
                    </div>
                    <div class="location-filter filter">
                        <h5><i class="fa fa-map-marker"></i> Location</h5>
                        <ul>
                            <?php foreach( $city as $fe  ): ?>
                                <li><input type="checkbox" value="<?= $fe->city ?>" name="city[]" class="filer_result" >  <?= ucfirst( $fe->city ) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="facilities-filter filter">
                        <h5><i class="fa fa-list"></i> Hotel Facilities</h5>
                        <ul>
                            <?php foreach( $feature as $fe  ): ?>
                                <li><input type="checkbox" value="<?= $fe->id ?>" name="facilities[]" class="filer_result" > <i class="<?= $fe->image ?>"></i> <?= ucfirst( $fe->title ) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <input type="hidden" value="<?= current_url() ?>" name="url" class="filer_result" >
                    </div>

                </div>
            </div>
            <!-- END: FILTER AREA -->

            <!-- START: INDIVIDUAL LISTING AREA -->
            <div class="col-md-9 hotel-listing">

                <!-- START: SORT AREA -->
                <div class="sort-area col-sm-10">
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select name="order[price]" class="selectpicker filer_result ">
                            <option value="" >Price</option>
                            <option  value="asc"  > Low to High</option>
                            <option value="desc" > High to Low</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select name="order[star]"  class="selectpicker filer_result">
                            <option  value=""  >Star Rating</option>
                            <option value="asc"  > Low to High</option>
                            <option value="desc" > High to Low</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 sort">
                        <select name="order[title]"  class="selectpicker filer_result">
                            <option  value=""  >Name</option>
                            <option value="asc" > Ascending</option>
                            <option value="desc" > Descending</option>
                        </select>
                    </div>
                </div>
                <!-- END: SORT AREA -->
                <div class="clearfix visible-xs-block"></div>
                <div class="col-sm-2 view-switcher">
                    <div class="pull-right">
                        <a class="switchgrid" title="Grid View">
                            <i class="fa fa-th-large"></i>
                        </a>
                        <a class="switchlist active" title="List View">
                            <i class="fa fa-list"></i>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div id="product-list-ajax" >
                    <!-- START: HOTEL LIST VIEW -->
                    <div class="switchable col-md-12 clear-padding">
                        <?php foreach($product as $p ): ?>
                            <div  class="hotel-list-view">
                                <div class="wrapper">
                                    <div class="col-md-4 col-sm-6 switch-img clear-padding">
                                        <img class="photo" src="<?= base_url() ?>uploads/<?=$p->image?>" alt="cruise">
                                    </div>
                                    <div class="col-md-6 col-sm-6 hotel-info">
                                        <div>
                                            <div class="hotel-header">
                                                <h5>
                                                    <?=$p->title?> <span>
                                                    <?php if($p->star != 0 ){
                                                        ?>
                                                        <?= repeater( '<i class="fa fa-star colored"></i>' ,$p->star ) ?>
                                                        <?= repeater( '<i class="fa fa-star-o colored"></i>' , 5-$p->star) ?>
                                                        <?php
                                                    } ?>
                                                </span>
                                                </h5>
                                                <p><i class="fa fa-map-marker"></i><?= $p->location ?><i class="fa fa-phone"></i><?=$p->phone?></p>
                                            </div>
                                            <div class="hotel-desc">
                                                <p><?= $p->short ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-sm-block"></div>
                                    <div class="col-md-2 rating-price-box text-center clear-padding">
                                        <div class="room-book-box">
                                            <div class="price">
                                                <h5><?= $p->price ?>/= Avg/Night</h5>
                                            </div>
                                            <div class="book">
                                                <a href="<?= current_url() ?>/detail/<?=url_title($p->title)?>/<?= $this->encrypt->myEncode( $p->id )?>">BOOK</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- END: HOTEL LIST VIEW -->
                    </div>
                    <div class="clearfix"></div>
                    <!-- START: PAGINATION -->
                    <div class="bottom-pagination">
                        <nav class="pull-right">
                            <ul class="pagination pagination-lg">
                                <?php if (ceil($count / LIMIT) != 1): ?>
                                    <?php
                                    $link = current_url()."?";
                                    foreach($this->input->get() as $k => $v ){
                                        if(is_array($v))  {foreach($v as $x => $y ) if($y != ""){$link .=  $k."[$x]=".myUrlEncode($y)."&";}  }
                                        else if( $k != 'page_id'  ) $link .=  "$k=".myUrlEncode($v)."&";
                                    }
                                    ?>
                                    <?php for ($i = 0; $i < ceil($count / LIMIT); $i++): ?>
                                        <?php if ($i + 1 == $this->input->get('page_id') || (!$this->input->get('page_id') && $i == 0)): ?>
                                            <li class="active"><a href="#"> <?= $i + 1 ?> <span class="sr-only">(current)</span></a></li>
                                        <?php else : ?>
                                            <li><a href="<?= $link ?>page_id=<?= $i + 1 ?>"> <?= $i + 1 ?> <span class="sr-only">(current)</span></a></li>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- END: PAGINATION -->
                </div>
            </div>
            <!-- END: INDIVIDUAL LISTING AREA -->
        </div>
    </div>
    <!-- END: LISTING AREA -->

    <!-- START: FOOTER -->
    <?php $this->load->view('inc/footer'); ?>
    <!-- END: FOOTER -->
</div>

<div id="ajax_loader" class="text-center hidden" >
    <img src="<?=base_url()?>images/loader.gif" >
    <h5><strong>Please Wait ...</strong></h5>
</div>

<!-- END: SITE-WRAPPER -->

<!-- Load Scripts -->
<script src="<?= base_url() ?>js/respond.js"></script>
<script src="<?= base_url() ?>js/jquery.js"></script>
<script src="<?= base_url() ?>js/plugins/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>js/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>js/plugins/wow.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/plugins/supersized.3.1.3.min.js"></script>
<script src="<?= base_url() ?>js/js.js"></script>
<script>

    /* Price Range Slider */

    $(function() {
        "use strict";

        $(".filer_result").change(function(){
            $("#ajax_loader").removeClass('hidden');
            var data = $(".filer_result").serializeArray() ;

            $.ajax({
                url : "<?= base_url()?>property/search",
                data : data ,
                success : function(e){
                    $("#ajax_loader").addClass('hidden');
                   $("#product-list-ajax").html(e);
                }
            })
        });

    });



</script>
</body>
</html>
