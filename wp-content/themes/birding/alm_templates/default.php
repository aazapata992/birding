<article class="productos col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <a href="<?php the_permalink(); ?>">
        <h3><?php the_title() ?></h3>
        <figure>
        <?php $image = get_field('imagen_circular', get_the_ID());  ?>
                
                <?php if (!empty($image)): ?>
                    <?php $thumb = $image['sizes'][ 'bones-thumb-500' ];?>
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
            <!--<img src="<?php echo get_template_directory_uri(); ?>/library/images/producto-cocoa.png" alt="">-->
        </figure>
    </a>
    <?php get_template_part( 'content', 'share-tools' ); ?>
</article>