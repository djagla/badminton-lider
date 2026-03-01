<!DOCTYPE html>
<html class="!scroll-smooth">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
		<?php wp_head(); ?>
	</head>

	<body>
		<header id="navbar" class="!flex justify-center fixed top-0 left-0 w-full z-50 transition-colors duration-300">
			<nav class="main-nav">
				<a id="navbar-logo" class="bl-logo" href="<?php echo get_home_url(); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="66" height="80" viewBox="0 0 66 80" fill="none">
						<path d="M12.3324 35.222C-7.35431 5.14544 17.7858 -12.3264 23.0169 34.4863C17.4102 11.737 4.47387 6.32927 12.3324 35.222Z" fill="#FFBA00"/>
						<path d="M56.961 5.45022C51.8249 5.33785 43.2858 14.7822 39.6542 34.8766C48.948 17.7754 56.0582 10.9412 55.8468 20.0188C57.683 18.4266 59.3528 16.8894 60.7981 15.3602C61.8282 8.89429 59.9843 5.51636 56.961 5.45022ZM58.8212 22.6445C57.745 23.339 56.5807 24.0164 55.3343 24.6624C54.8605 27.4339 54.0527 30.8999 52.8628 35.1173C55.5634 30.4199 57.5047 26.2572 58.8212 22.6445Z" fill="#FF2C00"/>
						<path d="M36.9564 35.0454C44.4583 -14.7873 21.2419 -8.3311 25.9182 34.6014C28.6283 10.6823 34.7815 6.68978 36.9564 35.0454Z" fill="#00BEFF"/>
						<path class="bl-logo-letter" d="M4.68313 37.5609C5.53664 37.5609 6.14313 37.7467 6.5025 38.1183C6.77202 38.4007 6.90665 38.7574 6.90665 39.1884C6.90665 39.3371 6.89185 39.4932 6.86189 39.6567L6.76052 40.1918C6.67817 40.6154 6.51739 40.9461 6.27782 41.1839C6.04571 41.4218 5.83964 41.5407 5.65995 41.5407L5.64898 41.6299C5.85862 41.6299 6.0721 41.745 6.28923 41.9754C6.50633 42.2058 6.61484 42.4771 6.61484 42.7892C6.61484 42.9155 6.59959 43.0493 6.56964 43.1905L6.5025 43.536C6.3827 44.1752 6.09427 44.6769 5.63757 45.041C5.18837 45.4052 4.55964 45.5873 3.75107 45.5873H0L1.42618 37.5609H4.68313ZM3.67252 42.3098H2.6053L2.33586 43.8483H3.40264C3.41762 43.8483 3.43286 43.8483 3.44784 43.8483C3.79223 43.8483 4.06541 43.7702 4.26756 43.6141C4.46972 43.4506 4.57079 43.2537 4.57079 43.0233C4.57079 42.5477 4.27145 42.3098 3.67252 42.3098ZM3.97575 39.3H3.1332L2.84139 40.961H3.67252C4.39125 40.961 4.75071 40.6488 4.75071 40.0246C4.75071 39.809 4.68319 39.6344 4.54841 39.5007C4.42115 39.3669 4.23032 39.3 3.97575 39.3Z" fill="white"/>
						<path class="bl-logo-letter" d="M11.2977 45.5873L11.3653 43.837H9.48976L8.93947 45.5873H6.7945L9.68064 37.5609H13.387L13.4317 45.5873H11.2977ZM10.8374 39.5118L9.95008 42.3433H11.4215L11.5448 39.5118H10.8374Z" fill="white"/>
						<path class="bl-logo-letter" d="M19.0691 37.5609C20.0499 37.5609 20.7497 37.8062 21.1689 38.2967C21.4759 38.6683 21.6297 39.1328 21.6297 39.6902C21.6297 39.8908 21.6109 40.1026 21.5735 40.3256L21.1356 42.8115C20.9858 43.6513 20.6189 44.3238 20.035 44.8292C19.451 45.3346 18.6946 45.5873 17.7663 45.5873H14.4983L15.9245 37.5609H19.0691ZM18.3617 39.3H17.6315L16.8342 43.8483H17.901C18.2529 43.8483 18.5265 43.7554 18.7211 43.5696C18.9233 43.3764 19.0614 43.0642 19.1363 42.6332L19.4623 40.805C19.4923 40.6415 19.5071 40.4928 19.5071 40.359C19.5071 39.653 19.1254 39.3 18.3617 39.3Z" fill="white"/>
						<path class="bl-logo-letter" d="M25.5491 37.5609L26.7511 41.4069L29.334 37.5609H31.4561L30.03 45.5873H27.9973L28.8061 41.0613L27.0767 43.7591H25.6053L24.8417 41.0613L24.033 45.5873H22.0118L23.4379 37.5609H25.5491Z" fill="white"/>
						<path class="bl-logo-letter" class="bl-logo-letter" d="M35.0722 37.5609L33.657 45.5873H31.6244L33.0506 37.5609H35.0722Z" fill="white"/>
						<path class="bl-logo-letter" d="M42.8996 37.5609L41.4849 45.5873H39.4522L38.037 41.195L37.2735 45.5873H35.2408L36.667 37.5609H38.7558L40.1482 41.6633L40.8784 37.5609H42.8996Z" fill="white"/>
						<path class="bl-logo-letter" d="M51.0754 39.3H48.313L47.2011 45.5873H45.1684L46.28 39.3H43.5062L43.8208 37.5609H51.3901L51.0754 39.3Z" fill="white"/>
						<path class="bl-logo-letter" d="M55.2531 37.4828C57.0575 37.4828 57.9598 38.2148 57.9598 39.6789C57.9598 39.9241 57.9337 40.1881 57.8812 40.4705L57.4881 42.7C57.3084 43.733 56.9189 44.4985 56.3199 44.9964C55.721 45.4943 54.8787 45.7433 53.7932 45.7433C52.7075 45.7433 51.9516 45.4943 51.5249 44.9964C51.2329 44.6545 51.0869 44.1826 51.0869 43.5806C51.0869 43.3131 51.1166 43.0195 51.1764 42.7L51.5696 40.4705C51.9215 38.4787 53.1493 37.4828 55.2531 37.4828ZM54.0964 44.0154C54.4707 44.0154 54.7705 43.9188 54.9951 43.7256C55.2197 43.5323 55.3765 43.1756 55.4664 42.6554L55.8486 40.515C55.8711 40.3664 55.882 40.2326 55.882 40.1137C55.882 39.5117 55.5752 39.2107 54.9613 39.2107C54.1902 39.2256 53.7296 39.6604 53.5799 40.515L53.1981 42.6554C53.1681 42.8412 53.1533 43.0344 53.1533 43.2351C53.1533 43.7553 53.4675 44.0154 54.0964 44.0154Z" fill="white"/>
						<path class="bl-logo-letter" d="M66 37.5609L64.5852 45.5873H62.5526L61.1374 41.195L60.3738 45.5873H58.3412L59.7674 37.5609H61.8562L63.2486 41.6633L63.9788 37.5609H66Z" fill="white"/>
						<path class="bl-logo-letter" d="M20.0514 59.1435H13.6573L15.438 49.1221H17.9621L16.5737 56.9721H20.4437L20.0514 59.1435Z" fill="white"/>
						<path class="bl-logo-letter" d="M25.4774 49.1221L23.7107 59.1435H21.173L22.9538 49.1221H25.4774Z" fill="white"/>
						<path class="bl-logo-letter" d="M31.3946 49.1221C32.6192 49.1221 33.4931 49.4283 34.0166 50.0408C34.3998 50.5047 34.5919 51.0846 34.5919 51.7806C34.5919 52.0311 34.5684 52.2955 34.5217 52.5739L33.9749 55.6777C33.7879 56.7263 33.3296 57.566 32.6005 58.197C31.8714 58.828 30.9274 59.1435 29.7683 59.1435H25.6881L27.4689 49.1221H31.3946ZM30.5112 51.2933H29.5998L28.6046 56.9721H29.9364C30.3757 56.9721 30.7171 56.8562 30.9602 56.6242C31.2126 56.3829 31.3854 55.9932 31.4789 55.455L31.8856 53.1724C31.9231 52.9683 31.9418 52.7826 31.9418 52.6156C31.9418 51.7341 31.4647 51.2933 30.5112 51.2933Z" fill="white"/>
						<path class="bl-logo-letter" d="M42.1073 59.1435H35.0685L36.8493 49.1221H43.888L43.4957 51.2933H38.9806L38.6581 53.1724H42.3877L41.9954 55.3437H38.2654L37.985 56.9721H42.5L42.1073 59.1435Z" fill="white"/>
						<path class="bl-logo-letter" d="M49.5667 49.1221C50.6323 49.1221 51.3893 49.354 51.838 49.818C52.1745 50.1706 52.3431 50.616 52.3431 51.1542C52.3431 51.3398 52.3243 51.5347 52.287 51.7388L52.0908 52.8245C51.9786 53.4276 51.7823 53.9147 51.5019 54.2859C51.2308 54.657 50.927 54.9215 50.5905 55.0792L51.8661 59.1435H49.034L47.8561 55.3994H46.9868L46.412 59.1435H43.7198L45.5005 49.1221H49.5667ZM48.6833 51.2933H47.6319L47.2672 53.7153H48.2485C48.7439 53.7153 49.0994 53.5992 49.3144 53.3672C49.5294 53.126 49.6369 52.8105 49.6369 52.4208C49.6369 51.6691 49.319 51.2933 48.6833 51.2933Z" fill="white"/>
						<path d="M41.8432 63.5042C41.9283 62.573 33.0362 63.2191 26.0008 63.0083C24.7834 63.0595 23.6295 63.2085 23.8804 65.5283C23.3244 85.3882 41.6666 83.7565 42.1539 67.0372C34.9626 85.1839 27.7222 73.6842 28.6495 66.659C32.7874 66.3273 38.3154 65.6664 41.8432 63.5042Z" fill="#00A85C"/>
					</svg>
				</a>
				
				<div id="____navbar-inner" class="main-nav-wrapper">
					<?php
						wp_nav_menu( array(
							'menu' => 'main_navigation',
							'theme_location' => 'primary',
							'menu_class'     => 'nav-menu',
						) );
					?>

					<a class="button-link wc-link" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="26" height="32" viewBox="0 0 26 32" fill="none">
							<path d="M17.3822 22.1362L13.1723 20.6411L9.08641 22.1177L9.73642 26.8639L13.1728 29.7234L16.7386 26.8063L17.3822 22.1362ZM15.5164 22.5042L13.2309 23.1821L10.8686 22.4154L13.115 21.5256L15.5164 22.5042ZM16.2015 23.1614L15.828 26.2362L13.2817 28.001L13.2704 28.0934L13.2597 28.0161L10.4352 26.1146L9.94692 23.0518L12.7498 24.3559L13.2597 28.0161L13.2817 28.001L13.7191 24.3829L16.2015 23.1614Z" fill="white"/>
							<path d="M8.5975 6.0285L4.37031 2.58778L2.12285 6.18604L9.0796 19.7748L10.2575 20.1422L11.0997 19.4177C10.571 15.1904 9.45119 10.3865 8.5975 6.0285ZM7.50693 7.25398L10.6953 18.8277L10.2018 19.3167L5.5298 6.07034L7.50693 7.25398ZM4.85551 6.98634L10.0019 19.3458L9.18908 19.1019L4.36269 7.74026L4.85551 6.98634Z" fill="white"/>
							<path d="M21.6153 2.38342L17.1772 5.44429L15.2013 19.2654L16.2908 20.2542L17.3597 19.6925L24.0381 5.86804L21.6153 2.38342ZM21.4346 5.84903L22.0873 6.81801L17.239 18.9142L16.5647 19.5094L21.4346 5.84903ZM20.3567 5.79019L16.3782 19.4577L15.6651 18.576L18.3178 6.64866L20.3567 5.79019Z" fill="white"/>
							<path d="M12.9766 0L9.74222 4.48111L11.9814 18.7108L13.1995 19.1024L14.3063 18.5872L16.2167 4.32373L12.9766 0ZM13.4316 4.45578L14.6421 5.63574L13.9345 17.8892L13.2889 18.3015L13.4316 4.45578ZM12.4959 4.48046L13.0531 18.3081L12.2885 17.9665L11.1961 5.67981L12.4959 4.48046Z" fill="white"/>
							<path d="M18.3174 19.2791C23.1754 17.1498 26.8968 9.54118 22.3693 11.6322C29.0414 5.50699 25.8286 17.1119 18.3174 19.2791Z" fill="white"/>
							<path d="M7.68261 19.2791C2.82464 17.1498 -0.896784 9.54118 3.63068 11.6322C-3.04135 5.50699 0.171371 17.1119 7.68261 19.2791Z" fill="white"/>
							<path d="M8.0043 30.5352C12.8686 32.6504 21.0461 30.2366 16.4335 28.3372C25.4976 29.0821 14.6875 34.5649 8.0043 30.5352Z" fill="white"/>
						</svg>

						Wielicki Cup
					</a>
				</div>

				<div id="navbar-essential-info" class="essential-info">
					<div id="navbar-cta" class="essential-info-container">
						<div id="essential-info-contact" class="essential-info-contact">
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.svg" alt="" />+48 600 470 053</span>
							<span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.svg" alt="" />biuro@badmintonlider.pl</span>
						</div>

						<div class="essential-info-socials">
							<a class="icon-button-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="" /></a>
							<a class="icon-button-link" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.svg" alt="" /></a>
						</div>
					</div>

					<a class="button-link white" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M6 11C6 10.7348 6.10536 10.4804 6.29289 10.2929C6.48043 10.1054 6.73478 10 7 10C7.26522 10 7.51957 10.1054 7.70711 10.2929C7.89464 10.4804 8 10.7348 8 11C8 11.2652 7.89464 11.5196 7.70711 11.7071C7.51957 11.8946 7.26522 12 7 12C6.73478 12 6.48043 11.8946 6.29289 11.7071C6.10536 11.5196 6 11.2652 6 11ZM7 14C6.73478 14 6.48043 14.1054 6.29289 14.2929C6.10536 14.4804 6 14.7348 6 15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15C8 14.7348 7.89464 14.4804 7.70711 14.2929C7.51957 14.1054 7.26522 14 7 14ZM10 11C10 10.7348 10.1054 10.4804 10.2929 10.2929C10.4804 10.1054 10.7348 10 11 10C11.2652 10 11.5196 10.1054 11.7071 10.2929C11.8946 10.4804 12 10.7348 12 11C12 11.2652 11.8946 11.5196 11.7071 11.7071C11.5196 11.8946 11.2652 12 11 12C10.7348 12 10.4804 11.8946 10.2929 11.7071C10.1054 11.5196 10 11.2652 10 11ZM11 14C10.7348 14 10.4804 14.1054 10.2929 14.2929C10.1054 14.4804 10 14.7348 10 15C10 15.2652 10.1054 15.5196 10.2929 15.7071C10.4804 15.8946 10.7348 16 11 16C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15C12 14.7348 11.8946 14.4804 11.7071 14.2929C11.5196 14.1054 11.2652 14 11 14ZM14 11C14 10.7348 14.1054 10.4804 14.2929 10.2929C14.4804 10.1054 14.7348 10 15 10C15.2652 10 15.5196 10.1054 15.7071 10.2929C15.8946 10.4804 16 10.7348 16 11C16 11.2652 15.8946 11.5196 15.7071 11.7071C15.5196 11.8946 15.2652 12 15 12C14.7348 12 14.4804 11.8946 14.2929 11.7071C14.1054 11.5196 14 11.2652 14 11ZM2 7C2 5.67392 2.52678 4.40215 3.46447 3.46447C4.40215 2.52678 5.67392 2 7 2H17C18.3261 2 19.5979 2.52678 20.5355 3.46447C21.4732 4.40215 22 5.67392 22 7V17C22 18.3261 21.4732 19.5979 20.5355 20.5355C19.5979 21.4732 18.3261 22 17 22H7C5.67392 22 4.40215 21.4732 3.46447 20.5355C2.52678 19.5979 2 18.3261 2 17V7ZM7 4C6.37935 3.99967 5.77387 4.19186 5.26702 4.55006C4.76016 4.90826 4.37688 5.41484 4.17 6H19.83C19.6231 5.41484 19.2398 4.90826 18.733 4.55006C18.2261 4.19186 17.6207 3.99967 17 4H7ZM20 8H4V17C4 17.7956 4.31607 18.5587 4.87868 19.1213C5.44129 19.6839 6.20435 20 7 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V8Z" fill="#1C1C1C"/>
						</svg>
						Treningi
					</a>
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
					<?php 
						$args = array(
							'post_type'      => 'post',
							'posts_per_page' => 4, // 👈 number of posts
						);

						$query = new WP_Query($args);

						if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();
					?>
						<div class="news-item">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="news-item-thumbnail">
									<?php the_post_thumbnail( 'medium' ); ?>
								</div>
							<?php endif; ?>

							<?php if ( has_category() ) : ?>
								<div class="category-label <?php echo preg_replace('/\s+/', '', get_cat_name( get_the_category()[0]->term_id )); ?>">
									<?php the_category(null, 'single', null) ?>
								</div>
							<?php endif; ?>

							<div class="news-item-content">
								<p class="news-date"><?php the_date(); ?></p>

								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
								<a class="read-more" href="<?php the_permalink(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/right_arrow.svg" alt="Czytaj więcej" />
								</a>
							</div>
						</div>
					<?php 
						endwhile; 

						wp_reset_postdata();
						
						else: 
					?>
						
						<p>No posts found. :(</p>
					<?php endif; ?>
				</div>
			</section>

			<section class="offer !flex justify-center">
				<div class="container flex flex-row gap-x-8 items-end">
					<div style="flex: 1">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Mati.png" alt="" />
					</div>
					<div class="offer-description" style="flex: 1">
						<h2>Odkryj sport, który wciąga!</h2>
						<p>Szukasz aktywności, która poprawi Twoją kondycję, da mnóstwo frajdy i pozwoli poznać świetnych ludzi? Badminton to dynamiczna gra, która rozwija refleks, koordynację i wytrzymałość – niezależnie od wieku i poziomu zaawansowania.</p>
						<p>Zajęcia prowadzą doświadczeni trenerzy w przyjaznej atmosferze. Pierwszy trening próbny gratis!</p>
						<a class="button-link dark" href="">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M6 11C6 10.7348 6.10536 10.4804 6.29289 10.2929C6.48043 10.1054 6.73478 10 7 10C7.26522 10 7.51957 10.1054 7.70711 10.2929C7.89464 10.4804 8 10.7348 8 11C8 11.2652 7.89464 11.5196 7.70711 11.7071C7.51957 11.8946 7.26522 12 7 12C6.73478 12 6.48043 11.8946 6.29289 11.7071C6.10536 11.5196 6 11.2652 6 11ZM7 14C6.73478 14 6.48043 14.1054 6.29289 14.2929C6.10536 14.4804 6 14.7348 6 15C6 15.2652 6.10536 15.5196 6.29289 15.7071C6.48043 15.8946 6.73478 16 7 16C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15C8 14.7348 7.89464 14.4804 7.70711 14.2929C7.51957 14.1054 7.26522 14 7 14ZM10 11C10 10.7348 10.1054 10.4804 10.2929 10.2929C10.4804 10.1054 10.7348 10 11 10C11.2652 10 11.5196 10.1054 11.7071 10.2929C11.8946 10.4804 12 10.7348 12 11C12 11.2652 11.8946 11.5196 11.7071 11.7071C11.5196 11.8946 11.2652 12 11 12C10.7348 12 10.4804 11.8946 10.2929 11.7071C10.1054 11.5196 10 11.2652 10 11ZM11 14C10.7348 14 10.4804 14.1054 10.2929 14.2929C10.1054 14.4804 10 14.7348 10 15C10 15.2652 10.1054 15.5196 10.2929 15.7071C10.4804 15.8946 10.7348 16 11 16C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15C12 14.7348 11.8946 14.4804 11.7071 14.2929C11.5196 14.1054 11.2652 14 11 14ZM14 11C14 10.7348 14.1054 10.4804 14.2929 10.2929C14.4804 10.1054 14.7348 10 15 10C15.2652 10 15.5196 10.1054 15.7071 10.2929C15.8946 10.4804 16 10.7348 16 11C16 11.2652 15.8946 11.5196 15.7071 11.7071C15.5196 11.8946 15.2652 12 15 12C14.7348 12 14.4804 11.8946 14.2929 11.7071C14.1054 11.5196 14 11.2652 14 11ZM2 7C2 5.67392 2.52678 4.40215 3.46447 3.46447C4.40215 2.52678 5.67392 2 7 2H17C18.3261 2 19.5979 2.52678 20.5355 3.46447C21.4732 4.40215 22 5.67392 22 7V17C22 18.3261 21.4732 19.5979 20.5355 20.5355C19.5979 21.4732 18.3261 22 17 22H7C5.67392 22 4.40215 21.4732 3.46447 20.5355C2.52678 19.5979 2 18.3261 2 17V7ZM7 4C6.37935 3.99967 5.77387 4.19186 5.26702 4.55006C4.76016 4.90826 4.37688 5.41484 4.17 6H19.83C19.6231 5.41484 19.2398 4.90826 18.733 4.55006C18.2261 4.19186 17.6207 3.99967 17 4H7ZM20 8H4V17C4 17.7956 4.31607 18.5587 4.87868 19.1213C5.44129 19.6839 6.20435 20 7 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V8Z" fill="#1C1C1C"/>
							</svg>
							Pokaż najbliższe treningi
						</a>
					</div>
				</div>
			</section>

			<section class="partners">
				<div class="container">
					<h2>Nasi partnerzy</h2>

					<div class="partners-logos flex flex-wrap justify-center gap-x-15">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/yonex_gray.svg" alt="Yonex" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pzbad_gray.svg" alt="PZBad" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/powiat_wielicki_gray.svg" alt="Powiat Wielicki" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mbs_gray.svg" alt="Małopolski Bank Spółdzielczy" />
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kampus_wielicki_gray.svg" alt="Kampus Wielicki" />
					</div>
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
