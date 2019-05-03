<?php get_header();?>

		<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<?php
			while ( have_posts() ) : the_post(); 
				

				if(get_post_meta(get_the_ID(), 'neuron_work_meta', true)){

					$work_meta = get_post_meta(get_the_ID(), 'neuron_work_meta', true);
				}else{
					$work_meta = array();	

				}

			if(array_key_exists('sub_title', $work_meta)){
					$sub_title = $work_meta['sub_title'];
				}else{
					$sub_title = '';

				}

			if(array_key_exists('big_preview', $work_meta)){
					$big_preview = $work_meta['big_preview'];
				}else{
					$big_preview = '';

				}

            if(array_key_exists('link_text', $work_meta)){
					$link_text = $work_meta['link_text'];
				}else{
					$link_text = 'visit website';

				}

            if(array_key_exists('link_url', $work_meta)){
					$link_url = $work_meta['link_url'];
				}else{
					$link_url = '';

				}
			if(array_key_exists('informations', $work_meta)){
					$informations = $work_meta['informations'];
				}else{
					$informations = '';

				}


				?>
		<section <?php if(has_post_thumbnail()):?>style="background-image:url(<?php the_post_thumbnail_url('large');?>);"<?php endif; ?> class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">
							<h2><?php the_title(); ?></h2>
							<p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?></p>
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>
		</section><!-- end breadcrumb -->
	


		<!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
		<section class="single-portfolio-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">

							<?php
								$big_protfolio_image =  wp_get_attachment_image_src($big_preview, 'large' );
							?>
						<?php if(!empty($big_preview)) :?>		
						<img class="img-responsive" src="<?php echo $big_protfolio_image[0]; ?> " alt="">
						<?php else: ?>
							<?php the_post_thumbnail('large');?>
						<?php endif; ?>		
					</div>
				</div>
				<div class="col-md-4">
					<!-- single portfolio info -->
					<div class="single-portfolio-inner">
						<header class="single-portfolio-title">
							<?php echo $sub_title; ?>
							
						</header>
						<div class="portfolio-details-panel">
								<?php the_content(); ?>
							
							<ul class="portfolio-meta">

                                <?php if(!empty($informations)) : foreach ($informations as $information) : ?>

									<li><span> <?php echo $information['title']; ?> </span> <?php echo $information['value']; ?> </li>


							<?php endforeach ; endif;?>
							</ul>
						</div>
						<?php if(!empty($link_url)) : ?>
						<a class="btn btn-primary" href="<?php echo $link_url; ?>"> <?php echo $link_text; ?> </a>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>











<?php get_footer();?>