<?php get_header(); ?>
<main id="swup" class="transition-fade">






	<div class="wrap">

			<div class="col-12">

			<div id="primary" >

				<?php if (have_posts()) { ?>
					<div class="container">

							<div class="mb-5">
								<img src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php the_title() ?>">
							</div>
							<div class="col-10">


						<?php while ( have_posts() ) :  the_post();	 ?>

							<?php

							get_template_part( 'template-parts/post/content' );



							?>

						<?php endwhile; ?>
						</div>
					</div>
				<?php }; ?>

			</div>
		</div>

	</div>

	<?php get_footer(); ?>
</main>
