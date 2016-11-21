<?php


if(!function_exists('hkb_show_knowledgebase_search')){
    /**
    * Get the Knowledge Base search display option
    * Filterable - hkb_show_knowledgebase_search
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_show_knowledgebase_search($location=null){
        global $ht_knowledge_base_options;
        $hkb_show_knowledgebase_search = false;
        if ( isset( $ht_knowledge_base_options['search-display'] ) ){
            $hkb_show_knowledgebase_search = $ht_knowledge_base_options['search-display'];
        } else {
            $hkb_show_knowledgebase_search = false;
        }
        return apply_filters('hkb_show_knowledgebase_search', $hkb_show_knowledgebase_search);
    }
}

if(!function_exists('hkb_archive_columns')){
    /**
    * Number of archive columns to display
    * Filterable - hkb_archive_columns
    * @return (Int) The option
    */
    function hkb_archive_columns(){
        global $ht_knowledge_base_options;
        $hkb_archive_columns = 2;
        if ( isset( $ht_knowledge_base_options['archive-columns'] ) ){
            $hkb_archive_columns = $ht_knowledge_base_options['archive-columns'];
        } else {
            $hkb_archive_columns = 2;
        }
        return apply_filters('hkb_archive_columns', $hkb_archive_columns);
    }
}

if(!function_exists('hkb_archive_columns_string')){
    /**
    * Number of archive columns to display (as a string)
    * Filterable - hkb_archive_columns_string
    * @return (String) The option
    */
    function hkb_archive_columns_string(){
        // Set column variable to class needed for CSS
        $hkb_archive_columns_string = hkb_archive_columns();
        if ($hkb_archive_columns_string == '1') :
            $hkb_archive_columns_string = 'one';
        elseif ($hkb_archive_columns_string == '2') :
            $hkb_archive_columns_string = 'two';
        elseif ($hkb_archive_columns_string == '3') :
            $hkb_archive_columns_string = 'three';
        elseif ($hkb_archive_columns_string == '4') :
            $hkb_archive_columns_string = 'four';
        else :
            $hkb_archive_columns_string = 'two';
        endif; 

        return apply_filters('hkb_archive_columns_string', $hkb_archive_columns_string);
    }
}

if(!function_exists('hkb_archive_display_subcategories')){
    /**
    * Get the Knowledge Base subcategory count display option
    * Filterable - hkb_archive_display_subcategories
    * @return (Bool) The option
    */
    function hkb_archive_display_subcategories(){   
        global $ht_knowledge_base_options;
        $hkb_archive_display_subcategories = false;
        if ( isset( $ht_knowledge_base_options['sub-cat-display'] ) ){
            $hkb_archive_display_subcategories = $ht_knowledge_base_options['sub-cat-display'];
        } else {
            $hkb_archive_display_subcategories = false;
        }

        return apply_filters('hkb_archive_display_subcategories', $hkb_archive_display_subcategories);
    }
}

if(!function_exists('hkb_archive_display_subcategory_count')){
    /**
    * Get the Knowledge Base subcategory count display option
    * Filterable - hkb_archive_display_subcategory_count
    * @return (Bool) The option
    */
    function hkb_archive_display_subcategory_count(){   
        global $ht_knowledge_base_options;
        $hkb_archive_display_subcategory_count = false;
        if ( isset( $ht_knowledge_base_options['sub-cat-article-count'] ) ){
           $hkb_archive_display_subcategory_count =  $ht_knowledge_base_options['sub-cat-article-count'];
        } else {
            $hkb_archive_display_subcategory_count = false;
        }

        return apply_filters('hkb_archive_display_subcategory_count', $hkb_archive_display_subcategory_count);
    }
}

if(!function_exists('hkb_archive_display_subcategory_articles')){
    /**
    * Get the Knowledge Base subcategory list display option
    * Filterable - hkb_archive_display_subcategory_articles
    * @return (Bool) The option
    */
    function hkb_archive_display_subcategory_articles(){    
        global $ht_knowledge_base_options;
        $hkb_archive_display_subcategory_articles = false;
        if ( isset( $ht_knowledge_base_options['sub-cat-article-display'] ) ){
            $hkb_archive_display_subcategory_articles = $ht_knowledge_base_options['sub-cat-article-display'];
        } else {
            $hkb_archive_display_subcategory_articles = false;
        }

        return apply_filters('hkb_archive_display_subcategory_articles', $hkb_archive_display_subcategory_articles);
    }
}

if(!function_exists('hkb_archive_hide_empty_categories')){
    /**
    * Get the Knowledge Base hide empty categories option
    * Filterable - hkb_archive_display_subcategory_articles
    * @return (Bool) The option
    */
    function hkb_archive_hide_empty_categories(){   
        global $ht_knowledge_base_options;
        $hkb_archive_hide_empty_categories = false;
        if ( isset( $ht_knowledge_base_options['hide-empty-kb-categories'] ) ){
            $hkb_archive_hide_empty_categories = $ht_knowledge_base_options['hide-empty-kb-categories'];
        } else {
            $hkb_archive_hide_empty_categories = false;
        }

        return apply_filters('hkb_archive_hide_empty_categories', $hkb_archive_hide_empty_categories);
    }
}

if(!function_exists('hkb_get_knowledgebase_searchbox_placeholder_text')){
    /**
    * Get the Knowledge Base searchbox placeholder text
    * Filterable - hkb_get_knowledgebase_searchbox_placeholder_text
    * @return (String) The placeholder text
    */
    function hkb_get_knowledgebase_searchbox_placeholder_text(){
        global $post, $ht_knowledge_base_options;
        $hkb_get_knowledgebase_searchbox_placeholder_text = '';
        //there is an issue with the global ht_knowledge_base_options not being translated, hence we'll revert to the get_option call
        $ht_knowledge_base_options = get_option('ht_knowledge_base_options');
        
        $hkb_get_knowledgebase_searchbox_placeholder_text =  (isset($ht_knowledge_base_options) && is_array($ht_knowledge_base_options) && array_key_exists('search-placeholder-text', $ht_knowledge_base_options)) ? 
                                $ht_knowledge_base_options['search-placeholder-text'] : 
                                __('Search the Knowledge Base', 'ht-knowledge-base');
        return apply_filters('hkb_get_knowledgebase_searchbox_placeholder_text', $hkb_get_knowledgebase_searchbox_placeholder_text);

    }
}

if(!function_exists('hkb_show_knowledgebase_breadcrumbs')){
    /**
    * Get the Knowledge Base breadcrumbs option
    * Filterable - hkb_show_knowledgebase_breadcrumbs
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_show_knowledgebase_breadcrumbs($location=null){
        global $ht_knowledge_base_options;
        $hkb_show_knowledgebase_breadcrumbs = false;
        if ( isset( $ht_knowledge_base_options['breadcrumbs-display'] ) ){
            $hkb_show_knowledgebase_breadcrumbs = $ht_knowledge_base_options['breadcrumbs-display'];
        } else {
            $hkb_show_knowledgebase_breadcrumbs = false;
        }
        return apply_filters('hkb_show_knowledgebase_breadcrumbs', $hkb_show_knowledgebase_breadcrumbs);
    }
}

if(!function_exists('hkb_show_usefulness_display')){
    /**
    * Get the Knowledge Base usefulness display option
    * Filterable - hkb_show_usefulness_display
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_show_usefulness_display($location=null){
        global $ht_knowledge_base_options;
        $hkb_show_usefulness_display = false;
        if ( isset( $ht_knowledge_base_options['usefulness-display'] ) ){
            $hkb_show_usefulness_display = $ht_knowledge_base_options['usefulness-display'];
        } else {
            $hkb_show_usefulness_display = false;
        }
        return apply_filters('hkb_show_usefulness_display', $hkb_show_usefulness_display);
    }
}

if(!function_exists('hkb_show_viewcount_display')){
    /**
    * Get the Knowledge Base viewcount display option
    * Filterable - hkb_show_viewcount_display
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_show_viewcount_display($location=null){
        global $ht_knowledge_base_options;
        $hkb_show_viewcount_display = false;
        if ( isset( $ht_knowledge_base_options['viewcount-display'] ) ){
            $hkb_show_viewcount_display = $ht_knowledge_base_options['viewcount-display'];
        } else {
            $hkb_show_viewcount_display = false;
        }
        return apply_filters('hkb_show_viewcount_display', $hkb_show_viewcount_display);
    }
}

if(!function_exists('hkb_show_comments_display')){
    /**
    * Get the Knowledge Base comments display option
    * Filterable - hkb_show_comments_display
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_show_comments_display($location=null){
        global $ht_knowledge_base_options;
        $hkb_show_comments_display = false;
        if ( isset( $ht_knowledge_base_options['comments-display'] ) ){
            $hkb_show_comments_display = $ht_knowledge_base_options['comments-display'];
        } else {
            $hkb_show_comments_display = false;
        }
        return apply_filters('hkb_show_comments_display', $hkb_show_comments_display);
    }
}

if(!function_exists('hkb_show_related_articles')){
    /**
    * Get the Knowledge Base show related articles
    * Filterable - hkb_show_related_articles
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_show_related_articles($location=null){
        global $ht_knowledge_base_options;
        $hkb_show_related_articles = true;
        if ( isset( $ht_knowledge_base_options['related-display'] ) ){
            $hkb_show_related_articles = $ht_knowledge_base_options['related-display'];
        } else {
            $hkb_show_related_articles = true;
        }
        return apply_filters('hkb_show_related_articles', $hkb_show_related_articles);
    }
}

if(!function_exists('hkb_show_search_excerpt')){
    /**
    * Get the Knowledge Base search excerpt display option
    * Filterable - hkb_show_search_excerpt
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_show_search_excerpt($location=null){
        global $ht_knowledge_base_options;
        $hkb_show_search_excerpt = false;
        if ( isset( $ht_knowledge_base_options['search-excerpt'] ) ){
            $hkb_show_search_excerpt = $ht_knowledge_base_options['search-excerpt'];
        } else {
            $hkb_show_search_excerpt = false;
        }
        return apply_filters('hkb_show_search_excerpt', $hkb_show_search_excerpt);
    }
}

if(!function_exists('hkb_show_realted_rating')){
    /**
    * Get the Knowledge Base related rating display
    * Filterable - hkb_show_realted_rating
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_show_realted_rating($location=null){
        global $ht_knowledge_base_options;
        $hkb_show_realted_rating = false;
        if ( isset( $ht_knowledge_base_options['related-rating'] ) ){
            $hkb_show_realted_rating = $ht_knowledge_base_options['related-rating'];
        } else {
            $hkb_show_realted_rating = false;
        }
        return apply_filters('hkb_show_realted_rating', $hkb_show_realted_rating);
    }
}

if(!function_exists('hkb_focus_on_search_box')){
    /**
    * Get the Knowledge Base related rating display
    * Filterable - hkb_focus_on_search_box
    * @param (String) $location The location of where to display (currently unused)
    * @return (Bool) The option
    */
    function hkb_focus_on_search_box($location=null){
        global $ht_knowledge_base_options;
        $hkb_focus_on_search_box = false;
        if ( isset( $ht_knowledge_base_options['search-focus-box'] ) ){
            $hkb_focus_on_search_box = $ht_knowledge_base_options['search-focus-box'];
        } else {
            $hkb_focus_on_search_box = false;
        }
        return apply_filters('hkb_focus_on_search_box', $hkb_focus_on_search_box);
    }
}


if(!function_exists('hkb_category_articles')){
    /**
    * Number of articles to display in category
    * Filterable - hkb_category_articles
    * @return (Int) The option
    */
    function hkb_category_articles($location=null){
        global $ht_knowledge_base_options;
        if ( isset( $ht_knowledge_base_options['sub-cat-article-number'] ) ){
            $hkb_category_articles = $ht_knowledge_base_options['sub-cat-article-number'];
        } else {
            $hkb_category_articles = get_option('posts_per_page');
        }
        return apply_filters('hkb_category_articles', $hkb_category_articles);
    }
}


if(!function_exists('hkb_get_custom_styles_css')){
    /**
    * Get the Knowledge Base custom styles
    * Filterable - hkb_get_custom_styles_css
    * @return (String) Custom CSS
    */
    function hkb_get_custom_styles_css(){   
        global $ht_knowledge_base_options;
        $hkb_get_custom_styles_css = '';
        if ( isset( $ht_knowledge_base_options['ht-kb-custom-styles']) ){
            $styles = '';
            $styles .= '<style>';
            $styles .= $ht_knowledge_base_options['ht-kb-custom-styles'];
            $styles .= '</style>';
            $hkb_get_custom_styles_css = $styles;
        } else {
            $hkb_get_custom_styles_css = '';
        }
        return apply_filters('hkb_get_custom_styles_css', $hkb_get_custom_styles_css);
    }
}

if(!function_exists('hkb_custom_styles_sitewide')){
    /**
    * Whether to use custom styles sitewide
    * Filterable - hkb_custom_styles_sitewide
    * @return (Boolean) default false
    */
    function hkb_custom_styles_sitewide(){   
        global $ht_knowledge_base_options;
        $hkb_custom_styles_sitewide = false;
        if ( isset( $ht_knowledge_base_options['ht-kb-custom-styles-sitewide']) ){
            $hkb_custom_styles_sitewide = $ht_knowledge_base_options['ht-kb-custom-styles-sitewide'];            
        } else {
            $hkb_custom_styles_sitewide = false;
        }
        return apply_filters('hkb_custom_styles_sitewide', $hkb_custom_styles_sitewide);
    }
}

if(!function_exists('hkb_kb_search_sitewide')){
    /**
    * Whether to use search in kb sitewide
    * Filterable - hkb_kb_search_sitewide
    * @return (Boolean) default false
    */
    function hkb_kb_search_sitewide(){   
        global $ht_knowledge_base_options;
        $hkb_kb_search_sitewide = false;
        if ( isset( $ht_knowledge_base_options['kb-site-search']) ){
            $hkb_kb_search_sitewide = $ht_knowledge_base_options['kb-site-search'];            
        } else {
            $hkb_kb_search_sitewide = false;
        }
        return apply_filters('hkb_kb_search_sitewide', $hkb_kb_search_sitewide);
    }
}