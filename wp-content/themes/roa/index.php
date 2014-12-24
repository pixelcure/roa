<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Sandbox
 */
 
	get_header(); 
?>

<?php
 
if(is_home){

?>

  <section class="hero-container">
    <section class="hero-inner inner-wrapper row">
      
      <div class="tagline-container row">
        <?php
          $heroCustomArgs = array( 'post_type' => 'heroCustom', 'posts_per_page' => 1 );
          $heroCustomLoop = new WP_Query( $heroCustomArgs );
          while ( $heroCustomLoop->have_posts() ) : $heroCustomLoop->the_post();
        
          the_content();

          endwhile;
        ?>       
      </div><!-- / end tag line container -->
    </section><!-- / end hero inner row -->
    
    <section class="bottom-hero inner-wrapper row">
      <?php
        $heroCallOutArgs = array( 'post_type' => 'heroBottomCallOut', 'posts_per_page' => 1 );
        $heroCallOutLoop = new WP_Query( $heroCallOutArgs );
        while ( $heroCallOutLoop->have_posts() ) : $heroCallOutLoop->the_post();
      ?>

      <h2><?php the_title(); ?></h2>
      <p>
        <?php the_content(); ?>
      </p>
     
      <?php
        endwhile;
      ?>
    </section><!-- / end bottom - hero -->
  </section><!-- end hero container -->

  <section class="bottom-callouts outer-wrapper">    
  	<section class="inner-wrapper callouts-container row">
  		<span class="right-stroke"></span><!-- / end right stroke -->

      <?php
        $callOutArgs = array( 'post_type' => 'homeCallOuts', 'posts_per_page' => 3 );
        $callOutLoop = new WP_Query( $callOutArgs );
        while ( $callOutLoop->have_posts() ) : $callOutLoop->the_post();
      ?>

        <div class="callout span_4">
          <h1 class="title">
            <?php the_title(); ?>
          </h1>
          <?php the_content(); ?>
        </div><!-- / end callout -->

      <?php
        endwhile;
      ?>

  	</section><!-- / end inner wrapper -->
  </section><!-- / end bottom callouts -->-	

  <section class="slider-outer outer-wrapper">
  	<section class="title-container">
  		<h2 class="title">Clients</h2>
  	</section><!-- / end title container -->
  	<section class="slider-inner inner-wrapper">

  		<a href="#" class="control prev" title="Previous"><span class="icon-chevron-left"></span></a><!-- / end prev button -->
  		<a href="#" class="control next" title="Next"><span class="icon-chevron-right"></span></a><!-- / end next button -->
  		
  		<ul class="slider">
        <?php
          $clientSliderArgs = array( 'post_type' => 'homePageClientSlider');
          $clientSliderLoop = new WP_Query( $clientSliderArgs );
          while ( $clientSliderLoop->have_posts() ) : $clientSliderLoop->the_post();
        ?>

        <li class="item">
          <?php the_content(); ?>
        </li><!-- / end slide -->

        <?php
          endwhile;
        ?>        
  		</ul><!-- / end slider -->

  	</section><!-- / end slider inner container -->
  </section><!-- / end slider section -->

  <section class="slider-outer testimonial outer-wrapper">
   	<section class="title-container">
  		<h2 class="title">Testimonials</h2>
  	</section><!-- / end title container --> 	
  	<section class="slider-inner testimonial inner-wrapper">
  		<a href="#" class="control prev testimonial" title="Previous"><span class="icon-chevron-left"></span></a><!-- / end prev button -->
  		<a href="#" class="control next testimonial" title="Next"><span class="icon-chevron-right"></span></a><!-- / end next button -->
  		
  		<ul class="slider testimonial">
          <?php
            $testimonialArgs = array( 'post_type' => 'testimonials');
            $testimonialLoop = new WP_Query( $testimonialArgs );
            while ( $testimonialLoop->have_posts() ) : $testimonialLoop->the_post();
          ?>

          <li class="item">
            <?php the_content(); ?>
          </li><!-- / end callout -->

          <?php
            endwhile;
          ?>          			
  		</ul><!-- / end slider -->
  	</section><!-- / end testimonial inner -->
  </section><!-- / end testimonial outer wrapper -->
		
<?php }else{

	include(get_template_directory().'/loops/loop.php');

}

 ?>

	<?php get_footer(); 

?>