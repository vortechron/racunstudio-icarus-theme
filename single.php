<?php get_header();

the_post();
?>
<div class="blog-post mt-32 container">
	<h2 class="blog-post-title"><?= the_title() ?></h2>
	<p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

	<div>
		<?= the_content(); ?>
	</div>
</div>

<?php get_footer(); ?>