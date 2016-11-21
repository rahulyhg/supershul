
	<article id="post-<?php the_ID(); ?>" class="hkb-article hkb-article__<?php hkb_post_format_class($post->ID); ?>">
		<h3 class="hkb-article__title name" itemprop="headline">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h3>
		<div class="breadcrumb"><?php $terms_list = wp_get_post_terms($post->ID, 'ht_kb_category', array("fields" => "all"));
			
		//Get the names first
		$first_term = get_term( $terms_list[0] -> parent );
		$second_term = get_term( $terms_list[0] -> term_id );
		$first_term_name = $terms_list[0] -> parent;
			echo "<a style='font-size:14px !important;color: #8C8C8C' href='" . get_term_link($first_term) . "'>" . $first_term->name . "</a> / <a style='font-size:14px !important;color: #8C8C8C' href='" . get_term_link($second_term) . "'>" . $second_term->name . "</a>";
 ?></div>
		<?php hkb_get_template_part( 'hkb-article-meta' ); ?>
	</article>
	

