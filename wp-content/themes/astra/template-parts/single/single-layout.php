<?php
/**
 * Template for Single post
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       Astra 1.0.0
 */

?>

<div <?php astra_blog_layout_class( 'single-layout-1' ); ?>>

	<?php astra_single_header_before(); ?>

	<?php if ( apply_filters( 'astra_single_layout_one_banner_visibility', true ) ) { ?>

		<header class="entry-header <?php astra_entry_header_class(); ?>">

			<?php astra_single_header_top(); ?>

			<?php astra_banner_elements_order(); ?>

			<?php astra_single_header_bottom(); ?>

		</header><!-- .entry-header -->

	<?php } ?>

	<?php astra_single_header_after(); ?>

	<div class="entry-content clear"
	<?php
				echo astra_attr(
					'article-entry-content-single-layout',
					array(
						'class' => '',
					)
				);
				?>
	>

		<?php astra_entry_content_before(); ?>

		<?php the_content(); ?>
        <div id="apply_section" class="wp-block-column is-layout-constrained wp-block-column-is-layout-constrained" style="padding: -20px; border: 1px solid #000; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                <h2 class="wp-block-heading has-text-align-center" style="padding-bottom: 10px; padding-top: 20px; font-size: 24px; color: #000; text-decoration: underline;">Apply Now</h2>
                <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-1 wp-block-buttons-is-layout-flex" style="padding-bottom: -20px;">
                    <div class="wp-block-button has-custom-width wp-block-button__width-35"><a class="wp-block-button__link wp-element-button" href="tel:+977 9704542150 " style="padding: 10px 20px; font-size: 16px; background-color: #33A2FF; color: white; border: 1px solid #33A2FF;">Call +977 9704542150 </a></div>
                    <div class="wp-block-button has-custom-width wp-block-button__width-35"><a class="wp-block-button__link wp-element-button" href="tel:+9779704542160" style="padding: 10px 20px; font-size: 16px; background-color: #33A2FF; color: white; border: 1px solid #33A2FF;">Call +977 9704542160</a></div>
                </div>
                <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-2 wp-block-buttons-is-layout-flex" style="padding-bottom: 20px;">
                    <div class="wp-block-button has-custom-width wp-block-button__width-75"><a class="wp-block-button__link wp-element-button" style="padding: 10px 20px; font-size: 16px; background-color: #33A2FF; color: white; border: 1px solid #33A2FF;">From 10 am To 5 pm</a></div>
                    <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="https://jobsineurope.fungiwonders.com/contact-us/" style="padding: 10px 20px; font-size: 16px; background-color: #33A2FF; color: white; border: 1px solid #33A2FF;">Contact Form</a></div>
                </div>
        </div>
		<?php
			astra_edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'astra' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>

		<?php astra_entry_content_after(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),
					'after'       => '</div>',
					'link_before' => '<span class="page-link">',
					'link_after'  => '</span>',
				)
			);
			?>
	</div><!-- .entry-content .clear -->
</div>
