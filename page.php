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
		<h2 class="main-heading">What we offer</h2>
		<div class="servicerow">
			<div class="service">				
				<svg class="service__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 128 160" style="enable-background:new 0 0 128 128;" xml:space="preserve">
				<path class="service__svg" d="M124,47.8c-1.1-9.1-5.3-18.1-12.9-23.3c-8.2-5.6-20.1-5.8-28.1,0.1c-13.3,9.7-15.1,0.5-15.2-1.4  C67.2,16,67,8.2,67.4,1H52.5c1.1,6.8,2.1,13.7,3.2,20.5c0.5,3.2,1,6.3,2.1,9.3c1.8,4.7,5.1,8.7,8,12.8c6.1,9,10.3,21.2,4.6,30.5  c-5.3,8.7-16.8,10.9-27,11.5c-10.2,0.6-21.3,0.7-29.2,7.2C5.2,100.4,4,115.3,3.4,127h15.4c0-5.8,0-12.1,1.2-16.8  c0.5-2,4.7-15.4,37,3.6c16.2,9.5,39.7,5.1,52.1-9.1c7.1-8.2,11.2-19,13.5-29.6C124.6,66.2,125.2,56.9,124,47.8z M68.4,106.5  c-2.6,0-4.7-2.1-4.7-4.7c0-2.6,2.1-4.7,4.7-4.7c2.6,0,4.7,2.1,4.7,4.7C73.1,104.4,71,106.5,68.4,106.5z M80.3,83.1  c0-2.6,2.1-4.7,4.7-4.7s4.7,2.1,4.7,4.7s-2.1,4.7-4.7,4.7S80.3,85.7,80.3,83.1z M91.6,106.5c-2.6,0-4.7-2.1-4.7-4.7  c0-2.6,2.1-4.7,4.7-4.7c2.6,0,4.7,2.1,4.7,4.7C96.3,104.4,94.2,106.5,91.6,106.5z"/></svg>
				<div class="service__text">
					<p>Labore qui esse ipsum commodo consectetur ipsum sit Lorem dolor.</p>
					<p>Minim velit dolor culpa cupidatat pariatur culpa et. Sint velit culpa cupidatat aliqua ipsum irure nostrud. Duis aliquip reprehenderit sit nisi excepteur aliquip ea quis id voluptate laboris. Voluptate officia irure Lorem do non.</p>
				</div>
			</div>
			<div class="service">				
				<svg class="service__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 128 160" style="enable-background:new 0 0 128 128;" xml:space="preserve"><g><path class="service__svg" d="M64.7,10.1h-7.8V6.8c0-3.2-2.6-5.8-5.8-5.8h-5c-3.2,0-5.8,2.6-5.8,5.8v3.3h-7.5l-4.1,19.6h40.2L64.7,10.1z"/><path class="service__svg" d="M117.1,86.7c-3.4-3.1-8-4.2-12.5-3.5c-1.6,0.3-6.6,0.4-6.6,0.4c-2.1,0-4.1-0.2-5.8-0.4   c-4.4-0.7-9.1,0.4-12.5,3.5c-11.8,10.7-1.3,29.7,5.1,36.9c5.5,6.2,12.3,2.2,13.4,1.4c0.1-0.1,0.2-0.1,0.3,0   c1.1,0.7,7.9,4.8,13.4-1.4C118.5,116.4,128.9,97.4,117.1,86.7z M112.9,104.1c-1.6,4.3-3.9,8-5.1,9.8c-0.5,0.7-1.3,1.1-2.1,1.1   c-0.5,0-1-0.1-1.4-0.5c-1.2-0.8-1.5-2.4-0.7-3.6c1.1-1.6,3.1-4.8,4.6-8.7c0.8-2.2,1.3-4.3,1.4-6.1c0.1-1.4,1.3-2.5,2.7-2.4   c1.4,0.1,2.5,1.3,2.4,2.7C114.5,98.9,113.9,101.4,112.9,104.1z"/><path class="service__svg" d="M95.8,78.4c0.5,0,1.1,0.1,1.6,0.1c0.2,0,0.3,0,0.5,0c0.8,0,1.6-0.1,2.4-0.1c-1.3-7.2-5.8-12-6-12.3l-3.5,2.7   C90.9,68.9,94.6,72.8,95.8,78.4z"/><path class="service__svg" d="M17,110.1c-1.4,0-2.6-1.1-2.6-2.6c0-1.4,1.1-2.6,2.6-2.6h52.9c-0.8-4.5-0.8-9,0.6-13.2H17   c-1.4,0-2.6-1.1-2.6-2.6c0-1.4,1.1-2.6,2.6-2.6h56.1c0.9-1.3,2-2.5,3.3-3.7c3.6-3.3,8.3-5.1,13.3-5.1c0.2,0,0.4,0,0.7,0   c-1.1-3.1-3-5.3-3.3-5.6l-0.1-0.2l-3.3-4.3l8.2-6.3v-2.4V26.6c0-3.7-3-6.7-6.7-6.7H72l3.1,14.9H22.3l3.1-14.9H12.2   c-3.7,0-6.7,3-6.7,6.7v93.7c0,3.7,3,6.7,6.7,6.7h68.8c-3.8-4.3-7.6-10.4-9.8-16.9H17z M17,50h55.7c1.4,0,2.6,1.1,2.6,2.6   c0,1.4-1.1,2.6-2.6,2.6H17c-1.4,0-2.6-1.1-2.6-2.6C14.4,51.1,15.6,50,17,50z M17,68.3h55.7c1.4,0,2.6,1.1,2.6,2.6   c0,1.4-1.1,2.6-2.6,2.6H17c-1.4,0-2.6-1.1-2.6-2.6C14.4,69.4,15.6,68.3,17,68.3z"/></g><text x="0" y="143" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Vectors Market</text><text x="0" y="148" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
				<div class="service__text">
					<p>Nisi elit dolor consequat aliquip ex ad pariatur proident.</p>
					<p>Mollit velit sunt Lorem voluptate voluptate aliqua minim ad. Elit eu adipisicing adipisicing aliquip consequat exercitation anim nulla aute in est. Ut anim minim mollit aliquip culpa ex labore amet quis. Aliqua Lorem reprehenderit reprehenderit commodo fugiat enim cupidatat culpa quis id veniam eu reprehenderit cillum.</p>
				</div>
			</div>
			<div class="service">				
			<svg class="service__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 28.75" version="1.1" x="0px" y="0px"><title>143 - Health (Solid)</title><desc>Created with Sketch.</desc><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g class="service__svg"><path d="M1.2967,12.004 L4.9367,12.004 L6.8107,7.929 C6.9767,7.567 7.3727,7.329 7.7427,7.347 C8.1407,7.356 8.4967,7.602 8.6457,7.971 L10.4367,12.395 L11.5597,10.397 C11.7347,10.087 12.0607,9.893 12.4167,9.887 C12.7947,9.89 13.0787,10.052 13.2657,10.336 L14.4527,4.752 C14.5527,4.282 14.9477,3.941 15.4567,3.961 C15.9377,3.973 16.3417,4.326 16.4177,4.802 L17.5697,12.004 L22.7057,12.004 C23.1727,11.168 23.5297,10.28 23.7517,9.351 C24.0907,7.932 23.9977,7.023 23.9577,6.766 C23.5897,2.846 20.7567,0.004 17.2107,0.004 C15.1667,0.004 13.2217,0.961 11.9447,2.579 C10.6897,0.938 8.8297,0.004 6.7917,0.004 C3.2457,0.004 0.4127,2.845 0.0437,6.766 C0.0047,7.023 -0.0883,7.932 0.2497,9.351 C0.4727,10.28 0.8297,11.168 1.2967,12.004"/><path d="M16.717,14.004 C16.226,14.004 15.807,13.647 15.73,13.162 L15.292,10.424 L14.696,13.228 C14.611,13.629 14.288,13.938 13.884,14.006 C13.476,14.075 13.072,13.888 12.862,13.537 L12.462,12.874 L11.162,15.187 C10.985,15.504 10.65,15.697 10.29,15.697 C10.269,15.697 10.248,15.697 10.227,15.695 C9.843,15.671 9.508,15.429 9.363,15.073 L7.66,10.867 L6.486,13.422 C6.322,13.776 5.968,14.004 5.577,14.004 L2.736,14.004 C3.006,14.302 3.288,14.593 3.594,14.867 L12.001,22.342 L20.411,14.865 C20.716,14.592 20.997,14.302 21.267,14.004 L16.717,14.004 Z"/></g></g><text x="0" y="38" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Ben Davis</text><text x="0" y="43" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
				<div class="service__text">
					<p>Labore dolore amet aliquip aute nostrud incididunt esse esse irure in Lorem.</p>
					<p>Nisi nulla nisi veniam nostrud elit sit. Ut est dolore ad dolore nulla pariatur do magna incididunt. Quis ullamco qui mollit consequat enim dolore ipsum. Laborum sint labore cupidatat laborum ipsum labore.</p>
				</div>
			</div>
			<div class="service">				
			<svg class="service__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 64 80" enable-background="new 0 0 64 64" xml:space="preserve"><g><path class="service__svg" d="M39.608,0.863H5.765c-2.417,0-4.373,1.956-4.373,4.373v51.305c0,1.012,0.364,1.946,0.943,2.683   c-0.01,0-0.01,0-0.02,0c0.108,0.138,0.216,0.265,0.334,0.383c0.03,0.03,0.049,0.049,0.079,0.069   c0.167,0.157,0.344,0.305,0.531,0.442c0.03,0.02,0.059,0.039,0.088,0.059c0.206,0.138,0.423,0.256,0.639,0.354   c0.049,0.02,0.098,0.039,0.138,0.059c0.236,0.088,0.472,0.167,0.717,0.216c0.039,0.01,0.079,0.02,0.118,0.029   c0.265,0.049,0.531,0.079,0.806,0.079h21.452c-0.364-0.708-0.55-1.523-0.55-2.388c0.02-1.356,0.491-2.584,1.454-3.764   c0.658-0.816,1.405-1.533,2.211-2.162H5.942c-0.393,0-0.708-0.314-0.708-0.708V6.592c0-0.393,0.314-0.707,0.708-0.707h33.49   c0.393,0,0.708,0.314,0.708,0.707V35.67c0-0.01,0.01-0.01,0.01-0.01l3.331-2.005c0.167-0.098,0.334-0.197,0.511-0.275V5.236   C43.991,2.819,42.026,0.863,39.608,0.863z M22.687,54.753c1.169,0,2.113,0.943,2.113,2.103c0,1.169-0.943,2.113-2.113,2.113   c-1.16,0-2.103-0.943-2.103-2.113C20.584,55.697,21.527,54.753,22.687,54.753z"/><path fill="#000000" d="M59.786,49.53c-0.284-0.332-0.643-0.571-1.012-0.821c-0.444-0.303-0.712-0.809-0.947-1.268   c-0.249-0.503-0.526-0.948-0.833-1.408c-0.625-0.983-1.25-1.966-1.886-2.94c-0.579-0.872-1.169-1.736-1.803-2.586   c-1.086-1.455-2.378-2.773-3.684-4.063c-0.915-0.911-2.094-1.082-3.324-0.618c-0.395,0.15-0.796,0.341-1.172,0.566   c-2.216,1.328-4.435,2.676-6.651,4.003c-0.91,0.553-1.842,0.396-2.575-0.343c-1.816-1.851-3.636-3.682-5.452-5.533   c-0.687-0.701-1.528-1.125-2.521-1.144c-1.176-0.046-2.111,0.959-1.872,2.104c0.115,0.639,0.36,1.308,0.745,1.799   c2.936,3.715,5.927,7.407,8.898,11.097c1.037,1.292,2.073,2.584,3.136,3.91c-0.186,0.066-0.296,0.113-0.439,0.165   c-1.366,0.476-2.758,0.917-4.087,1.492c-1.451,0.63-2.702,1.6-3.712,2.843c-0.416,0.51-0.726,1.067-0.733,1.761   c-0.006,1.327,0.942,2.015,2.151,1.547c0.581-0.216,1.122-0.511,1.66-0.786c1.023-0.546,2.027-1.096,3.2-1.247   c2.071-0.259,4.173-0.162,6.244-0.058c0.639,0.031,1.257,0.058,1.899,0.068c0.319,0.015,0.639,0.031,0.961,0.026   c0.206,0.009,0.453-0.048,0.647,0.042c0.264,0.111,0.26,0.422,0.329,0.66c0.112,0.369,0.359,0.675,0.616,0.971   c0.669,0.823,1.338,1.647,2.004,2.491c0.854,1.047,1.917,1.16,2.973,0.318c3.09-2.487,6.171-4.986,9.261-7.473   c0.951-0.764,1.061-1.734,0.288-2.697c-0.501-0.623-1.011-1.257-1.511-1.88C60.322,50.199,60.073,49.841,59.786,49.53z    M60.597,54.306l-8.83,7.007c-0.387,0.307-0.959,0.245-1.266-0.142l-2.041-2.589c-0.298-0.375-0.236-0.947,0.151-1.254l8.839-6.995   c0.387-0.307,0.947-0.236,1.254,0.151l2.044,2.569C61.055,53.439,60.984,53.999,60.597,54.306z"/><polygon fill="#000000" points="51.396,57.327 52.252,58.41 51.076,59.346 50.221,58.263  "/><path fill="#000000" d="M36.229,28.953c0.538-0.974,0.694-2.035,0.438-3.143c-0.006-0.029-0.012-0.057-0.019-0.086   c-0.001-0.006-0.003-0.012-0.004-0.018c-0.148-0.664-0.439-1.283-0.843-1.818c-0.421-0.581-0.951-1.031-1.582-1.346   c-0.507-0.266-1.068-0.444-1.665-0.506c-0.773-0.081-1.65-0.026-2.377,0.262c-0.312,0.124-0.703,0.331-0.824,0.671   c-0.194,0.548,0.444,0.872,0.896,0.611c0.217-0.125,0.443-0.223,0.674-0.296c0.155-0.029,0.312-0.074,0.466-0.109   c0.897-0.152,1.829,0.05,2.594,0.537c0.721,0.481,1.289,1.207,1.525,2.04c0.039,0.145,0.07,0.294,0.091,0.448   c0.011,0.078,0.018,0.155,0.024,0.231c0.003,0.041,0.008,0.081,0.01,0.122c0.005,0.11,0.005,0.218,0.001,0.324   c-0.001,0.022-0.003,0.044-0.004,0.066c-0.006,0.105-0.015,0.209-0.03,0.31c-0.001,0.007-0.003,0.014-0.004,0.022   c-0.233,1.524-1.406,2.629-2.579,2.964c-0.122,0.035-0.245,0.063-0.368,0.084c-0.039,0.006-0.078,0.009-0.117,0.014   c-0.069,0.01-0.137,0.019-0.206,0.024c-0.321,0.023-0.645,0.002-0.962-0.055c-0.049-0.009-0.098-0.017-0.147-0.028   c-0.03-0.007-0.06-0.015-0.09-0.023c-0.771-0.199-1.469-0.643-1.967-1.261c-0.056-0.076-0.111-0.153-0.16-0.235   c-0.107-0.179-0.2-0.384-0.319-0.553c-0.087-0.199-0.16-0.407-0.208-0.626c-0.115-0.516-0.639-0.709-1.036-0.353   c-0.043,0.038-0.068,0.11-0.08,0.191c-0.006-0.003-0.012-0.005-0.018-0.008c0.003,0.025,0.009,0.048,0.012,0.073   c-0.004,0.071,0.001,0.144,0.014,0.203c0.036,0.166,0.081,0.326,0.131,0.485c0.021,0.072,0.045,0.143,0.07,0.213   c0.008,0.023,0.017,0.045,0.025,0.067c0.038,0.102,0.079,0.203,0.124,0.301c0.005,0.01,0.01,0.02,0.015,0.03   c0.045,0.096,0.092,0.192,0.144,0.284c0.242,0.437,0.555,0.834,0.95,1.18c0.032,0.03,0.061,0.061,0.094,0.09   c0.47,0.416,1.005,0.719,1.571,0.912c0.372,0.132,0.753,0.211,1.142,0.238c0.004,0,0.008,0.001,0.013,0.001   c0.056,0.004,0.111,0.008,0.167,0.01c1.163,0.051,2.338-0.321,3.256-1.103C35.561,29.999,35.949,29.515,36.229,28.953z"/><g><g><path fill="#000000" d="M28.727,41.911l-0.13-0.16l-0.082,0.189c-0.248,0.58-0.744,0.896-1.56,0.995     c-0.296,0.035-0.589,0.053-0.871,0.053c-1.153,0-2.185-0.293-3.064-0.873c-3.796-2.506-5.726-5.933-5.734-10.186     c0-0.078,0.038-0.181,0.105-0.286c1.075-0.381,2.914-1.532,3.473-4.973c0.03-0.173,0.016-0.349-0.04-0.513     c0.05-0.147,0.098-0.296,0.146-0.445c0.053-0.162,0.104-0.324,0.159-0.483c0.341-1,0.692-1.997,1.043-2.993     c0.425-1.206,0.864-2.452,1.277-3.687c0.182-0.535,0.294-1.155,0.327-1.795c0.057-1.312-0.353-2.423-1.152-3.128     c-0.587-0.525-1.267-0.919-1.914-1.267c-0.075-0.04-0.156-0.087-0.244-0.138c-0.357-0.208-0.802-0.466-1.224-0.466     c-0.193,0-0.367,0.055-0.514,0.163c-0.453,0.323-0.695,0.735-0.665,1.13c0.02,0.253,0.158,0.614,0.713,0.894     c0.139,0.068,0.279,0.102,0.429,0.102c0.235,0,0.451-0.083,0.66-0.164c0.202-0.078,0.393-0.152,0.607-0.155     c0.587,0,1.144,0.587,1.654,1.745c0.646,1.482-0.053,3.184-0.669,4.685c-0.146,0.356-0.285,0.694-0.404,1.022     c-0.533,1.441-1.066,2.883-1.608,4.324c-0.358,0.132-0.625,0.447-0.688,0.819c-0.512,3.182-2.188,3.429-2.689,3.429     c-0.04,0-0.069-0.002-0.079-0.002l-0.084-0.012c-1.021-0.029-1.669-0.892-2.03-1.606c-0.049-0.107-0.097-0.204-0.148-0.308     c-0.313-0.726-0.451-1.414-0.463-1.501c-0.052-0.322-0.253-0.603-0.543-0.759l-0.008-0.02c-0.041-0.108-0.083-0.217-0.125-0.334     c-0.877-2.364-1.8-4.909-2.607-7.494c-0.423-1.345-0.073-2.605,0.984-3.55c0.296-0.267,0.618-0.503,1.001-0.42     c0.125,0.027,0.234,0.078,0.351,0.133c0.171,0.081,0.348,0.164,0.581,0.17l0.051,0.001c0.657,0,1.338-0.425,1.338-1.136     c0-0.641-0.431-1.089-1.047-1.089c-0.035,0-0.071,0.001-0.11,0.004c-0.325,0.031-0.64,0.154-0.944,0.272     c-0.201,0.079-0.41,0.16-0.616,0.211c-1.04,0.276-1.923,0.993-2.485,2.02c-0.655,1.197-0.791,2.636-0.371,3.949     c0.737,2.309,1.569,4.842,2.543,7.741c-0.102,0.208-0.136,0.438-0.098,0.65c0.008,0.047,0.77,4.726,4.296,5.166     c0.016,0.065,0.026,0.142,0.033,0.232c0.231,4.329,2.081,7.859,5.498,10.492c1.896,1.464,3.582,2.146,5.308,2.146     c0.419,0,0.847-0.042,1.271-0.122c0.905-0.169,1.688-0.6,2.203-1.212l0.065-0.078l-0.063-0.08     C29.428,42.782,29.078,42.341,28.727,41.911z"/><path fill="#000000" d="M33.715,25.552c-0.379-0.585-1.063-0.934-1.831-0.934c-0.225,0-0.449,0.03-0.668,0.091     c-0.65,0.183-1.021,0.213-1.544,0.127c-0.152-0.027-0.317-0.064-0.516-0.117c-0.188-0.057-0.392-0.083-0.638-0.083     c-0.143,0-0.285,0.008-0.43,0.017l-0.185,0.01c-0.689,0.031-1.358,0.165-1.988,0.398c-2.348,0.876-3.969,3.02-4.23,5.594     c-0.086,0.806-0.147,1.532-0.019,2.264c0.388,2.343,1.725,4.202,3.976,5.525l0.029,0.018l0.057-0.086l0.106-0.098l-0.116-0.145     c-0.489-0.637-0.851-1.491-1.016-2.403c-0.021-0.133-0.038-0.252-0.038-0.36v-0.046l-0.029-0.035     c-1.277-1.504-1.646-3.32-1.095-5.396c0.34-1.256,1.104-2.206,2.269-2.823c1.053-0.568,2.087-0.765,3.183-0.606     c0.506,0.074,0.839,0.216,1.042,0.722c0.214,0.551,0.478,0.941,0.783,1.157c0.327,0.232,0.721,0.354,1.138,0.354     c0.563,0,1.093-0.218,1.455-0.599C34.091,27.395,34.219,26.324,33.715,25.552z"/></g></g></g><text x="0" y="79" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Delwar Hossain</text><text x="0" y="84" fill="#000000" font-size="5px" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
				<div class="service__text">
					<p>Mollit consectetur minim in id sit qui aliquip cupidatat commodo incididunt qui ex do.</p>
					<p>Ex dolor sint veniam esse occaecat est laborum pariatur. Reprehenderit dolor est amet amet sit nulla nostrud veniam nostrud. Officia excepteur do proident in esse ut ut ad. Tempor non elit ipsum nulla aliquip. Nulla dolor consectetur qui proident officia ex ullamco eu mollit dolore eiusmod pariatur.</p>
				</div>
			</div>
		</div>
</section>
<section class="homepage-blog">
<div class="left">our blog</div>
  <div class="right"><h2 class="main-heading">Blog Title</h2>
    <p>POST TEASER:Porchetta dolor rump anim, labore corned beef sed ipsum ham cow est voluptate officia occaecat tri-tip.  Picanha dolore jowl, nisi anim pork chop leberkas.  Bacon dolor landjaeger in, minim andouille consequat t-bone velit ea pork loin shankle short ribs fugiat strip steak.  Pork belly pariatur spare ribs ground round boudin.  Pig cupidatat aute tenderloin lorem capicola.  Fatback pork chop pariatur, pastrami excepteur bresaola id chuck.  Picanha ut lorem pariatur meatloaf pork loin enim sunt shoulder.</p>
  </div>
</section>
<section class="homepage-blog-alternate">
<div class="left">
    <div class="blog">
      our blog
    </div></div>
  <div class="right"><h2 class="main-heading">Blog Title</h2>
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
