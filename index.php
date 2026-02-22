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

					<a class="button-link wc-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wc_logo.svg" alt="" />Wielicki Cup</a>
				</div>

				<div class="essential-info">
					<div class="essential-info-container">
						<div class="essential-info-contact">
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="" />+48 600 470 053</span>
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.svg" alt="" />biuro@badmintonlider.pl</span>
						</div>

						<div class="essential-info-socials">
							<a class="icon-button-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="" /></a>
							<a class="icon-button-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.svg" alt="" /></a>
						</div>
					</div>

					<a class="button-link white" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/calendar.svg" alt="" />Treningi</a>
				</div>
			</nav>
		</header>
		
		<main>
			<section class="hero">
				<video class="hero-video" autoplay muted loop playsinline>
					<source
						src="<?php echo get_template_directory_uri(); ?>/assets/video/hero_hd.mp4"
						type="video/mp4"
					/>

					Your browser does not support the video tag.
				</video>

				<div class="hero-overlay"></div>

				<div class="hero-content flex flex-col gap-y-16">
					<div class="typewriter">
						<div>
							<h1>BADMINTON<span>BADMINTON</span></h1>
						</div>
					</div>

					<div class="flex flex-col gap-y-16 items-center">
						<p>...sport, który wciąga</p>
						<a class="button-link lets-play" href="">Graj z nami<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shuttlecock.svg" alt="" /></a>
					</div>
				</div>
			</section>
				
			<section class="news">
				<div class="flex justify-between items-start">
					<h2>Aktualności</h2>
					<a class="read-more-link flex gap-x-4 items-center" href="<?php the_permalink(); ?>">
						<span>Więcej aktualności</span>
						<div class="read-more-button">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/right_arrow.svg" alt="Czytaj więcej" />
						</div>
					</a>
				</div>

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
		</main>
		
		<footer>
			<section class="contact-info">
				<h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bl_white_small_logo.svg" alt="" /> Badminton Lider Wieliczka</h3>
				
				<div class="flex gap-x-15">
					<div>
						<p>ul. Tadeusza Kościuszki 36A/2, 32-020 Wieliczka</p>
						<p>Tel: +48 600 470 053</p>
						<p>Email: biuro@badmintonlider.pl</p>
					</div>

					<div>
						<p>IBAN: 42150014587384192385828915</p>
						<p>NIP: 6832112882</p>
						<p class="flex gap-x-4">KRS: 0000270261 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1_5_percent.svg" alt="" /></p>
					</div>

					<div class="flex justify-center grow">
						<a class="button-link" href="">Napisz do nas<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.svg" alt="" /></a>
					</div>

					<div class="socials flex justify-end">
						<a class="icon-button-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="" /></a>
						<a class="icon-button-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.svg" alt="" /></a>
					</div>
				</div>
			</section>

			<section class="copyright">
				&copy; <?php echo date('Y'); ?> Badminton Lider Wieliczka & DJ
			</section>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
