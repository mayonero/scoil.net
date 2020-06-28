<?php get_header(); the_post();?>
<?php
    $post_type = get_post_type();
    if($post_type == null){ $post_type = $_GET["post-type"]; }
    $post_type_data = get_post_type_object( $post_type );
    $post_type_slug = $post_type_data->rewrite['slug'];
    $term_obj_list = get_the_terms( $post->ID, 'module-'.$post_type_slug );
    if($term_obj_list ) {
        $module = wp_list_pluck($term_obj_list, 'slug')[0];
    } else {
        $module = $_GET["module"];
    }


    $tax_query = null;    
    if($term_obj_list){
        $tax_query = array( array( 'taxonomy'=>'module-'.$post_type_slug, 'field'=>'slug', 'terms'=>$module ), );
    }
    $the_query = new WP_Query( 
        array(
            'post_type' => $post_type_slug,
            'posts_per_page' => -1,
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_key' => 'page',
            's' => $_GET["s"],
            'tax_query' => $tax_query,
        )
    ); 
?>

<section id="archive">
    <div id="title-archive">
        <div class="container row row-center">
            <h2><span><?= single_term_title( '', false ); ?></span><?= $post_type_data->label; ?></h2>
            <div>
                <form action="<?= bloginfo('home') ?>/module-<?= $post_type_slug ?>/<?= $module ?>/">
                    <input type="hidden" name="module" value="<?= $module ?>" />
                    <input type="hidden" name="post-type" value="<?= $post_type_slug ?>" />
                    <input type="text" placeholder="Search..." name="s" value="<?= $_GET["s"] ?>" />
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <?php if ( $the_query->have_posts() ) { ?>
        <div id="list-classes">
            <div class="container row">
                <?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
                    <?php $acf_term = get_field('module-'.$post_type_slug); ?>
                    <?php $icone = get_field('icone'); ?>
                    <div class="col-xl-6 col-lg-12">
                        <a href="<?php the_permalink() ?>" class="link_class">
                            <div>
                                <img src="<?= $icone['sizes']['thumbnail'] ?>" alt="<?= $icone['title'] ?>" />
                            </div>
                            <div>
                                <?php if($terms_string){ ?> <span><?= $terms_string ?></span> <?php } ?>
                                <h3><?php the_title(); ?></h3>
                                <p>
                                    <i class="fad fa-chalkboard-teacher"></i>
                                    <?= get_the_author_meta('nicename') ?>
                                </p>
                                <p>
                                    <i class="fad fa-clock"></i>
                                    <?= get_the_date() ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
            <div class="container row">
                <?php if(is_search()) { ?>
                    <h2 class="no-post">
                        <i class="fal fa-file-search"></i>
                        No classes found...
                    </h2>
                <?php } else { ?>
                    <h2 class="no-post">
                        <i class="fad fa-chalkboard-teacher"></i>
                        No classes were posted
                    </h2>
                <?php } ?>
            </div>
        <?php } ?>
</section>
<?php get_footer(); ?>