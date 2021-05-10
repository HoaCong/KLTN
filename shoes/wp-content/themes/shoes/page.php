<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress1
 * @subpackage shop1
 * @since shop1 v1.0
 */

get_header();
?>

<style>
	.col-1, .col-2{
		max-width: unset;
	}
	.woocommerce-privacy-policy-text{
		display: none;
	}
</style>
	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

                the_content();
				// get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

			<?php if(is_page('contact')){ ?>
				<style>
					.container-contact{
						padding: 70px 0;
					}
					.contact .col-sm-6{
					display: flex;
					justify-content: center;
					align-items: center;
					}

					.contact .col-sm-6{
					display: flex;
					justify-content: center;
					align-items: center;
					}

					.contact-form div label{
					font-size: 17px;
					color: #000;
					}
					.contact-form div input, .contact-form div textarea{
					width: 100%;
					border-radius: 20px;
					border: 1px solid #ededed;
					outline: none;
					padding: 5px 20px;
					}
					.contact-form div textarea{
					height: 100px;
					}
					.contact-form p input{
					padding: 10px 20px;
					outline: none;
					border-radius: 20px;
					background-color: #57b846;
					border: none;
					color: #fff;
					}
				</style>

			<div class="container container-contact">
				<div class="row contact">
					<div class="col-sm-6">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/img-01.png" alt="">
					</div>
					<div class="col-sm-6">
						<?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>

			<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->





<?php
get_footer();
