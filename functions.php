<?php
if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
	add_image_size('pill', 450, 225, true );
	add_image_size('head', 1600, 300, true );
	add_image_size('box', 600, 425, true );
	add_image_size('banner', 995, 255, true );
	add_image_size('campana', 482, 277, true );
	//add_image_size('slider', 1100, 550, true );
}	
	add_post_type_support('page', 'excerpt');
?>
<?php 
function register_my_menu() {
	register_nav_menu( 'primary', 'Menú principal');
}
add_action( 'init', 'register_my_menu' );
?>
<?php 


add_action('init', 'prestadores_register');
function prestadores_register() {
    $args = array(
        'label' => 'Prestadores de salud',
        'singular_label' => 'Prestador',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'prestadores'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('prestadores', $args);
    flush_rewrite_rules();
}


add_action('init', 'prestadores_1_register');
function prestadores_1_register() {
    $args = array(
        'label' => 'Prestadores Internacionales',
        'singular_label' => 'Prestador Internacional',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'prestadores_1'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('prestadores_1', $args);
    flush_rewrite_rules();
}

add_action('init', 'otras_filiales_register');
function otras_filiales_register() {
    $args = array(
        'label' => 'Otras Filiales',
        'singular_label' => 'Filial',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'otras_filiales'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('otras_filiales', $args);
    flush_rewrite_rules();
}


add_action('init', 'seguros_de_salud_register');
function seguros_de_salud_register() {
    $args = array(
        'label' => 'Seguros de Salud',
        'singular_label' => 'Seguro',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'seguros-de-salud'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('seguros_de_salud', $args);
    flush_rewrite_rules();
}

add_action('init', 'slides_register');
function slides_register() {
    $args = array(
        'label' => 'Slides',
        'singular_label' => 'Slide',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'slides'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('slides', $args);
    flush_rewrite_rules();
}

add_action('init', 'antecedentes_register');
function antecedentes_register() {
    $args = array(
        'label' => 'Antecedentes',
        'singular_label' => 'Antecedente',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'antecedentes'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('antecedentes', $args);
    flush_rewrite_rules();
}

add_action('init', 'directorio_register');
function directorio_register() {
    $args = array(
        'label' => 'Directorio',
        'singular_label' => 'Directorio',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'directorio'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('directorio', $args);
    flush_rewrite_rules();
}

register_taxonomy("area", array('directorio'), array("hierarchical" => true, "label" => "Áreas", "singular_label" => "Área", "rewrite" => true));

add_action('init', 'documentos_register');
function documentos_register() {
    $args = array(
        'label' => 'Documentos y Revisiones',
        'singular_label' => 'Documentos',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'documentos'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('documentos', $args);
    flush_rewrite_rules();
}

add_action('init', 'practicas_register');
function practicas_register() {
    $args = array(
        'label' => 'Prácticas de gobierno corporativo',
        'singular_label' => 'Práctica',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'nuestra-empresa/gobiernos-corporativos/practicas'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('practicas', $args);
    flush_rewrite_rules();
}

/* add_action('init', 'accionistas_register');
function accionistas_register() {
    $args = array(
        'label' => 'Accionistas',
        'singular_label' => 'Accionistas',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'accionistas'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('accionistas', $args);
    flush_rewrite_rules();
} */

add_action('init', 'campanas_register');
function campanas_register() {
    $args = array(
        'label' => 'Campañas',
        'singular_label' => 'Campaña',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'campanas'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('campanas', $args);
    flush_rewrite_rules();
}

?>
<?php 

function get_type_for_attachment($post_id) {
  $type = get_post_mime_type($post_id);
  switch ($type) {
    case 'image/jpeg':
    case 'image/png':
    case 'image/gif':
      return 'img'; break;
    case 'video/mpeg':
    case 'video/mp4': 
    case 'video/quicktime':
      return 'Vid'; break;
    case 'text/csv':
    case 'text/plain': 
    case 'text/xml':
      return 'Doc'; break;
	case 'application/pdf':
		return 'PDF'; break;
	case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
	case 'application/msword':
		return '.Doc'; break;
	case 'application/vnd.ms-excel':
	case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
		return '.Xls'; break;
	case 'application/vnd.ms-powerpoint' :
	case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
		return 'Ppt'; break;
    default:
      return 'file';
  }
}
// call it like this:
//echo '<img src="'.get_icon_for_attachment($my_attachment->ID).'" />';

function get_icon_for_attachment($post_id) {
  $type = get_post_mime_type($post_id);
  switch ($type) {
    case 'image/jpeg':
    case 'image/png':
    case 'image/gif':
      return 'fa-file-image-o'; break;
    case 'video/mpeg':
    case 'video/mp4': 
    case 'video/quicktime':
      return 'fa-file-video-o'; break;
    case 'text/csv':
    case 'text/plain': 
    case 'text/xml':
      return 'fa-file-text-o'; break;
	case 'application/pdf':
		return 'fa-file-pdf-o'; break;
	case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
	case 'application/msword':
		return 'fa-file-word-o'; break;
	case 'application/vnd.ms-excel':
	case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
		return 'fa-file-excel-o'; break;
	case 'application/vnd.ms-powerpoint' :
	case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
		return 'fa-file-powerpoint-o'; break;
    default:
      return 'fa-file-o';
  }
}
// call it like this:
//echo '<img src="'.get_icon_for_attachment($my_attachment->ID).'" />';

?>
<?php

class wp_bootstrap_navwalker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\"menu-lvl-$depth dropdown-menu\">\n";
	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="divider">';
		} else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
			$output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
		} else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
			$output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
		} else {

			$class_names = $value = '';

			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'lilvl-'.$depth.' menu-item-' . $item->ID;

			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

			if ( $args->has_children )
				$class_names .= ' dropdown';
				
			if ( $args->has_children && $depth == 1)
				$class_names .= ' dropdown-submenu';
			
			if ( $args->has_children && $depth == 2)
				$class_names .= ' dropdown-submenu';

			if ( in_array( 'current-menu-item', $classes ) )
				$class_names .= ' active';

			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $value . $class_names .'>';

			$atts = array();
			$atts['title']  = ! empty( $item->title )	? $item->title	: '';
			$atts['target'] = ! empty( $item->target )	? $item->target	: '';
			$atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';

			if ( $args->has_children && $depth === 0 ) {
				$atts['href']   		= '#';
				$atts['data-toggle']	= 'dropdown';
				$atts['class']			= 'dropdown-toggle';
				$atts['aria-haspopup']	= 'true';
			} else {
				$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}

			$item_output = $args->before;

			if ( ! empty( $item->attr_title ) )
				$item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
			else
				$item_output .= '<a'. $attributes .'>';

			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}

	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {

			extract( $args );

			$fb_output = null;

			if ( $container ) {
				$fb_output = '<' . $container;

				if ( $container_id )
					$fb_output .= ' id="' . $container_id . '"';

				if ( $container_class )
					$fb_output .= ' class="' . $container_class . '"';

				$fb_output .= '>';
			}

			$fb_output .= '<ul';

			if ( $menu_id )
				$fb_output .= ' id="' . $menu_id . '"';

			if ( $menu_class )
				$fb_output .= ' class="' . $menu_class . '"';

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
			$fb_output .= '</ul>';

			if ( $container )
				$fb_output .= '</' . $container . '>';

			echo $fb_output;
		}
	}
}
?>
<?php 
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/img/logo-min.png) !important; width:196px !important; height:50px !important; background-size:196px  !important}
		.login{ background-color:#3d5b7f}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');?>
<?php 
function admins() {
	echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">';
	//echo '<link href="'.get_bloginfo('template_directory').'/admin/bootstrap.css" rel="stylesheet">';
	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,800,400' rel='stylesheet' type='text/css'>";
	echo '<style type="text/css">
		body{ font-family: Open sans, helvetica neue, helvetica, arial , sans-serif}
		.wp-admin #adminmenu, .wp-admin #adminmenuback, .wp-admin #adminmenuwrap{ background-color:#3d5b7f !important}
		#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#012b5d !important}
		.wp-core-ui .button-primary{background-color:#3d5b7f !important}
	</style>';
}
add_action('admin_head', 'admins');
?>