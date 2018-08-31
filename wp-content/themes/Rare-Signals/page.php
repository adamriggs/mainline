<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="intro">

	<?php if (have_posts()):
			 while (have_posts()) : the_post();
				the_content();
			endwhile;
		endif;

	?>
		</section>
	</main>
</div>

<?php get_footer(); ?>