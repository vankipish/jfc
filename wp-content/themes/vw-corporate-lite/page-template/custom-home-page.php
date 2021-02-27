<?php
/**
 * Template Name: Custom Home
 */
get_header(); ?>

<main id="maincontent" role="main">
	<?php do_action( 'vw_corporate_lite_above_slider' ); ?>

	<?php if( get_theme_mod('vw_corporate_lite_slider_hide_show') != ''){ ?>
	  	<section class="slider">
		    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod( 'vw_corporate_lite_slider_speed',3000)) ?>"> 
		      <?php $vw_corporate_lite_slider_pages = array();
		        for ( $count = 1; $count <= 4; $count++ ) {
		          $mod = intval( get_theme_mod( 'vw_corporate_lite_slider_page' . $count ));
		          if ( 'page-none-selected' != $mod ) {
		            $vw_corporate_lite_slider_pages[] = $mod;
		          }
		        }
		        if( !empty($vw_corporate_lite_slider_pages) ) :
		          $args = array(
		            'post_type' => 'page',
		            'post__in' => $vw_corporate_lite_slider_pages,
		            'orderby' => 'post__in'
		          );
		          $query = new WP_Query( $args );
		          if ( $query->have_posts() ) :
		            $i = 1;
		      ?>     
		      <div class="carousel-inner" role="listbox">
		        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		            <?php the_post_thumbnail(); ?>
		            <div class="carousel-caption">
		              <div class="inner_carousel">
		                <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		                <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_corporate_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_corporate_lite_slider_excerpt_number','30')))); ?></p>
		                <?php if( get_theme_mod('vw_corporate_lite_slider_button_text','READ MORE') != ''){ ?>
			                <div class="more-btn">              
			                  <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_corporate_lite_slider_button_text',__('READ MORE','vw-corporate-lite')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_corporate_lite_slider_button_text',__('READ MORE','vw-corporate-lite')));?></span></a>
			                </div>
			            <?php } ?>
		              </div>
		            </div>
		          </div>
		        <?php $i++; endwhile; 
		        wp_reset_postdata();?>
		      </div>
		      <?php else : ?>
		          <div class="no-postfound"></div>
		        <?php endif;
		      endif;?>
		      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
		        <span class="screen-reader-text"><?php esc_html_e( 'Previous','vw-corporate-lite' );?></span>
		      </a>
		      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
		        <span class="screen-reader-text"><?php esc_html_e( 'Next','vw-corporate-lite' );?></span>
		      </a>
		    </div>
	    	<div class="clearfix"></div>
	  	</section> 
	<?php }?>

	<?php do_action( 'vw_corporate_lite_below_slider' ); ?>

	<?php /*--OUR SERVICES--*/?>

	<?php if( get_theme_mod( 'vw_corporate_lite_sec1_title') != '' || get_theme_mod( 'vw_corporate_lite_sec1_subtitle' )!= ''){ ?>
		<section id="our-services">
		    <div class="container">    	
			    <div class="innerlightbox">
			        <?php if( get_theme_mod('vw_corporate_lite_sec1_title') != ''){ ?>     
			            <h2><?php echo esc_html(get_theme_mod('vw_corporate_lite_sec1_title','')); ?></h2>
			        <?php }?>
			        <?php if( get_theme_mod('vw_corporate_lite_sec1_subtitle') != ''){ ?>
			        <div class="subtitle"><?php echo esc_html(get_theme_mod('vw_corporate_lite_sec1_subtitle','')); ?>
			        </div>
			        <?php }?>
			    </div>
			    <div class="row">
					<?php $vw_corporate_lite_service_page = array();
						for ( $count = 0; $count <= 2; $count++ ) {
							$mod = intval( get_theme_mod( 'vw_corporate_lite_servicesettings' . $count ));
							if ( 'page-none-selected' != $mod ) {
							  $vw_corporate_lite_service_page[] = $mod;
							}
						}
						if( !empty($vw_corporate_lite_service_page) ) :
						  $args = array(
						    'post_type' => 'page',
						    'post__in' => $vw_corporate_lite_service_page,
						    'orderby' => 'post__in'
						  );
						  $query = new WP_Query( $args );
						  if ( $query->have_posts() ) :
						    $count = 0;
								while ( $query->have_posts() ) : $query->the_post(); ?>
									<div class="col-lg-4 col-md-6 services-box">
										<div class="row">
											<div class="col-lg-6 col-md-6 textimage">
											    <div class="box-content text-center">
											    	<h3><?php the_title(); ?></h3>
											    	<p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_corporate_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_corporate_lite_services_excerpt_number','30')))); ?></p>
											        <div class="clearfix"></div>
											        <?php if( get_theme_mod('vw_corporate_lite_services_button_text','Read More') != ''){ ?>
											        	<a class="r_button hvr-sweep-to-right"  href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_corporate_lite_services_button_text',__('Read More','vw-corporate-lite')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_corporate_lite_services_button_text',__('Read More','vw-corporate-lite')));?></span></a>
											        <?php } ?>
											    </div>
											</div>
											<div class="col-md-6 col-sm-6">
											    <div class="box-image">
											        <?php the_post_thumbnail(); ?>
											    </div>
										    </div>	
									    </div>
									</div>
								<?php $count++; endwhile; ?>
						  <?php else : ?>
						      <div class="no-postfound"></div>
						  <?php endif;
						endif;?>
					    <div class="clearfix"></div>
					</div>
				</div>
			</div> 
		</section>
	<?php }?>

	<?php do_action( 'vw_corporate_lite_above_content' ); ?>

	<div class="container">
	  <?php while ( have_posts() ) : the_post(); ?>
	        <?php the_content(); ?>
	    <?php endwhile; // end of the loop. ?>
	</div>	
</main>

<?php get_footer(); ?>