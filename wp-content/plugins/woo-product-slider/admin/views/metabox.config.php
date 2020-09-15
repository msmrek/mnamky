<?php
/**
 * Metabox page configuration.
 *
 * @since      2.2.0
 * @package    Woo_Product_Slider
 * @subpackage Woo_Product_Slider/admin/view
 * @author     ShapedPlugin <support@shapedplugin.com>
 */

if ( ! defined( 'ABSPATH' ) ) {
	die; }
// Cannot access pages directly.

/**
 * Product slider metabox prefix.
 */
$prefix = 'sp_wps_shortcode_options';

/**
 * Create a metabox for product slider.
 */
SPWPS::createMetabox(
	$prefix, array(
		'title'     => __( 'Slider Options', 'woo-product-slider' ),
		'post_type' => 'sp_wps_shortcodes',
		'context'   => 'normal',
		'class'     => 'wps-shortcode-options',
	)
);

/**
 * General Settings section.
 */
SPWPS::createSection(
	$prefix, array(
		'title'  => __( 'General Settings', 'woo-product-slider' ),
		'icon'   => 'fa fa-cog',
		'fields' => array(

			array(
				'id'       => 'carousel_type',
				'type'     => 'button_set',
				'title'    => __( 'Slider Type', 'woo-product-slider' ),
				'subtitle' => __( 'Select which type of slider you want to show.', 'woo-product-slider' ),
				'options'  => array(
					'product_carousel'  => array(
						'name' => __( 'Product', 'woo-product-slider' ),
					),
					'category_carousel' => array(
						'name'     => __( 'Category', 'woo-product-slider' ),
						'pro_only' => true,
					),
				),
				'default'  => 'product_carousel',
			),
			array(
				'id'         => 'layout_preset',
				'type'       => 'image_select',
				'title'      => __( 'Layout Preset', 'woo-product-slider' ),
				'subtitle'   => __( 'Choose a layout preset.', 'woo-product-slider' ),
				'image_name' => true,
				'options'    => array(
					'slider' => array(
						'img' => plugin_dir_url( __FILE__ ) . 'models/assets/images/slider.jpg',
					),
					'grid'   => array(
						'img'      => plugin_dir_url( __FILE__ ) . 'models/assets/images/grid.png',
						'pro_only' => true,
					),
				),
				'default'    => 'slider',
			),
			array(
				'id'       => 'theme_style',
				'type'     => 'select',
				'title'    => __( 'Select Theme', 'woo-product-slider' ),
				'subtitle' => __( 'Select which theme style you want to display. Browse themes <a href="https://shapedplugin.com/demo/woocommerce-product-slider-pro/" target="_blank">demo</a> in action!', 'woo-product-slider' ),
				'options'  => array(
					'theme_one'   => array(
						'name' => __( 'Theme One', 'woo-product-slider' ),
					),
					'theme_two'   => array(
						'name' => __( 'Theme Two', 'woo-product-slider' ),
					),
					'theme_three' => array(
						'name' => __( 'Theme Three', 'woo-product-slider' ),
					),
					'theme_four'  => array(
						'name'     => __( '30+ Themes (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
				),
				'default'  => 'theme_one',
			),
			array(
				'id'       => 'product_type',
				'type'     => 'select',
				'title'    => __( 'Filter Products', 'woo-product-slider' ),
				'subtitle' => __( 'Select an option to filter the products.', 'woo-product-slider' ),
				'options'  => array(
					'latest_products'                  => array(
						'name' => __( 'Latest', 'woo-product-slider' ),
					),
					'featured_products'                => array(
						'name' => __( 'Featured', 'woo-product-slider' ),
					),
					'products_from_categories'         => array(
						'name'     => __( 'Category (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'products_from_tags'               => array(
						'name'     => __( 'Tag (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'best_selling_products'            => array(
						'name'     => __( 'Best Selling (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'related_products'                 => array(
						'name'     => __( 'Related (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'up_sells'                         => array(
						'name'     => __( 'Upsells (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'cross_sells'                      => array(
						'name'     => __( 'Cross-sells (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'top_rated_products'               => array(
						'name'     => __( 'Top Rated (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'on_sell_products'                 => array(
						'name'     => __( 'On Sale (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'specific_products'                => array(
						'name'     => __( 'Specific (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'most_viewed_products'             => array(
						'name'     => __( 'Most Viewed (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'recently_viewed_products'         => array(
						'name'     => __( 'Recently Viewed (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'products_from_sku'                => array(
						'name'     => __( 'SKU (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'products_from_attribute'          => array(
						'name'     => __( 'Attribute (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'products_from_free'               => array(
						'name'     => __( 'Free (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'products_from_exclude_categories' => array(
						'name'     => __( 'Exclude Category (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),
					'products_from_exclude_tags'       => array(
						'name'     => __( 'Exclude Tag (Pro)', 'woo-product-slider' ),
						'pro_only' => true,
					),

				),
				'default'  => 'latest_products',
			),
			array(
				'id'       => 'number_of_column',
				'type'     => 'column',
				'title'    => __( 'Column(s)', 'woo-product-slider' ),
				'subtitle' => __( 'Set products column(s) in different devices.', 'woo-product-slider' ),
				'default'  => array(
					'number1' => '4',
					'number2' => '3',
					'number3' => '2',
					'number4' => '1',
				),
			),
			array(
				'id'       => 'number_of_total_products',
				'type'     => 'spinner',
				'title'    => __( 'Total Products to Show', 'woo-product-slider' ),
				'subtitle' => __( 'Set number of total products to show.', 'woo-product-slider' ),
				'default'  => 16,
				'max'      => 60000,
				'min'      => -1,
			),
			array(
				'id'       => 'product_order_by',
				'type'     => 'select',
				'title'    => __( 'Order by', 'woo-product-slider' ),
				'subtitle' => __( 'Set a order by option.', 'woo-product-slider' ),
				'options'  => array(
					'ID'       => array(
						'name' => __( 'ID', 'woo-product-slider' ),
					),
					'date'     => array(
						'name' => __( 'Date', 'woo-product-slider' ),
					),
					'rand'     => array(
						'name' => __( 'Random', 'woo-product-slider' ),
					),
					'title'    => array(
						'name' => __( 'Title', 'woo-product-slider' ),
					),
					'modified' => array(
						'name' => __( 'Modified', 'woo-product-slider' ),
					),
				),
				'default'  => 'date',
			),
			array(
				'id'       => 'product_order',
				'type'     => 'select',
				'title'    => __( 'Order', 'woo-product-slider' ),
				'subtitle' => __( 'Set product order.', 'woo-product-slider' ),
				'options'  => array(
					'ASC'  => array(
						'name' => __( 'Ascending', 'woo-product-slider' ),
					),
					'DESC' => array(
						'name' => __( 'Descending', 'woo-product-slider' ),
					),
				),
				'default'  => 'DESC',
			),
			array(
				'id'       => 'preloader',
				'type'     => 'switcher',
				'title'    => __( 'Preloader', 'woo-product-slider' ),
				'subtitle' => __( 'On/Off preloader.', 'woo-product-slider' ),
				'default'  => true,
			),

		),
	)
);

/**
 * Slider Controls section.
 */
SPWPS::createSection(
	$prefix, array(
		'title'  => __( 'Slider Controls', 'woo-product-slider' ),
		'icon'   => 'fa fa-sliders',
		'fields' => array(

			array(
				'id'       => 'carousel_auto_play',
				'type'     => 'switcher',
				'title'    => __( 'AutoPlay', 'woo-product-slider' ),
				'subtitle' => __( 'On/Off auto play.', 'woo-product-slider' ),
				'default'  => true,
			),
			array(
				'id'         => 'carousel_auto_play_speed',
				'type'       => 'spinner',
				'title'      => __( 'AutoPlay Speed', 'woo-product-slider' ),
				'subtitle'   => __( 'Set auto play speed. Default value is 3000 milliseconds.', 'woo-product-slider' ),
				'unit'       => __( 'ms', 'woo-product-slider' ),
				'max'        => 30000,
				'min'        => 1,
				'default'    => 3000,
				'dependency' => array( 'carousel_auto_play', '==', 'true' ),
			),
			array(
				'id'       => 'carousel_scroll_speed',
				'type'     => 'spinner',
				'title'    => __( 'Slider Speed', 'woo-product-slider' ),
				'subtitle' => __( 'Set slider scroll speed. Default value is 600 milliseconds.', 'woo-product-slider' ),
				'unit'     => __( 'ms', 'woo-product-slider' ),
				'default'  => 600,
				'min'      => 1,
				'max'      => 30000,
			),
			array(
				'id'       => 'carousel_pause_on_hover',
				'type'     => 'switcher',
				'title'    => __( 'Pause on Hover', 'woo-product-slider' ),
				'subtitle' => __( 'On/Off pause on hover.', 'woo-product-slider' ),
				'default'  => true,
			),
			array(
				'id'       => 'carousel_infinite',
				'type'     => 'switcher',
				'title'    => __( 'Infinite Loop', 'woo-product-slider' ),
				'subtitle' => __( 'On/Off infinite loop mode.', 'woo-product-slider' ),
				'default'  => true,
			),
			array(
				'id'       => 'rtl_mode',
				'type'     => 'button_set',
				'title'    => __( 'Slider Direction', 'woo-product-slider' ),
				'subtitle' => __( 'Set slider direction as you need.', 'woo-product-slider' ),
				'options'  => array(
					false => array(
						'name' => __( 'Right to Left', 'woo-product-slider' ),
					),
					true  => array(
						'name' => __( 'Left to Right', 'woo-product-slider' ),
					),
				),
				'default'  => false,
			),
			array(
				'type'    => 'subheading',
				'content' => __( 'Navigation', 'woo-product-slider' ),
			),
			array(
				'id'       => 'navigation_arrow',
				'type'     => 'button_set',
				'title'    => __( 'Navigation', 'woo-product-slider' ),
				'subtitle' => __( 'Show/Hide navigation arrow.', 'woo-product-slider' ),
				'options'  => array(
					'true'           => array(
						'name' => __( 'Show', 'woo-product-slider' ),
					),
					'false'          => array(
						'name' => __( 'Hide', 'woo-product-slider' ),
					),
					'hide_on_mobile' => array(
						'name' => __( 'Hide on Mobile', 'woo-product-slider' ),
					),
				),
				'default'  => 'true',
			),
			array(
				'id'         => 'navigation_arrow_colors',
				'type'       => 'color_group',
				'title'      => __( 'Color', 'woo-product-slider' ),
				'subtitle'   => __( 'Set color for the slider navigation.', 'woo-product-slider' ),
				'options'    => array(
					'color'            => __( 'Color', 'woo-product-slider' ),
					'hover_color'      => __( 'Hover Color', 'woo-product-slider' ),
					'background'       => __( 'Background', 'woo-product-slider' ),
					'hover_background' => __( 'Hover Background', 'woo-product-slider' ),
					'border'           => __( 'Border', 'woo-product-slider' ),
					'hover_border'     => __( 'Hover Border', 'woo-product-slider' ),
				),
				'default'    => array(
					'color'            => '#444444',
					'hover_color'      => '#ffffff',
					'background'       => 'transparent',
					'hover_background' => '#444444',
					'border'           => '#aaaaaa',
					'hover_border'     => '#444444',
				),
				'dependency' => array( 'navigation_arrow', 'any', 'true,hide_on_mobile' ),
			),
			array(
				'type'    => 'subheading',
				'content' => __( 'Pagination', 'woo-product-slider' ),
			),
			array(
				'id'       => 'pagination',
				'type'     => 'button_set',
				'title'    => __( 'Pagination', 'woo-product-slider' ),
				'subtitle' => __( 'Show/Hide pagination.', 'woo-product-slider' ),
				'options'  => array(
					'true'           => array(
						'name' => __( 'Show', 'woo-product-slider' ),
					),
					'false'          => array(
						'name' => __( 'Hide', 'woo-product-slider' ),
					),
					'hide_on_mobile' => array(
						'name' => __( 'Hide on Mobile', 'woo-product-slider' ),
					),
				),
				'default'  => 'true',
			),
			array(
				'id'         => 'pagination_dots_bg',
				'type'       => 'color',
				'title'      => __( 'Dots Color', 'woo-product-slider' ),
				'subtitle'   => __( 'Set color for the slider pagination dots.', 'woo-product-slider' ),
				'default'    => '#cccccc',
				'dependency' => array( 'pagination', 'any', 'true,hide_on_mobile' ),
			),
			array(
				'id'         => 'pagination_dots_active_bg',
				'type'       => 'color',
				'title'      => __( 'Dots Active Color', 'woo-product-slider' ),
				'subtitle'   => __( 'Set active color for the slider pagination dots.', 'woo-product-slider' ),
				'default'    => '#333333',
				'dependency' => array( 'pagination', 'any', 'true,hide_on_mobile' ),
			),
			array(
				'type'    => 'subheading',
				'content' => __( 'Miscellaneous', 'woo-product-slider' ),
			),
			array(
				'id'       => 'carousel_swipe',
				'type'     => 'switcher',
				'title'    => __( 'Swipe', 'woo-product-slider' ),
				'subtitle' => __( 'On/Off swipe mode.', 'woo-product-slider' ),
				'default'  => true,
			),
			array(
				'id'         => 'carousel_draggable',
				'type'       => 'switcher',
				'title'      => __( 'Mouse Draggable', 'woo-product-slider' ),
				'subtitle'   => __( 'On/Off mouse draggable mode.', 'woo-product-slider' ),
				'default'    => true,
				'dependency' => array( 'carousel_swipe', '==', 'true' ),
			),

		),
	)
);

/**
 * Display Options section.
 */
SPWPS::createSection(
	$prefix, array(
		'title'  => __( 'Display Options', 'woo-product-slider' ),
		'icon'   => 'fa fa-th-large',
		'fields' => array(
			array(
				'id'         => 'slider_title',
				'type'       => 'switcher',
				'title'      => __( 'Slider Section Title', 'woo-product-slider' ),
				'subtitle'   => __( 'Show/Hide slider section title.', 'woo-product-slider' ),
				'text_on'    => __( 'Show', 'woo-product-slider' ),
				'text_off'   => __( 'Hide', 'woo-product-slider' ),
				'text_width' => 77,
				'default'    => false,
			),
			array(
				'type'    => 'subheading',
				'content' => __( 'Product Name', 'woo-product-slider' ),
			),
			array(
				'id'         => 'product_name',
				'type'       => 'switcher',
				'title'      => __( 'Name', 'woo-product-slider' ),
				'subtitle'   => __( 'Show/Hide product name.', 'woo-product-slider' ),
				'text_on'    => __( 'Show', 'woo-product-slider' ),
				'text_off'   => __( 'Hide', 'woo-product-slider' ),
				'text_width' => 77,
				'default'    => true,
			),
			array(
				'type'    => 'subheading',
				'content' => __( 'Product Price', 'woo-product-slider' ),
			),
			array(
				'id'         => 'product_price',
				'type'       => 'switcher',
				'title'      => __( 'Price', 'woo-product-slider' ),
				'subtitle'   => __( 'Show/Hide product price.', 'woo-product-slider' ),
				'text_on'    => __( 'Show', 'woo-product-slider' ),
				'text_off'   => __( 'Hide', 'woo-product-slider' ),
				'text_width' => 77,
				'default'    => true,
			),
			array(
				'id'         => 'product_del_price_color',
				'type'       => 'color',
				'title'      => __( 'Discount Color', 'woo-product-slider' ),
				'subtitle'   => __( 'Set discount price color.', 'woo-product-slider' ),
				'default'    => '#888888',
				'dependency' => array( 'product_price', '==', 'true' ),
			),
			array(
				'type'    => 'subheading',
				'content' => __( 'Product Rating', 'woo-product-slider' ),
			),
			array(
				'id'         => 'product_rating',
				'type'       => 'switcher',
				'title'      => __( 'Rating', 'woo-product-slider' ),
				'subtitle'   => __( 'Show/Hide product rating.', 'woo-product-slider' ),
				'text_on'    => __( 'Show', 'woo-product-slider' ),
				'text_off'   => __( 'Hide', 'woo-product-slider' ),
				'text_width' => 77,
				'default'    => true,
			),
			array(
				'id'         => 'product_rating_colors',
				'type'       => 'color_group',
				'title'      => __( 'Color', 'woo-product-slider' ),
				'subtitle'   => __( 'Set rating star color.', 'woo-product-slider' ),
				'options'    => array(
					'color'       => __( 'Star Color', 'woo-product-slider' ),
					'empty_color' => __( 'Empty Star Color', 'woo-product-slider' ),
				),
				'default'    => array(
					'color'       => '#F4C100',
					'empty_color' => '#C8C8C8',
				),
				'dependency' => array( 'product_rating', '==', 'true' ),
			),
			array(
				'type'    => 'subheading',
				'content' => __( 'Add to Cart Button', 'woo-product-slider' ),
			),
			array(
				'id'         => 'add_to_cart_button',
				'type'       => 'switcher',
				'title'      => __( 'Add to Cart Button', 'woo-product-slider' ),
				'subtitle'   => __( 'Show/Hide product add to cart button.', 'woo-product-slider' ),
				'text_on'    => __( 'Show', 'woo-product-slider' ),
				'text_off'   => __( 'Hide', 'woo-product-slider' ),
				'text_width' => 77,
				'default'    => true,
			),
			array(
				'id'         => 'add_to_cart_button_color',
				'type'       => 'color',
				'title'      => __( 'Color', 'woo-product-slider' ),
				'subtitle'   => __( 'Set product add to cart button color.', 'woo-product-slider' ),
				'default'    => '#444444',
				'dependency' => array( 'add_to_cart_button', '==', 'true' ),
			),
			array(
				'id'         => 'add_to_cart_button_hover_color',
				'type'       => 'color',
				'title'      => __( 'Hover Color', 'woo-product-slider' ),
				'subtitle'   => __( 'Set add to cart button hover color.', 'woo-product-slider' ),
				'default'    => '#ffffff',
				'dependency' => array( 'add_to_cart_button', '==', 'true' ),
			),
			array(
				'id'         => 'add_to_cart_button_bg',
				'type'       => 'color',
				'title'      => __( 'Background', 'woo-product-slider' ),
				'subtitle'   => __( 'Set add to cart button background color.', 'woo-product-slider' ),
				'default'    => 'transparent',
				'dependency' => array( 'add_to_cart_button', '==', 'true' ),
			),
			array(
				'id'         => 'add_to_cart_button_hover_bg',
				'type'       => 'color',
				'title'      => __( 'Hover Background', 'woo-product-slider' ),
				'subtitle'   => __( 'Set add to cart button hover background color.', 'woo-product-slider' ),
				'default'    => '#222222',
				'dependency' => array( 'add_to_cart_button', '==', 'true' ),
			),
			array(
				'id'          => 'add_to_cart_border',
				'type'        => 'border',
				'title'       => __( 'Border', 'woo-product-slider' ),
				'subtitle'    => __( 'Set add to cart button border.', 'woo-product-slider' ),
				'all'         => true,
				'hover_color' => true,
				'default'     => array(
					'all'         => '1',
					'style'       => 'solid',
					'color'       => '#222222',
					'hover_color' => '#222222',
				),
				'dependency'  => array( 'add_to_cart_button', '==', 'true' ),
			),
		),
	)
);

/**
 * Image Settings section.
 */
SPWPS::createSection(
	$prefix, array(
		'title'  => __( 'Image Settings', 'woo-product-slider' ),
		'icon'   => 'fa fa-image',
		'fields' => array(
			array(
				'id'         => 'product_image',
				'type'       => 'switcher',
				'title'      => __( 'Image', 'woo-product-slider' ),
				'subtitle'   => __( 'Show/Hide product image.', 'woo-product-slider' ),
				'text_on'    => __( 'Show', 'woo-product-slider' ),
				'text_off'   => __( 'Hide', 'woo-product-slider' ),
				'text_width' => 77,
				'default'    => true,
			),
			array(
				'id'          => 'product_image_border',
				'type'        => 'border',
				'title'       => __( 'Border', 'woo-product-slider' ),
				'subtitle'    => __( 'Set product image border.', 'woo-product-slider' ),
				'all'         => true,
				'hover_color' => true,
				'default'     => array(
					'all'         => '1',
					'style'       => 'solid',
					'color'       => '#dddddd',
					'hover_color' => '#dddddd',
				),
				'dependency'  => array( 'product_image|theme_style', '==|==', 'true|theme_one', true ),
			),
			array(
				'id'         => 'image_sizes',
				'type'       => 'image_sizes',
				'title'      => __( 'Image Sizes', 'woo-product-slider' ),
				'subtitle'   => __( 'Select a image size.', 'woo-product-slider' ),
				'default'    => 'full',
				'dependency' => array(
					'product_image',
					'==',
					'true',
				),
			),
			array(
				'id'             => 'image_custom_size',
				'type'           => 'dimensions',
				'title'          => __( 'Custom Size', 'woo-product-slider' ),
				'subtitle'       => __( 'Set a custom width and height of the product image.', 'woo-product-slider' ),
				'show_crop_list' => true,
				'disabled'       => 'disabled',
				'units'          => array( 'px' ),
				'default'        => array(
					'width'  => '250',
					'height' => '300',
					'crop'   => 'hard-crop',
				),
				'dependency'     => array(
					'product_image|image_sizes',
					'==|==',
					'true|custom',
				),
			),
		),
	)
);

/**
 * Typography section.
 */
SPWPS::createSection(
	$prefix, array(
		'title'  => __( 'Typography', 'woo-product-slider' ),
		'icon'   => 'fa fa-font',
		'fields' => array(
			array(
				'type'    => 'notice',
				'style'   => 'warning',
				'content' => __( 'The Following Typography (900+ Google Fonts) options are available in the <a href="https://shapedplugin.com/plugin/woocommerce-product-slider-pro/">Pro Version</a> only except the <b>Slider Section Title, Product Name, Product Price</b> Font size and color fields.', 'woo-product-slider' ),
			),
			array(
				'id'           => 'slider_title_typography',
				'type'         => 'typography',
				'title'        => __( 'Slider Section Title Font', 'woo-product-slider' ),
				'subtitle'     => __( 'Set slider section title font properties.', 'woo-product-slider' ),
				'default'      => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '600',
					'type'           => 'google',
					'font-size'      => '22',
					'line-height'    => '23',
					'text-align'     => 'left',
					'text-transform' => 'none',
					'letter-spacing' => '',
					'color'          => '#444444',
				),
				'preview_text' => 'Slider Section Title', // Replace preview text with any text you like.
			),
			array(
				'id'           => 'product_name_typography',
				'type'         => 'typography',
				'title'        => __( 'Product Name Font', 'woo-product-slider' ),
				'subtitle'     => __( 'Set product name font properties.', 'woo-product-slider' ),
				'default'      => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '600',
					'type'           => 'google',
					'font-size'      => '15',
					'line-height'    => '20',
					'text-align'     => 'center',
					'text-transform' => 'none',
					'letter-spacing' => '',
					'color'          => '#444444',
					'hover_color'    => '#955b89',
				),
				'hover_color'  => true,
				'preview_text' => 'Product Name', // Replace preview text with any text you like.
			),
			array(
				'id'       => 'product_description_typography',
				'type'     => 'typography',
				'title'    => __( 'Product Description Font', 'woo-product-slider' ),
				'subtitle' => __( 'Set product description font properties.', 'woo-product-slider' ),
				'class'    => 'product-description-typography',
				'default'  => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => 'regular',
					'type'           => 'google',
					'font-size'      => '14',
					'line-height'    => '20',
					'text-align'     => 'center',
					'text-transform' => 'none',
					'letter-spacing' => '',
					'color'          => '#333333',
				),
			),
			array(
				'id'       => 'product_price_typography',
				'type'     => 'typography',
				'title'    => __( 'Product Price Font', 'woo-product-slider' ),
				'subtitle' => __( 'Set product price font properties.', 'woo-product-slider' ),
				'class'    => 'product-price-typography',
				'default'  => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '700',
					'type'           => 'google',
					'font-size'      => '14',
					'line-height'    => '19',
					'text-align'     => 'center',
					'text-transform' => 'none',
					'letter-spacing' => '',
					'color'          => '#222222',
				),
			),
			array(
				'id'       => 'sale_ribbon_typography',
				'type'     => 'typography',
				'title'    => __( 'Sale Ribbon Font', 'woo-product-slider' ),
				'subtitle' => __( 'Set product sale ribbon font properties.', 'woo-product-slider' ),
				'class'    => 'sale-ribbon-typography',
				'default'  => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => 'regular',
					'type'           => 'google',
					'font-size'      => '10',
					'line-height'    => '10',
					'text-align'     => 'center',
					'text-transform' => 'uppercase',
					'letter-spacing' => '1',
					'color'          => '#ffffff',
				),
			),
			array(
				'id'       => 'out_of_stock_ribbon_typography',
				'type'     => 'typography',
				'title'    => __( 'Out of Stock Ribbon Font', 'woo-product-slider' ),
				'subtitle' => __( 'Set product out of stock ribbon font properties.', 'woo-product-slider' ),
				'class'    => 'out-of-stock-ribbon-typography',
				'default'  => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => 'regular',
					'type'           => 'google',
					'font-size'      => '10',
					'line-height'    => '10',
					'text-align'     => 'center',
					'text-transform' => 'uppercase',
					'letter-spacing' => '1',
					'color'          => '#ffffff',
				),
			),
			array(
				'id'          => 'product_category_typography',
				'type'        => 'typography',
				'title'       => __( 'Product Category Font', 'woo-product-slider' ),
				'subtitle'    => __( 'Set product category font properties.', 'woo-product-slider' ),
				'class'       => 'product-category-typography',
				'default'     => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => 'regular',
					'type'           => 'google',
					'font-size'      => '14',
					'line-height'    => '19',
					'text-align'     => 'center',
					'text-transform' => 'none',
					'letter-spacing' => '',
					'color'          => '#444444',
					'hover_color'    => '#955b89',
				),
				'hover_color' => true,
			),
			array(
				'id'       => 'compare_wishlist_typography',
				'type'     => 'typography',
				'title'    => __( 'Compare & Wishlist Font', 'woo-product-slider' ),
				'subtitle' => __( 'Set compare and wishlist font properties.', 'woo-product-slider' ),
				'class'    => 'compare-wishlist-typography',
				'default'  => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => 'regular',
					'type'           => 'google',
					'font-size'      => '14',
					'line-height'    => '19',
					'text-align'     => 'center',
					'text-transform' => 'none',
					'letter-spacing' => '',
				),
				'color'    => false,
			),
			array(
				'id'       => 'add_to_cart_typography',
				'type'     => 'typography',
				'title'    => __( 'Add to Cart & View Details Font', 'woo-product-slider' ),
				'subtitle' => __( 'Set add to cart and view details font properties.', 'woo-product-slider' ),
				'class'    => 'add-to-cart-typography',
				'default'  => array(
					'font-family'    => 'Open Sans',
					'font-weight'    => '600',
					'type'           => 'google',
					'font-size'      => '14',
					'line-height'    => '19',
					'text-align'     => 'center',
					'text-transform' => 'none',
					'letter-spacing' => '',
				),
				'color'    => false,
			),

		),
	)
);
