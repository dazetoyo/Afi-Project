<?php get_header(); ?>

<main id="swup" class="transition-fade">

	<?php

	$termId = get_queried_object()->term_id;
	$termTax = get_queried_object()->taxonomy;
	$termName = get_queried_object()->name;
	$termSlug = get_queried_object()->slug;
	$termParent = get_queried_object()->parent;

	?>

	<?php if(get_field('increase_building_floor_apartments_list', $termTax.'_'.$termId) || ($termParent != 0)){ ?>

	<div class="wrap mt-5 pt-5">
		<div id="primary" class="content-area">

				<header class="entry-header index-header text-center position-relative">
					<h2  class="m-0 text-primary ">

							<?php $termParentData = get_term($termParent, $termTax); ?>

							<?php echo $termParentData->name; ?>

					</h2>

						<br/>
					<span class="h3 "><?php echo $termName; ?></span>
				</header>



				<?php if($termParent != 0){ ?>
					<div class="container">
								<div class="increase-imagemap-wrap increase-imagemap-building mb-5">
									<?php get_template_part( 'template-parts/imagemap/imagemap', 'floor' ); ?>
								</div>
					</div>

				<?php } ?>

				<div class="row">

					<div class="col-lg-12 d-flex justify-content-center">

						<?php if($termParent == 0){ ?>
							<?php
							$args_tax = array(
								'hide_empty' => true,
								'orderby'=>'menu_order',
								'order'=>'ASC',
								'parent' => 0,
								'exclude' => $termId
							);
							$buildings_query = get_terms( $termTax, $args_tax );

							if($buildings_query){
							?>

							<?php /*	<h4 class="text-uppercase"><?php _e('Alte blocuri','increase'); ?></h4>
							*/ ?>
								<div class="row archive-side">
									<?php
									foreach ($buildings_query as $term) {
									$building_thumb = esc_sql(get_field('increase_building_floor_image', $termTax.'_'.$term->term_id))['url'];
										?>

										<div class="d-inline-block">

											<a href="<?php echo get_term_link($term); ?>" class="mb-4 p-2 <?php if (is_tax('increase_rooms', $term) && $term->term_id == get_queried_object()->term_id) {echo 'active';} ?>" >

												<span class="archive-side-title text-center d-block mb-1 bg-primary p-3 text-light"><?php // echo $term->name; ?></span>

												<span class="archive-side-img lazy" data-src="<?php echo $building_thumb; ?>">

												</span>
											</a>

										</div>
									<?php } ?>
								</div>
							<?php } ?>
						<?php }else{ ?>

							<?php
							$current_floor_level = get_field('increase_building_floor_level', $termTax.'_'.$termId);

							$args = array(
								'hide_empty' => false, // also retrieve terms which are not used yet
								'parent'    => $termParent,
								'meta_query' => array(
									array(
										'key'       => 'increase_building_floor_level',
										'value'     => $current_floor_level+1,
										'compare'   => '==',
									)
								)


							);
							$top_floor_level = get_terms( $termTax, $args );

							$args = array(
								'hide_empty' => false, // also retrieve terms which are not used yet
								'parent'    => $termParent,
								'meta_query' => array(
									array(
										'key'       => 'increase_building_floor_level',
										'value'     => $current_floor_level-1,
										'compare'   => '===',
									)
								)

							);
							$bot_floor_level = get_terms( $termTax, $args );
							?>

							<?php if($top_floor_level || $bot_floor_level){ ?>
							<?php /*	<h4 class="text-uppercase"><?php _e('Alte etaje','increase'); ?></h4> */ ?>

								<div class="row archive-side">


								<?php if($bot_floor_level){ ?>
									<div class="d-inline-flex">
										<a href="<?php echo get_term_link($bot_floor_level[0]->term_id); ?>"
										   class="mb-4 p-1 increase-foor-bot">
											<span style="font-size:18px;         padding: 11px 17px;" class="archive-side-title text-center d-block mb-1 mb-1 bg-primary  text-light font-weight-light">
												<img style="padding: 0 5px 3px 0;" src="/wp-content/uploads/2019/12/bottom-icon.svg" alt="">
												<?php echo $bot_floor_level[0]->name; ?> <?php // echo $termParentData->name; ?></span>
											<span class="archive-side-icon d-block ">
												<span class="icon-custom increaseicons-arrow-down"></span>
											</span>
										</a>
									</div>
								<?php } ?>


									<div  class="  text-primary mb-4  increase-foor-top">

											<?php // $termParentData = get_term($termParent, $termTax); ?>

											<?php // echo $termParentData->name; ?>



								<div style="margin-top:4px;" class="dropdown">



									  <?php

									  $termId = get_queried_object()->term_id;
									  $termTax = get_queried_object()->taxonomy;
									  $termName = get_queried_object()->name;
									  $termParent = get_queried_object()->parent;
									  $termLevel = get_field('increase_building_floor_level', $termTax . '_' . $termId );

									  $termParentObj = get_term_by('term_id', $termParent, $termTax );



									  ?>


									  	
									  		  <div style="font-size:18px;  cursor:pointer;   padding: 11px 40px;" class="mb-1 bg-primary text-light dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  			<?php echo $termParentObj->name; ?>
									  		</div>
									  		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									  			<?php
									  			$args = array(
									  				'parent' => 0,
									  				'taxonomy' => 'increase_buildings',
									  			);

									  			$terms = get_terms( $args );

									  			foreach($terms as $term){
									  				$args = array(
									  					'hide_empty' => false, // also retrieve terms which are not used yet
									  					'parent'    => $term->term_id,
									  					'meta_query' => array(
									  						array(
									  							'key'       => 'increase_building_floor_level',
									  							'value'     => $termLevel,
									  							'compare'   => '==',
									  						)
									  					),
									  					'fields' => 'ids'


									  				);
									  				$termOtherBuildingId = get_terms( $termTax, $args )[0];
									  				?>
									  				<a class="dropdown-item <?php if($term->term_id == $termParent)?>" href="<?php echo get_term_link($termOtherBuildingId); ?>"><?php echo $term->name; ?></a>
									  			<?php } ?>
									  		</div>


									<!-- old -->
										  <?php
										  /*
										  $tax_terms = get_terms('increase_buildings', array('parent'   => '0', 'hide_empty' => '0'));

																					  ?>
											  <div style="font-size:18px;  cursor:pointer;   padding: 11px 40px;" class="mb-1 bg-primary text-light dropdown-toggle"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  <?php

											$termId = get_queried_object()->term_id; //Get ID of current term
											$ancestors = get_ancestors( $termId, 'increase_buildings' ); // Get a list of ancestors
											$ancestors = array_reverse($ancestors); //Reverse the array to put the top level ancestor first
											$ancestors[0] ? $top_term_id = $ancestors[0] : $top_term_id = $termId; //Check if there is an ancestor, else use id of current term
											$term = get_term( $top_term_id, 'increase_buildings' ); //Get the term
											echo $term->name; // Echo name of top level ancestor
											echo ' ';

											 ?>
										 </div> */ ?>
		  									<? /*  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
										  <?php
										  foreach ( $tax_terms as $tax_term ):

											  $dropdown_url = get_field('dropdown_url', $tax_term->taxonomy.'_'.$tax_term->term_id);

											  //echo '<option value="'. $dropdown_url  .'">'.$tax_term->name.'</option>';
											  echo '  <a href="'. $dropdown_url  .'" class="dropdown-item" type="button">'.$tax_term->name.'</a>';
										  endforeach;


										   ?>

									  </div> */ ?>


									</div>


									</div>


<?php if($top_floor_level){ ?>
	<div class="d-inline-flex">
		<a href="<?php echo get_term_link($top_floor_level[0]->term_id); ?>"
		   class="mb-4 p-1 increase-foor-top">
			<span class="archive-side-icon d-block ">
				<span class="icon-custom increaseicons-arrow-down"></span>
			</span>
			<span style="font-size:18px;         padding: 11px 17px;" class="archive-side-title text-center d-block mb-1 bg-primary text-light font-weight-light">
				<img style="padding: 0 5px 3px 0;" src="/wp-content/uploads/2019/12/top-icon.svg" alt="">
				<?php echo $top_floor_level[0]->name; ?> <?php // echo $termParentData->name; ?></span>
		</a>
	</div>
<?php } ?>
								</div>
							<?php } ?>
						<?php } ?>

					</div>


					<div class="col-lg-12 archive-apartments">
						<?php if (have_posts()) { ?>

							<?php global $wp_query; ?>


								<div class="container">
									<?php /*<div class="row ">
									  			<div class="h4">
					  								<?php printf( _n( '%s APARTAMENT', '%s APARTAMENTE', $wp_query->found_posts, 'increase' ), number_format_i18n( $wp_query->found_posts ) ); ?>
					  							</div>
									</div> */ ?>




									<div class="row d-flex justify-content-center">


							<?php while (have_posts()) : the_post(); ?>

								<?php get_template_part( 'template-parts/apartments/archive', 'content' ); ?>

							<?php endwhile; ?>
								</div>

									</div>

							<script>
								jQuery(function () {
									jQuery('.lazy').Lazy();
								});
							</script>

							<?php if ($wp_query->max_num_pages > 1) { ?>

								<div class="navigation clearfix mb-4">

									<?php
									if (function_exists('wp_pagenavi')) {
										wp_pagenavi(/*array( 'query' => $the_query)*/);
									} else {
										?>
										<div class="alignleft"><?php next_posts_link(__('<span>&laquo;</span> Older posts', 'theme')); ?></div>
										<div class="alignright"><?php previous_posts_link(__('Newer posts <span>&raquo;</span>', 'theme')); ?></div><?php
									} ?>

								</div><!-- .navigation -->

							<?php } ?>

						<?php } ?>
					</div>

				</div>


		</div>
	</div>
	<?php }else{ ?>
		</div><!-- .container -->

		<div class="increase-imagemap-wrap increase-imagemap-building">
			<div class="increase-imagemap-building-name">
				<?php echo $termName; ?>
			</div>
			<?php get_template_part( 'template-parts/imagemap/imagemap', 'building' ); ?>
		</div>

		<div class="container">
	<?php } ?>
<style media="screen">
		.sold-out-badge{
		    position: absolute;
		    padding: 21px 6px;
		    font-size: 12px;
		    font-weight: bold;
		}
		.mw-350{
			max-width:350px;
		}
		.index-header{
			z-index:999;
		}

		.legenda-index{
			margin-top:-150px;
			z-index: 999;
		}
		.increase-imagemap-wrap.increase-imagemap-building.mb-5{
			margin-top:-200px;
		}

</style>
<?php get_footer(); ?>
</main>
