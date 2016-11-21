<?php
/**
* Theme template for archive display
*/
?>

<?php get_header(); ?>

<?php /*get_template_part( 'page-header', 'kb' );*/ ?>
<section id="page-header" class="clearfix ph-align-center ph-large">
<div class="ht-container">
<?php hkb_get_template_part( 'hkb-searchbox', 'search' ); ?>
</div>
</section>

<!-- #primary -->
<div id="primary" class="<?php echo get_theme_mod( 'ht_kb_sidebar', 'sidebar-right' ); ?> clearfix"> 
<div class="ht-container">

<!-- #content -->
<main id="content" role="main" itemscope="itemscope" itemprop="mainContentOfPage">
<div style="width:100%;height:60px;margin: 0 auto;border-bottom: 1px solid #dfe4e6;" class="bar">
       <!-- <img style="vertical-align:-10px;width:42px;height:42px" src="http://52.41.182.95/wp-content/uploads/2016/10/halacha-title.png" />--><span style="color:#379FD6 !important;font-size:19px;">Please Select a Halachic Topic</span>
</div>
<br /><br />
<!-- #ht-kb -->

<div id="hkb" class="hkb-template-archive">


    <?php hkb_get_template_part('hkb-content', 'archive'); ?>
</div>
<!-- /#ht-kb -->
</main>
<!-- /#content -->

<?php $ht_kb_sidebar = get_theme_mod( 'ht_kb_sidebar', 'sidebar-right' );
if ( $ht_kb_sidebar != 'sidebar-off') {
get_sidebar( 'kb' ); } ?>

</div>
<!-- /.ht-container -->
</div>
<!-- /#primary -->

<?php get_footer(); ?>
