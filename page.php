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
</section>
<section class="services">
		<h2 class="main-heading">Services</h2>
		<div class="servicerow">
			<div class="service">
				<div class="service__heading-box service__heading-box--nm">
					<h3 class="service__heading">Nutritional Medicine</h3>
				</div>
				<div class="service__text">
					<p>Nutritional medicine uses foods, vitamins and minerals to, prevent disease, cure illness and promote health and wellbeing. Nutrients are the building blocks found in the environment they are essential to our bodies and attaining the correct balance is paramount in ensuring good health. Deficiencies in macro and micronutrients can be harmful and pose negative impacts on the whole body. Therefore  understanding the role of nutritional medicine and using it as a first line therapy can ensure positive health outcomes.</p>
				</div>
			</div>
			<div class="service">
				<div class="service__heading-box service__heading-box--cm">
					<h3 class="service__heading">Traditional Chinese Medicine</h3>
				</div>
				<div class="service__text">
					<p>TCM focuses on prevention of disease and uses herbs, diet, acupuncture as well as several other techniques to heal.  The main goal is to attain balanced qi or vital energy throughout the body. TCM is a whole-body medicine that studies the connection of mind, body and spirt. </p>
				</div>
			</div>
			<div class="service">
				<div class="service__heading-box service__heading-box--bm">
					<h3 class="service__heading">Botanical Medicine</h3>
				</div>
				<div class="service__text">
					<p>Botanical Medicine also know as herbal medicine uses plant parts as therapeutic treatment. Herbs can be taken in several forms for examples as powders, capsules, teas, tinctures, topical applications. The numerous forms make it accessible to many.</p>
				</div>
			</div>
		<!-- </div>
		<div class="servicerow"> -->
			<div class="service">
				<div class="service__heading-box service__heading-box--hm">
					<h3 class="service__heading">Homeopathic medicine</h3>
				</div>
				<div class="service__text">
					<p>Homeopathy is based on the philosophy that “like cures like”. It is based on the notion that the body has the strength to heal itself. Homeopathic medicines work on the basis that if a healthy individual has a symptom after taking a dose of the remedy than a very small dose of that remedy can cure the illness. </p>
				</div>
			</div>
			<div class="service">
				<div class="service__heading-box service__heading-box--ldc">
					<h3 class="service__heading">Lifestyle and Dietary counselling</h3>
				</div>
				<div class="service__text">
					<p>Food and exercise as medicine is a primary approach to prevent and cure illness. Getting the right variety and quantity of nutrients from the foods we eat is essential to optimize our health. Exercise also contributes to health promotion by improving muscle strength and increasing endurance. Energy boosts are experienced with increased physical activity because blood and oxygen circulation to the organs and tissues are considerably improved.</p>
				</div>
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
