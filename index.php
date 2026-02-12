<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>

    <section class="hero">
	<video class="hero-video" autoplay muted loop playsinline>
		<source
			src="<?php echo get_template_directory_uri(); ?>/assets/video/hero.mp4"
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
	<?php echo get_template_directory_uri(); ?>
</section>

<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h3><?php the_title(); ?></h3>

<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php edit_post_link(); ?>

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
<?php wp_footer(); ?>
</body>
</html>