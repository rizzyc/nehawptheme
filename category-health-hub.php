<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drneha
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<section class="container--narrow">
			<header class="page-header">
				<h1 class="page-title">Health Hub</h1>
				<?php
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );
				?> 
				 <a href="<?php the_permalink(); ?>"><h2 class="healthhub--heading"><?php the_title(); ?></h2></a>
				
				 <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
				 <?php the_excerpt();
				 ?>
				<p><a class="btn btn--blog" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Continue Reading</a></p>
				 <?php
			endwhile;
			
			the_posts_navigation();
			
			else :
				
				get_template_part( 'template-parts/content', 'healthhub' );
				
			endif;
			?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
