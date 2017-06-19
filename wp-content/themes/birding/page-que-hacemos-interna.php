<?php get_header(); ?>
<section class="banner-anexo full">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/banner-anexo.png" alt="">
            <h1 class="title-ppal">Qué Hacemos?</h1>
            <h2 class="title-ppal-2"> top endemic</h2>
        </section>
        <section class="cont-anexo pages-que-hacemos full">
            <div class="wrapper-main center que-hacemos">
                <?php
                if( have_rows('ranking') ):
                    while ( have_rows('ranking') ) : the_row(); 
                        $imagen = get_sub_field('imagen');
                ?>   
                        <article class="top-ave full">
                            <figure>
                                <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt'] ?>" />
                                <span><?php the_sub_field('posicion'); ?></span>
                            </figure>
                            <div class="info">
                                <h2><?php the_sub_field('nombre'); ?></h2>
                                <p><strong>Reseña:</strong> <?php the_sub_field('resena'); ?></p>
                            </div>
                            <a href="<?php the_sub_field('link'); ?>" class="mas">Conocer Endemic</a>
                            <div class="clr"></div>
                        </article>

                <?php    endwhile;

                else :

                    echo "No hay top que mostrar";

                endif;
                ?>
            </div>
            <div class="clr"></div>
        </section>


<?php get_footer(); ?>