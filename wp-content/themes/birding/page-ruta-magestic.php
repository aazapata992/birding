<?php get_header() ?>
<?php the_post() ?>
<?php $routes = get_field('route_magestic') ?>
<script type="text/javascript">
    var _routes = [
    <?php foreach ($routes as $route): ?>
        {
            id        : "<?php echo $route['pin'] ?>",
            pin       : "#pin<?php echo $route['pin'] ?>",
            name      : "<?php echo $route['name'] ?>",
            checklist : "<?php echo $route['checklist'] ?>",
            singing   : "<?php echo $route['singing'] ?>",
            endemic   : "<?php echo $route['endemic'] ?>",
            download  : "<?php echo $route['download'] ?>",
            count     : "<?php echo $route['count'] ?>",
            shop      : "#",
            gallery   : [
                <?php foreach ($route['gallery'] as $gallery): ?>
                {
                    url : "<?php echo $gallery['url'] ?>"
                },
                <?php endforeach ?>
            ]
        },
    <?php endforeach ?>
    ];
</script>

<section class="banner-anexo full">
    <img src="<?php echo get_template_directory_uri() ?>/library/images/banner-anexo.png" alt="">
    <h1 class="title-ppal"><?php the_title(); ?></h1>            
</section>
<div class="cont-galeria-hacemos full">
    <div class="wrapper-main center full cont-contacto">
        <div class="wrap-map" id="route-magestic">
            <div class="content-map">
                <a class="btn-map" href="javascript:;">
                    <img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/btn-map.png" alt="">
                    <p>Ver mapa en Google</p>
                </a>
                <div class="info-map">
                    <div class="title-map">
                        <h1>Ruta <strong>Magestic endemic</strong></h1>
                    </div>
                    <div class="items-map">
                        <ul>
                            <?php foreach ($routes as $route): ?>
                                <?php $style = $route['pin'] === "1" ? 'opacity: 0.6; transform: matrix(0.95, 0, 0, 0.95, 0, 0);' : '' ?>
                                <li style="<?php echo $style ?>">
                                    <span><img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/ico-list.png" alt=""></span>
                                    <p><?php echo $route['name'] ?></p>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="map pad-map float">
                    <ul id="scene" class="scene">
                        <li class="layer" data-depth="0.1">
                            <img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/mountain-lake.png" alt="">
                        </li>
                        <li class="layer" data-depth="-0.05">
                            <img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/map.png" alt="">
                        </li>
                        <li class="layer" data-depth="-0.1">
                            <img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/mountain.png" alt="">
                        </li>
                        <li class="layer guide" data-depth="-0.1"></li>
                        <li class="layer" data-depth="-0.03">
                            <img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/cloud.png" alt="">
                        </li>
                        <ul class="pines">
                            <?php foreach ($routes as $route): ?>
                                <?php $active = $route['pin'] === "1" ? 'active' : '' ?>
                                <li class="pin <?php echo $active ?>" id="pin<?php echo $route['pin'] ?>">
                                    <img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/pin.png" alt="">
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </ul>
                </div>
                <div class="info-down">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <h3>Galería</h3>
                            <div class="row" id="route-galleries">
                                <?php foreach ($routes as $route): ?>
                                    <?php if ($route['pin'] === "1"): ?>
                                        <?php $galleries = $route['gallery'] ?>
                                        <?php foreach ($galleries as $gallery): ?>
                                            <div class="pic-gallery col-md-4">
                                                <img class="block-center img-responsive" src="<?php echo $gallery['url'] ?>" alt="">
                                            </div>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <ul class="list">
                                <?php foreach ($routes as $route): ?>
                                    <?php if ($route['pin'] === "1"): ?>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/list.png" alt=""></span>
                                            <a id="route-checklist" href="<?php echo $route['checklist'] ?>">Check List aves</a>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/note.png" alt=""></span>
                                            <a id="route-singing" href="<?php echo $route['singing'] ?>">Canto aves</a>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/bird.png" alt=""></span>
                                            <a id="route-endemic" href="<?php echo $route['endemic'] ?>">Endemicos</a>
                                        </li>
                                        <li>
                                            <span><img src="<?php echo get_template_directory_uri() ?>/library/images/route-magestic/download.png" alt=""></span>
                                            <a id="route-download" href="<?php echo $route['download'] ?>">Descargar itinerario</a>
                                        </li>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <?php foreach ($routes as $route): ?>
                                    <?php if ($route['pin'] === "1"): ?>
                                        <div class="total">
                                            <span>
                                                <img src="<?php echo get_template_directory_uri() ?>/library/images/icon-ave.png" alt="">
                                            </span>
                                            Total de Aves: <span id="route-count"><?php echo $route['count'] ?></span>
                                        </div>
                                        <a class="comprar" href="#" id="route-shop">Comprar</a>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clr"></div>
</div>

<section class="full" style="background: #eeeeee;">
    <div class="wrapper-main center">
        <div class="cont-info-banner">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <article class="info-top-home" style="max-width: 100%;">
                    <div class="bg" style="width: 100%;">
                        <h3><?php the_field('titulo'); ?></h3>
                        <h2><?php the_field('subtitulo'); ?></h2>
                        <figure>
                            <?php $image = get_field('imagen'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </figure>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="height-marco1">
                                <p><?php the_field('descripcion'); ?></p>

                                <p style="font-family: arial;font-style: italic;"><img src="<?php echo get_template_directory_uri() ?>/library/images/1.jpg" alt=""> <?php the_field('altura_clima'); ?></p>
                                <p style="font-family: arial;font-style: italic;"><img src="<?php echo get_template_directory_uri() ?>/library/images/2.jpg" alt=""> <?php the_field('vestuario'); ?></p>
                                <p style="font-family: arial;font-style: italic;"><img src="<?php echo get_template_directory_uri() ?>/library/images/3.jpg" alt=""> <?php the_field('condiciones_medicas'); ?></p>
                                <p style="font-family: arial;font-style: italic;"><img src="<?php echo get_template_directory_uri() ?>/library/images/4.jpg" alt=""> <?php the_field('nivel_dificultad'); ?></p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        </div>
                        <!-- <a href="#" class="btns comprar">Comprar</a> -->
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<section class="guias-home full">
    <div class="wrapper-main center">
        <figure>
            <h2>Guias</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/quienes-somos.png" alt="">
        </figure>
        <a href="#" class="btn-red">Conocer más</a>
    </div>
</section>
<br>
<br>
<br>
<section class="bg-contacto-home">
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
</section>
<?php get_footer() ?>