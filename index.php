<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body>
	<img class="bl-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/BL_logo.svg" alt="Badminton Lider" />

    <section class="hero">
	<video class="hero-video" autoplay muted loop playsinline>
		<source
			src="<?php echo get_template_directory_uri(); ?>/assets/video/hero_hd.mp4"
			type="video/mp4"
		/>

		Your browser does not support the video tag.
	</video>

	<div class="hero-overlay"></div>

	<div class="hero-content">
		<div class="typewriter">
            <div>
                <h1>BADMINTON<span>BADMINTON</span></h1>
            </div>
        </div>
	</div>
	</section>
		
	<div style="background-color: #fff; overflow: hidden;">
		<!-- <h1 class="bg-red-500"><?php bloginfo( 'name' ); ?></h1>

		<h2><?php bloginfo( 'description' ); ?></h2> -->
		
		<section class="news">
			<h2>Aktualności</h2>

			<div class="news-list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="news-item">
						<div class="news-item-content">
							<?php the_date(); ?>

							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</div>

					<?php endwhile; ?>
						
					<?php
						if ( get_next_posts_link() ) {
						next_posts_link();
						}
					?>
					<?php
						if ( get_previous_posts_link() ) {
						previous_posts_link();
						}
					?>
						
					<?php else: ?>
					
					<p>No posts found. :(</p>
				
				<?php endif; ?>
			</div>
		</section>
	</div>
	
<?php wp_footer(); ?>
</body>
</html>
