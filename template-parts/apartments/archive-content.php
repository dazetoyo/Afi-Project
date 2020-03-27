<?php
$increase_site_price_manage = get_field('increase_options_manage_prices', 'option');
$post_room = wp_get_post_terms(get_the_ID(), 'increase_rooms');
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
if(get_field('increase_apartment_archive_image')){
	$url = get_field('increase_apartment_archive_image');
}else{
	$url = $thumb['0'];
}
$sold_out = get_field('increase_apartment_sold_out');
if($sold_out){
	$sold_out_class = 'sold-out';
}else{
	$sold_out_class = '';
}
?>
<article <?php post_class($sold_out_class.' mb-3 col-12 col-lg-4 mx-2 position-relative justify-content-center border border-primary mw-350'); ?> id="post-<?php the_ID(); ?>">
	<a href="<?php echo esc_url( get_permalink() ); ?>" class="row no-gutters">
		<?php if($sold_out){ ?>
			<span class="sold-out-badge text-uppercase bg-danger text-light">
				<?php _e('Vândut','increase'); ?>
			</span>
		<?php } ?>

<?php /*
		<span class="col-md-5 bg-primary">

			<span class="post-thumbnail lazy" data-src="<?php echo $url; ?>">
			</span>


		</span>

		*/ ?>

		<span class="col-12 py-3 mt-4 ">
			<header class="entry-header pb-0 m-0 container-fluid">
				<h2 class="h6 font-weight-bold m-0 text-center">
					<?php the_title(); ?>

				</h2>

				<div style="background: url('<?php the_post_thumbnail_url( 'post-thumbnail',  '' )?>');
				background-size:contain;
				background-repeat:no-repeat;
				height:300px;
				background-position:center;
					">

				</div>

				<?php
				// $buildings_taxonomy = 'increase_buildings';
				// $buildings_terms = wp_get_post_terms(
				// 	get_the_ID(),
				// 	$buildings_taxonomy,
				// 	array(
				// 		'orderby' => 'name',
				// 		'order' => 'ASC',
				// 		'fields' => 'names',
				// 		'parent' => 0
				// 	)
				// );
				//
				// if ( $buildings_terms != null ){
				// 	$i=1;
				// 	foreach( $buildings_terms as $buildings_term ) {
				//
				// 		if($i > 1){echo ', ';}
				// 		echo $buildings_term;
				//
				// 		unset($buildings_term);
				// 		$i++;
				// 	}
				// }
				?>

			</header>
			<?php /*
			<span class="container-fluid py-3 d-block bg-success">

				<?php if(get_field('increase_apartment_price_main') && ($increase_site_price_manage === 'increase_options_prices_show' || ($increase_site_price_manage === 'increase_options_sold_out_hide' && !$sold_out))) { ?>
					<span class="price font-weight-bold">
						<?php the_field('increase_apartment_price_main'); echo ' '; the_field('increase_options_prices_suffix','options'); ?>
					</span>
				<?php } ?>
			</span> */ ?>

			<span class="entry-summary d-block container-fluid text-center">
				<?php if (have_rows('increase_apartment_details')){ ?>

					<table class="m-auto" >
						<?php $i = 1;
						while (have_rows('increase_apartment_details')): the_row(); ?>

							<tr  class="w-100 <?php if (get_sub_field('increase_apartment_details_highlighted')) {
								echo 'bg-accent';
							} ?>">
								<td class="w-50" >
									<?php the_sub_field('increase_apartment_details_title'); ?>
								</td>
								<td class="w-50">
									<?php the_sub_field('increase_apartment_details_description'); ?> <?php _e('mp','increase'); ?>
								</td>
							</tr>

						<?php endwhile; ?>
					</table>

				<?php } ?>
			</span>

		</span>

	</a>
</article>
