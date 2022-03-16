<?php

/**
 * Template Name: Galeria
 * Template Post Type: ostoja-kladno
 */

get_template_part('investitions/ostoja-kladno/header');
?>
<div class="ik-gallery">
    <section class="gallery-kladno ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <?php if ($title_galleria_kladno = get_field('title_galleria_kladno')) : ?>
                        <div class="gallery-kladno__title">
                            <h5 class="f-h5">
                                <?php echo $title_galleria_kladno; ?>
                            </h5>
                        </div>
                    <?php endif; ?>
                    <ul class="category">
                        <li class="category__item active" data-filter="all"> <span>WSZYSTKIE</span></li>
                        <li class="category__item" data-filter="picture"> <span>ZDJĘCIA I WIZUALIZACJE</span></li>
                        <li class="category__item" data-filter="video"> <span>FILMY</span></li>
                    </ul>


                    <div class="gallery">

                        <!-- ZDJĘCIA -->
                        <?php
                        $images = get_field('zdjecia_ik');
                        if ($images) : ?>
                            <?php foreach ($images as $image) : ?>
                                <div class="gallery__item picture order-2" data-sort="value">
                                    <a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>">
                                        <img class="gallery__img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- FILMY -->
                        <?php
                        $videos = get_field('filmy_ik');
                        if ($videos) : ?>
                            <?php foreach ($videos as $video) :
                                $data_type = pathinfo($video['url'], PATHINFO_EXTENSION);
                                if ($data_type == 'mp4') : ?>

                                    <div class="gallery__item gallery__item--video  video order-1" data-sort="value">
                                        <a data-fancybox="gallery" href="<?php echo $video['url']; ?>">
                                            <video class="gallery__img">
                                                <source src="<?php echo $video['url']; ?>" type="video/mp4">
                                            </video>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (have_rows('filmy_youtube_ik')) : ?>
                            <?php while (have_rows('filmy_youtube_ik')) : the_row();
                                $ytLinkUrl = get_sub_field('link_do_filmu');
                                // $ytThubnail = get_sub_field('miniaturka');
                                $ytLinkThubnail = parse_url($ytLinkUrl);
                                parse_str($ytLinkThubnail['query'], $query);

                            ?>
                                <div class="gallery__item gallery__item--video  video order-1 yt-video" data-sort="value">
                                    <a class="yt-video-link" data-fancybox="gallery" style="background-image:url(https://i.ytimg.com/vi/<?= $query['v'] ?>/hqdefault.jpg)" href="<?= $ytLinkUrl ?>"></a>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    if (document.querySelector('.category')) {
        var cat = document.querySelector('.category');
        var catItems = cat.querySelectorAll('.category__item');

        catItems[0].addEventListener('click', function() {
            filterSelection('all');
        });
        catItems[1].addEventListener('click', function() {
            filterSelection('picture');
        });
        catItems[2].addEventListener('click', function() {
            filterSelection('video');
        });

        filterSelection('all');

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName('gallery__item');
            if (c == 'all') c = '';
            for (i = 0; i < x.length; i++) {
                removeClass(x[i], 'show');
                if (x[i].className.indexOf(c) > -1) addClass(x[i], 'show');
            }
        }

        function addClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(' ');
            arr2 = name.split(' ');
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += ' ' + arr2[i];
                }
            }
        }

        function removeClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(' ');
            arr2 = name.split(' ');
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(' ');
        }

        for (var i = 0; i < catItems.length; i++) {
            catItems[i].addEventListener('click', function() {
                var current = document.getElementsByClassName('active');
                current[0].className = current[0].className.replace(' active', '');
                this.className += ' active';
            });
        }
    }
</script>
<?php
get_template_part('investitions/ostoja-kladno/footer');
?>