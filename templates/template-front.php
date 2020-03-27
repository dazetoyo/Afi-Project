<?php /* Template Name: Front Page */ ?>
<?php get_header(); ?>

<!-- </div><!-- .container -->

<main id="swup" class="transition-fade">

<?php  get_template_part( 'template-parts/imagemap/imagemap', 'building' ); ?>

<div class="container">
	<div style="z-index:999;" class="row my-5 position-relative negative-top-margin" >
		<div class="d-block d-sm-flex m-auto bg-primary pr-sm-5 rounded-10-px shadow-lg">

			<img class="rounded-10-px" src="/wp-content/uploads/2019/12/homepage-adela-hq.jpg" alt="Adela Pârvu">
			<img class="d-block m-auto-mobile" style="margin-left: -54px;" src="/wp-content/uploads/2019/11/Adela-Parvu.png" alt="">
			<div class="col-12 col-sm-6 align-self-center text-center text-light py-4 py-sm-0">
				<a class="text-light" href="<?php echo the_field('adela_link') ?>"><?php echo the_field('adela_link_text') ?>
				<?php the_field('adela_text') ?>
			</a>
			</div>

		</div>
	</div>
</div> <!-- container -->


<div class="gradient-extended"></div>

<div  class="position-relative full-width povestea-ta">

<div style="padding-top:175px;" class="d-flex justify-content-center text-center text-light h3 ">
	<div class="z-index-max h1 text-light letter-spacing-heading"><?php echo the_field('afi_intro_headline') ?></div>
	</div>


	<div style="max-width:500px; padding-top:35px; padding-bottom:50px; padding-left: 15px;
    padding-right: 15px;" class="d-flex m-auto justify-content-center text-center text-light">
		<div class="z-index-max font-weight-bold">
			<?php echo the_field('afi_intro_subtext') ?>

		</div>
	</div>


	<div class="container"> <!-- CONTAINER INTERIOR -->
		<div class="row text-light">

			<div class="col-12  col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
					<a class="text-light  h4 cursor-pointer" href="<?php echo the_field('locatie_link'); ?>">
				<div class=" letter-spacing-heading  font-weight-bold "><?php echo the_field('locatie_title'); ?></div>

				<p class="small">
					<?php echo the_field('locatie_subtitle'); ?>
					</p>
					<i class="locatie">
						<img src="<?php echo the_field('locatie_subtitle_icon'); ?>" alt="<?php echo the_field('locatie_title'); ?>">
					</i>
					</a>
				</div>



				<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
					<a class="text-light  h4 cursor-pointer" href="<?php echo the_field('apartamente_link'); ?>">
					<div class=" letter-spacing-heading  font-weight-bold "><?php echo the_field('apartamente_title'); ?></div>
					<p class="small" >
						<?php echo the_field('apartamente_subtitle'); ?>
						</p>
						<i class="locatie">
							<img width="38" height="38" src="<?php echo the_field('apartamente_subtitle_icon'); ?>" alt="<?php echo the_field('apartamente_title'); ?>">
						</i>
					</a>
					</div>

					<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
						<a class="text-light  h4 cursor-pointer" href="<?php echo the_field('green_homes_link'); ?>">
						<div class=" letter-spacing-heading  font-weight-bold "><?php echo the_field('green_homes_title'); ?></div>
						<p class="small"><?php echo the_field('green_homes_subtitle'); ?></p>
							<i class="locatie">
								<img  width="38" height="38" src="<?php echo the_field('green_homes_subtitle_icon'); ?>" alt="<?php echo the_field('green_homes_link'); ?>">
							</i>
						</a>
						</div>

						<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
							<a class="text-light h4 cursor-pointer" href="<?php echo the_field('facilitati_link'); ?>">
							<div class=" letter-spacing-heading font-weight-bold ">
							<?php  echo the_field('facilitati_title'); ?>
							Facilitati</div>
							<p class="small">
								<?php  echo the_field('facilitati_subtitle'); ?>
								</p>
								<i class="locatie">
									<img width="38" height="38" src="<?php  echo the_field('facilitati_subtitle_icon'); ?>" alt="<?php echo the_field('facilitati_link'); ?>">
								</i>
							</a>
							</div>
						</div>
					</div> <!--  CONTAINER INTERIOR END -->
				</div> <!-- section 1 end -->


				<div class="container">
				<div class="row mt-5 pt-5">
						<div data-aos="fade-down-left" data-aos-duration="1000" class="square background-square-video"></div>
						<div data-aos="fade-down-right" data-aos-duration="1000" class="square2 background-square-video2">
							<div class="square3 background-square-video3"></div>
						</div>

						<div class="col-10 col-lg-6  d-block m-auto text-center text-primary z-index-max afi-border-primary bg-white p-4 letter-spacing-regular floating-video">


							<h2 class="font-weight-bold h3"><?php echo the_field('video_title'); ?>
							</h2>
							<p class="h4">
								<?php echo the_field('video_subtitle'); ?>
								</p>
								<a data-no-swup data-fancybox href="https://www.youtube.com/watch?time_continue=1&v=En976KcG-FI?rel=0&fs=1&autoplay=1">
								<i class="play-button">
									<img src="/wp-content/uploads/2019/11/Play-video.svg" alt="Video">
								</i>
								</a>
						</div>
				</div>




							</div> <!-- container - end -->



		<?php  //add me in
		//Fields

		$images = get_field('front_gallery');
		if( $images ): ?>
		   <p class="text-uppercase font-weight-bold text-primary mb-5 text-center">Vezi galerie</p>
		   <div id="slickkk" class="slider-for">

		            <?php foreach( $images as $image ): ?>
		                <div  class="slick-container" >

							<a  class="home-fancybox" data-fancybox="gallery-homepage" data-no-swup href="<?php echo $image['url']; ?>" data-thumb="<?php echo $image['url']; ?>">
							<div  class="slick-item" style="background:url(<?php echo $image['url']; ?>);
							background-size:cover;
							background-position:center;
							height:300px;
							margin:0 10px;">
							</div>
						</a>

		                </div>
		            <?php endforeach; ?>
		    </div>
		   <div class="slider-nav"> </div>
		<?php endif;?>



		<div class="container">
			<div class="row mt-5 pt-5 position-relative">
				<div  class="adela-float-middle">
					<img src="<?php echo the_field('sugestii_adela_middle'); ?>" alt="Adela">
				</div>

				<div class="col-12 col-md-6 square background-square-sugestii"></div>

				<div class="d-block mt-5 m-sm-auto sugestii-amenajare z-index-max">
					<div class="h2 mb-3 font-weight-light letter-spacing-heading">
						<?php echo the_field('sugestii_title'); ?>
					</div>
					<div class="h2 mb-3 "><?php echo the_field('sugestii_subtitle'); ?></div>
					<div class=" text-muted mb-3 h4">
						<?php echo the_field('sugestii_text'); ?>
						</div>



					    <div class="entry-meta-custom">
					        <?php

					        $terms = get_terms('increase_rooms');
					        foreach ($terms as $term) {
					            echo '<div class="pb-3">';

								echo '<a class="font-weight-bold small text-uppercase" href="'. get_term_link($term->slug, "increase_rooms"). '">
								<u>'. $term->name .'</u></a>';

								 echo '</div>';
					        }

					       ?>

					    </div><!-- .entry-meta-custom -->
				</div>
			</div>


			<div class="row mt-5 pt-5">
				<div class="col-12 col-md-6 d-block m-auto localizare-width">
				<p class="h2 font-weight-light"><?php echo the_field('localizare_title'); ?></p>
				<div class="h4 text-muted line-height-24"><?php echo the_field('localizare_subtitle'); ?></div>
				<a href="<?php echo the_field('localizare_link'); ?>"><div class=" mt-5 mb-sm-0 d-block text-center z-index-max afi-border-secondary px-4 py-5">
					<div class="text-primary letter-spacing-heading  font-weight-bold h4 pb-3">DESCHIDE HARTA</div>
					<i class="deschide-harta">
						<img src="/wp-content/uploads/2019/11/Location-primary.svg" alt="">
					</i>
				</div>
			</a>
			</div>
			<div class="col-12 col-md-6 square">


			<a class="w-100" href="<?php echo the_field('localizare_link'); ?>">

			<div style="background:url('<?php echo the_field('localizare_img'); ?>');
			background-size:cover; height:100%;" class=" background-square-video"></div>

			<a/>
				</div>

		</div>



	</div>


<?php get_footer(); ?>


							<style media="screen">


							div.afi-border-secondary{
									max-width: 250px;
							}

							.border-radius-10{
								border-radius:10px;
							}


							.gradient-extended{
							    height: 76px;
							    background: #03398C;
							    display: flex;
							    margin-top: -126px;
							    padding-top: 76px;
							}
							.povestea-ta{
								min-height:50px;
								background-image:url('http://afi.goodafternoon.ro/wp-content/uploads/2019/11/Homepage-undersection.jpg');
								height:90vh;
								background-size:cover;
								background-position:center;
								background-repeat:no-repeat;
							}
							.floating-video{
								margin-top:-150px !important;
								margin-bottom:150px !important;
							}

							.full-width:before{
								content:'';
								background: rgba(115, 173, 251, 0.5);
								background: -webkit-linear-gradient(bottom, rgba(115, 173, 251, 0.5), #023B8C);
								background: -moz-linear-gradient(bottom, rgba(115, 173, 251, 0.5), #023B8C);
								background: linear-gradient(to top, rgba(115, 173, 251, 0.5), #023B8C);
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;
								background-size: cover;
								background-size: cover;
								background-size: cover;
								top: 0;
								left: 0;
								height: 100%;
								position: absolute;
								width: 100%;
								z-index: 99;

							}

							.sugestii-amenajare{
									max-width: 268px;
									margin-right: 25px !important;
							}

							.z-index-max{
								z-index:99;
							}



							.afi-border-primary{
								padding:15px 0;
								border-top:2px solid #013D8C;
								border-left:2px solid #013D8C;
								border-right:2px solid #013D8C;
								transition:0.2s;
								transition-timing-function: ease-in;
							}



							.adela-float-middle{
								position: absolute;
								z-index: 99;
								display: flex;
								justify-content: center;
								text-align: center;
								left: 0;
								right: 0;
								margin-left: auto;
								margin-top: 100px;
								margin-right: auto;
							}

						.afi-border-primary:before{
							content: "";
							position: absolute;
							width: 40%;
							height: 2px;
							background: #013D8C;
							left: 0;
							bottom:0;

							transition:0.2s;
							transition-timing-function: ease-in;
						}
						.afi-border-primary:after{
							content: "";
							position: absolute;
							width: 40%;
							height: 2px;
							background: #013D8C;

							right: 0;
							bottom:0;
							transition:0.2s;
							transition-timing-function: ease-in;
						}

							.afi-border{
								padding:15px 0;
								border-top:1px solid transparent;
								border-left:1px solid transparent;
								border-right:1px solid transparent;
								transition:0.2s;
								transition-timing-function: ease-in;

							}
							.afi-border:hover{
									border-top:1px solid white;
									border-left:1px solid white;
									border-right:1px solid white;
									transition:0.2s;
									transition-timing-function: ease-in;
							}
							.afi-border:before{
								content: "";
								position: absolute;
								width: 40%;
								height: 1px;
								background: white;
								left: 0;
								bottom:0;
								opacity: 0;
								transition:0.2s;
								transition-timing-function: ease-in;
							}
							.afi-border:after{
								content: "";
								position: absolute;
								width: 40%;
								height: 1px;
								background: white;
								opacity:0;
								right: 0;
								bottom:0;
								transition:0.2s;
								transition-timing-function: ease-in;
							}
							.afi-border:hover:after,
							.afi-border:hover:before{
								opacity:1;
								transition:0.2s;
								transition-timing-function: ease-in;
							}
							.afi-border > a > i:after{
								/* position: absolute;
								left: 50%;
								margin-left: -15px;
								display: block;
								content: '.';
								width: 20px;
								height: 20px;
								background: url('http://afi.goodafternoon.ro/wp-content/uploads/2019/11/Location-Icon.svg');
								 border: 10px solid white;
								font-size: 0; */
							}
							.locatie {
								margin-bottom: -25px;
	    						opacity:0;
								transition:0.2s;
								transition-timing-function: ease-in;
								display:block;
							}

							.play-button {
								margin-bottom: -50px;

								transition:0.2s;
								transition-timing-function: ease-in;
								display:block;
							}

							.afi-border:hover > a > i{
								display:block;
								transition:0.2s;
								transition-timing-function: ease-in;
								opacity:1;

							}

							.afi-border:hover > a{
								text-decoration: none;
							}

							.square {
								position: relative;
								width: 50%;
								display:inline-flex;

							}

							.square:after {
								content: "";
								display: block;
								padding-bottom: 100%;


							}

							.square2 {
								position: relative;
							    width: 40%;
							    display: flex;
							    align-items: center;
							    justify-content: center;


							}

							.square2:after {
								content: "";
							    display: block;
							    max-width: 80%;
							    padding-bottom: 80%;

							    width: 100%;
							    background: url('<?php echo the_field("video_medium_img") ?>') no-repeat center center;
							    -webkit-background-size: cover;
							    -moz-background-size: cover;
							    -o-background-size: cover;
							    background-size: cover;
							}

							.square3{
							position: absolute;
						    top: 0;
						    right: -35px;
						    width: 35%;
						    display: flex;
						    align-items: center;
						    justify-content: center;
							z-index: -1;
							}

							.square3:after {
								content: "";
							    display: block;
							    max-width: 100%;
							    padding-bottom: 100%;

							    width: 100%;
							    background: url('<?php echo the_field("video_small_img") ?>') no-repeat center center;
							    -webkit-background-size: cover;
							    -moz-background-size: cover;
							    -o-background-size: cover;
							    background-size: cover;
							}

									.background-square-sugestii{
										background:url('<?php echo the_field("sugestii_adela_left") ?>') no-repeat center center;
										-webkit-background-size: cover;
										-moz-background-size: cover;
										-o-background-size: cover;
										background-size: cover;
									}

							.background-square-video{
								background:url('<?php echo the_field("video_large_img") ?>') no-repeat center center;
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;
								background-size: cover;
							}
							.slick-list{
								 margin-left:25px;
								 margin-right:25px;
							}

							.line-height-24{
								line-height:24px;
							}




									.deschide-harta {
										margin-bottom: -65px;

										transition:0.2s;
										transition-timing-function: ease-in;
										display:block;
									}


									/* Slick slider */

									button.slick-next.slick-arrow{
										height: 50px;
										width: 50px;
										background: url('/wp-content/uploads/2019/11/slider-right.svg');
										background-size: cover;
										right:25px;

									}

									/* .slick-prev:before, .slick-next:before{
									background:url(/wp-content/uploads/2019/11/slider-left.svg);
									} */

									button.slick-prev.slick-arrow{
										left: 25px;
										background: url('/wp-content/uploads/2019/11/slider-left.svg');
										background-size: cover;
										height: 50px;
										width: 50px;
										z-index:99;
									}
									.slick-prev:before, .slick-next:before{
										font-size:0px !important;
									}

									.localizare-width{
										max-width:400px;
									}

							        /* menu */
							        li.menu-item > a {
							            color: #58585a !important;

							        }

							        li.menu-homepage > a {
							            color:#013D8C !important;
							            transition:0.2s !important;

							        }
									#swup{
										margin-top:-1px;
									}






									/* Extra large devices (large desktops, 1200px and up) */
									@media (min-width: 1200px) {
										.header{
											background:rgba(255, 0, 0, 0) !important;
										}

										.background-white-top{
											background-color:#fff !important;

										}
										li.menu-item > a{
											color: white !important;
										}



										li.menu-item a.color-white-top{
											color: #58585a !important;
										}
										ul > li > 	a.dropdown-item {
												color: #58585a !important;
											}

									}




							</style>


<script type="text/javascript">

 // jQuery(document).ready(function() {
	//      // window.scroll(0, 0);
 //
 // });
 //
jQuery(document).ready(function( ){

// var image = jQuery('.background-square-video');
// new simpleParallax(image, {
// 	overflow: true
// });






jQuery(function() {
   jQuery('body').scrollTop(0);

               jQuery(function () {
				var $win = jQuery(window);

				$win.scroll(function () {
					if ($win.scrollTop() == 0)



					{

							 jQuery("#masthead").removeClass("background-white-top");
							 jQuery("ul#menu-meniu-ro > li > a").removeClass("color-white-top");


					}


					else {

						jQuery("#masthead").addClass("background-white-top");
						jQuery("ul#menu-meniu-ro > li > a").addClass("color-white-top");


					}
				});
			});


});

});

</script>



</main>
