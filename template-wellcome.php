<?php
/*
Template Name: Homepage Template

*/
$enable_homepage_promo = cs_get_option('enable_homepage_promo');
$enable_promo_content = cs_get_option('enable_promo_content');
$promo_content_title = cs_get_option('promo_content_title');
$promo_text = cs_get_option('promo_text');
$promo_text_img = cs_get_option('promo_text_img');
$promo_text_img_array = wp_get_attachment_image_src(cs_get_option('promo_text_img'), 'large');

if(!empty($promo_text_img)){
$promo_text_img = $promo_text_img_array[0];
}else{
	$promo_text_img = ''.get_template_directory_uri().'/assets/img/homepageblock.jpg';

}

 get_header();?>	
		
		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">
		
			<!-- slide item one -->
			<?php
				global $posts;
				$args = array('posts_per_page'=> 4, 'post_type'=>'slide', 'order_by'=>'menu_order', 'order'=>'ASC');
				$myposts = get_posts( $args );
			foreach ($myposts as $post) : setup_postdata ($post);?>
			<?php 
			$btn_text = get_post_meta($post-> ID, 'btn_text', true);
			$btn_link = get_post_meta($post->Id, 'btn_link ', true);
 
			?>
				<div style="background-image:url(<?php the_post_thumbnail_url('large');?>);" class="homepage-slider">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<h1><?php the_title(); ?></h1>
										<?php the_content(); ?>
										<a href="<?php echo $btn_link; ?>"> <?php echo $btn_text; ?> <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php endforeach; wp_reset_query(); ?>
			<!-- slide item three -->
			
			
		</section><!-- slider area end -->
	
	
	
	<?php if($enable_homepage_promo == true){get_template_part('content/promo'); } ?> 
	<?php if($enable_promo_content == true) : ?>
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo $promo_content_title; ?></h2>
							<?php echo wpautop($promo_text); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo $promo_text_img; ?>" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	<?php endif; ?>
	
		<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<div class="template-title text-center">
							<h2>We Provide Huge Range of Services</h2>
							<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<?php
					global $posts;
					$args = array('posts_per_page'=> 6, 'post_type'=>'service', 'order_by'=>'menu_order', 'order'=>'ASC');
					$myposts = get_posts( $args );
					foreach ($myposts as $post) : setup_postdata ($post);?>
					<!-- single service -->
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							
							<?php the_post_thumbnail('thumbnail', array('class' =>'hvr-buzz-out'));?>
							<h3><a href="<?php echo get_post_meta($post->ID, 'link', true);?>"><?php the_title(); ?></a></h3>
							<?php the_content(); ?>
						</div>
					</div>
					<!-- single service -->
					<?php endforeach; wp_reset_query(); ?>
				</div>
			</div>
		</section><!-- end services section -->
	

		
	
		<?php get_footer();?>