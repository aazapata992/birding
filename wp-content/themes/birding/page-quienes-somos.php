<?php get_header(); ?>
<section class="banner-anexo full">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/banner-anexo.png" alt="">
    <h1 class="title-ppal">Quiénes Somos?</h1>
</section>
<section class="cont-anexo full quienes-somos">
    <div class="wrapper-main center ">
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra, diam vitae varius suscipit, est dolor varius libero, a faucibus leo ante fringilla quam. Praesent feugiat purus a metus condimentum suscipit. Maecenas nec quam est. Mauris auctor lectus nec est sagittis, ac lobortis lectus ullamcorper. </p>
        <?php
            if( have_rows('items') ):
                while ( have_rows('items') ) : the_row(); 
                $imagen = get_sub_field('imagen');
        ?>   
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <article class="info-anexo">
                            <h2><?php the_sub_field('titulo'); ?></h2>
                            <figure>
                                <a href="<?php the_sub_field('link'); ?>">
                                    <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt'] ?>" />                                    
                                </a>
                            </figure>
                            <p><?php the_sub_field('descripcion'); ?></p>
                            <a href="<?php the_sub_field('link'); ?>" class="mas">Conocer más</a>
                        </article>
                    </div>
        <?php    endwhile;
                else :
                    echo "No hay top que mostrar";
            endif;
        ?>

        <figure class="guias-quienes">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/quienes-somos.png" alt="">
        </figure>


        <div class="nuestro-equipo">
            <h3>Nuestro Equipo / Our Team</h3>
            <?php
                if( have_rows('nuestro_equipo') ):
                    while ( have_rows('nuestro_equipo') ) : the_row(); 
                    $imagen2 = get_sub_field('foto');
            ?>   
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <article class="info-anexo">
                                <h2><?php the_sub_field('nombre'); ?></h2>
                                <figure>
                                    <a href="<?php the_sub_field('link'); ?>">
                                        <img src="<?php echo $imagen2['url']; ?>" alt="<?php echo $imagen2['alt'] ?>" />                                    
                                    </a>
                                </figure>
                                <p><?php the_sub_field('descripcion'); ?></p>
                                <a href="<?php the_sub_field('link'); ?>" class="mas">Conocer más</a>
                            </article>
                        </div>
            <?php    endwhile;
                    else :
                        echo "No hay top que mostrar";
                endif;
            ?>
        </div>
    </div>
    <div class="bg-aliados full">
        <div class="wrapper-main center">
            <h3>ALIADOS</h3>
            <figure>
                <a href="http://www.proaves.org/" target="_blank">   
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/pro-aves.png" alt="">
                </a>
            </figure>
        </div>
    </div>
    <div class="wrapper-main center full cont-contacto">
        <h2>Contacto</h2>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="campos">
                <label>Name</label>
                <input type="text">
            </div>
            <div class="campos">
                <label>Last Name</label>
                <input type="text">
            </div>
            <div class="campos">
                <label>Phone Number</label>
                <input type="text">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="campos">
                <label>Email</label>
                <input type="email">
            </div>
            <div class="campos">
                <label>Country</label>
                <input type="text">
            </div>
            <div class="campos">
                <label>Please leave us your comments</label>
                <textarea></textarea>
            </div>
            <input type="submit" value="SEND">
        </div>
    </div>
    <div class="clr"></div>
</section>

<?php get_footer(); ?>