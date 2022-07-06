<?php

/**
 * Template Name: Galeria enklawa-dziwnowek
 * Template Post Type: enklawa-dziwnowek
 */

get_template_part('investitions/enklawa-dziwnowek/header');
?>
<div class="mainSection aboutPage galleryPage">

    <?php get_template_part('investitions/enklawa-dziwnowek/nav-head'); ?>
    <?php get_template_part('investitions/enklawa-dziwnowek/nav-subpages'); ?>

    <div class="box">
        <div class="container">
            <div class="col-sm-12">
                <?php if ($gallery_enkl_dziwnow_header = get_field('gallery_enkl_dziwnow_header')) : ?>
                    <h1 class="ek-fadein-dziwnowek">
                        <?php echo $gallery_enkl_dziwnow_header; ?>
                    </h1>
                <?php endif; ?>
                <?php if ($gallery_enkl_dziwnow_tekst = get_field('gallery_enkl_dziwnow_tekst')) : ?>
                    <h2 class="ek-fadein-dziwnowek">
                        <?php echo $gallery_enkl_dziwnow_tekst; ?>
                    </h2>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="gallerySection">

        <div class="filter ek-fadein-dziwnowek" id="filter">
            <ul>
                <li>
                    <a class="all active" data-filter="allItem">
                        Wszystkie
                    </a>
                </li>
                <li>
                    <a class="pictures" data-filter="pictures">
                        Zdjęcia
                    </a>
                </li>
                <li>
                    <a class="visual" data-filter="visualizations">
                        Wizualizacje
                    </a>
                </li>
                <li>
                    <a class="movies" data-filter="movies">
                        Filmy
                    </a>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="row" id="grid">
                <?php
                $images = get_field('gallery');
                if ($images) : ?>
                    <?php foreach ($images as $image) : ?>
                        <div class="element col-sm-6 col-md-3" data-category="pictures">
                            <a href="<?php echo $image['sizes']['large']; ?>" data-fancybox="gallery">
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php
                $gallery_visualizations = get_field('gallery_visualizations');
                if ($gallery_visualizations) : ?>

                    <?php foreach ($gallery_visualizations as $image) : ?>
                        <div class="element col-sm-6 col-md-3" data-category="visualizations">
                            <a href="<?php echo $image['sizes']['large']; ?>" data-fancybox="gallery">
                                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if (have_rows('filmy')) : ?>
                    <?php while (have_rows('filmy')) : the_row();
                        $ytOrMp4 = get_sub_field('youtube_czy_mp4');
                        if ($ytOrMp4 == "youtube") {
                            $link = get_sub_field('youtube_link');
                            $ytLinkThubnail = parse_url($link);
                            parse_str($ytLinkThubnail['query'], $query);
                        } else {
                            $link = get_sub_field('mp4');
                        }
                    ?>
                        <?php if ($ytOrMp4 == "youtube") : ?>
                            <div class="element col-sm-6 col-md-3 yt-movie" data-category="movies">
                                <a href="<?= $link ?>" data-fancybox="gallery">
                                    <img src="https://i.ytimg.com/vi/<?= $query['v'] ?>/hqdefault.jpg" alt="">
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if ($ytOrMp4 == "mp4") : ?>
                            <div class="element col-sm-6 col-md-3 standard-movie" data-category="movies">
                                <a href="<?= $link['url'] ?>" data-fancybox="gallery">
                                    <video class="gallery__img">
                                        <source src="<?= $link['url'] ?>" type="video/mp4">
                                    </video>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="disclaimer">
            <?php echo get_field('gallery_description'); ?>
        </div>

    </div>
</div>

<div class="nextPageBox">
    <a href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/kontakt">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/preview_contact.jpg" class="img-fluid" alt="" />
        <div class="button">Kontakt</div>
    </a>
</div>

<?php
get_template_part('investitions/enklawa-dziwnowek/footer');
?>