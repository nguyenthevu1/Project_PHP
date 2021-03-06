<?php include("header.php");
require('../db/config.php');
?>

<style>
	.feature-full-2col {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}

	.f-hotel {
		margin-bottom: 20px;
		padding-left: 15px;
		padding-right: 15px;
	}
</style>




<div class="col-sm-6" style="margin-bottom: 30px; padding:0 15px;">
                <!-- RoomCarousel -->
                <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/photos/3.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/photos/4.jpg" class="img-responsive" alt="slide"></div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">Tour
                    Packages<a href="gallery.php" class="pull-right">
                        <button class="btn btn-warning book-now" style="border-radius: 15px; background-color:rgb(253,126,20);">Đặt ngay</button>
                    </a>
                </div>
            </div>


            <div class="col-sm-6" style="margin-bottom: 30px; padding:0 15px;">
                <!-- RoomCarousel -->
                <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/photos/2.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/photos/5.jpg" class="img-responsive" alt="slide"></div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">Food
                    and Drinks<a href="gallery.php" class="pull-right">
                        <button class="btn btn-warning book-now" style="border-radius: 15px; background-color:rgb(253,126,20);">Đặt ngay</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-6" style="margin-bottom: 30px; padding:0 15px;">
                <!-- RoomCarousel -->
                <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/photos/2.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="images/photos/5.jpg" class="img-responsive" alt="slide"></div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- RoomCarousel-->
                <div class="caption">Food
                    and Drinks<a href="gallery.php" class="pull-right">
                        <button class="btn btn-warning book-now" style="border-radius: 15px; background-color:rgb(253,126,20);">Đặt ngay</button>
                    </a>
                </div>
            </div>

<!-- end:fh5co-header -->
<aside id="fh5co-hero" class="js-fullheight">
	<div class="flexslider js-fullheight">
		<ul class="slides">
			<li style="background-image: url(images/slider1.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-12 col-md-offset-0 text-center slider-text">
						<div class="slider-text-inner js-fullheight">
							<div class="desc">
								<p><span>Bora Hotel</span></p>
								<h2>Reserve Room for Family Vacation</h2>
								<p>
									<a href="#" class="btn btn-primary btn-lg">Book Now</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(images/slider2.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-12 col-md-offset-0 text-center slider-text">
						<div class="slider-text-inner js-fullheight">
							<div class="desc">
								<p><span>Deluxe Hotel</span></p>
								<h2>Make Your Vacation Comfortable</h2>
								<p>
									<a href="#" class="btn btn-primary btn-lg">Book Now</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(images/slider3.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="col-md-12 col-md-offset-0 text-center slider-text">
						<div class="slider-text-inner js-fullheight">
							<div class="desc">
								<p><span>Luxe Hotel</span></p>
								<h2>A Best Place To Enjoy Your Life</h2>
								<p>
									<a href="#" class="btn btn-primary btn-lg">Book Now</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</li>

		</ul>
	</div>
</aside>
<div class="wrap">
	<div class="container">
		<div class="row">
			<div id="availability">
				<form action="#">

					<div class="a-col">
						<section>
							<select class="cs-select cs-skin-border">
								<option value="" disabled selected>Select Hotel</option>
								<option value="email">Luxe Hotel</option>
								<option value="twitter">Deluxe Hotel</option>
								<option value="linkedin">Five Star Hotel</option>
							</select>
						</section>
					</div>
					<div class="a-col alternate">
						<div class="input-field">
							<label for="date-start">Check In</label>
							<input type="text" class="form-control" id="date-start" />
						</div>
					</div>
					<div class="a-col alternate">
						<div class="input-field">
							<label for="date-end">Check Out</label>
							<input type="text" class="form-control" id="date-end" />
						</div>
					</div>
					<div class="a-col action">
						<a href="#">
							<span>Check</span>
							Availability
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-counter-section" class="fh5co-counters">
	<div class="container">
		<div class="row">
			<div class="col-md-3 text-center">
				<span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
				<span class="fh5co-counter-label">User Access</span>
			</div>
			<div class="col-md-3 text-center">
				<span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
				<span class="fh5co-counter-label">Hotels</span>
			</div>
			<div class="col-md-3 text-center">
				<span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
				<span class="fh5co-counter-label">Transactions</span>
			</div>
			<div class="col-md-3 text-center">
				<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
				<span class="fh5co-counter-label">Rating &amp; Review</span>
			</div>
		</div>
	</div>
</div>

<div id="featured-hotel" class="fh5co-bg-color">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>Featured Hotels</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="feature-full-2col">
				<?php
				$selectProduct = "SELECT * from img_product, product,categories WHERE categories.catId =product.catId and 
													product.productId = img_product.productId and 
													categories.catName= 'Phòng ở'
													group by img_product.productId";
				$queryProduct = mysqli_query($conn, $selectProduct);
				$path = '../admin/';
				while ($row = mysqli_fetch_assoc($queryProduct)) {
				?>
					<div class="f-hotel">
						<div class="image" style="background-image: url(<?php echo $path . $row['img'] ?>);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span><?php echo number_format($row['price']) . 'VNĐ' ?></span></p>
							</div>
						</div>
						<div class="desc">
							<h3><?php echo $row['productName'] ?></h3>
							<p><?php echo $row['content']; ?> </p>
							<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

	</div>
</div>

<div id="hotel-facilities">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>Hotel Facilities</h2>
				</div>
			</div>
		</div>

		<div id="tabs">
			<nav class="tabs-nav">
				<a href="#" class="active" data-tab="tab1">
					<i class="flaticon-restaurant icon"></i>
					<span>Restaurant</span>
				</a>
				<a href="#" data-tab="tab2">
					<i class="flaticon-cup icon"></i>
					<span>Bar</span>
				</a>
				<a href="#" data-tab="tab3">

					<i class="flaticon-car icon"></i>
					<span>Pick-up</span>
				</a>
				<a href="#" data-tab="tab4">

					<i class="flaticon-swimming icon"></i>
					<span>Swimming Pool</span>
				</a>
				<a href="#" data-tab="tab5">

					<i class="flaticon-massage icon"></i>
					<span>Spa</span>
				</a>
				<a href="#" data-tab="tab6">

					<i class="flaticon-bicycle icon"></i>
					<span>Gym</span>
				</a>
			</nav>
			<div class="tab-content-container">
				<div class="tab-content active show" data-tab-content="tab1">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="images/tab_img_1.jpg" class="img-responsive" alt="Image">
							</div>
							<div class="col-md-6">
								<span class="super-heading-sm">World Class</span>
								<h3 class="heading">Restaurant</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias
									officia perferendis modi impedit, rem quasi veritatis. Consectetur
									obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia,
									labore, reprehenderit illum dolorem quae facilis reiciendis quas
									similique totam sequi ducimus temporibus ex nemo, omnis perferendis
									earum fugit impedit molestias animi vitae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam
									neque blanditiis eveniet nesciunt, beatae similique doloribus, ex
									impedit rem officiis placeat dignissimos molestias temporibus, in!
									Minima quod, consequatur neque aliquam.</p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>7:30 AM - 8:00 PM</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" data-tab-content="tab2">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="images/tab_img_2.jpg" class="img-responsive" alt="Image">
							</div>
							<div class="col-md-6">
								<span class="super-heading-sm">World Class</span>
								<h3 class="heading">Bars</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias
									officia perferendis modi impedit, rem quasi veritatis. Consectetur
									obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia,
									labore, reprehenderit illum dolorem quae facilis reiciendis quas
									similique totam sequi ducimus temporibus ex nemo, omnis perferendis
									earum fugit impedit molestias animi vitae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam
									neque blanditiis eveniet nesciunt, beatae similique doloribus, ex
									impedit rem officiis placeat dignissimos molestias temporibus, in!
									Minima quod, consequatur neque aliquam.</p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>7:30 AM - 8:00 PM</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" data-tab-content="tab3">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="images/tab_img_3.jpg" class="img-responsive" alt="Image">
							</div>
							<div class="col-md-6">
								<span class="super-heading-sm">World Class</span>
								<h3 class="heading">Pick Up</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias
									officia perferendis modi impedit, rem quasi veritatis. Consectetur
									obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia,
									labore, reprehenderit illum dolorem quae facilis reiciendis quas
									similique totam sequi ducimus temporibus ex nemo, omnis perferendis
									earum fugit impedit molestias animi vitae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam
									neque blanditiis eveniet nesciunt, beatae similique doloribus, ex
									impedit rem officiis placeat dignissimos molestias temporibus, in!
									Minima quod, consequatur neque aliquam.</p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>7:30 AM - 8:00 PM</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" data-tab-content="tab4">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="images/tab_img_4.jpg" class="img-responsive" alt="Image">
							</div>
							<div class="col-md-6">
								<span class="super-heading-sm">World Class</span>
								<h3 class="heading">Swimming Pool</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias
									officia perferendis modi impedit, rem quasi veritatis. Consectetur
									obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia,
									labore, reprehenderit illum dolorem quae facilis reiciendis quas
									similique totam sequi ducimus temporibus ex nemo, omnis perferendis
									earum fugit impedit molestias animi vitae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam
									neque blanditiis eveniet nesciunt, beatae similique doloribus, ex
									impedit rem officiis placeat dignissimos molestias temporibus, in!
									Minima quod, consequatur neque aliquam.</p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>7:30 AM - 8:00 PM</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" data-tab-content="tab5">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="images/tab_img_5.jpg" class="img-responsive" alt="Image">
							</div>
							<div class="col-md-6">
								<span class="super-heading-sm">World Class</span>
								<h3 class="heading">Spa</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias
									officia perferendis modi impedit, rem quasi veritatis. Consectetur
									obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia,
									labore, reprehenderit illum dolorem quae facilis reiciendis quas
									similique totam sequi ducimus temporibus ex nemo, omnis perferendis
									earum fugit impedit molestias animi vitae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam
									neque blanditiis eveniet nesciunt, beatae similique doloribus, ex
									impedit rem officiis placeat dignissimos molestias temporibus, in!
									Minima quod, consequatur neque aliquam.</p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>7:30 AM - 8:00 PM</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" data-tab-content="tab6">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="images/tab_img_6.jpg" class="img-responsive" alt="Image">
							</div>
							<div class="col-md-6">
								<span class="super-heading-sm">World Class</span>
								<h3 class="heading">Gym</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias
									officia perferendis modi impedit, rem quasi veritatis. Consectetur
									obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia,
									labore, reprehenderit illum dolorem quae facilis reiciendis quas
									similique totam sequi ducimus temporibus ex nemo, omnis perferendis
									earum fugit impedit molestias animi vitae.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam
									neque blanditiis eveniet nesciunt, beatae similique doloribus, ex
									impedit rem officiis placeat dignissimos molestias temporibus, in!
									Minima quod, consequatur neque aliquam.</p>
								<p class="service-hour">
									<span>Service Hours</span>
									<strong>7:30 AM - 8:00 PM</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>Happy Customer Says...</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="testimony">
					<blockquote>
						&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded
						free of charge to the Premium Suite, thanks so much&rdquo;
					</blockquote>
					<p class="author"><cite>John Doe</cite></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimony">
					<blockquote>
						&ldquo;Me and my wife had a delightful weekend get away here, the staff were so
						friendly and attentive. Highly Recommended&rdquo;
					</blockquote>
					<p class="author"><cite>Rob Smith</cite></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="testimony">
					<blockquote>
						&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded
						free of charge to the Premium Suite, thanks so much&rdquo;
					</blockquote>
					<p class="author"><cite>Jane Doe</cite></p>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="fh5co-blog-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>Our Blog</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="blog-grid" style="background-image: url(images/image-1.jpg);">
					<div class="date text-center">
						<span>09</span>
						<small>Aug</small>
					</div>
				</div>
				<div class="desc">
					<h3><a href="#">Most Expensive Hotel</a></h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-grid" style="background-image: url(images/image-2.jpg);">
					<div class="date text-center">
						<span>09</span>
						<small>Aug</small>
					</div>
				</div>
				<div class="desc">
					<h3><a href="#">1st Anniversary of Luxe Hotel</a></h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-grid" style="background-image: url(images/image-3.jpg);">
					<div class="date text-center">
						<span>09</span>
						<small>Aug</small>
					</div>
				</div>
				<div class="desc">
					<h3><a href="#">Discover New Adventure</a></h3>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->
<?php include("footer.php") ?>