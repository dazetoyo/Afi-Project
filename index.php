<?php get_header(); ?>

<main id="swup" class="transition-fade">

<div class="full-width blog-afi"></div>


	<div class="container">
		<div class="col-12">

			<header class="entry-header my-5">
				<h1 class="title"><?php single_post_title(); ?></h1>
			</header>

			<div id="primary">

				<?php if (have_posts()) { ?>
					<div class="posts-wrap">



						<?php
						echo '<div class="row ">';
						while (have_posts()) : the_post();

						get_template_part('template-parts/post/content', 'excerpt');

						endwhile;
						echo '</div>';
					if ($wp_query->max_num_pages > 1) {
						if (function_exists('wp_pagenavi')) {
							wp_pagenavi();
						} else {
							?>
							<div class="row mb-5">

								<div class="col-6">
									<div class=" h4 font-weight-bold letter-spacing-heading text-left stiri-new"><?php next_posts_link( __( 'Mai multe știri', 'increase' ) );?>
									</div>

								</div>

								<div class="col-6">
										<div class=" h4 font-weight-bold letter-spacing-heading text-right stiri-old"><?php previous_posts_link( __( 'Știri noi', 'increase' ) );?></div>
								</div>

							</div>
							<?php
						}
					} ?>
				</div>
			<?php }  ?>

		</div>
	</div>

</div>



<div  class="position-relative full-width povestea-ta">

<div style="padding-top:175px; padding-bottom:55px;" class="d-flex justify-content-center text-center text-light h3 ">
	<p class="z-index-max h1 text-light letter-spacing-heading">GASESTE-TI CAMINUL IN AFI CITY!</p>
	</div>



	<div class="container"> <!-- CONTAINER INTERIOR -->
		<div style=" padding-bottom:105px;" class="row text-light">


						<div class="col-12  col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
								<a class="text-light  h4 cursor-pointer" href="<?php echo the_field('locatie_title', 2); ?>">
							<div class=" letter-spacing-heading  font-weight-bold "><?php echo the_field('locatie_title', 2); ?></div>

							<p class="small">
								<?php echo the_field('locatie_subtitle', 2); ?>
								</p>
								<i class="locatie">
									<img src="<?php echo the_field('locatie_subtitle_icon', 2); ?>" alt="<?php echo the_field('locatie_title', 2); ?>">
								</i>
								</a>
							</div>



							<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
								<a class="text-light  h4 cursor-pointer" href="<?php echo the_field('apartamente_link', 2); ?>">
								<div class=" letter-spacing-heading  font-weight-bold "><?php echo the_field('apartamente_title', 2); ?></div>
								<p class="small" >
									<?php echo the_field('apartamente_subtitle', 2); ?>
									</p>
									<i class="locatie">
										<img width="38" height="38" src="<?php echo the_field('apartamente_subtitle_icon', 2); ?>" alt="<?php echo the_field('apartamente_title', 2); ?>">
									</i>
								</a>
								</div>

								<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
									<a class="text-light  h4 cursor-pointer" href="<?php echo the_field('green_homes_link', 2); ?>">
									<div class=" letter-spacing-heading  font-weight-bold "><?php echo the_field('green_homes_title', 2); ?></div>
									<p class="small"><?php echo the_field('green_homes_subtitle', 2); ?></p>
										<i class="locatie">
											<img  width="38" height="38" src="<?php echo the_field('green_homes_subtitle_icon', 2); ?>" alt="<?php echo the_field('green_homes_link', 2); ?>">
										</i>
									</a>
									</div>

									<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
										<a class="text-light h4 cursor-pointer" href="<?php echo the_field('facilitati_link', 2); ?>">
										<div class=" letter-spacing-heading font-weight-bold ">
										<?php  echo the_field('facilitati_title', 2); ?>
										Facilitati</div>
										<p class="small">
											<?php  echo the_field('facilitati_subtitle' , 2); ?>
											</p>
											<i class="locatie">
												<img width="38" height="38" src="<?php  echo the_field('facilitati_subtitle_icon', 2); ?>" alt="<?php echo the_field('facilitati_link' , 2); ?>">
											</i>
										</a>
										</div>

					</div> <!--  CONTAINER INTERIOR END -->
				</div> <!-- section 1 end -->
</div>


<style media="screen">


/* extended footer */


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

							}
							.floating-video{
								margin-top:-150px !important;
								margin-bottom:150px !important;
							}

							.povestea-ta:before{
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
								z-index:99999;
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
								height: 2px;
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
								height: 2px;
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
								margin-bottom: -28px;
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

							.afi-border:hover > a{
								text-decoration:none;
							}

							.afi-border:hover > a > i{
								display:block;
								transition:0.2s;
								transition-timing-function: ease-in;
								opacity:1;
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
							    background: url(/wp-content/uploads/2019/11/Homepage-undersection.jpg) no-repeat center center;
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
							    background: url(/wp-content/uploads/2019/11/Homepage-undersection.jpg) no-repeat center center;
							    -webkit-background-size: cover;
							    -moz-background-size: cover;
							    -o-background-size: cover;
							    background-size: cover;
							}



							.background-square-video{
								background:url(/wp-content/uploads/2019/11/Homepage-undersection.jpg) no-repeat center center;
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


/* extended footer */

	        .blog-afi {
	            min-height: 50px;
	            background-image: url('<?php echo get_the_post_thumbnail_url(get_queried_object_id(),'full'); ?>');
	            background-size:cover;
	            background-repeat:no-repeat;
	            background-position: bottom;
	            height: 50vh;
	        }

			.h4.font-weight-bold > a{
				position:relative;
				text-decoration:none;
			}

			.h4.font-weight-bold.stiri-new > a:after{
				content: '';
			    position: absolute;
			    left: -17px;
			    bottom: -8px;
			    width: 199px;
			    border-bottom: 2px solid #04378b;
			}
			.h4.font-weight-bold.stiri-old > a:after {
				content: '';
			    position: absolute;
			    left: -27px;
			    bottom: -8px;
			    width: 156px;
			    border-bottom: 2px solid #04378b;
			}

			.h4.font-weight-bold.letter-spacing-heading.text-left.stiri-new {
				display:flex
			}


	        /* menu */
	        li.menu-item > a {
	            color: #58585a !important;

	        }

	        li.menu-noutati > a {
	            color:#013D8C !important;
	            transition:0.2s !important;
	        }

</style>

<script type="text/javascript">



	//  jQuery('.h4.font-weight-bold > a').attr('id', 'value1');
	//  jQuery('.h4.font-weight-bold > a').attr('id', 'value2');
	//
	// if (!document.getElementById("value1")) {
	// console.log("ceva");
	// }





</script>

<?php get_footer(); ?>
</main>
