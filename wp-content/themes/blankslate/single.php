<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="row content-wrap">
	<div class="small-12 columns">
		<section id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		<?php endwhile; endif; ?>
		<footer class="footer">
		<?php get_template_part( 'nav', 'below-single' ); ?>
		</footer>
		</section>
	</div>
</div>
<?php get_footer(); ?> 