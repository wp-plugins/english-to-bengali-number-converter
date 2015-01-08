<?php
/*
Plugin Name: English To Bengali Number Converter
Plugin URI:  http://www.timenews24.com/plugin/English-To-Bengli-Number-Convert.zip
Description: This plugin will help users  convert English to Bengali Date,Time and All Numbers  with pure Php.
Author: Ruhul Amin
Author URI: http://ruhul.me
Version: 1.2.7
*/

 /* Adding plugin convert section  */
	add_filter('current_time', 'Bengali_DTN');
	add_filter('the_date', 'Bengali_DTN');
	add_filter('the_time', 'Bengali_DTN');
	add_filter('the_views', 'Bengali_DTN');
	add_filter('page_number', 'Bengali_DTN');
	add_filter('comments_number', 'Bengali_DTN');;
	add_filter('get_comment_date', 'Bengali_DTN');
	add_filter('get_comment_time', 'Bengali_DTN');
	add_filter('number_format_i18n', 'Bengali_DTN', 10, 1);
	add_filter('pre_date_i18n', 'Bengali_DTN', 10, 2); 
    add_filter( 'get_the_time', 'Bengali_DTN' );
    add_filter( 'get_the_date', 'Bengali_DTN' );
    add_filter( 'get_comment_count', 'Bengali_DTN' );
    add_filter( 'get_archives_link', 'Bengali_DTN' );
    add_filter( 'wp_list_categories', 'Bengali_DTN' );
	
function Bengali_DTN($NRS){
	$englDTN = array
			('1','2','3','4','5','6','7','8','9','0',
			'Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
			'Sat','Sun','Mon','Tue','Wed','Thu','Fri',
			'am','pm','at','st','nd','rd','th',
			'January','February','March','April','May','June','July','August','September','October','November','December',
			'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
			$bangDTN = array
			('১','২','৩','৪','৫','৬','৭','৮','৯','০',
			'শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার',
			'শনি','রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র',
			'পূর্বাহ্ণ','অপরাহ্ণ','','','','','',
			'জানুয়ারি','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর',
			'জানু','ফেব্রু','মার্চ','এপ্রি','মে','জুন','জুলা','আগ','সেপ্টে','অক্টো','নভে','ডিসে');
			$converted = str_replace($englDTN, $bangDTN, $NRS);
			return $converted; 
			}
?>