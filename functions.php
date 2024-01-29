<?php

/**
 * frondendie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package frondendie
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.1.3');
}

if (!function_exists('frondendie_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function frondendie_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on frondendie, use a find and replace
		 * to change 'frondendie' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('frondendie', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'frondendie'),
				'menu-2' => esc_html__('Secondary', 'frondendie'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'frondendie_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		add_theme_support('menus');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'frondendie_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function frondendie_content_width()
{
	$GLOBALS['content_width'] = apply_filters('frondendie_content_width', 640);
}
add_action('after_setup_theme', 'frondendie_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function frondendie_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'frondendie'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'frondendie'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'frondendie_widgets_init');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// remove_action( 'wp_head',   'wp_print_styles',          8 );
// remove_action( 'wp_head',   'wp_print_head_scripts',    9 );

/**
 * Enqueue scripts and styles.
 */
function frondendie_scripts()
{
	wp_style_add_data('frondendie-style', 'rtl', 'replace');

	// wp_style_add_data( 'galaxyr-style', 'rtl', 'replace' );
	wp_deregister_script('jquery');
	wp_deregister_script('wp-embed-js');
	// wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true );
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true);

	if (is_front_page()) {
		wp_enqueue_style('critical-style', get_template_directory_uri() . '/css/home-style.css', array(), _S_VERSION);
		wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', '', _S_VERSION, true);
		wp_enqueue_script('gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', '', _S_VERSION, true);
		wp_enqueue_script('panther', get_template_directory_uri() . '/js/panther.js', array('jquery'), _S_VERSION, true);
	} else {
		wp_enqueue_style('frondendie-style', get_stylesheet_uri(), array(), _S_VERSION);
	}

	wp_enqueue_script('slick-slider', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('modal', get_template_directory_uri() . '/js/modal.js', array('jquery'), _S_VERSION, true);
	wp_enqueue_script('site-js', get_template_directory_uri() . '/js/function.js', array('jquery', 'slick-slider'), _S_VERSION, true);


	if (is_singular('projects')) {
		wp_enqueue_style('projects-style', get_template_directory_uri() . '/css/projects.css', array(), _S_VERSION);
		wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', '', _S_VERSION, true);
		wp_enqueue_script('gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', '', _S_VERSION, true);
		wp_enqueue_script('lottie', get_template_directory_uri() . '/js/lottie.js', '', _S_VERSION, true);
		wp_enqueue_script('projects-scripts', get_template_directory_uri() . '/js/projects.js', '', _S_VERSION, true);
	}

	if (is_archive()) {
		wp_enqueue_style('archive-style', get_template_directory_uri() . '/css/archive.css', array(), _S_VERSION);
		wp_enqueue_script('archive-scripts', get_template_directory_uri() . '/js/archive.js', array('jquery', 'slick-slider'), _S_VERSION, true);
	}

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	if (is_page_template('page-web-design-template.php')) {
		wp_enqueue_style('webdisign-style', get_template_directory_uri() . '/css/webdisign.css', array(), _S_VERSION);
		wp_enqueue_script('webdisign-scripts', get_template_directory_uri() . '/js/webdisign.js', '', _S_VERSION, true);
		// wp_enqueue_script( 'countdown-scripts', get_template_directory_uri() . '/js/countdown.js', '', _S_VERSION, true );
	}

	if (is_page_template('page-development-template.php') || is_page_template('page-seo-template-new.php') || is_page_template('page-web-design-template.php')) {
		wp_enqueue_style('development-style', get_template_directory_uri() . '/css/development.css', array(), _S_VERSION);
		wp_enqueue_script('development-scripts', get_template_directory_uri() . '/js/development.js', '', _S_VERSION, true);
		wp_enqueue_script('countdown-scripts', get_template_directory_uri() . '/js/countdown.js', '', _S_VERSION, true);
	}
}
add_action('wp_enqueue_scripts', 'frondendie_scripts');

function frondendie_admin_scripts()
{
	wp_enqueue_style('frondendie-admin', get_template_directory_uri() . '/css/admin.css', array(), _S_VERSION);
}

add_action('admin_enqueue_scripts', 'frondendie_admin_scripts');

// /**
//  * Implement the Custom Header feature.
//  */
// require get_template_directory() . '/inc/custom-header.php';
//
// /**
//  * Custom template tags for this theme.
//  */
// require get_template_directory() . '/inc/template-tags.php';
//
// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';
//
// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';

// /**
//  * Load Jetpack compatibility file.
//  */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/inc/jetpack.php';
// }

/**
 * SCF fields functions
 */
// require get_template_directory() . '/scf/functions.php';

/**
 * Template case developement
 */
require get_template_directory() . '/scf/case-template.php';

/**
 * Template Development page
 */
require get_template_directory() . '/scf/dev-template.php';

/**
 * Template SEO project page
 */
require get_template_directory() . '/scf/seo-template.php';

/**
 * Template SEO project page
 */
require get_template_directory() . '/scf/seo-template-new.php';

/**
 * Template projects
 */
require get_template_directory() . '/scf/projects.php';

/**
 * Review fields
 */
require get_template_directory() . '/scf/review.php';

/**
 * Scf blog page
 */
require get_template_directory() . '/scf/blog.php';

/**
 * Scf posts fields
 */
require get_template_directory() . '/scf/post.php';

/**
 * Scf team members
 */
require get_template_directory() . '/scf/team.php';

/**
 * Get About us pages template
 */
require get_template_directory() . '/scf/about-us.php';

/**
 * Get Web design pages template
 */
require get_template_directory() . '/scf/web-design-template.php';

/**
 * Get Subscribe thanks pages template
 */
require get_template_directory() . '/scf/subscribe-thank.php';

/**
 * Get Web design pages template
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Get Start project form
 */
require get_template_directory() . '/inc/start-project-form.php';
require get_template_directory() . '/inc/start-project-form-script.php';

add_filter('big_image_size_threshold', '__return_false');

/**
 * Customize menu
 */
class description_walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0)
	{
		global $wp_query;
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

		$attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
		$attributes .= !empty($item->description)        ? ' data-letter="'   . esc_attr($item->description) . '"' : '';

		$prepend = '';
		$append = '';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $prepend . apply_filters('the_title', $item->title, $item->ID) . $append;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}


add_action('init', 'reviews_register_post_type_init'); // Использовать функцию только внутри хука init

function reviews_register_post_type_init()
{
	$labels = array(
		'name' => 'Reviews',
		'singular_name' => 'Review', // админ панель Добавить->Функцию
		'add_new' => 'Add review',
		'add_new_item' => 'Add new review', // заголовок тега <title>
		'edit_item' => 'Edit review',
		'new_item' => 'New review',
		'all_items' => 'All reviews',
		'view_item' => 'Show reviews in site',
		'search_items' => 'Search review',
		'not_found' =>  'Review not found',
		'not_found_in_trash' => 'Reviews not found in trash',
		'menu_name' => 'Reviews' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => 'testimonials',
		'menu_icon' => 'dashicons-admin-comments', // иконка в меню
		'menu_position' => 22, // порядок в меню
		'supports' => array('title', 'editor', 'thumbnail')
	);
	register_post_type('reviews', $args);
}

add_action('init', 'cases_register_post_type_init'); // Использовать функцию только внутри хука init

function cases_register_post_type_init()
{
	$labels = array(
		'name'			 	=> 'Projects',
		'singular_name'	 	=> 'Project', // админ панель Добавить->Функцию
		'add_new' 		 	=> 'Add project',
		'add_new_item' 	 	=> 'Add new project', // заголовок тега <title>
		'edit_item' 	 	=> 'Edit project',
		'new_item'		 	=> 'New project',
		'all_items'	  	 	=> 'All projects',
		'view_item'		 	=> 'Show projects in site',
		'search_items' 	 	=> 'Search project',
		'not_found' 	 	=>  'Project not found',
		'not_found_in_trash' => 'Projects not found in trash',
		'menu_name' 	 	=> 'Projects' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'project', 'with_front' => false),
		'capability_type'    => 'post',
		'has_archive'        => 'portfolio',
		'menu_icon'			 => 'dashicons-layout', // иконка в меню
		'menu_position' 	 => 21, // порядок в меню
		'supports' 			 => array('title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields'),
		'taxonomies' 		 => array('category')
	);
	register_post_type('projects', $args);
}

add_action('init', 'team_register_post_type_init'); // Использовать функцию только внутри хука init

function team_register_post_type_init()
{
	$labels = array(
		'name'			 	=> 'Team',
		'singular_name'	 	=> 'Team member', // админ панель Добавить->Функцию
		'add_new' 		 	=> 'Add team member',
		'add_new_item' 	 	=> 'Add new team member', // заголовок тега <title>
		'edit_item' 	 	=> 'Edit team member',
		'new_item'		 	=> 'New team member',
		'all_items'	  	 	=> 'All team members',
		'view_item'		 	=> 'Show team members in site',
		'search_items' 	 	=> 'Search team member',
		'not_found' 	 	=>  'Team member not found',
		'not_found_in_trash' => 'Team members not found in trash',
		'menu_name' 	 	=> 'Our team' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'menu_icon'			 => 'dashicons-groups', // иконка в меню
		'menu_position' 	 => 22, // порядок в меню
		'supports' 			 => array('title', 'editor', 'thumbnail'),
		'taxonomies' 		 => array()
	);
	register_post_type('teams', $args);
}

function breadcrumbs()
{

	// получаем номер текущей страницы
	$page_num = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$separator = '<span class="sep"></span>'; //  разделяем обычным слэшем, но можете чем угодно другим

	echo '<div class="container_center"><div class="breadcrumbs">';
	// если главная страница сайта
	if (is_front_page()) {

		if ($page_num > 1) {
			echo '<a href="' . site_url() . '">Main page</a>' . $separator . $page_num . '';
		} else {
			echo 'Вы находитесь на главной странице';
		}
	} else { // не главная

		echo '<a href="' . site_url() . '">Main page</a>' . $separator;

		if (is_singular(array('projects'))) {

			echo '<a href="' . site_url() . '/portfolio/">' . get_post_type() . '</a>' . $separator . get_the_title();
		} elseif (is_single() && !is_front_page()) { // записи

			echo '<a href="' . site_url() . '/blog/">Blog</a>' . $separator . get_the_title();
		} elseif (is_page() && !is_front_page()) { // страницы WordPress

			the_title();
		} elseif (!is_front_page() && is_home()) { // страницы WordPress

			echo "Blog";
		} elseif (is_category()) {

			single_cat_title();
		} elseif (is_archive()) {
			if (is_post_type_archive('reviews')) {
				echo "Testimonials";
			} elseif (is_post_type_archive('projects')) {
				echo 'Portfolio';
			} else {
				echo "Archive";
			}

			// } elseif ( is_day() ) { // архивы (по дням)
			//
			// 	echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			// 	echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
			// 	echo get_the_time('d');
			//
			// } elseif ( is_month() ) { // архивы (по месяцам)
			//
			// 	echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			// 	echo get_the_time('F');
			//
			// } elseif ( is_year() ) { // архивы (по годам)
			//
			// 	echo get_the_time( 'Y' );
			//
			// } elseif ( is_author() ) { // архивы по авторам
			//
			// 	global $author;
			// 	$userdata = get_userdata( $author );
			// 	echo 'Published ' . $userdata->display_name;

		} elseif (is_404()) { // если страницы не существует

			echo 'Error 404';
		}

		if ($page_num > 1) { // номер текущей страницы
			echo '' . $page_num . '';
		}
	}

	echo '</div></div>';
}

// Allow JSON File Uploads In WordPress
function cc_mime_types($mimes)
{
	$mimes['json'] = 'application/json';
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');


## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function ($title) {
	return preg_replace('~^[^:]+: ~', '', $title);
});

// the_excerpt_max_charlength( 10, 140 );
function the_excerpt_max_charlength($id,  $charlength)
{
	$excerpt = get_the_excerpt($id);
	$excerpt = preg_replace('#(<h1.*?>).*?(</h1>)#', '$1$2', $excerpt);
	$excerpt = strip_tags($excerpt);
	$charlength++;


	if (mb_strlen($excerpt) > $charlength) {
		$subex = mb_substr($excerpt, 0, $charlength - 5);
		$exwords = explode(' ', $subex);
		$excut = - (mb_strlen($exwords[count($exwords) - 1]));
		if ($excut < 0) {
			echo mb_substr($subex, 0, $excut);
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}

add_filter('excerpt_more', function ($more) {
	return '...';
});

function get_post_content()
{
	$content = get_the_content();
	$content = preg_replace('#(<h1.*?>).*?(</h1>)#', '', $content);
	echo $content;
}

function get_post_title($id = null)
{
	$titles = [];
	if (preg_match_all("/\<h1.*\<\/h1>/iu", get_the_content($id), $titles)) {
		foreach ($titles as $item) {
			foreach ($item as $title) {
				echo strip_tags($title, '<span>');
			}
		}
	} else {
		echo get_the_title($id);
	}
}



add_action('add_meta_boxes', 'add_sticky_project_option');

function add_sticky_project_option()
{
	$screens = array('projects');
	add_meta_box('pseudosticky', 'Status & visibility', 'add_box_sticky', $screens, 'side', 'high');
}

function add_box_sticky($post, $metabox)
{
	$entered = get_post_meta($post->ID, 'pseudosticky', true);
?>
	<label><input name="pseudosticky" type="checkbox" <?php if ($entered == "on") echo ' checked="checked"'; ?>> Stick to the top of the archive</label>
<?php
}


add_action('save_post', 'save_sticky_project_option');

function save_sticky_project_option($post_id)
{
	// Убедимся что поле установлено.
	if (!isset($_POST['pseudosticky']))
		return;

	// если это автосохранение ничего не делаем
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	// проверяем права юзера
	if (!current_user_can('edit_post', $post_id))
		return;

	$allposts = get_posts('numberposts=-1&post_type=projects&post_status=any');

	foreach ($allposts as $postinfo) {
		delete_post_meta($postinfo->ID, 'pseudosticky');
	}

	// Все ОК. Теперь, нужно найти и сохранить данные
	// Очищаем значение поля input.
	$my_data = sanitize_text_field($_POST['pseudosticky']);

	// Обновляем данные в базе данных.
	update_post_meta($post_id, 'pseudosticky', $my_data);
}

// Disable Wordpress Big Image Size Scaling
add_filter('big_image_size_threshold', '__return_false');


function getUrlMimeType($url)
{
	$file_info = pathinfo($url);
	return $file_info['extension'];
}
