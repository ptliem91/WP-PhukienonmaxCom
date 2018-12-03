<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$strings = 'tinyMCE.addI18n({' . _WP_Editors::$mce_locale . ': {
	woocommerce_shortcodes: {
		shortcode_title: "' . esc_js( __( 'WooCommerce', 'woocommerce-shortcodes' ) ) . '",
		product: "' . esc_js( __( 'Product', 'woocommerce-shortcodes' ) ) . '",
		list: "' . esc_js( __( 'List', 'woocommerce-shortcodes' ) ) . '",
		add_to_cart: "' . esc_js( __( 'Price/cart button', 'woocommerce-shortcodes' ) ) . '",
		add_to_cart_url: "' . esc_js( __( 'Add to cart URL', 'woocommerce-shortcodes' ) ) . '",
		product_by_sku: "' . esc_js( __( 'By SKU/ID', 'woocommerce-shortcodes' ) ) . '",
		products_by_sku: "' . esc_js( __( 'Products by SKU/ID', 'woocommerce-shortcodes' ) ) . '",
		product_categories: "' . esc_js( __( 'Product categories', 'woocommerce-shortcodes' ) ) . '",
		products_by_cat_slug: "' . esc_js( __( 'Products by category slug', 'woocommerce-shortcodes' ) ) . '",
		products_by_attribute: "' . esc_js( __( 'Products by attributes', 'woocommerce-shortcodes' ) ) . '",
		recent_products: "' . esc_js( __( 'Recent products', 'woocommerce-shortcodes' ) ) . '",
		featured_products: "' . esc_js( __( 'Featured products', 'woocommerce-shortcodes' ) ) . '",
		sale_products: "' . esc_js( __( 'Sale products', 'woocommerce-shortcodes' ) ) . '",
		best_selling_products: "' . esc_js( __( 'Best selling products', 'woocommerce-shortcodes' ) ) . '",
		top_rated_products: "' . esc_js( __( 'Top rated products', 'woocommerce-shortcodes' ) ) . '",
		shop_messages: "' . esc_js( __( 'Shop Messages', 'woocommerce-shortcodes' ) ) . '",
		order_tracking: "' . esc_js( __( 'Order tracking', 'woocommerce-shortcodes' ) ) . '",
		shop_messages_shortcode: "' . esc_js( apply_filters( 'shop_messages_shortcode_tag', 'woocommerce_shop_messages' ) ) . '",
		order_tracking_shortcode: "' . esc_js( apply_filters( 'woocommerce_order_tracking_shortcode_tag', 'woocommerce_order_tracking' ) ) . '",
		id: "' . esc_js( __( 'ID', 'woocommerce-shortcodes' ) ) . '",
		ids: "' . esc_js( __( 'IDs', 'woocommerce-shortcodes' ) ) . '",
		sku: "' . esc_js( __( 'SKU', 'woocommerce-shortcodes' ) ) . '",
		skus: "' . esc_js( __( 'SKUs', 'woocommerce-shortcodes' ) ) . '",
		style: "' . esc_js( __( 'Inline Style', 'woocommerce-shortcodes' ) ) . '",
		show_price: "' . esc_js( __( 'Show Price', 'woocommerce-shortcodes' ) ) . '",
		comma_tooltip: "' . esc_js( __( 'Separate the values with comma', 'woocommerce-shortcodes' ) ) . '",
		number: "' . esc_js( __( 'Number', 'woocommerce-shortcodes' ) ) . '",
		orderby: "' . esc_js( __( 'Order By', 'woocommerce-shortcodes' ) ) . '",
		name: "' . esc_js( __( 'Name', 'woocommerce-shortcodes' ) ) . '",
		count: "' . esc_js( __( 'Count', 'woocommerce-shortcodes' ) ) . '",
		slug: "' . esc_js( __( 'Slug', 'woocommerce-shortcodes' ) ) . '",
		none: "' . esc_js( __( 'None', 'woocommerce-shortcodes' ) ) . '",
		order: "' . esc_js( __( 'Order', 'woocommerce-shortcodes' ) ) . '",
		asc: "' . esc_js( __( 'ASC', 'woocommerce-shortcodes' ) ) . '",
		desc: "' . esc_js( __( 'DESC', 'woocommerce-shortcodes' ) ) . '",
		columns: "' . esc_js( __( 'Columns', 'woocommerce-shortcodes' ) ) . '",
		hide_empty: "' . esc_js( __( 'Hide Empty', 'woocommerce-shortcodes' ) ) . '",
		parent_id: "' . esc_js( __( 'Parent ID', 'woocommerce-shortcodes' ) ) . '",
		category_slug: "' . esc_js( __( 'Category Slug', 'woocommerce-shortcodes' ) ) . '",
		default: "' . esc_js( __( 'Default', 'woocommerce-shortcodes' ) ) . '",
		rand: "' . esc_js( __( 'Random', 'woocommerce-shortcodes' ) ) . '",
		date: "' . esc_js( __( 'Date', 'woocommerce-shortcodes' ) ) . '",
		price: "' . esc_js( __( 'Price', 'woocommerce-shortcodes' ) ) . '",
		popularity: "' . esc_js( __( 'Popularity', 'woocommerce-shortcodes' ) ) . '",
		rating: "' . esc_js( __( 'Rating', 'woocommerce-shortcodes' ) ) . '",
		title: "' . esc_js( __( 'Title', 'woocommerce-shortcodes' ) ) . '",
		operator: "' . esc_js( __( 'Operator', 'woocommerce-shortcodes' ) ) . '",
		in: "' . esc_js( __( 'IN', 'woocommerce-shortcodes' ) ) . '",
		not_in: "' . esc_js( __( 'NOT IN', 'woocommerce-shortcodes' ) ) . '",
		and: "' . esc_js( __( 'AND', 'woocommerce-shortcodes' ) ) . '",
		attribute_slug: "' . esc_js( __( 'Attribute slug', 'woocommerce-shortcodes' ) ) . '",
		terms_slug: "' . esc_js( __( 'Terms slug', 'woocommerce-shortcodes' ) ) . '",
		categories_per_page: "' . esc_js( __( 'Categories Per Page', 'woocommerce-shortcodes' ) ) . '",
		products_per_page: "' . esc_js( __( 'Products Per Page', 'woocommerce-shortcodes' ) ) . '",
		need_id_or_sku: "' . esc_js( __( 'You need to use an ID or SKU!', 'woocommerce-shortcodes' ) ) . '",
		need_ids_or_skus: "' . esc_js( __( 'You need to use an IDs or SKUs!', 'woocommerce-shortcodes' ) ) . '",
		need_category_slug: "' . esc_js( __( 'You need enter with a category slug!', 'woocommerce-shortcodes' ) ) . '",
		need_attribute_and_terms_slugs: "' . esc_js( __( 'You need enter with an attribute and terms slugs!', 'woocommerce-shortcodes' ) ) . '"
	}
}});';
