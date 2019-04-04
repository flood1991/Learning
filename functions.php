<?php
function startit_setup() {
	load_theme_textdomain('startit');
	add_theme_support ('title-tag');
		add_theme_support ('custom-logo', array(
                        'height' => 137.98 , 'width' => 50, ));
		add_theme_support ('post-thumbnails');
		register_nav_menus (array(
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ) );
}
add_action('after_setup_theme','startit_setup');
function litecoin_scripts() {
    wp_enqueue_style( 'style202d', get_template_directory_uri(). '/css/style202d.css' );
    wp_enqueue_style( 'styleminc', get_template_directory_uri(). '/css/style.minc721.css' );
    wp_enqueue_style( 'vendors2fca', get_template_directory_uri(). '/css/vendors2fca.css' );
    wp_enqueue_style( 'featured-product2fca', get_template_directory_uri(). '/css/featured-product2fca.css' );
    wp_enqueue_style( 'animate-animoc721', get_template_directory_uri(). '/css/animate-animoc721.css' );
    wp_enqueue_style( 'styles3c21', get_template_directory_uri(). '/css/styles3c21.css' );
    wp_enqueue_style( 'woocommerce-layout10cb', get_template_directory_uri(). '/css/woocommerce-layout10cb.css' );
    wp_enqueue_style( 'woocommerce-smallscreen10cb', get_template_directory_uri(). '/css/woocommerce-smallscreen10cb.css' );
    wp_enqueue_style( 'woocommerce10cb', get_template_directory_uri(). '/css/woocommerce10cb.css' );
    wp_enqueue_style( 'font-awesome.min82d0', get_template_directory_uri(). '/css/font-awesome.min82d0.css' );
    wp_enqueue_style( 'rgs202d', get_template_directory_uri(). '/css/rgs202d.css' );
    wp_enqueue_style( 'childstyle', get_template_directory_uri(). '/css/salient-child/style202d.css' );
    wp_enqueue_style( 'jquery.fancyboxad72', get_template_directory_uri(). '/css/jquery.fancyboxad72.css' );
    wp_enqueue_style( 'responsive202d', get_template_directory_uri(). '/css/responsive202d.css' );
    wp_enqueue_style( 'woocommerce202d', get_template_directory_uri(). '/css/woocommerce202d.css' );
    wp_enqueue_style( 'skin-material202d', get_template_directory_uri(). '/css/skin-material202d.css' );
    wp_enqueue_style( 'default.min2c00', get_template_directory_uri(). '/css/default.min2c00.css' );
    wp_enqueue_style( 'js_composer.min4245', get_template_directory_uri(). '/css/js_composer.min4245.css' );
    wp_enqueue_style( 'frontend-formsc721', get_template_directory_uri(). '/css/frontend-formsc721.css' );
    wp_enqueue_style( 'jquery-ui-1.9.1.customc721', get_template_directory_uri(). '/css/jquery-ui-1.9.1.customc721.css' );
    wp_enqueue_style( 'sweetalert2b12b', get_template_directory_uri(). '/css/sweetalert2b12b.css' );

    wp_enqueue_style( 'style-css', get_stylesheet_uri() );


    //SCRIPTS
    wp_enqueue_script ('jquery');
    wp_enqueue_script( 'tracking-analytics-events9568', get_template_directory_uri() . '/js/tracking-analytics-events9568.js');
    wp_enqueue_script( 'tracking-scrolldepth9568', get_template_directory_uri() . '/js/tracking-scrolldepth9568.js');
    wp_enqueue_script( 'jquery.blockUI.min44fd', get_template_directory_uri() . '/js/jquery.blockUI.min44fd.js');
    wp_enqueue_script( 'add-to-cart.min10cb', get_template_directory_uri() . '/js/add-to-cart.min10cb.js');
    wp_enqueue_script( 'wpgmza_datac721', get_template_directory_uri() . '/js/wpgmza_datac721.js');
    wp_enqueue_script( 'woocommerce-add-to-cart4245', get_template_directory_uri() . '/js/woocommerce-add-to-cart4245.js');
    wp_enqueue_script( 'billing-addressc721', get_template_directory_uri() . '/js/billing-addressc721.js');
    wp_enqueue_script( 'core.mine899', get_template_directory_uri() . '/js/core.mine899.js');
    wp_enqueue_script( 'datepicker.mine899', get_template_directory_uri() . '/js/datepicker.mine899.js');
    wp_enqueue_script( 'widget.mine899', get_template_directory_uri() . '/js/widget.mine899.js');
    wp_enqueue_script( 'mouse.mine899', get_template_directory_uri() . '/js/mouse.mine899.js');
    wp_enqueue_script( 'moxie.mine34c', get_template_directory_uri() . '/js/moxie.mine34c.js');
    wp_enqueue_script( 'plupload.min6c17', get_template_directory_uri() . '/js/plupload.min6c17.js');
    wp_enqueue_script( 'handlers.minc721', get_template_directory_uri() . '/js/handlers.minc721.js');
    wp_enqueue_script( 'jquery-ui-timepicker-addonc721', get_template_directory_uri() . '/js/jquery-ui-timepicker-addonc721.js');
    wp_enqueue_script( 'sortable.mine899', get_template_directory_uri() . '/js/sortable.mine899.js');
    wp_enqueue_script( 'uploadc721', get_template_directory_uri() . '/js/uploadc721.js');
    wp_enqueue_script( 'frontend-form.minc721', get_template_directory_uri() . '/js/frontend-form.minc721.js');
    wp_enqueue_script( 'sweetalert2b12b', get_template_directory_uri() . '/js/sweetalert2b12b.js');
    wp_enqueue_script( 'analytics', get_template_directory_uri() . '/js/analytics.js');
    wp_enqueue_script( 'widgets', get_template_directory_uri() . '/js/widgets.js');
    wp_enqueue_script( 'api85f1', get_template_directory_uri() . '/js/api85f1.js',null,null,true);


    wp_enqueue_script( 'underscore.min4511', get_template_directory_uri() . '/js/underscore.min4511.js',null,null, true);
    wp_enqueue_script( 'backbone.min9632', get_template_directory_uri() . '/js/backbone.min9632.js',null,null, true);
    wp_enqueue_script( 'api-request.minc721', get_template_directory_uri() . '/js/api-request.minc721.js',null,null, true);
    wp_enqueue_script( 'wp-api.minc721', get_template_directory_uri() . '/js/wp-api.minc721.js',null,null, true);
    wp_enqueue_script( 'animo.min4bf4', get_template_directory_uri() . '/js/animo.min4bf4.js',null,null, true);
    wp_enqueue_script( 'jquery.ba-throttle-debounce.min4963', get_template_directory_uri() . '/js/jquery.ba-throttle-debounce.min4963.js',null,null, true);
    wp_enqueue_script( 'viewportcheckerc2d0', get_template_directory_uri() . '/js/viewportcheckerc2d0.js',null,null, true);
    wp_enqueue_script( 'edsanimatec2d0', get_template_directory_uri() . '/js/edsanimatec2d0.js',null,null, true);
    wp_enqueue_script( 'edsanimate.site47a7', get_template_directory_uri() . '/js/edsanimate.site47a7.js',null,null, true);
    wp_enqueue_script( 'scripts3c21', get_template_directory_uri() . '/js/scripts3c21.js',null,null, true);
    wp_enqueue_script( 'js.cookie.min6b25', get_template_directory_uri() . '/js/js.cookie.min6b25.js',null,null, true);
    wp_enqueue_script( 'woocommerce.min10cb', get_template_directory_uri() . '/js/woocommerce.min10cb.js',null,null, true);
    wp_enqueue_script( 'cart-fragments.min10cb', get_template_directory_uri() . '/js/cart-fragments.min10cb.js',null,null, true);
    wp_enqueue_script( 'mailchimp-woocommerce-public.minbe12', get_template_directory_uri() . '/js/mailchimp-woocommerce-public.minbe12.js',null,null, true);
    wp_enqueue_script( 'fda960cde3bdf87e8e30c318abe12', get_template_directory_uri() . '/js/fda960cde3bdf87e8e30c318abe12.js',null,null, true);
    wp_enqueue_script( 'priority202d', get_template_directory_uri() . '/js/priority202d.js',null,null, true);
    wp_enqueue_script( 'modernizr61da', get_template_directory_uri() . '/js/modernizr61da.js',null,null, true);
    wp_enqueue_script( 'imagesLoaded.mineda1', get_template_directory_uri() . '/js/imagesLoaded.mineda1.js',null,null, true);
    wp_enqueue_script( 'jquery.fancybox.minf0a0', get_template_directory_uri() . '/js/jquery.fancybox.minf0a0.js',null,null, true);
    wp_enqueue_script( 'superfishb493', get_template_directory_uri() . '/js/superfishb493.js',null,null, true);
    wp_enqueue_script( 'init202d', get_template_directory_uri() . '/js/init202d.js',null,null, true);
    wp_enqueue_script( 'flickity.min431f', get_template_directory_uri() . '/js/flickity.min431f.js',null,null, true);
    wp_enqueue_script( 'jquery.flexslider-min4245', get_template_directory_uri() . '/js/jquery.flexslider-min4245.js',null,null, true);
    wp_enqueue_script( 'isotope.mine87d', get_template_directory_uri() . '/js/isotope.mine87d.js',null,null, true);
    wp_enqueue_script( 'touchswipe.min5152', get_template_directory_uri() . '/js/touchswipe.min5152.js',null,null, true);
    wp_enqueue_script( 'add-to-cart-variation.min10cb', get_template_directory_uri() . '/js/add-to-cart-variation.min10cb.js',null,null, true);
    wp_enqueue_script( 'quick_view_actions5152', get_template_directory_uri() . '/js/quick_view_actions5152.js',null,null, true);
    wp_enqueue_script( 'position.mine899', get_template_directory_uri() . '/js/position.mine899.js',null,null, true);
    wp_enqueue_script( 'menu.mine899', get_template_directory_uri() . '/js/menu.mine899.js',null,null, true);
    wp_enqueue_script( 'wp-a11y.minc721', get_template_directory_uri() . '/js/wp-a11y.minc721.js',null,null, true);
    wp_enqueue_script( 'autocomplete.mine899', get_template_directory_uri() . '/js/autocomplete.mine899.js',null,null, true);
    wp_enqueue_script( 'suggest.min3914', get_template_directory_uri() . '/js/suggest.min3914.js',null,null, true);
    wp_enqueue_script( 'slider.mine899', get_template_directory_uri() . '/js/slider.mine899.js',null,null, true);
    wp_enqueue_script( 'subscriptionsc721', get_template_directory_uri() . '/js/subscriptionsc721.js',null,null, true);
    wp_enqueue_script( 'wp-embed.minc721', get_template_directory_uri() . '/js/wp-embed.minc721.js',null,null, true);
    wp_enqueue_script( 'js_composer_front.min4245', get_template_directory_uri() . '/js/js_composer_front.min4245.js',null,null, true);
    wp_enqueue_script( 'forms-api.minb523', get_template_directory_uri() . '/js/forms-api.minb523.js',null,null, true);
    wp_enqueue_script( 'jquery-migrate.min330a', get_template_directory_uri() . '/js/jquery-migrate.min330a.js',null,null, true);
    wp_enqueue_script( 'wp-util.minc721', get_template_directory_uri() . '/js/wp-util.minc721.js',null,null, true);

}
add_action( 'wp_enqueue_scripts', 'litecoin_scripts' );

class Walker_menu extends Walker_nav_menu {};
add_filter( 'walker_nav_menu_start_el', 'add_arrow',10,4);
function add_arrow( $output, $item, $depth, $args ){
//Only add class to 'top level' items on the 'primary' menu.
if('header_menu' == $args->theme_location && $depth === 0 ){
    if (in_array("menu-item-has-children", $item->classes)) {
            $output = $args->before;
            $output .= '<a'. $attributes .' href="'.$item->url.'">';
            $output .= $item->title;
            $output .='<span class="sf-sub-indicator" style="height: 20px;"><i class="icon-angle-down"></i></span>';
            $output .= $args->after;
            $output .= '</a>';
            
    }
}
    return $output;
}


function litecoin_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
    $wp_customize->add_setting( 'footer setting' , array(
    'transport' => 'refresh',
    ));
    $wp_customize->add_section( 'footer' , array(
    'title'      => __( 'footer settings', 'litecoin' ),
    'priority'   => 30,
    ));
    $wp_customize->add_control(
    'footer setting', 
    array(
        'label'    => __( 'copyright', 'litecoin' ),
        'section'  => 'footer',
        'settings' => 'footer setting',
        'type'     => 'text',
        
    )
);
    $wp_customize->add_setting( 'facebook setting' , array(
    'transport' => 'refresh',
    ));
    $wp_customize->add_setting( 'twitter setting' , array(
    'transport' => 'refresh',
    ));
    $wp_customize->add_setting( 'linkedin setting' , array(
    'transport' => 'refresh',
    ));
    $wp_customize->add_setting( 'youtube setting' , array(
    'transport' => 'refresh',
    ));
    $wp_customize->add_setting( 'instagram setting' , array(
    'transport' => 'refresh',
    ));
    $wp_customize->add_control(
    'facebook setting', 
    array(
        'label'    => __( 'facebook profile', 'litecoin' ),
        'section'  => 'footer',
        'settings' => 'facebook setting',
        'type'     => 'text',
        
    )
);$wp_customize->add_control(
    'twitter setting', 
    array(
        'label'    => __( 'twitter profile', 'litecoin' ),
        'section'  => 'footer',
        'settings' => 'twitter setting',
        'type'     => 'text',
        
    )
);$wp_customize->add_control(
    'linkedin setting', 
    array(
        'label'    => __( 'linkedin profile', 'litecoin' ),
        'section'  => 'footer',
        'settings' => 'linkedin setting',
        'type'     => 'text',
        
    )
);$wp_customize->add_control(
    'youtube setting', 
    array(
        'label'    => __( 'youtube profile', 'litecoin' ),
        'section'  => 'footer',
        'settings' => 'youtube setting',
        'type'     => 'text',
        
    )
);$wp_customize->add_control(
    'instagram setting', 
    array(
        'label'    => __( 'instagram profile', 'litecoin' ),
        'section'  => 'footer',
        'settings' => 'instagram setting',
        'type'     => 'text',
        
    )
);
}
add_action( 'customize_register', 'litecoin_customize_register' );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Настройки',
        'menu_title'    => 'Настройки сайта',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
?>