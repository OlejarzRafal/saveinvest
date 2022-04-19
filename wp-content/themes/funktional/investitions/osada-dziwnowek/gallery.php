<?php

/**
 * Template Name: Galeria dziwnówek
 * Template Post Type: osada-dziwnowek
 */

get_template_part('investitions/osada-dziwnowek/header');
?>

<h1 class="invisible-page-header"><?php the_title(); ?></h1>
<main class="gallery-page">
    <div class="container">
        <h2 class="title"><?php echo get_field('title'); ?></h2>
        <ul class="category">
            <li class="category__item active" data-filter="all"> Wszystkie </li>
            <li class="category__item" data-filter="picture"> Zdjęcia i wizualizacje</li>
            <li style="display:none;" class="category__item" data-filter="visualisation"> Wizualizacje </li>
            <li class="category__item" data-filter="video"> Filmy </li>
        </ul>


        <div class="gallery row">

            <!-- ZDJĘCIA -->
            <?php 
                $images = get_field('zdjecia');
                if( $images ): ?>
            <?php foreach( $images as $image ): ?>
            <div class="gallery__item col-6 col-lg-4 col-xl-3 picture order-2" data-sort="value">
                <a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>">
                    <img class="gallery__img" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>

            <!-- WIZUALIZACJE -->
            <?php 
                $visualizations = get_field('wizualizacje');
                if( $visualizations ): ?>
            <?php foreach( $visualizations as $visualization ): ?>
            <div class="gallery__item col-6 col-lg-4 col-xl-3 picture order-3" data-sort="value">
                <a data-fancybox="gallery" href="<?php echo esc_url($visualization['url']); ?>">
                    <img class="gallery__img" src="<?php echo esc_url($visualization['url']); ?>"
                        alt="<?php echo esc_attr($visualization['alt']); ?>" />
                </a>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>

            <!-- FILMY -->
            <?php 
            $videos = get_field('filmy');
            if( $videos):?>
            <?php foreach( $videos as $video ):
                $data_type = pathinfo($video['url'], PATHINFO_EXTENSION);
                if ($data_type == 'mp4'):?>

            <div class="gallery__item gallery__item--video col-6 col-lg-4 col-xl-3 video order-1" data-sort="value">
                <a data-fancybox="gallery" href="<?php echo $video['url'];?>">
                    <video class="gallery__img">
                        <source src="<?php echo $video['url'];?>" type="video/mp4">
                    </video>
                </a>
            </div>
            <?php endif;?>
            <?php endforeach;?>
            <?php endif; ?>
            <?php if( have_rows('filmy_youtube') ): ?>
            <?php while( have_rows('filmy_youtube') ): the_row(); 
                		$ytLinkUrl = get_sub_field('link_do_filmu');
                        // $ytThubnail = get_sub_field('miniaturka');
                        $ytLinkThubnail = parse_url($ytLinkUrl);
                        parse_str($ytLinkThubnail['query'], $query);
                         
                        ?>
            <div class="gallery__item gallery__item--video col-6 col-lg-4 col-xl-3 video order-1 yt-video"
                data-sort="value">
                <a class="yt-video-link" data-fancybox="gallery" style="background-image:url(https://i.ytimg.com/vi/<?=$query['v']?>/hqdefault.jpg)" href="<?=$ytLinkUrl?>"></a>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>


        </div>
</main>

<?php
get_template_part('investitions/osada-dziwnowek/footer');
?>