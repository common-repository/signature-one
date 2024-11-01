<?php
/*
  Plugin Name: Signature One
  Plugin URI: http://admin-builder.com
  Description: Create a signature for each post or page. Text or Image. Customize each post or page with it's own signature or create a global one.
  Version: 1.1.5
  Author: rootabout
  Author URI: http://ciprianturcu.com/
  License: GPLv2 or later
  Text Domain: Signature-one
 */

 if (!function_exists('get_plugins')) {
     require_once ABSPATH.'wp-admin/includes/plugin.php';
 }
                $plugin_folder = get_plugins('/'.plugin_basename(dirname(__FILE__)));
                $plugin_file = basename((__FILE__));

                require_once 'abExport.php';

 add_filter('the_content', 'so_the_content_callback');
 function so_the_content_callback($content)
 {
     global $abGen;
     if (is_single()) {
         //general values
         $GlobalSignature = get_option('abOption_cPagetab1textbox1',false);
         $globalPosition = get_option('abOption_cPagetab1select1',false);
         $globalSize = get_option('abOption_cPagetab1select2',false);
         $globalImage = get_option('abOption_cPagetab1upload1',false);

         //post specific values:
         $postSignature = get_post_meta(get_the_ID(),"abMB_postsoSettingstextbox1",true);
         $postPosition = get_post_meta(get_the_ID(),"abMB_postsoSettingsselect2",true);
         $postSize = get_post_meta(get_the_ID(),"abMB_postsoSettingsselect1",true);
         $postImage = get_post_meta(get_the_ID(),"abMB_postsoSettingsupload1",true);

         $fSignature = $GlobalSignature;
         $fPosition = $globalPosition;
         $fSize = $globalSize;
         $fImage = $globalImage;

         if (!empty($postSignature)) {
             $fSignature = $postSignature;
         }
         if (!empty($postSize) && $postSize != '0') {
             $fSize = $postSize;
         }
         if (!empty($postPosition) && $postPosition != '0') {
             $fPosition = $postPosition;
         }
         if (!empty($postImage)) {
             $fImage = $postImage;
         }

         //if there's an image
         if (!empty($fImage)) {
             $fSignature = '<img src="'.$fImage.'" class="sImage" alt="Signature Image" />';
         }

         // decisions decisions

         $soSignature = $GlobalSignature;
         $SignatureHTML = '<div class="soContainer" style="display:block;text-align:'.$fPosition.';font-size:'.$fSize.'px;">'.$fSignature.'</div>';
         $content = $content.$SignatureHTML;
     }

     return $content;
 }
