<?php get_header(); ?>
<main id="swup" class="transition-fade">


	<div class="wrap">
		<div id="primary" class="content-area">


				<section class="error-404 not-found">
					<header class="entry-header">
						<h1 class="title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'increase' ); ?></h1>
					</header>
					<div class="entry-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'increase' ); ?></p>

						<?php get_search_form(); ?>

					</div>
				</section>

		</div>
	</div>

	</main>
<?php get_footer();
