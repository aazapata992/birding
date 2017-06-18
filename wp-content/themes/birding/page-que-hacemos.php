<?php get_header(); ?>
<section class="banner-anexo full">
    <img src="<?php echo get_template_directory_uri(); ?>/library/images/banner-anexo.png" alt="">
    <h1 class="title-ppal">Qué Hacemos?</h1>            
</section>
<div class="cont-galeria-hacemos full">
    <article class="galeria-hacemos tours full">
        <div class="wrapper-main center">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                <h2>TOURS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu aliquet neque, quis pulvinar ipsum. </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                <a href="#" class="bnts">
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/solicitar-cotizacion-1.png" alt="">
                </a>
            </div>
        </div>
    </article>
    <article class="galeria-hacemos tailor full">
        <div class="wrapper-main center">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                <h2>Tailor <br><span>made</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu aliquet neque, quis pulvinar ipsum. </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                <a href="#" class="solicita">Solicita cotización</a>
            </div>
        </div>
    </article>
    <article class="galeria-hacemos turismo full">
        <div class="wrapper-main center">
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                <h2>Turismo <br><span>sostenible</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu aliquet neque, quis pulvinar ipsum. </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                <a href="#" class="conoce">Conocer más</a>
            </div>
        </div>
    </article>

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