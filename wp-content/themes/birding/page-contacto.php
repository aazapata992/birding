<?php get_header(); ?>
<section class="banner-anexo full">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/banner-anexo.png" alt="">
    <h1 class="title-ppal"><?php the_title(); ?></h1>            
</section>
<div class="cont-galeria-hacemos full">
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
</div>

<?php get_footer(); ?>