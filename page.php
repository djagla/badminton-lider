<?php get_template_part('template-parts/header', null, [
    //'title' => 'page-header',
	'template-header' => 'page-header',
]); ?>

<?php //devstarter_acf_blocks(); ?>

<section>
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		?>
	</div>
</section>
        <script>
			const tl = gsap.timeline({repeat: 0, yoyo: true});

			gsap.to('#navbar', {
				//delay: 1.5,
				duration: 1.5,
				y: 0,
				opacity: 1,
				ease: 'power2.out'
			});
		</script>
<?php get_footer(); ?>
