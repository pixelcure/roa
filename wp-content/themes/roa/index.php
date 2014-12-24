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
       
        <section class="equation span_6">       
          <div class="circle left">
            <h1>Quality People</h1>
          </div><!-- / end circle -->
          
          <span class="operator left">x</span><!-- / end X -->
          
          <div class="circle left">
            <h1>Quality Process</h1>
          </div><!-- / end circle -->
        </section><!-- end equation -->

        <section class="the-answer span_6 no-margin-right">        
          <span class="operator left last">=</span><!-- / end = -->
          
          <div class="answer left">        
            <h1>
              Quality Leads
            </h1>
            <a href="#" class="button" data-role="button">Learn More</a>
          </div><!-- / end answer -->
        </section><!-- / end the answer -->
      </div><!-- / end tag line container -->
    </section><!-- / end hero inner row -->
    
    <section class="bottom-hero inner-wrapper row">
      <h2>A B2B Leader Generation Group</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis iusto eligendi 
        blanditiis officiis itaque excepturi dolorem illum quae porro similique possimus veritatis. 
        Iure ea laudantium illo itaque aliquid deleniti officia?
      </p>

    </section><!-- / end bottom - hero -->
  </section><!-- end hero container -->

  <section class="bottom-callouts outer-wrapper">    
  	<section class="inner-wrapper callouts-container row">
  		<span class="right-stroke"></span><!-- / end right stroke -->
	    <div class="callout span_4">
	        <h1 class="title">
	            Featured
	        </h1>
	        <img src="<?php bloginfo(template_directory); ?>/images/callout-1.jpg" alt="Placeholder">
	        <p>
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus delectus perspiciatis dolorum et iste possimus ea voluptas architecto asperiores error sequi mollitia ipsum rerum molestias aut facilis ut excepturi molestiae.
	                Minus iusto eius dolore cupiditate ipsam.
	        </p>
	        <a href="#" data-role="button" title="Learn More">Learn More</a>
	    </div><!-- / end callout -->

	    <div class="callout span_4">
	        <h1 class="title">
	            Featured
	        </h1>
	        <img src="<?php bloginfo(template_directory); ?>/images/callout-2.jpg" alt="Placeholder">
	        <p>
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus delectus perspiciatis dolorum et iste possimus ea voluptas architecto asperiores error sequi mollitia ipsum rerum molestias aut facilis ut excepturi molestiae.
	                Minus iusto eius dolore cupiditate ipsam.
	        </p>
	        <a href="#" data-role="button">Learn More</a>
	    </div><!-- / end callout -->	    

	    <div class="callout span_4">
	        <h1 class="title">
	            Featured
	        </h1>
	        <img src="<?php bloginfo(template_directory); ?>/images/callout-3.jpg" alt="Placeholder">
	        <p>
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus delectus perspiciatis dolorum et iste possimus ea voluptas architecto asperiores error sequi mollitia ipsum rerum molestias aut facilis ut excepturi molestiae.
	                Minus iusto eius dolore cupiditate ipsam.
	        </p>
	        <a href="#" data-role="button">Learn More</a>
	    </div><!-- / end callout -->

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
  			<li><span>Client</span></li>
  			<li><span>Client</span></li>
  			<li><span>Client</span></li>
  			<li><span>Client</span></li>
  			<li><span>Client</span></li>
  			<li><span>Client</span></li>
  			<li><span>Client</span></li>
  			<li><span>Client</span></li>
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
  			<li class="item">
  				<blockquote>
  					“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 1”
  					<strong>
  						&mdash; Paul Smith, Irving Rowing Company
  					</strong>
  				</blockquote>
  			</li>  			
  			<li class="item">
  				<blockquote>
  					“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 2”
  					<strong>
  						&mdash; Paul Smith, Irving Rowing Company
  					</strong>
  				</blockquote>
  			</li>  			
  			<li class="item">
  				<blockquote>
  					“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 3”
  					<strong>
  						&mdash; Paul Smith, Irving Rowing Company
  					</strong>
  				</blockquote>
  			</li>
  		</ul><!-- / end slider -->
  	</section><!-- / end testimonial inner -->
  </section><!-- / end testimonial outer wrapper -->
		
<?php }else{

	include(get_template_directory().'/loops/loop.php');

}

 ?>

	<?php get_footer(); 

?>