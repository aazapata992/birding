<?php get_header(); ?>
<section class="cont-anexo full quienes-somos">
    <div class="wrapper-main center ">
   
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php
				get_template_part( 'post-formats/format', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php else : ?>

			<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
					</footer>
			</article>

		<?php endif; ?>

        <figure class="guias-quienes">
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/quienes-somos.png" alt="">
        </figure>
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
