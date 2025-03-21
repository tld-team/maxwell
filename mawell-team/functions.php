<?php
/**
 * MaxxWell functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MaxxWell
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/** test print funcitons */
function dd( $array, $array2 = null ): void {
	if ( $array2 == null ) {
		echo '<pre>';
		print_r( $array );
		echo '</pre>';
	} else {
		echo '<div class="flex-container" style="display: flex"> <div class="column" style="background-color:#f5f5f5;"><pre>';
		print_r( $array );
		echo '</pre></div> <pre class="column" style="background-color:#f5eded;"><pre>';
		print_r( $array2 );
		echo '</pre></div> </div>';
	}
}

/** log function */
if ( ! function_exists( 'maxxwell_log' ) ) {
	function maxxwell_log( $entry, $mode = 'a', $file = 'maxwell_log' ): bool {
		// Get WordPress uploads directory.
		$upload_dir = wp_upload_dir();

		$upload_dir = $upload_dir['basedir'];
		$upload_dir = dirname( __FILE__ );
		// If the entry is array, json_encode.
		if ( is_array( $entry ) ) {
			$entry = json_encode( $entry );
		}
		// Write the log file.
		$file  = $upload_dir . '/' . $file . '.log';
		$file  = fopen( $file, $mode );
		$bytes = fwrite( $file, current_time( 'mysql' ) . "::" . $entry . "\n" );
		fclose( $file );

		return $bytes;
	}
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function maxxwell_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on MaxxWell, use a find and replace
		* to change 'maxxwell' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'maxxwell', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'maxxwell' ),
			'menu-2'  => esc_html__( 'Menu 1', 'maxxwell' ),
			'menu-3'  => esc_html__( 'Menu 2', 'maxxwell' ),
			'menu-4'  => esc_html__( 'Menu 3', 'maxxwell' ),
			'menu-5'  => esc_html__( 'Menu 4', 'maxxwell' ),
			'menu-6'  => esc_html__( 'Menu 5', 'maxxwell' ),
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
			'maxxwell_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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

	// Dodavanje prilagođenih veličina slika
	add_image_size( 'custom-thumbnail', 150, 150, true ); // Za male prikaze (thumbnail)
	add_image_size( 'custom-small', 480, 320, true ); // Manji ekrani (mobilni uređaji u portretnom režimu)
	add_image_size( 'custom-medium', 768, 512, true ); // Srednji ekrani (tableti, manji laptopovi)
	add_image_size( 'custom-large', 1024, 768, true ); // Veći ekrani (tableti u landscape, laptopovi)
	add_image_size( 'custom-xlarge', 1280, 960, true ); // Desktop računari, laptopovi sa većom rezolucijom
	add_image_size( 'custom-full', 1920, 1080, true ); // Full HD rezolucija za veće monitore
	add_image_size( 'custom-retina', 2400, 1600, true ); // Za Retina/HiDPI ekrane

}

add_action( 'after_setup_theme', 'maxxwell_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maxxwell_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'maxxwell_content_width', 640 );
}

add_action( 'after_setup_theme', 'maxxwell_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maxxwell_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'maxxwell' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'maxxwell' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'maxxwell_widgets_init' );

/**
 * Add SVG Mime Types
 */
function add_file_types_to_uploads( $file_types ) {
	$new_filetypes        = array();
	$new_filetypes['svg'] = 'image/svg';
	$file_types           = array_merge( $file_types, $new_filetypes );

	return $file_types;
}

add_action( 'upload_mimes', 'add_file_types_to_uploads' );

/**
 * Enqueue scripts and styles. */
function maxxwell_scripts() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );

	wp_enqueue_style( 'maxxwell-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'maxxwell-style', 'rtl', 'replace' );

	// Dodavanje lokalnih CSS fajlova (Swiper i GLightbox)
	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/dist/css/swiper-bundle.css', array(), null );
	wp_enqueue_style( 'glightbox-style', get_template_directory_uri() . '/assets/dist/css/lightbox.css', array(), null );

	// Dodavanje eksternog CSS fajla (Tabler Icons)
//	wp_enqueue_style('tabler-icons', get_template_directory_uri() . '/assets/dist/css/tabler-icons.min.css', array(), null);


	wp_enqueue_script( 'maxxwell-navigation', get_template_directory_uri() . '/assets/dist/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	// Enqueue JavaScript fajlova za frontend
	wp_enqueue_script( 'head-js', get_template_directory_uri() . '/assets/dist/js/head.js', [], null, true );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/dist/js/swiper.js', [], null, true );
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/dist/js/theme.js', [], null, true );
}

add_action( 'wp_enqueue_scripts', 'maxxwell_scripts' );


/**
 * @param $hook
 * registrovanej asseta za admin deo. Ovde se kreira tailwind sa komandom
 *
 * @code npx tailwindcss -i  ./asset/src/input.css -o ./assets/dist/output.css --watch @endcode
 */
function tailwind_dashboards_script( $hook ): void {
	$screen = get_current_screen();
	if ( $screen->is_block_editor ) {

		wp_enqueue_style( 'maxxwell-style', get_stylesheet_uri(), array(), _S_VERSION );
		wp_style_add_data( 'maxxwell-style', 'rtl', 'replace' );

		// Dodavanje lokalnih CSS fajlova (Swiper i GLightbox)
		wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/dist/css/swiper-bundle.css', array(), null );

		// Dodavanje eksternog CSS fajla (Tabler Icons)
		wp_enqueue_style( 'tabler-icons', get_template_directory_uri() . '/assets/dist/css/tabler-icons.min.css', array(), null );

		// Enqueue JavaScript fajlova za frontend
		wp_enqueue_script( 'head-js', get_template_directory_uri() . '/assets/dist/js/head.js', array(), null, true );
//	    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/dist/js/swiper.js', array('jquery'), null, true);
//	    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/dist/js/theme.js', array('jquery'), null, true);
//	    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);
		wp_enqueue_script( 'custom_dashboard', get_template_directory_uri() . '/assets/dist/js/custom_dashboard.js', array(), null, true );
		if ( $hook === 'post.php' || $hook === 'post-new.php' ) {
			wp_enqueue_script( 'preline', get_template_directory_uri() . '/assets/dist/js/preline.min.js', array(), null, true );
		}
	}
}

add_action( 'admin_enqueue_scripts', 'tailwind_dashboards_script' );
/** ======================================================================= */


/**
 * Walker_Nav_Menu
 */
require get_template_directory() . '/inc/classes/Walker_Nav_Menu.php';

/**
 * Walker_Nav_Menu
 */
require get_template_directory() . '/inc/classes/Maxwell_Block_Finder.php';


/**
 * Implement Helper functions for theme
 */
require get_template_directory() . '/inc/helper-functions.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Functions which enhance the tACF function in WordPress.
 */
require get_template_directory() . '/inc/acf-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/** Automatic include register blocks  from folder inc/register-blocks */
// define folder path
$directory_path = get_template_directory() . '/inc/register-blocks/';

// use glob function for getting all file
$php_files = glob( $directory_path . '*.php' );

if ( $php_files ) {
	// Including file
	foreach ( $php_files as $php_file ) {
		include $php_file;
	}
}

/**
 * @param $post_id
 * @param $post
 * @param $update
 *
 * @description kreiranje post mete za svaku stranicu kako bi se videli svi blokovi i rdosled blokova
 * @return void
 */
function maxwell_create_acf_blocks_list( $post_id, $post, $update ) {
	// Proverite da li je post objavljen ili ažuriran
	if ( wp_is_post_revision( $post_id ) ) {
		return;
	}
	if ( has_blocks( $post->post_content ) ) {
		$blocks     = parse_blocks( $post->post_content );
		$acf_blocks = [];
		foreach ( $blocks as $key => $block ) {
			if ( isset( $block['blockName'] ) ) {
				$acf_blocks[ $key ] = $block['blockName'];
			}
		}

		if ( ! empty( $acf_blocks ) ) {
			update_post_meta( $post_id, '_acf_blocks_list', $acf_blocks );
		} else {
			delete_post_meta( $post_id, '_acf_blocks_list' );
		}
	} else {
		delete_post_meta( $post_id, '_acf_blocks_list' );
	}
}

add_action( 'save_post', 'maxwell_create_acf_blocks_list', 10, 3 );


/**
 * @param $post_id
 *
 * @description Prisanje custom post mete za block list kako ne bi trpala bazu
 * @return void
 */
function maxwell_delete_post_meta_acf_blocks_list( $post_id ) {
	$custom_meta = get_post_meta( $post_id, 'custom_meta_key', true );

	if ( ! empty( $custom_meta ) ) {
		delete_post_meta( $post_id, 'custom_meta_key' );
	}
}

add_action( 'delete_post', 'maxwell_delete_post_meta_acf_blocks_list', 10, 1 );


function load_global_acf_blocks_list() {
	global $blocks_list;

	// Proverite da li su podaci već učitani
	if ( isset( $blocks_list ) ) {
		return;
	}

	// Dohvatanje ID-a trenutnog posta
	$post_id = get_queried_object_id();

	// Ako post_id nije validan, postavimo prazan niz i prekinemo funkciju
	if ( ! $post_id || $post_id === 0 ) {
		$global_acf_blocks_list = [];

		return;
	}
	// Dohvatite podatke iz post_meta
	$blocks_list = get_post_meta( $post_id, '_acf_blocks_list', true );

	// Ako podaci nisu pronađeni, postavite prazan niz
	if ( empty( $blocks_list ) ) {
		$blocks_list = [];
	}
}

add_action( 'template_redirect', 'load_global_acf_blocks_list', 10 );

function print_heading( $order, $block_name, $title = '', $class = '', $args = [] ): void {
	if ( isset( $order[0] ) ) {
		if ( $order[0] === $block_name ) {
			?>
            <h1 class="<?php echo $class ?>"><?php echo $title; ?></h1>
			<?php
		} else {
			?>
            <h2 class="<?php echo $class ?>"><?php echo $title; ?></h2>
			<?php
		}
	} else {
		?>
        <h2 class="<?php echo $class ?>"><?php echo $title; ?></h2>
		<?php
	}
}
function parse_link( $link, $icon = '', $class = 'inline-flex items-center justify-center gap-2 rounded-md bg-primary px-8 py-3 text-base text-white transition-all duration-500 hover:bg-primary-700' ): void {
	if ( ! empty( $icon ) ) :
		?>
        <a href="<?php echo $link['url'] ?>"
           title="<?php echo htmlspecialchars($link['title'], ENT_QUOTES, 'UTF-8'); ?>"
           aria-label="<?php echo htmlspecialchars($link['title'], ENT_QUOTES, 'UTF-8'); ?>"
           target="<?php echo !empty($link['target']) ? htmlspecialchars($link['target'], ENT_QUOTES, 'UTF-8') : '_self'; ?>"
           class="<?php echo htmlspecialchars($class, ENT_QUOTES, 'UTF-8'); ?>">
	        <?php echo $link['title']; ?>
			<?php if ( $icon == 'yes' ): ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="size-6">
                    <path d="M18 8L22 12L18 16"/>
                    <path d="M2 12H22"/>
                </svg>
			<?php elseif ( ! empty( $icon ) && $icon != 'yes' ): ?>
				<?php echo $icon ?>
			<?php endif; ?>
        </a>
	<?php
	else:
		?>
        <a href="<?php echo htmlspecialchars($link['url'], ENT_QUOTES, 'UTF-8'); ?>"
           title="<?php echo htmlspecialchars($link['title'], ENT_QUOTES, 'UTF-8'); ?>"
           aria-label="<?php echo htmlspecialchars($link['title'], ENT_QUOTES, 'UTF-8'); ?>"
           target="<?php echo !empty($link['target']) ? htmlspecialchars($link['target'], ENT_QUOTES, 'UTF-8') : '_self'; ?>"
           class="<?php echo htmlspecialchars($class, ENT_QUOTES, 'UTF-8'); ?>">
			<?php echo $link['title']; ?>
        </a>

	<?php
	endif;
}