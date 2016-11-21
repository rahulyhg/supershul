<?php global $hkb_current_term_id; ?>

<?php //$tax_terms = hkb_get_archive_tax_terms() ; 
	$tax_terms  = get_term_children( 302, 'ht_kb_category' );

 ?>
<?php $ht_kb_category_count = count($tax_terms); ?>
<?php $columns = hkb_archive_columns_string(); ?>
<?php $cat_counter = 0; ?>

<!-- .hkb-archive -->
<ul class="hkb-archive hkb-archive--<?php echo $columns; ?>-cols clearfix">
    <?php foreach ($tax_terms as $child): ?>
    <?php
	$term = get_term_by( 'id' , $child , 'ht_kb_category' );
        //set hkb_current_term_id
        $hkb_current_term_id = $tax_term->term_id;
    ?>

    <li>
        <div class="hkb-category" data-hkb-cat-icon="<?php echo hkb_has_category_custom_icon( $hkb_current_term_id ); ?>">
        <?php hkb_category_thumb_img( $hkb_current_term_id ); ?>
        <div class="hkb-category__header">
            <h2 class="hkb-category__title"><a href="<?php echo get_term_link ( $child, 'ht_kb_category' ) ?>" title="<?php echo sprintf( __( 'View all posts in %s', 'ht-theme' ), $term->name ) ?>"><?php echo $term->name ?></a>
                <?php if ( hkb_archive_display_subcategory_count() ) : ?><span class="hkb-category__count"><?php echo sprintf( _n( '1 Article', '%s Articles', $term->count, 'ht-theme' ), $term->count ); ?></span><?php endif; ?>
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
