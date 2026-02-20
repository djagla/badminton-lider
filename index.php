<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav class="main-nav">
			<a href="<?php echo get_home_url(); ?>">
				<img class="bl-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/BL_logo.svg" alt="Badminton Lider" />
			</a>
			
			<div class="main-nav-wrapper">
				<?php
					wp_nav_menu( array(
						'menu' => 'main_navigation',
						'theme_location' => 'primary',
						'menu_class'     => 'nav-menu',
					) );
				?>

				<a class="button-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wc_logo.svg" alt="" />Wielicki Cup</a>
			</div>

			<a class="button-link white" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wc_logo.svg" alt="" />Treningi</a>
		</nav>
	</header>
	
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
		
	<section class="news">
		<h2>Aktualności</h2>

		<div class="news-list">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="news-item">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="news-item-thumbnail">
							<?php the_post_thumbnail( 'medium' ); ?>
						</div>
					<?php endif; ?>

					<?php the_category(); ?>

					<div class="news-item-content">
						<p class="news-date"><?php the_date(); ?></p>

						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			
						<a class="read-more" href="<?php the_permalink(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/right_arrow.svg" alt="Czytaj więcej" />
						</a>
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
	
<?php wp_footer(); ?>
</body>
</html>
