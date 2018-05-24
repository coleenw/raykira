<?php get_header(); ?>

<main>

	<div class="container">
		
		<div class="row">
			<div class="col-xs-12">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1 class="page-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; else: endif; ?>
			</div>
		</div>

	</div>

</main>

<?php get_footer(); ?>
