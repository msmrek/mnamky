<?php

defined( 'ABSPATH' ) || exit;

global $post, $product;

$modal_class = "gallery_image_link";
$zoom_class = "";
$img_class = "";

if( Shopkeeper_Opt::getOption( 'product_gallery_lightbox', true ) ) {
	$modal_class .= " fresco";
	$img_class .= "fresco-img";
}

if( Shopkeeper_Opt::getOption( 'product_gallery_zoom', true ) ) {
	$zoom_class = "easyzoom el_zoom";
	$modal_class .= " zoom";
}

//Featured
$featured_image_title 				= esc_html( get_the_title( get_post_thumbnail_id() ) );
$featured_image_data_src			= wp_get_attachment_image_src( get_post_thumbnail_id(), 'shop_single' );
$featured_image_data_src_original 	= wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
$featured_image_link  				= $product->get_image_id() ? wp_get_attachment_url( get_post_thumbnail_id() ) : wc_placeholder_img_src( 'woocommerce_single' );

$featured_attachment_meta 			= wp_get_attachment(get_post_thumbnail_id());

$post_custom_values 	= get_post_custom( $post->ID );
$page_product_youtube 	= isset($post_custom_values['page_product_youtube']) ? esc_attr( $post_custom_values['page_product_youtube'][0]) : '';

$current_img = 1; // first image active - for controller navigation

?>

<div class="product-images-layout product-images-style-3 woocommerce-product-gallery__wrapper images">

	<div class="product_images">
		<div class="product-image featured woocommerce-product-gallery__image" id="controller-navigation-image-1">
			<div class="<?php echo esc_attr( $zoom_class ); ?>">

				<?php if( Shopkeeper_Opt::getOption( 'product_gallery_lightbox', true ) ) { ?>
					<a
					data-fresco-group="product-gallery"
					data-fresco-options="ui: 'outside', thumbnail: '<?php echo esc_url($featured_image_data_src[0]); ?>'"
					data-fresco-group-options="overflow: true, thumbnails: 'vertical', onClick: 'close'"
					data-fresco-caption="<?php echo esc_html($featured_attachment_meta['caption']); ?>"
					class="<?php echo esc_attr( $modal_class ); ?>"
					href="<?php echo esc_url($featured_image_link); ?>"
					>
				<?php } else if( Shopkeeper_Opt::getOption( 'product_gallery_zoom', true ) ) { ?>
					<a class="<?php echo esc_attr( $modal_class ); ?>" href="<?php echo esc_url($featured_image_link); ?>" >
				<?php } ?>

				<?php if ( $product->get_image_id() ) { ?>
					<img src="<?php echo esc_url($featured_image_data_src[0]); ?>" data-src="<?php echo esc_url($featured_image_data_src[0]); ?>" alt="<?php echo esc_attr( $featured_image_title ); ?>" class="wp-post-image <?php echo esc_attr( $img_class ); ?>">
				<?php } else { ?>
					<img src="<?php echo esc_url(wc_placeholder_img_src( 'woocommerce_single' )); ?>" data-src="<?php echo esc_url(wc_placeholder_img_src( 'woocommerce_single' )); ?>" class="<?php echo esc_attr( $img_class ); ?>">
				<?php } ?>

				<?php if( Shopkeeper_Opt::getOption( 'product_gallery_zoom', true ) || Shopkeeper_Opt::getOption( 'product_gallery_lightbox', true ) ) { ?>
					</a>
				<?php } ?>

			</div>

			<?php if ($featured_attachment_meta['caption'] && $product->get_image_id() ) : ?>

				<p class="caption">
					<?php echo esc_html($featured_attachment_meta['caption']); ?>
				</p>

			<?php endif; ?>

		</div> <!-- / product-image featured -->

		<?php

		$attachment_ids = $product->get_gallery_image_ids();

		if ( $attachment_ids ) :

		foreach ( $attachment_ids as $attachment_id ) {

			$current_img++; // get the current img for controller navigation

			$gallery_image_title       			= esc_attr( get_the_title( $attachment_id ) );
			$gallery_image_data_src    			= wp_get_attachment_image_src( $attachment_id, 'shop_single' );
			$gallery_image_data_src_original 	= wp_get_attachment_image_src( $attachment_id, 'full' );
			$gallery_image_link        			= wp_get_attachment_url( $attachment_id );

			$gallery_attachment_meta			= wp_get_attachment($attachment_id);

			?>
			<div class="product-image" id="controller-navigation-image-<?php echo esc_attr( $current_img ); ?>">
				<div class="<?php echo esc_attr( $zoom_class ); ?>">

					<?php if( Shopkeeper_Opt::getOption( 'product_gallery_lightbox', true ) ) { ?>
						<a
						data-fresco-group="product-gallery"
						data-fresco-options="thumbnail: '<?php echo esc_url($gallery_image_data_src[0]); ?>'"
						data-fresco-caption="<?php echo esc_html($gallery_attachment_meta['caption']); ?>"
						class="<?php echo esc_attr( $modal_class ); ?>"
						href="<?php echo esc_url($gallery_image_link); ?>"
						>
					<?php } else if( Shopkeeper_Opt::getOption( 'product_gallery_zoom', true ) ) { ?>
						<a class="<?php echo esc_attr( $modal_class ); ?>" href="<?php echo esc_url($gallery_image_link); ?>" >
					<?php } ?>

					<img class="desktop-image <?php echo esc_attr( $img_class ); ?>" src="<?php echo esc_url($gallery_image_data_src[0]); ?>" alt="<?php echo esc_html($gallery_image_link); ?>">

					<?php if( Shopkeeper_Opt::getOption( 'product_gallery_zoom', true ) || Shopkeeper_Opt::getOption( 'product_gallery_lightbox', true ) ) { ?>
						</a>
					<?php } ?>
				</div>

				<?php if ($gallery_attachment_meta['caption']) : ?>

					<p class="caption">
						<?php echo esc_html($gallery_attachment_meta['caption']); ?>
					</p>

				<?php endif; ?>

			</div> <!-- / product-image -->

		<?php

		}

		?>

		<?php endif; ?>

		<!--  Video -->

		<?php if ( $page_product_youtube ) : ?>

			<?php

			$current_img++;
			$embed_code = wp_oembed_get( $page_product_youtube );
			echo '<div class="product-image video" id="controller-navigation-image-' .$current_img.'">' .$embed_code .'</div>';

			echo '<div class="product-video-icon">

			<a data-fresco-group="product-gallery" class="'.$modal_class.'" href="'.esc_url($page_product_youtube).'"><i class="spk-icon spk-icon-video-player"></i></a>

			</div>';
			?>


		<?php endif; ?>

		<ul class="product-images-controller">

			<?php
			$current_img = 1;
			?>

			<li>
				<a href="#controller-navigation-image-1" data-number="1">
					<span class="dot current"></span>
				</a>
			</li>

			<?php foreach ( $attachment_ids as $attachment_id ) {

				$current_img++;

				echo '<li><a href="#controller-navigation-image-'.$current_img.'" data-number="'.$current_img.'">
				<span class="dot"></span>
				</a></li>';
			}

			if ( $page_product_youtube ) {
				$current_img++;
				echo '<li class="video-icon"><a href="#controller-navigation-image-'.$current_img.'"><span class="dot"><i class="fa fa-play" aria-hidden="true"></i></span></a></li>';

			}

			?>

		</ul> <!-- / product-images-controller -->

	</div><!-- / product_images -->

</div> <!-- / product-images-style-3 -->
