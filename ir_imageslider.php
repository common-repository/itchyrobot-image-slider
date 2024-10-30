<?php   



/*



Plugin Name: iTCHYROBOT Image Silder



Plugin URI: http://www.itchyrobot.co.uk



Description: The iTCHYROBOT Image Slider is a jquery slider that uses the wordpress media library to manage its image content. The current version requires the images to be uploaded into the media library. For further instructions goto Settings and iTCHYROBOT Image Slider.



Author: Rob Adams



Version: 1.0



Author URI: http://www.itchyrobot.co.uk



*/ 







function ir_admin_actions() {   



    add_options_page("iTCHYROBOT Image Slider", "iTCHYROBOT Image Slider", 1, "iTCHYROBOT Image Slider", "ir_admin");   



}







function ir_admin() {   



    include('ir_import_images.php');   



} 







add_action('admin_menu', 'ir_admin_actions');  











function ir_getImageSlider($media_library = 'iTCHYROBOT_MediaSlider') {



$output = '<link rel="stylesheet" href="' . get_bloginfo('url') . '/wp-content/plugins/ir_image_slider/ir_imageslider_style.css" type="text/css" media="screen" />';



$output = $output . '<script type="text/javascript" src="' . get_bloginfo('url') . '/wp-content/plugins/ir_image_slider/jquery-1.3.1.min.js"></script>';



$output = $output . '<script type="text/javascript" src="' . get_bloginfo('url') . '/wp-content/plugins/ir_image_slider/ir_imageslider.js"></script>';



$output = $output . '<div id="gallery">';



$output = $output . ir_ImageSlider_HTML_get($media_library);  



$output = $output . '<div class="caption"><div class="content"></div></div>';



$output = $output . '</div>';



$output = $output . '<div class="clear"></div>';



return $output;



}







/* iTCHYROBOT Image Builder*/



function ir_ImageSlider_HTML_get($media_library) {

$html = '';

$img=& get_children('post_type=attachment&post_mime_type=image/jpeg' );



foreach ( (array) $img as $attachment_id => $attachment ) { 



$imgCat = trim(strip_tags( $attachment->post_excerpt ));



if ($imgCat == $media_library) {



$image = wp_get_attachment_image_src( $attachment_id, 'full' );



$alt = trim(strip_tags( get_post_meta($attachment_id, '_wp_attachment_image_alt', true) ));





$imgTitle = trim(strip_tags( $attachment->post_title ));



$imgURL = $image[0];



$html = $html . '<a href="#"><img src="' . $imgURL . '" alt="' . $alt . '" width="580" height="360" title="" alt="" rel="<h3>' . $imgTitle . '</h3>' . $alt . '"/></a>';

	



					}





											}

return $html;





						}











?>