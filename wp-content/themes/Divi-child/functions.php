<?php

/*---Importações Padrões---*/
function fila_de_links() {    
    wp_enqueue_style( 'fontawesome', 'https://kit-pro.fontawesome.com/releases/v5.13.0/css/pro.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/style.css');
    wp_enqueue_style( 'style-child', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style( 'grade', get_stylesheet_directory_uri().'/css/grade.css');
    
} add_action( 'wp_enqueue_scripts', 'fila_de_links' );


/*---Adicionando o classico editor---*/
add_filter('use_block_editor_for_post', '__return_false');

 //Registrando Menus
 if ( function_exists( 'register_nav_menu' ) ) {
    register_nav_menu( 'home_menu', 'Home Menu' );
}   

/*---Option Pages---*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Subject Generator',
		'menu_title'	=> 'Subject Generator',
        'menu_slug' 	=> 'subject-generator',
        'position' => '3',
        'icon_url' => 'dashicons-plus-alt',
	));
	
}


/*===============================================*/
/*================CUSTOM POST TYPE===============*/
/*===============================================*/
function create_post_type() {
    $CPT_generated = get_field('subject', 'option');
    if($CPT_generated){
        foreach($CPT_generated as $item){
            $label = array(
                'labels'             => array('name'=>$item['name'], 'menu_name'=> $item['name'], 'add_new'=>'Add Chapter'),
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'show_in_nav_menus'  => true,
                'show_in_admin_bar'  => true,
                'query_var'          => true,
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'can_export'         => true,
                'exclude_from_search' => false,
                'menu_icon'          => $item['dashicons'],
                'menu_position'      => intval($item['menu_position']),
                'rewrite'            => array('slug' => $item['slug']),
                'supports' => array('title', 'editor', 'author', 'revisions'),
            );
            register_post_type($item['slug'], $label);

            register_taxonomy( 
                'module-'.$item['slug'], 
                array($item['slug']), 
                array(
                        'hierarchical' => true,
                        'label' => __( 'Modules' ),
                        'show_ui' => true,
                        'show_admin_column' => true,
                        'show_in_tag_cloud' => true,
                        'query_var' => true,
                        'rewrite' => array('slug' => 'module-'.$item['slug']),
                )
            );
        }
    }
}
add_action( 'init', 'create_post_type' );

/*===COLUNAS==*/
add_filter( 'manage_posts_columns', 'add_com_admin', 10, 2 );
add_filter( 'manage_posts_custom_column', 'value_columns_admin', 5, 2 );
add_filter( 'request', 'query_sortable_columns_admin' );
function add_com_admin( $columns, $post_type ) {
    $CPT_generated = get_field('subject', 'option');
    if($CPT_generated){   
        foreach($CPT_generated as $item){
            if($post_type == $item['slug']){
                $columns['page'] = 'Page';
                $tempArray = array(
                    "cb" => $columns['cb'],
                    "page" => $columns['page'],
                    "title" => $columns['title'],
                    "taxonomy-module-".$item['slug'] => $columns['taxonomy-module-'.$item['slug']],
                    "author" => $columns['author'],
                    "date" => $columns['date']
                );
                $columns = $tempArray; 
            }
            add_filter( "manage_edit-".$item['slug']."_sortable_columns", "add_sortable_columns_admin" );    
        }     
    }     
  return $columns;
}
function value_columns_admin( $column_name, $id ) {
    if ( 'page' === $column_name ) { the_field('page'); }
}
function add_sortable_columns_admin( $columns ) {
	$columns["page"] = "page";
	return $columns;
}
function query_sortable_columns_admin( $vars ) {
    if ( isset( $vars['orderby'] ) && 'page' == $vars['orderby'] ) {
            $vars = array_merge( $vars, array(
                    'meta_type' => 'order',
                    'meta_key' => 'page',
                    'orderby' => 'meta_value_num'
            ) );
    }
    return $vars;
}



/*------Criando AVATAR no Menu------*/
function var_menu() {
    global $menu;
    global $submenu;
    global $current_user; wp_get_current_user(); get_currentuserinfo();
    $CPT_generated = get_field('subject', 'option');

    $submenu["index.php"][10] = NULL;
    $menu[1] = array(get_avatar( $current_user->ID, 64 ).$current_user->display_name, "list_users", "profile.php", "", "menu-top-user", "box_user", "");


	//Notícias
    $menu[5] = Null;
    $menu[25] = Null;

    $menu[89] = $menu[4];
    $menu[90] = $menu[10];
    $menu[10] = NULL;
    $menu[91] = $menu[20];
    $menu[20] = NULL;
    $menu[92] = $menu[26];
    $menu[26] = NULL;
    $menu[93] = $menu[59];
    $menu[59] = NULL;
    $menu[94] = $menu[60];
    $menu[60] = NULL;
    $menu[95] = $menu[65];
    $menu[65] = NULL;
    $menu[96] = $menu[70];
    $menu[70] = NULL;
    $menu[97] = $menu[75];
    $menu[75] = NULL;
    $menu[98] = $menu[80];
    $menu[80] = NULL;
    $menu[100] = $menu["80.025"];
    $menu["80.025"] = NULL;

}
add_action( 'admin_menu', 'var_menu' );

/*------Adicionar CSS ao ADMIN------*/
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'admin', get_stylesheet_directory_uri().'/css/admin/admin.css');
    wp_enqueue_style( 'header', get_stylesheet_directory_uri().'/css/admin/header.css');
    wp_enqueue_style( 'menu', get_stylesheet_directory_uri().'/css/admin/menu.css');
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
} add_action( 'admin_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/*------Adicionar CSS ao Login------*/
function login_styles() { 
    wp_enqueue_style( 'grade', get_stylesheet_directory_uri().'/css/admin/login.css');
} add_action('login_enqueue_scripts', 'login_styles'); 