<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drneha
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="hero">
    <div class="hero__title">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
    <div class="hero__description">
    <p>Naturopathic Medicine is a primary healthcare system that focuses on the whole body, it combines research driven modern medicine with traditional natural medicine. Naturopathy utilizes its natural therapies with the understanding that the mind, body and spirit are interconnected this helps to promote optimal health and wellbeing. Naturopathic Doctors strive to empower their patients by giving them the knowledge to prevent illness and be proactive about their health. Gentle and effective therapies are used to heal and strengthen the body to prevent invasive procedures and harsh treatments.</p>
    </div>

</section>
	<!-- <header class="entry-header">
	</header>.entry-header -->

	<?php drneha_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'drneha' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'drneha' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
