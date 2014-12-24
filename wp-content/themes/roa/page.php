<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Sandbox
 * @since Sandbox 2.0
 */
get_header(); ?>

  <section class="outer-wrapper page content">
    <section class="inner-wrapper">
		<h1 class="title"><? the_title(); ?></h1>
    	<div class="inner-content row">		
	    	<div class="content span_8">		
			      	<?php the_post(); ?>
			      	<?php the_content(); ?>
	    	</div><!--/ end content -->
	    	<aside class="sidebar span_3">
	    		<h2>Cool Sidebar for Content/Social Media</h2>
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nemo optio molestiae eius dolor id laborum quas a exercitationem eaque sapiente aliquam adipisci saepe provident cumque quo sed enim rerum.</p>
	    	</aside><!-- / end side bar -->
    	</div><!-- / end inner content -->
    </section><!-- / end inner wrapper -->
  </section><!-- / end page inner content -->

<?php get_footer(); ?>