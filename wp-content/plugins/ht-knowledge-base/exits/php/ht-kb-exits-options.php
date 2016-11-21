<?php
/**
* Exits options - will hook onto a redux framework options array
*/


if(!class_exists('HT_KB_Exits_Options')){

    class HT_KB_Exits_Options{



        /**
         * Constructor
         */
        public function __construct() {
            //filter the option sections
            add_filter('ht_kb_option_sections_1', array($this, 'filter_options_sections_array'));
        }

        /**
        * Filter the options menu
        * @param $sections (Array) The options array to filter
        */
        function filter_options_sections_array($sections){

            $exit_settings_fields = array(
                                            array(
                                                'id'        => 'exit-default-url',
                                                'type'      => 'text',
                                                'title'     => __('Default Exit URL', 'ht-knowledge-base'),
                                                'subtitle'  => __('The default location that users will be sent if no URL specified', 'ht-knowledge-base'),
                                                'default'   => __('http://www.example.com/support-desk', 'ht-knowledge-base'),
                                            ),
                                            array(
                                                'id'        => 'exit-new-window',
                                                'type'      => 'switch',
                                                'title'     => __('Load in new window', 'ht-knowledge-base'),
                                                'subtitle'  => __('Load exits in a new window', 'ht-knowledge-base'),
                                                'default'   => true,
                                            )
                                        );

            $sections[] =  array(
                    'title'     => __('Exit Options', 'ht-knowledge-base'),
                    'desc'      => __('Set various options for knowledge base exits', 'ht-knowledge-base'),
                    'icon'      => 'el-icon-arrow-left',
                    'fields'    => $exit_settings_fields,
                );


            return $sections;
        }    
        
    }

}

if(class_exists('HT_KB_Exits_Options')){
    $ht_kb_exits_options_init = new HT_KB_Exits_Options();

    function ht_kb_exit_url_option(){
        global $ht_knowledge_base_options;
        if ( isset( $ht_knowledge_base_options['exit-default-url'] ) ){
            return $ht_knowledge_base_options['exit-default-url'];
        } else {
            return 'http://www.example.com/support-desk';
        }
    }

    function ht_kb_exit_new_window_option(){
        global $ht_knowledge_base_options;
        if ( isset( $ht_knowledge_base_options['exit-new-window'] ) ){
            return $ht_knowledge_base_options['exit-new-window'];
        } else {
            return true;
        }
    }

}
