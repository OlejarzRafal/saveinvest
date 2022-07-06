 <section class="referencesFiltration">
     <div class="container">
         <div class="row div-bar">
             <div class="div-borders-filtr div-borders-filtr__top"></div>
             <div class="referencesFiltration__bar col-12 d-flex align-items-center justify-content-between">
                 <?php
                    $postTypeActive = 'referencesFiltration__checkPostType--active';
                    $postType = $_GET['type'];

                    if (empty($postType)) :
                        $showAll = $postTypeActive;
                    else :
                        $showAll = '';
                    endif;

                    $sortBy =  $_GET['sortby'];
                    $sortActive = 'sortBox__listItem--active';

                    ?>
                 <div class="referencesFiltration__label referencesFiltration__all referencesFiltration__checkPostType <?php echo $showAll;
                                                                                                                        echo ($postType == 'all') ? $postTypeActive : ''; ?>" data-type="all">Wszystkie (<var></var>)</div>
                 <div class="referencesFiltration__label referencesFiltration__count referencesFiltration__checkPostType <?php echo ($postType == 'stories_cpt') ? $postTypeActive : ''; ?>" data-type="stories_cpt">Historie klientów (<?php echo '<var>' . wp_count_posts('stories_cpt')->publish . '</var>'; ?>)</div>
                 <div class="referencesFiltration__label referencesFiltration__count referencesFiltration__checkPostType <?php echo ($postType == 'referencespost_cpt') ? $postTypeActive : ''; ?>" data-type="referencespost_cpt">Referencje (<?php echo '<var>' . wp_count_posts('referencespost_cpt')->publish . '</var>'; ?>)</div>
                 <div class="referencesFiltration__label referencesFiltration__count referencesFiltration__checkPostType <?php echo ($postType == 'charitysupport_cpt') ? $postTypeActive : ''; ?>" data-type="charitysupport_cpt">Wsparcie charytatywne (<?php echo '<var>' . wp_count_posts('charitysupport_cpt')->publish . '</var>'; ?>)</div>
                 <div class="referencesFiltration__sortBy sortBox" id="sort-static">
                     <div class="sortBox__sortByItemActive"><span>Sortuj: </span><var data-sortby=""></var><?php echo file_get_contents(get_template_directory() . '/assets/img/filtration/arrowDown.svg'); ?></div>
                     <div class="sortBox__list">
                         <div class="sortBox__listItem <?php echo ($sortBy == 'DESC') ? $sortActive : ''; ?>" data-tosort="DESC">Od najnowszych </div>
                         <div class="sortBox__listItem <?php echo ($sortBy == 'ASC') ? $sortActive : ''; ?>" data-tosort="ASC">Od najstarszych </div>
                     </div>
                 </div>
             </div>
             <div class="div-borders-filtr div-borders-filtr__bottom"></div>
         </div>

        <div class="sort-mobile" id="sortbox-mobile"></div>
        <div class="row referencesFiltration__posts">
            <?php if( get_field('referentions_cta_show') ) : ?>
                <?php $link = get_field( 'referentions_link' );?>
                <a href="<?php echo $link['url'] ; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>" class="referencesFiltration__cta <?php echo $apla; ?>" data-textcolor="<?php the_field('referenctions_text_color');?>" data-bgcolor="<?php the_field('referenctions_bg_color');?>" >
                    <?php if ( get_field( 'referentions_apla' ) == 1 ) : ?>
                        <div class="apla"></div>
                    <?php endif; ?>
                    <?php if ( $referenctions_cta_text = get_field( 'referenctions_cta_text' ) ) : ?>
                        <?php echo '<p>'.$referenctions_cta_text.'</p>'; ?>
                    <?php endif; ?>
                    <?php
                        $referenctions_img = get_field( 'referenctions_img' );
                        if ( $referenctions_img ) : ?>
                        <img src="<?php echo $referenctions_img['url']; ?>" alt="<?php echo $referenctions_img['alt']; ?>" />
                    <?php endif; ?>
                </a>
            <?php endif; ?>
        </div>
                

         <div class="row referencesFiltration__loadmoreRow">
             <div class="col-12">
                 <div class="referencesFiltration__loadmore" data-page="1">ZAŁADUJ WIĘCEJ</div>
             </div>
         </div>
     </div>
 </section>