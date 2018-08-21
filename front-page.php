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
			<!-- <h1 class="hero__title--heading"><?php echo get_bloginfo('name') ?></h1>			 -->
    </div>
	</section>
	<!-- <section class="tagline">
			<h2 class="main-heading--1"><?php 	
				$blogdesc = get_bloginfo( 'description');
				$blogdesc = preg_replace("/, */", "<br>", $blogdesc);
				echo $blogdesc;	
				?></h2>
	</section> -->
	<div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/banner1.jpg') ?>);">
  <!-- <img src="<?php echo get_theme_file_uri('images/banner1.jpg') ?>" alt="banner image"> -->
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/banner2.jpg') ?>);">
  <!-- <img src="<?php echo get_theme_file_uri('images/banner2.jpg') ?>" alt="banner image"> -->
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/banner3.jpg') ?>);">
  <!-- <img src="<?php echo get_theme_file_uri('images/banner3.jpg') ?>" alt="banner image"> -->
  </div>
</div>
	<section class="description">
		<h2 class="main-heading main-heading--1 u-center-text">What is Naturopathic medicine?</h2>
		<p>Naturopathic Medicine is a primary healthcare system that focuses on the whole body, it combines research driven modern medicine with traditional natural medicine. Naturopathy utilizes its natural therapies with the understanding that the mind, body and spirit are interconnected this helps to promote optimal health and wellbeing. Naturopathic Doctors strive to empower their patients by giving them the knowledge to prevent illness and be proactive about their health. Gentle and effective therapies are used to heal and strengthen the body to prevent invasive procedures and harsh treatments.</p>		
		<!-- <h2 class="main-heading main-heading--1">Dr. Neha N.D. (Montserrat)</h2> -->
		<!-- <h2 class="main-heading main-heading--2">Dr. Neha N.D. (Roboto Condensed)</h2> -->
		<!-- <h2 class="main-heading main-heading--3">Dr. Neha N.D. (Slabo 27px)</h2> -->

</section>
<section class="services">
		<h2 class="main-heading main-heading--1 u-center-text">What we offer</h2>
		<div class="servicerow">
			<div class="service">
				<img class="service__svg" src="<?php echo get_theme_file_uri('images/icons/noun_Nutrition_168476.svg') ?>" alt ="Nutritional Medicine"/>
				<div class="service__text">
					<h3 class="main-heading--2 u-center-text u-purple-blue">Nutritional Medicine</h3>					
					<p>Nutritional medicine uses foods, vitamins and minerals to, prevent disease, cure illness and promote health and wellbeing. Nutrients are the building blocks found in the environment they are essential to our bodies and attaining the correct balance is paramount in ensuring good health. Deficiencies in macro and micronutrients can be harmful and pose negative impacts on the whole body. Therefore  understanding the role of nutritional medicine and using it as a first line therapy can ensure positive health outcomes.</p>
				</div>
			</div>
			<div class="service">
				<img class="service__svg" src="<?php echo get_theme_file_uri('images/icons/noun_Acupuncture needles_1601894.svg') ?>" alt ="Traditional Chinese Medicine"/>
				<div class="service__text">
					<h3 class="main-heading--2 u-center-text u-purple-blue">Traditional Chinese Medicine</h3>					
					<p>TCM focuses on prevention of disease and uses herbs, diet, acupuncture as well as several other techniques to heal.  The main goal is to attain balanced qi or vital energy throughout the body. TCM is a whole-body medicine that studies the connection of mind, body and spirt. </p>
				</div>
			</div>
			<div class="service">
				<img class="service__svg" src="<?php echo get_theme_file_uri('images/icons/noun_Herbal medicine_783083.svg') ?>" alt ="Botanical Medicine"/>
				<div class="service__text">
					<h3 class="main-heading--2 u-center-text u-purple-blue">Botanical Medicine</h3>					
					<p>Botanical Medicine also know as herbal medicine uses plant parts as therapeutic treatment. Herbs can be taken in several forms for examples as powders, capsules, teas, tinctures, topical applications. The numerous forms make it accessible to many.</p>
				</div>
			</div>
			<div class="service">
				<img class="service__svg" src="<?php echo get_theme_file_uri('images/icons/noun_homeopath_620889.svg') ?>" alt ="Homeopathic Medicine"/>
				<div class="service__text">
					<h3 class="main-heading--2 u-center-text u-purple-blue">Homeopathic medicine</h3>					
					<p>Homeopathy is based on the philosophy that “like cures like”. It is based on the notion that the body has the strength to heal itself. Homeopathic medicines work on the basis that if a healthy individual has a symptom after taking a dose of the remedy than a very small dose of that remedy can cure the illness. </p>
				</div>
			</div>
			<div class="service">
				<img class="service__svg" src="<?php echo get_theme_file_uri('images/icons/noun_Diet and Exercise_188633.svg') ?>" alt ="Lifestyle and diet"/>
				<div class="service__text">
					<h3 class="main-heading--2 u-center-text u-purple-blue">Lifestyle and Dietary counselling</h3>					
					<p>Food and exercise as medicine is a primary approach to prevent and cure illness. Getting the right variety and quantity of nutrients from the foods we eat is essential to optimize our health. Exercise also contributes to health promotion by improving muscle strength and increasing endurance. Energy boosts are experienced with increased physical activity because blood and oxygen circulation to the organs and tissues are considerably improved.</p>
				</div>
			</div>
		</div>
</section>
<section class="homepage-section-alternate">
<div class="left">
    <div class="blog">
      our blog
    </div></div>
  <div class="right"><h2 class="main-heading main-heading--1">Blog Title</h2>
    <p>POST TEASER: Porchetta dolor rump anim, labore corned beef sed ipsum ham cow est voluptate officia occaecat tri-tip.  Picanha dolore jowl, nisi anim pork chop leberkas.  Bacon dolor landjaeger in, minim andouille consequat t-bone velit ea pork loin shankle short ribs fugiat strip steak.  Pork belly pariatur spare ribs ground round boudin.  Pig cupidatat aute tenderloin lorem capicola.  Fatback pork chop pariatur, pastrami excepteur bresaola id chuck.  Picanha ut lorem pariatur meatloaf pork loin enim sunt shoulder.</p>
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
