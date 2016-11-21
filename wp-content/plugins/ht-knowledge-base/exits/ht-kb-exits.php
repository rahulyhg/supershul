<?php
/*
* Exits Module
* Tracks exits out of the knowledge base - to a ticketing system, for example
*
*/


if( !class_exists('HT_KB_Exits') ){

    //define exits URL filter tage
    if(!defined('HKB_EXITS_URL_FILTER_TAG')){
        define('HKB_EXITS_URL_FILTER_TAG', 'ht_kb_generate_exit_url');
    }

	class HT_KB_Exits {		

		//constructor
		function __construct(){
            //redirect
            include_once('php/ht-kb-exits-redirect.php');
			//shortcode
            include_once('php/ht-kb-exits-shortcodes.php');
            //widget
            include_once('php/widget-kb-exits.php');
            //database controller
            include_once('php/ht-kb-exits-database.php');
            $this->exits_database = new HT_KB_Exits_Database();
            //options
            include_once('php/ht-kb-exits-options.php');

            //generate url filter
            add_filter(HKB_EXITS_URL_FILTER_TAG, array( $this, 'generate_exit_url' ), 50, 2 );

		}


        /**
        * Filter
        */
        function generate_exit_url($url, $source='undefined'){
            global $post;
            //add redirect here


            $queried_object_data = hkb_get_queried_object_data();

            
            //security
            $nonce = wp_create_nonce( 'hkb-redirect' );
            //generate url
            $replacement_url = '?' . 'hkb-redirect' .   '&' . 'nonce=' . $nonce . 
                                                        '&' . 'redirect=' . urlencode($url) . 
                                                        '&' . 'otype=' . $queried_object_data['object_type'] . 
                                                        '&' . 'oid=' . $queried_object_data['object_id'] .
                                                        '&' . 'source=' . $source;

            return $replacement_url;
        }

 

        function add_tracked_exit_details_to_db($data){
            $this->exits_database->add_tracked_exit_to_db($data);
        }

	
	} //end class
} //end class exists

if(class_exists('HT_KB_Exits')){
	global $ht_kb_exits_init;

	$ht_kb_exits_init = new HT_KB_Exits();

    function ht_kb_exits_add_tracked_exit_details_to_db($data){
        global $ht_kb_exits_init;
        $ht_kb_exits_init->add_tracked_exit_details_to_db($data);
    }

}
