<?php
/**
 * Plugin Name: LeSalon Wordpress 
 * Description: For customizing Wordpress 
 * Author: nabilfreeman<nabil+oss@freemans.website>
 * Author URI: http://freemans.website
 * Version: 1.0.0
 * Plugin URI: https://github.com/lesalonapp/lesalon-wordpress
 */
 
add_action('admin_head', 'lesalon_admin_logo');

function lesalon_admin_logo() {
  echo '<style>
    li#wlcms_admin_logo{
      display:-webkit-flex;
      display:flex;
      -webkit-align-items:center;
      align-items:center;
      height:32px;
    }
    
    li#wlcms_admin_logo span{
      float:none !important;
      width:auto !important;
      height:auto !important;
      line-height:normal !important;
      margin:0px 10px !important;
    }
    
    li#wlcms_admin_logo span img{
      width:auto !important;
    }
  </style>';
}

add_action('wp_head', 'lesalon_noindex_tag');

function lesalon_noindex_tag() {
  echo '<meta name="robots" content="noindex">';
}

add_action('wp_head', 'lesalon_no_font_family');

function lesalon_no_font_family() {
  echo '<style>
    .mce-widget[aria-label="Font Family"] {
      display:none;
    }
    
    #adminmenu #toplevel_page_fonts-plugin {
      display:none;
    }
  </style>';
}

?>
