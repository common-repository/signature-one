<?php
// Built with Admin Builder http://admin-builder.com

  //dynamic textbox generate
  if(!function_exists('dtGenerate')){
    function dtGenerate($label, $name, $value, $index = null, $attr = null)
    {
        $arrName = $name;
        $origNameStr = 'origName="'.$name.'" ';
        if ($index !== null && !empty($attr) && !empty($attr)) {
            $arrName = $name.'['.$index.']['.$attr.']';
        }

        $attrStr = '';
        if ($attr != null && !empty($attr)) {
            $attrStr = 'dtArrName="'.$attr.'" ';
        }
        $fieldHTML = '<div class="form-group">';
        $fieldHTML .= '<label for="'.$name.'">'.$label.'</label>';
        $fieldHTML .= '<input type="text" name="'.$arrName.'" '.$origNameStr.'  class="form-control" '.$attrStr.' placeholder="Please enter '.$label.'" value="'.$value.'">';
        $fieldHTML .= '</div>';

        return $fieldHTML;
    }
  }
if(!function_exists('saveArrayFields')){
  function saveArrayFields($hidden_field_name, $hidden_field_value)
  {
      if (empty($_POST)) {
          return false;
      }
    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if (isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == $hidden_field_value) {
        $fullPostString = '';
    // Read their posted value
    if (isset($_POST['cPage'])) {
        $fullPostString = serialize($_POST['cPage']);
    }

    // Save the posted value in the database
    update_option($hidden_field_name, $fullPostString);

    // Put a "settings saved" message on the screen

    ?>
    <div class="updated"><p><strong><?php _e('settings saved.', 'menu-test');
        ?></strong></p></div>
    <?php

    }
  }
}


//bootstrap icons function
if(!function_exists('ab_admin_footer_function')){
  add_action('admin_footer', 'ab_admin_footer_function');
  function ab_admin_footer_function()
  {
      $bsIconsString = 'glyphicon-asterisk,glyphicon-plus,glyphicon-euro,glyphicon-eur,glyphicon-minus,glyphicon-cloud,glyphicon-envelope,glyphicon-pencil,glyphicon-glass,glyphicon-music,glyphicon-search,glyphicon-heart,glyphicon-star,glyphicon-star-empty,glyphicon-user,glyphicon-film,glyphicon-th-large,glyphicon-th,glyphicon-th-list,glyphicon-ok,glyphicon-remove,glyphicon-zoom-in,glyphicon-zoom-out,glyphicon-off,glyphicon-signal,glyphicon-cog,glyphicon-trash,glyphicon-home,glyphicon-file,glyphicon-time,glyphicon-road,glyphicon-download-alt,glyphicon-download,glyphicon-upload,glyphicon-inbox,glyphicon-play-circle,glyphicon-repeat,glyphicon-refresh,glyphicon-list-alt,glyphicon-lock,glyphicon-flag,glyphicon-headphones,glyphicon-volume-off,glyphicon-volume-down,glyphicon-volume-up,glyphicon-qrcode,glyphicon-barcode,glyphicon-tag,glyphicon-tags,glyphicon-book,glyphicon-bookmark,glyphicon-print,glyphicon-camera,glyphicon-font,glyphicon-bold,glyphicon-italic,glyphicon-text-height,glyphicon-text-width,glyphicon-align-left,glyphicon-align-center,glyphicon-align-right,glyphicon-align-justify,glyphicon-list,glyphicon-indent-left,glyphicon-indent-right,glyphicon-facetime-video,glyphicon-picture,glyphicon-map-marker,glyphicon-adjust,glyphicon-tint,glyphicon-edit,glyphicon-share,glyphicon-check,glyphicon-move,glyphicon-step-backward,glyphicon-fast-backward,glyphicon-backward,glyphicon-play,glyphicon-pause,glyphicon-stop,glyphicon-forward,glyphicon-fast-forward,glyphicon-step-forward,glyphicon-eject,glyphicon-chevron-left,glyphicon-chevron-right,glyphicon-plus-sign,glyphicon-minus-sign,glyphicon-remove-sign,glyphicon-ok-sign,glyphicon-question-sign,glyphicon-info-sign,glyphicon-screenshot,glyphicon-remove-circle,glyphicon-ok-circle,glyphicon-ban-circle,glyphicon-arrow-left,glyphicon-arrow-right,glyphicon-arrow-up,glyphicon-arrow-down,glyphicon-share-alt,glyphicon-resize-full,glyphicon-resize-small,glyphicon-exclamation-sign,glyphicon-gift,glyphicon-leaf,glyphicon-fire,glyphicon-eye-open,glyphicon-eye-close,glyphicon-warning-sign,glyphicon-plane,glyphicon-calendar,glyphicon-random,glyphicon-comment,glyphicon-magnet,glyphicon-chevron-up,glyphicon-chevron-down,glyphicon-retweet,glyphicon-shopping-cart,glyphicon-folder-close,glyphicon-folder-open,glyphicon-resize-vertical,glyphicon-resize-horizontal,glyphicon-hdd,glyphicon-bullhorn,glyphicon-bell,glyphicon-certificate,glyphicon-thumbs-up,glyphicon-thumbs-down,glyphicon-hand-right,glyphicon-hand-left,glyphicon-hand-up,glyphicon-hand-down,glyphicon-circle-arrow-right,glyphicon-circle-arrow-left,glyphicon-circle-arrow-up,glyphicon-circle-arrow-down,glyphicon-globe,glyphicon-wrench,glyphicon-tasks,glyphicon-filter,glyphicon-briefcase,glyphicon-fullscreen,glyphicon-dashboard,glyphicon-paperclip,glyphicon-heart-empty,glyphicon-link,glyphicon-phone,glyphicon-pushpin,glyphicon-usd,glyphicon-gbp,glyphicon-sort,glyphicon-sort-by-alphabet,glyphicon-sort-by-alphabet-alt,glyphicon-sort-by-order,glyphicon-sort-by-order-alt,glyphicon-sort-by-attributes,glyphicon-sort-by-attributes-alt,glyphicon-unchecked,glyphicon-expand,glyphicon-collapse-down,glyphicon-collapse-up,glyphicon-log-in,glyphicon-flash,glyphicon-log-out,glyphicon-new-window,glyphicon-record,glyphicon-save,glyphicon-open,glyphicon-saved,glyphicon-import,glyphicon-export,glyphicon-send,glyphicon-floppy-disk,glyphicon-floppy-saved,glyphicon-floppy-remove,glyphicon-floppy-save,glyphicon-floppy-open,glyphicon-credit-card,glyphicon-transfer,glyphicon-cutlery,glyphicon-header,glyphicon-compressed,glyphicon-earphone,glyphicon-phone-alt,glyphicon-tower,glyphicon-stats,glyphicon-sd-video,glyphicon-hd-video,glyphicon-subtitles,glyphicon-sound-stereo,glyphicon-sound-dolby,glyphicon-sound-5-1,glyphicon-sound-6-1,glyphicon-sound-7-1,glyphicon-copyright-mark,glyphicon-registration-mark,glyphicon-cloud-download,glyphicon-cloud-upload,glyphicon-tree-conifer,glyphicon-tree-deciduous,glyphicon-cd,glyphicon-save-file,glyphicon-open-file,glyphicon-level-up,glyphicon-copy,glyphicon-paste,glyphicon-alert,glyphicon-equalizer,glyphicon-king,glyphicon-queen,glyphicon-pawn,glyphicon-bishop,glyphicon-knight,glyphicon-baby-formula,glyphicon-tent,glyphicon-blackboard,glyphicon-bed,glyphicon-apple,glyphicon-erase,glyphicon-hourglass,glyphicon-lamp,glyphicon-duplicate,glyphicon-piggy-bank,glyphicon-scissors,glyphicon-bitcoin,glyphicon-btc,glyphicon-xbt,glyphicon-yen,glyphicon-jpy,glyphicon-ruble,glyphicon-rub,glyphicon-scale,glyphicon-ice-lolly,glyphicon-ice-lolly-tasted,glyphicon-education,glyphicon-option-horizontal,glyphicon-option-vertical,glyphicon-menu-hamburger,glyphicon-modal-window,glyphicon-oil,glyphicon-grain,glyphicon-sunglasses,glyphicon-text-size,glyphicon-text-color,glyphicon-text-background,glyphicon-object-align-top,glyphicon-object-align-bottom,glyphicon-object-align-horizontal,glyphicon-object-align-left,glyphicon-object-align-vertical,glyphicon-object-align-right,glyphicon-triangle-right,glyphicon-triangle-left,glyphicon-triangle-bottom,glyphicon-triangle-top,glyphicon-console,glyphicon-superscript,glyphicon-subscript,glyphicon-menu-left,glyphicon-menu-right,glyphicon-menu-down,glyphicon-menu-up';
      $bsIconsArr = explode(',', $bsIconsString);

      ?>
      <div id="test-popup" class="open-popup-link white-popup mfp-hide">
      <?php
      foreach ($bsIconsArr as $key => $value) {
          ?>
        <button type="button"><i class="glyphicon <?php echo $value;
          ?>"></i></button>
        <?php

      }

                  ?>
      </div>
      <?php
  }
}


    if(!function_exists('abEnqueueAll')){
      //Admin scripts and styles
      add_action('admin_enqueue_scripts', 'abEnqueueAll');
      //Admin scripts and styles callback
      function abEnqueueAll()
      {
        //*
        // CSS
        //*
        abExists('bootstrapFontIcons', 'ab-src/css/bootstrap.min.css', 'style',array(),'plugin');
        abExists('jQueryUiCore', 'ab-src/css/jquery-ui.css', 'style',array(),'plugin');
        abExists('abIris', 'ab-src/css/iris.min.css', 'style',array(),'plugin');
        abExists('abMagnificPopup', 'ab-src/css/magnific-popup.css', 'style',array(),'plugin');
        abExists('abTimepicker', 'ab-src/css/jquery.timepicker.css', 'style',array(),'plugin');
        //--
        abExists('customAbStyle', 'ab-src/css/abStyle.css', 'style',array(),'plugin');

          //*
          //  Custom JS
          //*
                wp_enqueue_media();
          wp_enqueue_script('jquery-ui-core');
          wp_enqueue_script('jquery-ui-widget', false, array('jquery-ui-core'));
          wp_enqueue_script('jquery-ui-mouse', false, array('jquery-ui-core'));
          wp_enqueue_script('jquery-ui-datepicker', false, array('jquery-ui-core'));
          wp_enqueue_script('jquery-ui-draggable', false, array('jquery-ui-core', 'jquery-ui-widget', 'jquery-ui-mouse'));
          wp_enqueue_script('jquery-ui-slider', false, array('jquery-ui-core', 'jquery-ui-widget', 'jquery-ui-mouse'));
          //*
          //  Custom JS
          //*
          abExists('abColor', 'ab-src/js/color.js', 'script',array(),'plugin');
          abExists('abIris', 'ab-src/js/iris.js', 'script',array('jquery-ui-core', 'jquery-ui-draggable', 'jquery-ui-slider'),'plugin');
          abExists('abTimepicker', 'ab-src/js/jquery.timepicker.min.js', 'script',array('jquery-ui-core'),'plugin');
          abExists('abBootstrapJs', 'ab-src/js/bootstrap.min.js', 'script',array('jquery', 'jquery-ui-core'),'plugin');
          abExists('abMagnificPopup', 'ab-src/js/jquery.magnific-popup.min.js', 'script',array('jquery', 'jquery-ui-core'),'plugin');
          //--
          abExists('abCustomScript', 'ab-src/js/abScript.js', 'script',array(),'plugin');
        }
      }
      if(!function_exists('abExists')){
        function abExists($name, $path, $type,$dependencies = array(),$exportType)
        {
          $fileExists = false;

          if($exportType==='theme'){
            $file = get_template_directory_uri().'/'.$path;
          }else{
            $file = plugin_dir_url(__FILE__).$path;
          }
            $plugin_file_headers = @get_headers($file);
            if (!$plugin_file_headers || strpos($plugin_file_headers[0], '404') > 0) {
                //file does not exist
              $fileExists = false;
            } else {
                //file exists if a plugin path
              $fileExists = true;
            }
          //inside theme path file existance ?
          // Custom Script
          if ($fileExists) {
              if ($type === 'style') {
                  wp_register_style($name, $file);
                  wp_enqueue_style($name);
              } else {
                  wp_register_script($name, $file, $dependencies);
                  wp_enqueue_script($name);
              }
          }
        }
      }
      if(!function_exists('loadcPage')){
        function loadcPage($hidden_field_name)
        {
            $stringValues = get_option($hidden_field_name);
            return unserialize($stringValues);
        }
      }

// Metabox hook for Signature One Settings

  if(!function_exists('abAddMetaBox_soSettings')){add_action('add_meta_boxes', 'abAddMetaBox_soSettingspost');
add_action('save_post', 'abSavePost_soSettingspost');
function abSavePost_soSettingspost($post_id){

  if (!isset($_POST['aB_nounce_soSettings']) || !wp_verify_nonce($_POST['aB_nounce_soSettings'], basename(__FILE__))) {
      return true;
  }
  $fields = array( 'abMB_postsoSettingstextbox1', 'abMB_postsoSettingsselect2', 'abMB_postsoSettingsselect1', 'abMB_postsoSettingsupload1', );
  foreach($fields as $key => $field) {
    //field name
    $fieldName = $field;

    // set the new value to a variable
    $new_meta_value = (isset($_POST[$fieldName]) ? $_POST[$fieldName] : '0');
    // code...
    // Get the meta key.
    $meta_key = $fieldName;
    // Get the meta value of the custom field key.
    $meta_value = get_post_meta($post_id, $meta_key, true);
    if (is_array($meta_value)) {
      $tempNewMetaValue = array();
      foreach ($new_meta_value as $key => $value) {
        $tempNewMetaValue[] = $value;
      }
      $new_meta_value = $tempNewMetaValue;
    }
    /* If a new meta value was added and there was no previous value, add it. */
    if ($new_meta_value !== $meta_value) {
      update_post_meta($post_id, $meta_key, $new_meta_value);
    }  /* If there is no new meta value but an old value exists, delete it. */
    elseif ('' == $new_meta_value && $meta_value) {
      delete_post_meta($post_id, $meta_key, $meta_value);
    }
 }
}
function abAddMetaBox_soSettingspost($post){
  // Add the metabox
  add_meta_box( 'soSettings0', __( 'Signature One Settings', 'textdomain' ), 'abAddMetaBox_soSettings0post_display_callback', 'post','normal','default',array() );
}
function abAddMetaBox_soSettings0post_display_callback($post){

 wp_nonce_field(basename(__FILE__), 'aB_nounce_soSettings'); ?>
<div class="container-fluid aBMB ab">
<?php
$fieldValue=""; ?>
 <?php if (isset($post->ID)) {
  $fieldName = 'abMB_postsoSettingstextbox1';
 $fieldValue = get_post_meta($post->ID, $fieldName, true);
 } ?>

          <div class="row abList">
            <div class="col-sm-2">
              <label class="title">Text Signature</label></div>
           <div class="col-sm-10">
                 <input class="widefat" type="text" name="<?php echo $fieldName; ?>"  id="<?php echo $fieldName; ?>" value="<?php echo $fieldValue; ?>" size="30" />

        <label class="description">Input text signature that you want to show</label>
      </div>
    </div><?php
$fieldValue=""; ?>
 <?php if (isset($post->ID)) {
  $fieldName = 'abMB_postsoSettingsselect2';
 $fieldValue = get_post_meta($post->ID, $fieldName, true);
 } ?>

          <div class="row abList">
            <div class="col-sm-2">
              <label class="title">Alignment</label></div>
           <div class="col-sm-10">
                 <select name="<?php echo $fieldName; ?>" id="<?php echo $fieldName; ?>">
      <?php $selected = selected('0', $fieldValue, false) ? selected('0', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="0" >Default</option>
      <?php $selected = selected('left', $fieldValue, false) ? selected('left', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="left" >Left</option>
      <?php $selected = selected('center', $fieldValue, false) ? selected('center', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="center" >Center</option>
      <?php $selected = selected('right', $fieldValue, false) ? selected('right', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="right" >Right</option>
      </select>
        <label class="description">How the signature should be aligned</label>
      </div>
    </div><?php
$fieldValue=""; ?>
 <?php if (isset($post->ID)) {
  $fieldName = 'abMB_postsoSettingsselect1';
 $fieldValue = get_post_meta($post->ID, $fieldName, true);
 } ?>

          <div class="row abList">
            <div class="col-sm-2">
              <label class="title">Font size</label></div>
           <div class="col-sm-10">
                 <select name="<?php echo $fieldName; ?>" id="<?php echo $fieldName; ?>">
      <?php $selected = selected('0', $fieldValue, false) ? selected('0', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="0" >Default</option>
      <?php $selected = selected('12', $fieldValue, false) ? selected('12', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="12" >Tiny</option>
      <?php $selected = selected('14', $fieldValue, false) ? selected('14', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="14" >Small</option>
      <?php $selected = selected('16', $fieldValue, false) ? selected('16', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="16" >Normal</option>
      <?php $selected = selected('24', $fieldValue, false) ? selected('24', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="24" >Big</option>
      <?php $selected = selected('36', $fieldValue, false) ? selected('36', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="36" >Huge</option>
      </select>
        <label class="description">Set a signature font size</label>
      </div>
    </div><?php
$fieldValue=""; ?>
 <?php if (isset($post->ID)) {
  $fieldName = 'abMB_postsoSettingsupload1';
 $fieldValue = get_post_meta($post->ID, $fieldName, true);
 } ?>

          <div class="row abList">
            <div class="col-sm-2">
              <label class="title">Upload Image</label></div>
           <div class="col-sm-10">
           <p><img src="<?php echo $fieldValue; ?>" alt="" class="uploadImage"/></p><button class="aBUpload">Upload</button><br/><br/><input type="hidden" name="<?php echo $fieldName; ?>" value="<?php echo $fieldValue; ?>" />
        <label class="description">Upload a image that  will be the signature you want at the bottom of this post. ( if set, this overrides the text signature)</label>
      </div>
    </div>  </div>
<?php }
}


      add_action( 'admin_menu', 'admin_menu_callback_signature_one_settings' );
      function admin_menu_callback_signature_one_settings(){
        add_menu_page('signature_one_settings', 'Signature one', 'manage_options', 'abSlugsignature_one_settings', 'ab_callback_signature_one_settings', '', null);
      }
        //if the function exists
        if(!function_exists('ab_callback_signature_one_settings')){
            //menu Callback function
            function ab_callback_signature_one_settings(){
              ?>
              <div class="container-fluid ab">
              <form name="abForm" class="abForm" method="post" action="">
              <?php
              if ($_GET['page'] === 'abSlugsignature_one_settings') {
                ?>
                <h2>Signature One General Settings</h2>
                <p class="pageDescription">What you change here will be available for the entire site.</p>
                <?php
                if (!current_user_can('manage_options')) {
                    wp_die(__('You do not have sufficient permissions to access this page.'));
                }
                ?>
              <input type="hidden" name="abOption_cPage_signature_one_settings" value="cPage_signature_one_settingshfv#$1!" />
              <?php
              $allValues = loadcPage('abOption_cPage_signature_one_settings'); //Get all the Values for the fields of this page in one big array
                    ?>
                    <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-12">
                          <div class="tab-content">

                      <div role="tab-panel" class="tab-pane  active " id="tab1">

<div class="container-fluid aBMB ab">
<?php
$fieldValue=""; ?>
<?php  $fieldName = 'abOption_cPagetab1textbox1'; ?>
 <?php //Get Admin Page field Value
if(isset($_POST['abOption_cPage_signature_one_settings']) && $_POST['abOption_cPage_signature_one_settings']==='cPage_signature_one_settingshfv#$1!'){
 if(isset($_POST[$fieldName])){
    update_option($fieldName, $_POST[$fieldName]);
 }else{
                      delete_option($fieldName);
          }
}
  $fieldValue = get_option($fieldName, false); ?>

          <div class="row abList">
            <div class="col-sm-2">
              <label class="title">Text Signature</label></div>
           <div class="col-sm-10">
                 <input class="widefat" type="text" name="<?php echo $fieldName; ?>"  id="<?php echo $fieldName; ?>" value="<?php echo $fieldValue; ?>" size="30" />

        <label class="description">Input text signature that you want to show</label>
      </div>
    </div><?php
$fieldValue=""; ?>
<?php  $fieldName = 'abOption_cPagetab1select1'; ?>
 <?php //Get Admin Page field Value
if(isset($_POST['abOption_cPage_signature_one_settings']) && $_POST['abOption_cPage_signature_one_settings']==='cPage_signature_one_settingshfv#$1!'){
 if(isset($_POST[$fieldName])){
    update_option($fieldName, $_POST[$fieldName]);
 }else{
                      delete_option($fieldName);
          }
}
  $fieldValue = get_option($fieldName, false); ?>

          <div class="row abList">
            <div class="col-sm-2">
              <label class="title">Alignment</label></div>
           <div class="col-sm-10">
                 <select name="<?php echo $fieldName; ?>" id="<?php echo $fieldName; ?>">
      <?php $selected = selected('left', $fieldValue, false) ? selected('left', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="left" >Left</option>
      <?php $selected = selected('center', $fieldValue, false) ? selected('center', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="center" >Center</option>
      <?php $selected = selected('right', $fieldValue, false) ? selected('right', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="right" >Right</option>
      </select>
        <label class="description">Default Select Description text</label>
      </div>
    </div><?php
$fieldValue=""; ?>
<?php  $fieldName = 'abOption_cPagetab1select2'; ?>
 <?php //Get Admin Page field Value
if(isset($_POST['abOption_cPage_signature_one_settings']) && $_POST['abOption_cPage_signature_one_settings']==='cPage_signature_one_settingshfv#$1!'){
 if(isset($_POST[$fieldName])){
    update_option($fieldName, $_POST[$fieldName]);
 }else{
                      delete_option($fieldName);
          }
}
  $fieldValue = get_option($fieldName, false); ?>

          <div class="row abList">
            <div class="col-sm-2">
              <label class="title">Font size</label></div>
           <div class="col-sm-10">
                 <select name="<?php echo $fieldName; ?>" id="<?php echo $fieldName; ?>">
      <?php $selected = selected('12', $fieldValue, false) ? selected('12', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="12" >Tiny</option>
      <?php $selected = selected('14', $fieldValue, false) ? selected('14', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="14" >Small</option>
      <?php $selected = selected('16', $fieldValue, false) ? selected('16', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="16" >Normal</option>
      <?php $selected = selected('24', $fieldValue, false) ? selected('24', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="24" >Big</option>
      <?php $selected = selected('36', $fieldValue, false) ? selected('36', $fieldValue, false) : '';
      //set the options ?>
      <option <?php echo $selected; ?> value="36" >Huge</option>
      </select>
        <label class="description">Set a signature font size</label>
      </div>
    </div><?php
$fieldValue=""; ?>
<?php  $fieldName = 'abOption_cPagetab1upload1'; ?>
 <?php //Get Admin Page field Value
if(isset($_POST['abOption_cPage_signature_one_settings']) && $_POST['abOption_cPage_signature_one_settings']==='cPage_signature_one_settingshfv#$1!'){
 if(isset($_POST[$fieldName])){
    update_option($fieldName, $_POST[$fieldName]);
 }else{
                      delete_option($fieldName);
          }
}
  $fieldValue = get_option($fieldName, false); ?>

          <div class="row abList">
            <div class="col-sm-2">
              <label class="title">Upload Image</label></div>
           <div class="col-sm-10">
           <p><img src="<?php echo $fieldValue; ?>" alt="" class="uploadImage"/></p><button class="aBUpload">Upload</button><br/><br/><input type="hidden" name="<?php echo $fieldName; ?>" value="<?php echo $fieldValue; ?>" />
        <label class="description">Upload a image that  will be the signature you want at the bottom of this post. ( if set, this overrides the text signature)</label>
      </div>
    </div>  </div>

                                    <div class="row">
                                      <div class="col-sm-12">
                                        <p class="submit">
                                          <input type="submit" name="Submit" class="button-primary" value="Save Changes" />
                                        </p>
                                      </div>
                                    </div>
                                    </div>

            <?php }
              ?>
              </form>
            <?php

            }
          }

    saveArrayFields('abOption_cPage_signature_one_settings', 'cPage_signature_one_settingshfv#$1!');
    
