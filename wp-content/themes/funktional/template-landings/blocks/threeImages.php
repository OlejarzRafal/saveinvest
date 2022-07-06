<section class="threeImages">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <?php $lpthree_img_1 = get_field( 'lpthree_img_1' );
                if ( $lpthree_img_1 ) : ?>
                    <img src="<?php echo $lpthree_img_1['url']; ?>" alt="<?php echo $lpthree_img_1['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-4">
                <?php $lpthree_img_2 = get_field( 'lpthree_img_2' );
                if ( $lpthree_img_2 ) : ?>
                    <img src="<?php echo $lpthree_img_2['url']; ?>" alt="<?php echo $lpthree_img_2['alt']; ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-4">
                <?php $lpthree_img_3 = get_field( 'lpthree_img_3' ); 
                if ( $lpthree_img_3 ) : ?>
                    <img src="<?php echo $lpthree_img_3['url']; ?>" alt="<?php echo $lpthree_img_3['alt']; ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>