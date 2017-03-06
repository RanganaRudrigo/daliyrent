<!DOCTYPE html>
<html class="load-full-screen">
<head>
	<link href="<?= base_url() ?>css/flexslider.css" rel="stylesheet" media="screen">

	<?php $this->load->view('inc/head'); ?>
	<style>
		#room-info button {
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
		#room-info button:hover {
			color: #00ADEF;
			background: #ffffff;
			border: 1px solid #00ADEF;
		}
		.select {
			padding: 5px 10px;
			border-radius: 5px ;
		}
	</style>
</head>
<body class="load-full-screen">



<!-- BEGIN: SITE-WRAPPER -->
<div class="site-wrapper">

	<?php $this->load->view('inc/header'); ?>


	<!-- START: ROOM GALLERY -->
	<div class="row hotel-detail">
		<div class="container">
			<h3> <?= $property->title ?> </h3>
			<div class="product-brief-info">
				<div class="col-md-8 clear-padding">
					<div id="slider" class="flexslider">
						<ul class="slides">
							<li>
								<img src="<?= base_url() ?>uploads/<?= $property->image ?>" alt="<?= $property->title ?>" />
							</li>
							<?php foreach( $images as $img ): ?>
								<li>
									<img src="<?= base_url() ?>uploads/<?= $img->image ?>" alt="<?= $property->title ?>" />
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div id="carousel" class="flexslider">
						<ul class="slides">
							<li>
								<img src="<?= base_url() ?>uploads/thumbs/<?= $property->image ?>" alt="<?= $property->title ?>" />
							</li>
							<?php foreach( $images as $img ): ?>
								<li>
									<img style="max-width: 150px ;max-height: 100px" src="<?= base_url() ?>uploads/thumbs/<?= $img->image ?>" alt="<?= $property->title ?>" />
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>

				<div class="col-md-4 hotel-detail-sidebar">
					<div class="col-md-12 sidebar-wrapper clear-padding">
						<div class="map sidebar-item">
							<h5><i class="fa fa-map-marker"></i> <?= $property->location ?></h5>
							<iframe class="hotel-map" src="<?= $property->map ?>"></iframe>
						</div>
						<div class="contact sidebar-item">
							<h4><i class="fa fa-phone"></i> Contact Hotel</h4>

							<div class="sidebar-item-body">
								<h5><i class="fa fa-phone"></i> <?= $property->phone ?></h5>
								<h5><i class="fa fa-envelope-o"></i> <a href="mailto:<?= $property->email ?>">Send
										Email</a></h5>
								<h5><i class="fa fa-map-marker"></i> <?= $property->location ?></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row product-complete-info">
		<div class="container">
			<div class="col-md-8 main-content">
				<div class="room-complete-detail custom-tabs">
					<ul class="nav nav-tabs">
						<li class="col-md-2 col-sm-2 col-xs-2 text-center"><a data-toggle="tab" href="#overview"><i class="fa fa-bolt"></i> <span>Overview</span></a></li>
						<li class="col-md-2 col-sm-2 col-xs-2 active text-center"><a data-toggle="tab" href="#room-info"><i class="fa fa-info-circle"></i> <span>Rooms</span></a></li>
						<!--<li class="col-md-3 col-sm-3 col-xs-2 text-center"><a data-toggle="tab" href="#ammenties"><i class="fa fa-bed"></i> <span>Ammenties</span></a></li>-->
						<li class="col-md-2 col-sm-2 col-xs-2 text-center"><a data-toggle="tab" href="#review"><i class="fa fa-comments"></i> <span>Reviews</span></a></li>
						<li class="col-md-3 col-sm-3 col-xs-2 text-center"><a data-toggle="tab" href="#write-review"><i class="fa fa-edit"></i> <span>Write Review</span></a></li>
					</ul>
					<div class="tab-content">
						<div id="overview" class="tab-pane fade">
							<h4 class="tab-heading">About <?= $property->title ?></h4>
							<p><?= $property->description ?></p>
						</div>
						<div id="room-info" class="tab-pane fade in active">
							<h4 class="tab-heading">Room Types</h4>
								<form method="post" >
							 <table class="table table-bordered" >
								 <tr>
									 <td width="75%" >
										 <?php foreach( $rooms as $room ): ?>
											 <div class="room-info-wrapper">
												 <div class="col-md-9 col-sm-9 room-desc">
													 <h4><?= $room->title ?></h4>
													 <h5>Max Guest: <?= $room->max_allow ?> Adults  </h5>
													 <p>
														 <?php foreach($room->feature as $f ): ?>
															 <i class="<?=$f->image  ?>" title="<?=$f->title  ?>" ></i>
														 <?php endforeach;?>
													 </p>
													 <div class="price">
														 <h3><?= number_format($room->price) ?>/Night</h3>
													 </div>
												 </div>
												 <div class="col-md-2 col-sm-2">
													<label> No Of Rooms </label>
													 <input type="hidden" name="room[<?=$room->id?>][id]" value="<?=$room->id?>"  >
													 <input type="hidden" name="room[<?=$room->id?>][name]" value="<?=$room->title?>"  >
													 <input type="hidden" name="room[<?=$room->id?>][options][hotel]" value="<?=$property->id?>"  >
													 <input type="hidden" name="room[<?=$room->id?>][price]" value="<?=$room->price?>"  >
													 <select  class="select" name="room[<?=$room->id?>][qty]" data-price="<?=$room->price?>" >
														 <option> 0 </option>
														 <?php for($i=0;$i<$room->no_of_room;$i++): ?>
															 <option> <?=$i+1?> </option>
														 <?php endfor; ?>
													 </select>
												 </div>
											 </div>
										 <?php endforeach; ?>
									 </td>
									 <td width="25%"   >
										 <div id="book-price" >

										 </div>
										 <div class="book">
											 <button  class="btn" >BOOK</button>
										 </div>
									 </td>
								 </tr>
							 </table>
								</form>
						</div>
						<!--<div id="ammenties" class="tab-pane fade">
							<h4 class="tab-heading">Ammenties Style 1</h4>
							<div class="ammenties-1">
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-wifi"></i>Free Wifi</p>
								</div>
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-glass"></i>Free Drinks</p>
								</div>
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-cutlery"></i>Free Meal</p>
								</div>
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-taxi"></i>Taxi Available</p>
								</div>
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-beer"></i>Bar Available</p>
								</div>
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-desktop"></i>LED</p>
								</div>
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-coffee"></i>Free Coffee</p>
								</div>
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-wheelchair"></i>Wheelchair</p>
								</div>
								<div class="col-md-4 col-sm-6">
									<p><i class="fa fa-paw"></i>Pet Room</p>
								</div>
							</div>
							<div class="ammenties-3">
								<h4 class="tab-heading">Ammenties Style 2</h4>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-wifi"></i> Free Wifi</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-glass"></i> Free Drinks</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-cutlery"></i> Free Meal</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-taxi"></i> Taxi Available</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-desktop"></i> LED</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-beer"></i> Bar Available</p>
								</div>
							</div>
							<div class="ammenties-4">
								<h4 class="tab-heading">Ammenties Style 3</h4>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-wifi"></i> Free Wifi</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-glass"></i> Free Drinks</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-cutlery"></i> Free Meal</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-taxi"></i> Taxi Available</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-desktop"></i> LED</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-beer"></i> Bar Available</p>
								</div>
							</div>
							<div class="ammenties-5">
								<h4 class="tab-heading">Ammenties Style 4</h4>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-check-square-o"></i> Free Wifi</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-check-square-o"></i> Free Drinks</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-check-square-o"></i> Free Meal</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-check-square-o"></i> Taxi Available</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-check-square-o"></i> LED</p>
								</div>
								<div class="col-md-4 col-xs-6">
									<p><i class="fa fa-check-square-o"></i> Bar Available</p>
								</div>
							</div>
							<div class="ammenties-2">
								<h4 class="tab-heading">Ammenties Style 5</h4>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="ammenties-2-wrapper text-center">
										<span>Free Wifi</span>
										<i class="fa fa-wifi"></i>
									</div>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="ammenties-2-wrapper text-center">
										<span>Free Meal</span>
										<i class="fa fa-cutlery"></i>
									</div>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="ammenties-2-wrapper text-center">
										<span>Free Drinks</span>
										<i class="fa fa-glass"></i>
									</div>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="ammenties-2-wrapper text-center">
										<span>Free Coffee</span>
										<i class="fa fa-coffee"></i>
									</div>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="ammenties-2-wrapper text-center">
										<span>Free Wifi</span>
										<i class="fa fa-wifi"></i>
									</div>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="ammenties-2-wrapper text-center">
										<span>Free Meal</span>
										<i class="fa fa-cutlery"></i>
									</div>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="ammenties-2-wrapper text-center">
										<span>Free Drinks</span>
										<i class="fa fa-glass"></i>
									</div>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-6">
									<div class="ammenties-2-wrapper text-center">
										<span>Free Coffee</span>
										<i class="fa fa-coffee"></i>
									</div>
								</div>
							</div>
						</div>-->
						<div id="review" class="tab-pane fade">
							<div class="review-header">
								<div class="col-md-6 col-sm6 text-center">
									<h2>4.0/5.0</h2>
									<h5>Based on 128 Reviews</h5>
								</div>
								<div class="col-md-6 col-sm-6">
									<table class="table">
										<tr>
											<td>Value for Money</td>
											<td>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</td>
										</tr>
										<tr>
											<td>Atmosphere in hotel</td>
											<td>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</td>
										</tr>
										<tr>
											<td>Quality of food</td>
											<td>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</td>
										</tr>
										<tr>
											<td>Staff behaviour</td>
											<td>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</td>
										</tr>
										<tr>
											<td>Restaurant Quality</td>
											<td>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</td>
										</tr>
									</table>
								</div>
								<div class="clearfix"></div>
								<div class="guest-review">
									<div class="individual-review dark-review">
										<h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										<div class="col-md-md-1 col-sm-1 col-xs-2">
											<img src="<?= base_url() ?>images/user.jpg" alt="cruise">
										</div>
										<div class="col-md-md-3 col-sm-3 col-xs-3">
											<span>Lenore, USA</span>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="individual-review">
										<h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										<div class="col-md-md-1 col-sm-1 col-xs-2">
											<img src="<?= base_url() ?>images/user.jpg" alt="cruise">
										</div>
										<div class="col-md-md-3 col-sm-3 col-xs-3">
											<span>Lenore, USA</span>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="individual-review dark-review">
										<h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										<div class="col-md-md-1 col-sm-1 col-xs-2">
											<img src="<?= base_url() ?>images/user.jpg" alt="cruise">
										</div>
										<div class="col-md-md-3 col-sm-3 col-xs-3">
											<span>Lenore, USA</span>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="individual-review">
										<h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										<div class="col-md-md-1 col-sm-1 col-xs-2">
											<img src="<?= base_url() ?>images/user.jpg" alt="cruise">
										</div>
										<div class="col-md-md-3 col-sm-3 col-xs-3">
											<span>Lenore, USA</span>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="individual-review dark-review">
										<h4>Best Place to Stay, Awesome <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
										<div class="col-md-md-1 col-sm-1 col-xs-2">
											<img src="<?= base_url() ?>images/user.jpg" alt="cruise">
										</div>
										<div class="col-md-md-3 col-sm-3 col-xs-3">
											<span>Lenore, USA</span>
										</div>
									</div>
									<div class="clearfix"></div>
									<div class="load-more text-center">
										<a href="#">Load More</a>
									</div>
								</div>
							</div>
						</div>
						<div id="write-review" class="tab-pane fade">
							<h4 class="tab-heading">Write A Review</h4>
							<form >
								<label>Review Title</label>
								<input type="text" class="form-control" name="review-titile" required>
								<label for="comment">Comment</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
								<label>Value for Money (Rate out of 5)</label>
								<input type="text" class="form-control" name="value-for-money">
								<label>Hotel Atmosphere (Rate out of 5)</label>
								<input type="text" class="form-control" name="atmosphere">
								<label>Staff Behaviour (Rate out of 5)</label>
								<input type="text" class="form-control" name="staff-beh">
								<label>Food Quality (Rate out of 5)</label>
								<input type="text" class="form-control" name="food-quality">
								<label>Rooms (Rate out of 5)</label>
								<input type="text" class="form-control" name="room">
								<div class="text-center">
									<button type="submit" class="btn btn-default submit-review">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 hotel-detail-sidebar">
				<div class="col-md-12 sidebar-wrapper clear-padding">

					<div class="similar-hotel sidebar-item">
						<h4><i class="fa fa-bed"></i> Similar Hotel</h4>
						<div class="sidebar-item-body">
							<?php foreach( $related as $re ): ?>
								<div class="similar-hotel-box">
									<a href="<?= base_url() ?>property/detail/<?=url_title($re->title)?>/<?= $this->encrypt->myEncode( $re->id )?>">
										<div class="col-md-5 col-sm-5 col-xs-5 clear-padding">
											<img src="<?= base_url() ?>uploads/thumbs/<?= $re->image ?>" alt="<?= $re->title ?>">
										</div>
										<div class="col-md-7 col-sm-7 col-xs-7">
											<h5><?= $re->title ?> <br/> <span> <?= repeater('<i class="fa fa-star"></i>',$re->star) ?> </span></h5>
											<h5><i class="fa fa-map-marker"></i><?= $re->location ?></h5>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: ROOM GALLERY -->


	<!-- START: FOOTER -->
	<?php $this->load->view('inc/footer'); ?>
	<!-- END: FOOTER -->

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

<script src="<?= base_url() ?>js/plugins/jquery.flexslider-min.js"></script>
<script src="<?= base_url() ?>js/plugins/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>js/plugins/accounting.min.js"></script>

<script src="<?= base_url() ?>js/js.js"></script>
<script>
	jQuery(document).ready(function($) {
		"use strict";
		$('.image-set').magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {enabled:true}
		});

		$(".select").change(function(){
			var p = 0,n=0;
			$(".select").each(function(k,v){
				n += parseInt($(v).val());
				p +=  $(v).val() *  $(v).data("price")
			} );
			$("#book-price").html(  n +" Rooms For <br/> <label> "+  accounting.formatMoney(p, "", 2, ",", ".") +"</label> "  );
		});

	});
	$(window).load(function() {
		"use strict";
		// The slider being synced must be initialized first
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 150,
			itemMargin: 5,
			asNavFor: '#slider'
		});

		$('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		});
	});
</script>

</body>
</html>



