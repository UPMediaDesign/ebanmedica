<?php
if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
	add_image_size('pill', 450, 225, true );
	//add_image_size('slider', 1100, 550, true );
}
	add_theme_support( 'menus' );	
	add_post_type_support('page', 'excerpt');
?>
<?php 

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

add_action('init', 'prestadores_register');
function prestadores_register() {
    $args = array(
        'label' => 'Prestadores',
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

add_action('init', 'accionistas_register');
function accionistas_register() {
    $args = array(
        'label' => 'Accionistas',
        'singular_label' => 'Accionistas',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'accionistas'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'revisions' )
    );
    register_post_type('accionistas', $args);
    flush_rewrite_rules();
}

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