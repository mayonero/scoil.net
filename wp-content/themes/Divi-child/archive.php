
<?php
    $post_type = get_post_type();
    $post_type_data = get_post_type_object( $post_type );
    $post_type_slug = $post_type_data->rewrite['slug'];
    
    header('Location: '.bloginfo('home').'/wordpress/module-'.$post_type_slug.'/module-01');
?>