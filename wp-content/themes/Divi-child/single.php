<?php get_header(); the_post();?>
<?php $post_type = get_queried_object(); ?>
<?php $categorias = get_the_terms( $post->ID, 'module-'.$post_type->post_type ); ?>
<section id="single">
    <div id="title-archive">
        <div class="container row row-center">
            <h2><span><?= get_post_type(); ?></span><?php the_title() ?></h2>
            <div>
                <form action="<?= bloginfo('home') ?>/module-<?= $post_type->post_type ?>/<?= wp_list_pluck($categorias, 'slug')[0] ?>">
                    <input type="hidden" name="module" value="<?= wp_list_pluck($categorias, 'slug')[0] ?>" />
                    <input type="hidden" name="post-type" value="<?= $post_type->post_type ?>" />
                    <input type="text" placeholder="Search..." name="s" value="<?= $_GET["s"] ?>" />
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div id="list-classes">
        <div class="container">
            <main id="main-single">
                <div class="row">
                    <div id="menu-single" class="col-xl-3">
                        <h3><?= wp_list_pluck($categorias, 'name')[0]; ?></h3>
                        <?php $the_query = new WP_Query( 
                            array(
                                'post_type' => $post_type->post_type,
                                'posts_per_page' => -1,
                                'orderby' => 'meta_value_num',
                                'order' => 'ASC',
                                'meta_key' => 'page',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'module-'.$post_type->post_type,
                                        'field'    => 'slug',
                                        'terms'    => wp_list_pluck($categorias, 'slug')[0],
                                    ),
                                ),
                            )
                        ); ?>
                        <?php if ( $the_query->have_posts() ) { while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
                            <?php  if (strpos(get_field('page'), '-') === false) { ?>
                                <a href="<?php the_permalink() ?>">
                            <?php  } else { ?>
                                <a href="<?php the_permalink() ?>" class="list-child">
                            <?php  } ?>
                                <?php the_field('page'); ?> - <?php the_title(); ?>
                            </a>
                        <?php } } wp_reset_postdata(); ?>
                    </div>
                    <div id="content-single" class="col-xl-9">
                        <?php the_content() ?>
                        <div class="footer-content"> 
                            <a class="btn-pdf" href="<?= bloginfo('home')?>/?pdf=<?= $post->ID; ?>" target="_blank"><i class="fas fa-file-pdf"></i> PDF of this page</a>
                            <?php if(get_field('pdf', 'module-'.$post_type->post_type.'_'.wp_list_pluck($categorias, 'term_id')[0])){ ?>
                                <a
                                    class="btn-pdf"
                                    href="<?= get_field('pdf', 'module-'.$post_type->post_type.'_'.wp_list_pluck($categorias, 'term_id')[0]) ?>"
                                    target="_blank"
                                ><i class="fas fa-file-pdf"></i> PDF of all page</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>

<?php get_footer(); ?>