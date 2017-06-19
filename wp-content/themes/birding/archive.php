<?php get_header(); ?>
<section class="banner-anexo full">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/banner-anexo.png" alt="">
    <h1 class="title-ppal">Anexos</h1>
</section>
<section class="cont-anexo full">
    <div class="wrapper-main center">
        <?php $args = array( 'post_type' => 'birding_anexo', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <article class="info-anexo">
                        <h2><?php the_title(); ?></h2>
                        <figure>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail('full'); ?>
                            </a>
                        </figure>
                        <p><?php the_content(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="mas">Conocer más</a>
                    </article>
                </div>
        <?php endwhile; ?>
    </div>
    <div class="clr"></div>
</section>

<?php get_footer(); ?>