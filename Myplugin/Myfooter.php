<?php
/*
Plugin Name: Myfooter 
Plugin URI: https://simplonline.co/
Description: from scratch plugin qui permer de gerer le footer du web site
Author: YASSINE ELHOUBI
Version: 1.0
Author URI: https://github.com/yassineelhoubi
*/

if(!defined('ABSPATH'))
{
    exit;
}

add_action("admin_menu","addMenu");

	function addMenu()
{
  // add_menu_page('Footer Text title', 'Footer Settings', 'manage_options',
  // 'footer_setting_page', 'footer_text_admin_page');
    add_menu_page("Myfooter","Myfooter",4,"footer","addfooter",'dashicons-admin-appearance');
}
function addfooter()
{
    include_once('form.php');
}
function my_function() {
    
  echo"<footer id='main-footer' style='
      padding: center;
      background:#313131;
      opacity: 0.8;
      color: white;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    '>

    <div class='footer_text' style='
     margin-left:5%; 
    text-align: right;
    font-size: 17px;
  '>Copyright By ".get_option('copyright')." : ".get_option('copyright_date')."</div>

    <div style='margin-right:3%;
    color:white;
    '>
    <a style='color:white; text-decoration: none;  padding: 5px;' href='".get_option('facebook_link')."'>
    <i class='fab fa-facebook-square'></i>
      </a>
      <a style='color:white; text-decoration: none; padding: 5px;' href='".get_option('instagram_link')."'>
      <i class='fab fa-instagram'></i>
        </a>
    <a style='color:white; text-decoration: none;  padding: 5px;' href='".get_option('twitter_link')."'>
    <i class='fab fa-twitter-square'></i>
      </a>
      <a style='color:white; text-decoration: none;  padding: 5px;' href='".get_option('linkedin_link')."'>
      <i class='fab fa-linkedin'></i>
        </a>
    </div>


     
    
  </footer>";
}
add_action( 'wp_footer', 'my_function' );
?>

