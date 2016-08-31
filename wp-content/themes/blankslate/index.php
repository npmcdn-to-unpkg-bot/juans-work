For some reason this is getting wrapped so I had to add addtional closing dives -->

<?php get_header(); ?>
<!-- <?php get_sidebar(); ?> -->
<div class="row content-wrap">
	<div class="small-12 columns">
		<section id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php comments_template(); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</section>
		
	</div>
</div>
<?php get_footer(); ?>