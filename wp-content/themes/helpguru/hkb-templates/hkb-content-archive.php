<?php global $hkb_current_term_id; ?>

<?php $tax_terms = hkb_get_archive_tax_terms(); ?>

<?php $ht_kb_category_count = count($tax_terms); ?>
<?php $columns = hkb_archive_columns_string(); ?>
<?php $cat_counter = 0; ?>

<!-- .hkb-archive -->
<ul class="hkb-archive hkb-archive--<?php echo $columns; ?>-cols clearfix">
    <?php foreach ($tax_terms as $key => $tax_term): ?>
    
	<?php
	if($tax_term->term_id != 302){ 
        //set hkb_current_term_id
        $hkb_current_term_id = $tax_term->term_id;
    ?>

    <li>
        <div class="hkb-category" data-hkb-cat-icon="<?php echo hkb_has_category_custom_icon( $hkb_current_term_id ); ?>">
        <?php hkb_category_thumb_img( $hkb_current_term_id ); ?>
        <div class="hkb-category__header">
            <h2 class="hkb-category__title"><?php //echo $tax_term->term_id; ?><a href="<?php echo esc_attr(get_term_link($tax_term, 'ht_kb_category')) ?>" title="<?php echo sprintf( __( 'View all posts in %s', 'ht-theme' ), $tax_term->name ) ?>"><?php echo $tax_term->name ?></a>
                <?php if ( hkb_archive_display_subcategory_count() ) : ?><span class="hkb-category__count"><?php echo sprintf( _n( '1 Article', '%s Articles', $tax_term->count, 'ht-theme' ), $tax_term->count ); ?></span><?php endif; ?>
            </h2>
            
            <?php $ht_kb_tax_desc =  $tax_term->description; ?>
            <?php if( !empty($ht_kb_tax_desc) ): ?>
                <p class="hkb-category__description"><?php echo $ht_kb_tax_desc ?></p>
            <?php endif; ?>

</div>

        <?php 
            //display sub categories
            hkb_get_template_part('hkb-subcategories', 'archive');
        ?>

        <?php $cat_posts = hkb_get_archive_articles($tax_term, null, null, 'kb_home'); ?>

        <?php if( !empty( $cat_posts ) && !is_a( $cat_posts, 'WP_Error' ) ): ?>

            <ul class="hkb-article-list">
                <?php foreach( $cat_posts as $post ) : ?>                            
                        <li class="hkb-article-list__<?php hkb_post_format_class($post->ID); ?>">
                            <a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>                      
</li>
                <?php endforeach; ?>
            </ul>

            <a class="hkb-category__view-all" href="<?php hkb_term_link($tax_term); ?>"><?php _e( 'View all', 'ht-theme' ); ?></a>
        <?php endif; ?>
        
        </div>
    </li>
	<?php } ?>
    <?php endforeach; ?>
</ul> 
<!-- /.hkb-archive -->

<?php $uncat_posts = hkb_get_uncategorized_articles(); ?>
<?php if( !empty( $uncat_posts ) && !is_a( $uncat_posts, 'WP_Error' ) ): ?>
    <div class="hkb-category">
        <div class="hkb-category__header">
            <h2 class="hkb-category__title">
                <?php _e( 'Uncategorized', 'ht-theme'); ?>
            </h2>
        </div>
        <ul class="hkb-article-list">
            <?php foreach( $uncat_posts as $post ) : ?>                            
                    <li class="hkb-article-list__<?php hkb_post_format_class($post->ID); ?>">
                        <a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
                    </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; //uncat posts ?>
