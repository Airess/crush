<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */
?>


		</div><!-- #main -->
	</div><!-- #page -->

	<?php wp_footer(); ?>


<footer class="entry-footer">
<div class="entry-meta">
	<span class="entry-terms comments author">
		<span class="entry-terms comments author">
			Written by <?php the_author(); ?>
		Posted in <?php the_category(', ') ?>
		/
		<?php echo get_comments_number() ?> comments
	</span>
</div>
</footer>
