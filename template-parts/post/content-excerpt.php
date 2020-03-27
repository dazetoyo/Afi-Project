<div class="col-12 col-md-6 mb-5">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<div class="font-weight-bold text-primary mb-4">
			<?php echo get_the_date(); ?>
		</div>

			<h2 class="letter-spacing-heading font-weight-light mb-4">
				<a href="<?php echo esc_url( get_permalink() ); ?>">
					<?php the_title(); ?>
				</a>
			</h2>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>


			<div class=""
			style="background:url(<?php echo get_the_post_thumbnail_url(); ?>);
			height:380px; width:100%; background-size:cover; background-position:center;">

			</div>
	</article>

</div>
