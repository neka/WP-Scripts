<?php
// Include WordPress
define('WP_USE_THEMES', false);
require('wp-blog-header.php');
query_posts('showposts=1000');
//Set meta key here
$metakey = "";
?>
<?php while (have_posts()): the_post(); ?>
	<?php $meta = get_post_meta($post->ID, $metakey, true) ?>
	<?php if (empty($meta)) { ?>
	<h2><?php the_title(); ?></h2>
	<?php the_excerpt(); ?>
	<? //echo $embedcode; ?>
	<p><a href="<?php the_permalink(); ?>" class="red">Read more...</a></p>
	<?php } ?>
	<?php unset($meta); ?>
<?php endwhile; ?>