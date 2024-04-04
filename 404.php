<?php 
/**
 * 404 pages (Not Found)
 */
get_header();

$error_img = get_field( "404", 419);
$error_img_size = $error_img['sizes']['large'];
$error_img_alt = $error_img['alt'];
?>

<div id="primary" class="error-area">
		<div id="content" class="site-content" role="main">
				<h1 class="page-title"><?php _e( '404 - Not Found', 'pacesetter' ); ?></h1>

			<div class="page-wrapper">
			<img class="error-img" src="<?php echo $error_img_size ?>" alt="<?php echo $error_img_alt ?>">
				<div class="bg-scrim">
					<div class="page-content">
						<h2><?php _e( 'You wen&#39;t down the wrong slope.' ); ?></h2>
						<p><?php _e( 'Please click our logo to go home.', 'pacesetter' ); ?></p>
					</div><!-- .page-content -->
				</div>
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

    <?php 
        get_footer();
    ?>