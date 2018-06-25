<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package drneha
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<?php
		while ( have_posts() ) :
			the_post();
			// get_template_part( 'template-parts/content', 'page' );
			?>
			<section class="hero">
    <div class="hero__title">
			<h1 class="hero__title--heading"><?php echo get_bloginfo('name') ?></h1>
			<h2  class="hero__title--subheading">	
				<?php 	
				$blogdesc = get_bloginfo( 'description');
				$blogdesc = preg_replace("/, */", "<br>", $blogdesc);
				echo $blogdesc;	
				?>
			</h2>
    </div>
	</section>
	<section class="description">
		<h2 class="main-heading">What is Naturopathic medicine?</h2>
		<p>Naturopathic Medicine is a primary healthcare system that focuses on the whole body, it combines research driven modern medicine with traditional natural medicine. Naturopathy utilizes its natural therapies with the understanding that the mind, body and spirit are interconnected this helps to promote optimal health and wellbeing. Naturopathic Doctors strive to empower their patients by giving them the knowledge to prevent illness and be proactive about their health. Gentle and effective therapies are used to heal and strengthen the body to prevent invasive procedures and harsh treatments.</p>		
		<h2 class="main-heading main-heading--1">Dr. Neha N.D. (Montserrat)</h2>
		<h2 class="main-heading main-heading--2">Dr. Neha N.D. (Roboto Condensed)</h2>
		<h2 class="main-heading main-heading--3">Dr. Neha N.D. (Slabo 27px)</h2>

</section>
<section class="services">
		<h2 class="main-heading">Services</h2>
		<div class="servicerow">
			<div class="service">
				<div class="service__icon">					
					<svg class="service__svg">
						<use xlink:href="<?php echo get_theme_file_uri('images/icons/noun_255583_cc.svg') ?>"></use>
					</svg>
				</div>
				<div class="service__text">Some random text</div>
			</div>
		</div>
</section>
			<?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
