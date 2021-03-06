<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="row content-wrap">
	<div class="small-12 columns xx">
		<section id="content" role="main" class="category-layout">
		<header class="header">
		<h1 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
		</header>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="all-projects-list">				
					<?php
						if ( has_post_thumbnail()) {
						  echo '<a href="' . get_permalink($post->ID) . '" >';
						  the_post_thumbnail();
						  echo '</a>';
						}
					?>
					<?php get_template_part( 'entry' ); ?>
				</div>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>