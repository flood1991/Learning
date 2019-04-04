<div id="footer-outer" data-midnight="light" data-cols="1" data-custom-color="true" data-disable-copyright="false" data-matching-section-color="true" data-copyright-line="false" data-using-bg-img="false" data-bg-img-overlay="0.9" data-full-width="false" data-using-widget-area="true">
    <div id="footer-widgets" data-cols="1">
        <div class="container">
            <div class="row">
                <div class="col span_12">
                    <div id="media_image-2" class="  widget widget_media_image">
                        <?php
                            $logo_footer = get_field('logo_footer', 'option');
                            if( !empty($logo_footer) ):
                        ?>
                        <img src="<?php echo $logo_footer['url']; ?>" class="image wp-image-6284  attachment-medium size-medium" alt="" style="max-width: 100%; height: auto;" height="375.04" width="1035.1" />
                        <?php 
                        endif;
                        ?>
                        </div>
                    <div id="mc4wp_form_widget-2" class="  widget widget_mc4wp_form_widget">
                        <h4><?php the_field('sign_title', 'option');?></h4>
                        <script>(function() {
                                if (!window.mc4wp) {
                                    window.mc4wp = {
                                        listeners: [],
                                        forms    : {
                                            on: function (event, callback) {
                                                window.mc4wp.listeners.push({
                                                    event   : event,
                                                    callback: callback
                                                });
                                            }
                                        }
                                    }
                                }
                            })();
                        </script>
                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-3322" method="post" data-id="3322" data-name="Newsletter"><div class="mc4wp-form-fields">
                                <p>
                                    <label>Email address: </label>
                                    <input type="email" name="EMAIL" placeholder="<?php the_field('form_placeholder', 'option');?>" required />
                                </p>
                                <p>
                                    <input type="submit" value="<?php the_field('button_text', 'option');?>" />
                                </p></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1552332465" /><input type="hidden" name="_mc4wp_form_id" value="3322" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form></div> </div>
            </div>
        </div>
    </div>
    <div class="row" id="copyright" data-layout="centered">
        <div class="container">
            <div class="col span_7 col_last">
                <ul class="social">
                    <?php if (get_theme_mod('twitter setting') != ''):?>
                    <li><a target="_blank" href="<?php echo get_theme_mod('twitter setting'); ?>"><i class="fa fa-twitter"></i> </a></li> 
                    <?php endif; ?>
                    <?php if (get_theme_mod('facebook setting') != ''):?>
                    <li><a target="_blank" href="<?php echo get_theme_mod('facebook setting'); ?>"><i class="fa fa-facebook"></i> </a></li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('linkedin setting') != ''):?> 
                    <li><a target="_blank" href="<?php echo get_theme_mod('linkedin setting'); ?>"><i class="fa fa-linkedin"></i> </a></li>
                    <?php endif; ?> 
                    <?php if (get_theme_mod('youtube setting') != ''):?>
                    <li><a target="_blank" href="<?php echo get_theme_mod('youtube setting'); ?>"><i class="fa fa-youtube-play"></i> </a></li> 
                    <?php endif; ?>
                    <?php if (get_theme_mod('instagram setting') != ''):?>
                    <li><a target="_blank" href="<?php echo get_theme_mod('instagram setting'); ?>"><i class="fa fa-instagram"></i></a></li> 
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col span_5">
                <div class="widget">
                </div>
                <p><?php echo get_theme_mod('footer setting'); ?> <p>
                <?php if( have_rows('privacy_policy', 'option') ): 
                     while( have_rows('privacy_policy', 'option') ): the_row();?>
                                             <a href="<?php the_sub_field('policy_url');?>"><?php the_sub_field('policy_text');?></a><br>
                                         <?php endwhile;
                                             endif;?> 
                                         </p> </p>
            </div>
        </div>
    </div>
</div>
<div id="slide-out-widget-area-bg" class="slide-out-from-right dark"></div>
<div id="slide-out-widget-area" class="slide-out-from-right" data-dropdown-func="separate-dropdown-parent-link" data-back-txt="Back">
    <div class="inner-wrap">
        <div class="inner" data-prepend-menu-mobile="false">
            <a class="slide_out_area_close" href="#">
                <span class="close-wrap"> <span class="close-line close-line1"></span> <span class="close-line close-line2"></span> </span> </a>
            <div class="off-canvas-menu-container mobile-only">
                <div class="secondary-header-text">Free shipping + free exchanges on all items!</div>
                

                <?php wp_nav_menu(array('theme_location' => 'header_menu',
                                                        'container' => false,
                                                        'menu_class' => 'sf-menu',
                                                        'items_wrap'     => '<ul  class="%2$s">%3$s</ul>',
                                                        'depth' => 2,
                                                        'walker' => new Walker_menu()
                                ));?>
                </ul>
                <ul class="menu secondary-header-items"> </ul>
            </div>
        </div>
        <div class="bottom-meta-wrap">
            <ul class="off-canvas-social-links">
            <?php if (get_theme_mod('twitter setting') != ''):?>
                    <li><a target="_blank" href="<?php echo get_theme_mod('twitter setting'); ?>"><i class="fa fa-twitter"></i> </a></li> 
                    <?php endif; ?>
                    <?php if (get_theme_mod('facebook setting') != ''):?>
                    <li><a target="_blank" href="<?php echo get_theme_mod('facebook setting'); ?>"><i class="fa fa-facebook"></i> </a></li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('linkedin setting') != ''):?> 
                    <li><a target="_blank" href="<?php echo get_theme_mod('linkedin setting'); ?>"><i class="fa fa-linkedin"></i> </a></li>
                    <?php endif; ?> 
                    <?php if (get_theme_mod('youtube setting') != ''):?>
                    <li><a target="_blank" href="<?php echo get_theme_mod('youtube setting'); ?>"><i class="fa fa-youtube-play"></i> </a></li> 
                    <?php endif; ?>
                    <?php if (get_theme_mod('instagram setting') != ''):?>
                    <li><a target="_blank" href="<?php echo get_theme_mod('instagram setting'); ?>"><i class="fa fa-instagram"></i></a></li> 
                    <?php endif; ?>
        </ul></div></div>
</div>
</div>
<a id="to-top" class="mobile-enabled"><i class="fa fa-angle-up"></i></a>
<div class="nectar-quick-view-box-backdrop"></div>
<div class="nectar-quick-view-box" data-image-sizing="cropped">
    <div class="inner-wrap">
        <div id="close">
            <a href="#" class="no-ajaxy">
                <span class="close-wrap"> 
                    <span class="close-line close-line1"></span> 
                    <span class="close-line close-line2"></span> 
                </span>
            </a>
        </div>
        <div class="product-loading">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="preview_image"></div>
        <div class="inner-content">
            <div class="product">
                <div class="product type-product">
                    <div class="woocommerce-product-gallery">
                    </div>
                    <div class="summary entry-summary scrollable">
                        <div class="summary-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php wp_footer();?> 



<script type="text/javascript">
    var verifyCallback = function(response) {
        alert(response);
    };
    var onloadCallback = function() {
        if ( jQuery('#woo_recaptcha_1').length ) {
            grecaptcha.render('woo_recaptcha_1', {
                'sitekey' : '6LexN4UUAAAAANsUFaCtax5QzYVb_c-BOvaXvQgX',
            });
        }
        if ( jQuery('#woo_recaptcha_2').length ) {
            grecaptcha.render('woo_recaptcha_2', {
                'sitekey' : '6LexN4UUAAAAANsUFaCtax5QzYVb_c-BOvaXvQgX',
            });
        }
    };
</script>
<script>(function() {function addEventListener(element,event,handler) {
        if(element.addEventListener) {
            element.addEventListener(event,handler, false);
        } else if(element.attachEvent){
            element.attachEvent('on'+event,handler);
        }
    }function maybePrefixUrlField() {
        if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
            this.value = "http://" + this.value;
        }
    }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if( urlFields && urlFields.length > 0 ) {
            for( var j=0; j < urlFields.length; j++ ) {
                addEventListener(urlFields[j],'blur',maybePrefixUrlField);
            }
        }/* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if( testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for(var i=0; i<dateFields.length; i++) {
                if(!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if(!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();</script> <script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wpApiSettings = {"root":"https:\/\/litecoin-foundation.org\/wp-json\/","nonce":"b5c8e378d6","versionString":"wp\/v2\/"};
    var wpApiSettings = {"root":"https:\/\/litecoin-foundation.org\/wp-json\/","nonce":"b5c8e378d6","versionString":"wp\/v2\/"};
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var edsanimate_options = {"offset":"75","hide_hz_scrollbar":"1","hide_vl_scrollbar":"0"};
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"https:\/\/litecoin-foundation.org\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_2ac53ea5f4556ea9e62599ffdc35ba88","fragment_name":"wc_fragments_2ac53ea5f4556ea9e62599ffdc35ba88"};
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var mailchimp_public_data = {"site_url":"https:\/\/litecoin-foundation.org","ajax_url":"https:\/\/litecoin-foundation.org\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type='text/javascript' src='../chimpstatic.com/mcjs-connected/js/users/e4553e9854bbab7ce01ecf525/fda960cde3bdf87e8e30c318abe12.js?ver=2.1.14'></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var nectarLove = {"ajaxurl":"https:\/\/litecoin-foundation.org\/wp-admin\/admin-ajax.php","postID":"76","rooturl":"https:\/\/litecoin-foundation.org","pluginPages":["https:\/\/litecoin-foundation.org\/shop\/","https:\/\/litecoin-foundation.org\/shop\/?sidebar=true"],"disqusComments":"false","loveNonce":"7fa2217e4f","mapApiKey":""};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
    var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
    /* ]]> */
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
    var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wpuf_subscription = {"pack_notice":"Please Cancel Your Currently Active Pack first!"};
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
</script>

<!--[if lte IE 9]>
<script type='text/javascript' src='https://litecoin-foundation.org/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.3.3'></script>
<![endif]-->
<script>
    var bootstrap_between_768_992  = '<link href="https://litecoin-foundation.org/wp-content/plugins/supportcandy/asset/css/responsive/bootstrap-between-768-992.css?version=1.1.5" rel="stylesheet">';
    var bootstrap_between_992_1200 = '<link href="https://litecoin-foundation.org/wp-content/plugins/supportcandy/asset/css/responsive/bootstrap-between-992-1200.css?version=1.1.5" rel="stylesheet">';
    var bootstrap_max_width_767    = '<link href="https://litecoin-foundation.org/wp-content/plugins/supportcandy/asset/css/responsive/bootstrap-max-width-767.css?version=1.1.5" rel="stylesheet">';
    var bootstrap_min_width_768    = '<link href="https://litecoin-foundation.org/wp-content/plugins/supportcandy/asset/css/responsive/bootstrap-min-width-768.css?version=1.1.5" rel="stylesheet">';
    var bootstrap_min_width_992    = '<link href="https://litecoin-foundation.org/wp-content/plugins/supportcandy/asset/css/responsive/bootstrap-min-width-992.css?version=1.1.5" rel="stylesheet">';
    var bootstrap_min_width_1200   = '<link href="https://litecoin-foundation.org/wp-content/plugins/supportcandy/asset/css/responsive/bootstrap-min-width-1200.css?version=1.1.5" rel="stylesheet">';

    jQuery(document).ready(function(){
        wpsc_apply_responsive_bootstrap();
    });

    function wpsc_apply_responsive_bootstrap(){

        if (jQuery('.bootstrap-iso').length > 0) {

            var wpsc_width = jQuery('.bootstrap-iso').width();

            /* @media screen and (max-width: 767px) */
            if( wpsc_width < 768 ){
                jQuery('html').append(bootstrap_max_width_767);
            }

            /* @media (min-width: 768px) */
            if( wpsc_width >= 768 ){
                jQuery('html').append(bootstrap_min_width_768);
            }

            /* @media (min-width: 768px) and (max-width: 991px) */
            if( wpsc_width >= 768 && wpsc_width < 992 ){
                jQuery('html').append(bootstrap_between_768_992);
            }

            /* @media (min-width: 992px) */
            if( wpsc_width >= 992 ){
                jQuery('html').append(bootstrap_min_width_992);
            }

            /* @media (min-width: 992px) and (max-width: 1199px) */
            if( wpsc_width >= 992 && wpsc_width < 1200 ){
                jQuery('html').append(bootstrap_between_992_1200);
            }

            /* @media (min-width: 1200px) */
            if( wpsc_width >= 1200 ){
                jQuery('html').append(bootstrap_min_width_1200);
            }

        }
    }
</script>
</div></div>
</body>

<!-- Mirrored from litecoin-foundation.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Mar 2019 19:28:25 GMT -->
</html>