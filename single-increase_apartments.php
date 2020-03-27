<?php get_header(); ?>





<main id="swup" class="transition-fade">



	<div class="full-width despre-afi mb-5"></div>

	<?	$rooms_taxonomy = 'increase_rooms';
		$rooms_terms = wp_get_post_terms( get_the_ID(), $rooms_taxonomy, array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all') );?>

<div class="container">

	<div class="row">

		<div class="col-12 col-md-6">
			<div class="sticky-apartment">


			<div class="h2 letter-spacing-heading font-weight-light mb-3">
				<?php echo get_the_title()  ?>
			</div>
			<div class="h3 font-weight-bold letter-spacing-heading">
				PREȚURI ÎNCEPÂND DE LA
			</div>
			<div style="font-size:72px;" class="font-weight-bold text-primary">
				<?php if (get_field('increase_apartment_price_main')) { ?>
					<?php echo get_field('increase_apartment_price_main') ?> <sup class="h4 font-weight-bold" >Euro + TVA</sup>
				<?php 	} ?>
			</div>


			<div class="font-weight-bold h4 text-dark letter-spacing-regular">

				<?php
				$terms = get_the_terms( get_the_ID(), 'increase_rooms' );
				if( ! empty( $terms ) ) : ?>
				<?php foreach( $terms as $term ) : ?>
					<?php echo the_field('subtext_detalii', $term); ?>
					<?php
				endforeach;
			endif;
			?>


			</div>




				<?php

				$data_clienti = get_field('data_clienti'); //get numar_clienti acf
				$seed = date("d"); //get the day
				$numar_clienti = get_field('numar_clienti'); //get numar_clienti acf
				$finalseed = $seed + $numar_clienti;

				if ($data_clienti < $seed ) {
					$diferenta = $seed - $data_clienti;
					srand ($diferenta);
				    if($diferenta % 2 == 0){
				        $finalseed = $finalseed + $diferenta + rand(1, $numar_clienti);
				    }
				    else{
				        $finalseed = $finalseed + $diferenta - rand(1, $numar_clienti);
				    }
				} else if ( $data_clienti > $seed ) {
					$diferenta = $data_clienti - $seed;
					srand ($diferenta);
				    if($diferenta % 2 == 0){
				        $finalseed = $finalseed + $diferenta + rand(1, $numar_clienti);
				    }
				    else{
				        $finalseed = $finalseed + $diferenta - rand(1, $numar_clienti);
				    }
				}
				else  {
					$finalseed = $seed + $numar_clienti;
				}
				?>

			<div class="small mt-3 text-primary" style="font-style:italic;" >
				<?php echo $finalseed; ?> vizitatori au completat astăzi oferta pentru acest apartament.
			</div>


					<div style="max-width: 255px;
								height: 165px;
								position:relative; " class="my-3 cl-effect-12">
				        <a href="/contact"><div class=" d-block text-center z-index-max afi-border-secondary afi-border-info  pt-5 pb-2">
			                <div class="text-info letter-spacing-heading  font-weight-bold h4 pb-3">CERE OFERTA</div>
			                    <i class="deschide-harta">
			                        <img src="/wp-content/uploads/2019/12/Afi-oferta.svg" alt="">
			                    </i>
			                </div>
			            </a>
					</div>


				</div>

		</div>

		<div id="slickkk" class="col-12 col-md-6">

<?php
	$images = get_field('increase_apartment_gallery');
	if( $images ): ?>


				<?php foreach( $images as $image ): ?>


						<a class="home-fancybox" data-fancybox="gallery-homepage" data-no-swup href="<?php echo $image['url']; ?>" data-thumb="<?php echo $image['url']; ?>">
						</a>


				<?php endforeach; ?>

	<?php endif;?>



				<a class="home-fancybox" data-fancybox="gallery-homepage" data-no-swup href="<?php echo get_the_post_thumbnail_url(); ?>" data-thumb="<?php echo get_the_post_thumbnail_url(); ?>">
					<div style="
					background: url('<?php echo get_the_post_thumbnail_url()  ?>') no-repeat scroll right center;
					height: 420px;
					background-size: contain;
					background-origin: content-box;
					background-position:center;
					" alt="" class="border-primary border p-3">
				</div>
			</a>


			<div class="row my-5" style="margin-left: 1px;">
					<?php while ( have_rows('increase_apartment_details') ) : the_row(); ?>
						<div class="col-4">
							<div class="h1 font-weight-light letter-spacing-heading">
								 <?php the_sub_field('increase_apartment_details_description'); ?> <sup style="top:-1.5em; letter-spacing: normal;" >mp</sup>
							</div>
							<div class="font-weight-bold text-primary">
								  <?php the_sub_field('increase_apartment_details_title'); ?>
							</div>
						</div>
				<?php endwhile; ?>
			</div>

	<div class="row font-weight-bold h4 mb-5 border-bottom border-info pb-5 pl-3">
		<?php if( have_rows('increase_apartment_details') ): ?>
		<?php while ( have_rows('apartment_details_col_3') ) : the_row(); ?>


				<div class="col-6 my-2">
					<div class="row">
					  <div class="col-6">
						  <?php the_sub_field('increase_apartment_details_title_col3'); ?>
					  </div>
  					  <div class="col-6">
						  <?php the_sub_field('increase_apartment_details_description_col3'); ?> MP
  					  </div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php while ( have_rows('apartment_details_col_2') ) : the_row(); ?>


				<div class="col-6 my-2">
					<div class="row ">
					  <div class="col-6">
					  	 <?php the_sub_field('increase_apartment_details_title_col2'); ?>
					  </div>
  					  <div class="col-6">
						   <?php the_sub_field('increase_apartment_details_description_col2'); ?> MP
  					  </div>
					</div>
				</div>

		<?php 	endwhile; ?>
		<?php
			else :
			endif;
		?>
	</div>
			<div class="row pl-3 mb-5 font-weight-bold h3 letter-spacing-heading">
			  DISPONIBILITĂȚI APARTAMENT
			</div>

			<?php if( have_rows('increase_apartment_variations') ){ ?>

				<div class="table-responsive mb-2">
					<table class="table" id="tabel-disponibilitate">
						<tr class="table-head text-center bg-primary text-light h4 letter-spacing-regular">
							<?php if(!in_array('site_ap_hide_building', $site_apartment_hide_columns)){ ?>
								<th>
									<?php _e('Clădire','increase'); ?>
								</th>
							<?php } ?>
							<?php if(!in_array('site_ap_hide_entrance', $site_apartment_hide_columns)){ ?>
								<th>
									<?php _e('Unitate', 'increase'); ?>
								</th>
							<?php } ?>
							<?php if(!in_array('site_ap_hide_floor', $site_apartment_hide_columns)){ ?>
								<th>
									<?php _e('Etaj', 'increase'); ?>
								</th>
							<?php } ?>
							<?php if(!in_array('site_ap_hide_nr', $site_apartment_hide_columns)){ ?>
								<th>
									<?php _e('Cod', 'increase'); ?>
								</th>
							<?php } ?>
							<th>
								<?php _e('Preț Euro *', 'increase'); ?>
							</th>
							<th>
								<?php _e('Status', 'increase'); ?>
							</th>
						</tr>

						<?php $i = 1; while( have_rows('increase_apartment_variations') ): the_row(); ?>

							<tr class="text-center <?php if(get_sub_field('increase_apartment_variations_sold') == '1') {echo ' vandut '; } ?>">
								<?php if(!in_array('site_ap_hide_building', $site_apartment_hide_columns)){ ?>
									<td>
										<?php the_sub_field('increase_apartment_variations_building'); ?>
									</td>
								<?php } ?>
								<?php if(!in_array('site_ap_hide_entrance', $site_apartment_hide_columns)){ ?>
									<td>
										<?php the_sub_field('increase_apartment_variations_entrance'); ?>
									</td>
								<?php } ?>
								<?php if(!in_array('site_ap_hide_floor', $site_apartment_hide_columns)){ ?>
									<td>
										<?php
										$term = get_sub_field('increase_apartment_variations_floor');
										$taxonomy = 'increase_buildings';
										$term_data = get_term_by('id', $term, $taxonomy);
										echo $term_data->name;
										?>
									</td>
								<?php } ?>
								<td>
									<?php the_sub_field('increase_apartment_variations_nr'); ?>
								</td>
								<?php if(get_field('site_manage_prices', 'options') !== 'site_prices_hide'){ ?>
									<td>
										<?php if(!get_sub_field('increase_apartment_variations_sold')){ ?>
											<div class="price">
												<?php the_sub_field('increase_apartment_variations_price'); ?>
											</div>
										<?php }else{echo '*';} ?>
									</td>
								<?php } ?>
								<td class="table-vandut ">
									<?php
									if(get_sub_field('increase_apartment_variations_sold') == '1') {
										_e('Sold', 'increase');
									}elseif(get_sub_field('increase_apartment_variations_sold') == '2'){
										_e('Reserved', 'increase');
									}else{
										_e('Available', 'increase');
									}
									?>
								</td>
							</tr>

						<?php endwhile; ?>

					</table>
				</div>




							<?php } ?>



		</div>




</div>



	<div class="row mb-5 position-relative">
				<div class="adela-float-middle">
					<img src="/wp-content/uploads/2019/11/Adela-Intro.png" alt="Adela">
				</div>
				<div class="col-12 col-md-6 square background-square-video"></div>
				<div class="d-block mt-5 m-sm-auto sugestii-amenajare z-index-max">
					<div class="h2 mb-3 font-weight-light letter-spacing-heading text-uppercase">

							<?php
							$terms = get_the_terms( get_the_ID(), 'increase_rooms' );
							if( ! empty( $terms ) ) : ?>
							<?php foreach( $terms as $term ) : ?>
								<?php echo the_field('rooms_detalii', $term); ?>
								<?php
							endforeach;
						endif;
						?>
	DIN AFI CITY ÎN
	VIZIUNEA
					</div>




					<div class="h2 mb-3 ">Adela Pârvu</div>


																	<?php


																	if ( $rooms_terms != null ){
																		foreach( $rooms_terms as $rooms_term ) {
																			$rooms_images = get_field('galerie_detalii', $rooms_taxonomy.'_'.$rooms_term->term_id);
																			foreach( $rooms_images as $rooms_image ):
																				?>

																					<a class="single-fancybox" href="<?php echo $rooms_image; ?>" data-fancybox="gallery-adela" data-thumb="<?php echo $rooms_image; ?>" ></a>

																			<?php
																			endforeach;
																			unset($rooms_term);
																		}
																	}
																	?>


								<div id="single-fancybox"
								style="max-width: 255px;
					    		height: 165px;
								z-index:99;
								position:relative;"
								class="my-5"> <!-- imaginea de la background square video -->
							        <a class="single-fancybox" data-no-swup data-thumb="<?php print_r($rooms_image);?>" href="<?php print_r($rooms_image) ;?>" data-fancybox="gallery-adela">

										<div class=" d-block text-center z-index-max afi-border-secondary  pt-5 pb-2">
					                    <div class="text-primary letter-spacing-heading  font-weight-bold h4 pb-3">VEZI GALERIA</div>
					                        <i class="deschide-harta">
					                            <img class="nofancybox" src="/wp-content/uploads/2019/12/Afi-galerie.svg" alt="">
					                        </i>
					                    </div>

					                </a>
								</div>




				</div>
			</div>







<?php /*
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if (have_posts()) { ?>
				<div class="post-wrap">
					<?php while ( have_posts() ) :  the_post();	 ?>

						<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

					<?php endwhile; ?>
				</div>
			<?php }; ?>
		</main>
	</div>

	*/ ?>

<style media="screen">

.despre-afi {
    min-height: 50px;
    background-image: url('<?php echo $rooms_image; ?>');
    background-size:cover;
    background-repeat:no-repeat;
    background-position: bottom;
    height: 50vh;
}
sup {
	top: -2.8em;
	font-size:14px;
}

.afi-border-info{
	    border-top: 2px solid #0EA0ED;
    border-left: 2px solid #0EA0ED;
    border-right: 2px solid #0EA0ED;
}
.afi-border-info:after,
.afi-border-info:before{
	    background: #0EA0ED;
}

div > i > img {
	margin-bottom: -25px !important;
}

.row.my-5 > .col-4:after {
	content: '';
    position: absolute;
    border-left: 1px solid #04378C;
    height: 77px;
    top: 0;
    left: 0;
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


	.background-square-video{
		background:url('<?php print_r($rooms_image); ?>') no-repeat center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
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

	.sugestii-amenajare{
			max-width: 268px;
			margin-right: 25px !important;
	}

	.sticky-apartment{
		position: sticky;
    	top: 75px;
	}





</style>


<?php get_footer(); ?>

</main>
