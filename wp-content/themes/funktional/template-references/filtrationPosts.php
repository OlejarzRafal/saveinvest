<?php 
    $postType = get_post_type();
    $postTypeObj = get_post_type_object( $postType ); 
    $thumbUrl = get_the_post_thumbnail_url();
?>
<div class="referencesFiltration__post referencesPost"> 
    <?php if ($thumbUrl) :?>
        <img class="referencesPost__picture" src="<?php echo $thumbUrl; ?>" alt="<?php the_title();?>">
    <?php endif; ?>
    <div class="referencesPost__type-entry"><?php echo $postTypeObj->labels->name; ?></div>
    <?php if($postType == 'stories_cpt') : ?>
        <a class="referencesPost__title" href="<?php the_permalink(); ?>"><?php the_title();?> </a>
    <?php endif; ?>
    <div class="referencesPost__text"><?php the_excerpt();?></div>
    <div class="referencesPost__bottom">
        <div class="referencesPost__bottom__info">
            <div class="referencesPost__bottom__info__name"><?php the_field('ra_name');?></div>
            <div class="referencesPost__bottom__info__date">
            <?php if ( get_field( 'ra_industryName' ) ) : ?>
                <?php echo get_field( 'ra_industryName' ).','; ?>
            <?php endif; ?>
                <?php echo get_the_date('Y-m-d'); ?>
            </div>
        </div>
        <?php if ($postType == 'stories_cpt') : ?>
            <a class="referencesPost__readMore" href="<?php the_permalink(); ?>">Czytaj dalej</a>
        <?php else :?>
            <?php 
            $rp_pdf_download = get_field( 'rp_pdf_download' );
            if ( $rp_pdf_download ) : ?>
                <a class="referencesPost__bottom__btn" href="<?php echo esc_url( $rp_pdf_download['url'] ); ?>" targe="_blank">Pobierz pdf</a>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div> 
