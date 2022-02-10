<?php $users = get_users();
foreach ($users as $user) {
    $user_id =  $user->ID;
    $user_name =  $user->display_name;
    $user_image = get_field('zdjecie_autora', 'user_' .  $user_id);
    $user_url = get_author_posts_url($user->ID);
    $user_post_count = count_user_posts($user_id, ['pytania_cpt', 'ekspert_cpt', 'aktualnosci_cpt']);
    $user_position = get_field('stanowisko_autora', 'user_' . $user_id);
?>
    <a href="<?php echo $user_url; ?>" class="slider-authors-loop__item swiper-slide">
        <div class="slider-authors-loop__img">
            <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($user_image['alt']); ?>" />
            <div class="slider-authors-loop__count">
                <span><?php echo  $user_post_count; ?></span>
            </div>
        </div>
        <div class="slider-authors-loop__name">
            <?php echo $user_name; ?>
        </div>
        <div class="slider-authors-loop__position">
            <?php echo $user_position; ?>
        </div>
    </a>
<?php  } ?>