<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Site Footer Logo",
                        "desc" => "Upload or put the site logo link",
                        "id" => "ale_footerlogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Insert The Slider Slug",
                        "desc" => "Get the slug on the Sliders Setting Page.",
                        "id" => "ale_homesliderslug",
                        "std" => "",
                        "type" => "text",
    );

    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. Default background is the #f5f5f5 color",
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => "Show Site Preloader",
                        "desc" => "Description kakoito.",
                        "id" => "ale_backcover",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

    $options[] = array( "name" => "Copyrights",
                        "desc" => "Your copyright message.",
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor");

    $options[] = array( "name" => "Home Page Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_homeslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Blog Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_blogslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the body Font from Google Library",
                        "desc" => "The default Font is - Droid Serif",
                        "id" => "ale_headerfont",
                        "std" => "Droid+Serif",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the body Font (Extended) from Google Library",
                        "desc" => "The default Font (extended)",
                        "id" => "ale_headerfontex",
                        "std" => "400,400i,700,700i",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Playfair Display SC",
                        "id" => "ale_mainfont",
                        "std" => "Playfair+Display+SC",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Headers Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 400,400italic",
                        "id" => "ale_mainfontex",
                        "std" => "400,400i,700,700i,900,900i",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Playfair Display",
                        "id" => "ale_thirdfont",
                        "std" => "Playfair+Display",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Headers Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 400,400italic",
                        "id" => "ale_thirdfontex",
                        "std" => "400",
                        "type" => "text",
    );

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '22px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '20px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '18px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '16px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '14px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '12px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '11px','face' => 'Libre+Baskerville','style' => 'normal','color' => '#111111'),
                        'type' => 'typography');

	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "Twitter",
                        "desc" => "Your twitter profile URL.",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");
	$options[] = array( "name" => "Facebook",
						"desc" => "Your facebook profile URL.",
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");
    $options[] = array( "name" => "Instagram",
                        "desc" => "Your instagram profile URL.",
                        "id" => "ale_insta",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Youtube",
                        "desc" => "Your Youtube link",
                        "id" => "ale_yt",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Show RSS",
                        "desc" => "Check if you want to show the RSS icon on your site",
                        "id" => "ale_rssicon",
                        "std" => "1",
                        "type" => "checkbox");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");

    $options[] = array( "name" => "Footer Settings",
                        "type" => "heading");

    $options[] = array( "name" => "Phone Number",
                        "desc" => "Insert your phone number",
                        "id" => "ale_footer_phone",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Address",
                        "desc" => "Insert your address",
                        "id" => "ale_footer_address",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Email",
                        "desc" => "Insert your email",
                        "id" => "ale_footer_email",
                        "std" => "",
                        "type" => "text");
	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle",
                        "std" => "Select a category",
                        "type" => "text");



    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle_1",
                        "std" => "",
                        "type" => "images",
                        "options" => array(
                            'image_1' => $imagepath.'/1col.png',
                            'image_2' => $imagepath.'/2cl.png',
                            'image_3' => $imagepath.'/2cr.png', ),
        );

    $options[] = array( "name" => "Maps Settings",
                        "type" => "heading");

    $options[] = array( "name" => "Maps Icon",
                        "desc" => "Upload or put the icon link",
                        "id" => "ale_mapicon",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Map Style",
                        "desc" => "Insert the map style from Snazzy Maps Service",
                        "id" => "ale_mapstaly",
                        "std" => "",
                        "type" => "text");
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'contacts_page_metabox',
        'title'      => 'Contacts Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox

        'fields' => array(
            array(
                'name' => __('Phone Label','aletheme'),
                'desc' => 'Insert the text',
                'id'   => $prefix . 'phone_label',
                'std'   =>'Phone',
                'type' => 'text',
            ),
            array(
                'name' => __('Phone Number','aletheme'),
                'desc' => 'Insert the text',
                'id'   => $prefix . 'phone_number',
                'type' => 'text',
            ),
            array(
                'name' => __('Address Label','aletheme'),
                'desc' => 'Insert the text',
                'id'   => $prefix . 'address_label',
                'std'   => 'Address',
                'type' => 'text',
            ),
            array(
                'name' => __('Address','aletheme'),
                'desc' => 'Insert the text',
                'id'   => $prefix . 'address',
                'type' => 'text',
            ),
            array(
                'name' => __('Email Label','aletheme'),
                'desc' => 'Insert the text',
                'id'   => $prefix . 'email_label',
                'std'   =>'Email',
                'type' => 'text',
            ),
            array(
                'name' => __('Email','aletheme'),
                'desc' => 'Insert the text',
                'id'   => $prefix . 'email',
                'type' => 'text',
            ),
        )
    );






	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-kvadrat',
                'width'     => 225,
                'height'    => 225,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-vertical',
                'width'     => 470,
                'height'    => 225,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-bigkvadrat',
                'width'     => 470,
                'height'    => 470,
                'crop'      => true,
            ),
        ),
    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt'
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
        'services' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-format-audio',
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Сервис',
            'multiple' => 'Сервисы'
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),


        'services-category'    => array(
            'for'        => array('services'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Категория',
            'multiple'    => 'Категории',
        ),
        'price'    => array(
            'for'        => array('services'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Цена сервиса',
            'multiple'    => 'Цены сервисов',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array();
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}