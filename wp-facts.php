<?php
/*
Plugin Name: WP Facts
Version: 1.0
Plugin URI: http://www.ism-soft.com/tools/wp-facts-plugin
Description: WP Facts shows a simple facts-photo whith short description on Your sidebar.
Author: ISM
Author URI: http://www.ism-soft.com/
*/

function wp_get_facts($before_title="",$after_title="") {

	$wp_facts_start = '
<style>
 #wp-facts{  }
 #wp_facts_image_in{padding: 0px 0px 0px 0px; width: 100%; text-align: center; height:220px;}
 #img_wp_facts{ display: block; margin: 2px auto;
		width: 190px; height: 173px; 
		background: url(\''.get_option('home')  .'/wp-content/plugins/wp-facts/images/bg.png\');}
 #url_wp_facts{width: 80px; margin: 1px 10px 1px 125px; display: block; text-align: left; height: 10px;}
 .wp_facts_img{ width: 150px; height:136px; margin: 20px 12px; border: 0px;}
 #desc_wp_facts{ margin: 0px auto; line-height: 12px; width: 170px; padding: 0px 10px;}

</style>
		<div id="wp_facts_image_in">
		<div id="img_wp_facts">
	
			';
	
	
	
	$wp_facts_end ="
		</div>
		<div id='url_wp_facts' style='font-size: 8px;  line-height: 10px; height: 10px;'>
			WP Facts by <a style='font-size: 8px;' href='http://www.ism-soft.com' title='WP Facts Plugin sponsored by ISM' >ISM</a> 
		</div>
		
		</div>
	";

$wp_facts = array(
	1 => array( "img_name" => "china_population.jpg",
				"desc" => "China Population: 1,338,612,968 (&nbsp;2010&nbsp;estimate&nbsp;)",
				"name" => "China Population",  
				"url" => "http://en.wikipedia.org/wiki/People%27s_Republic_of_China",
				 ),
				 
	2 => array( "img_name" => "india_population.jpg",
				"desc" => "India Population: 1,186,623,000 (&nbsp;2010&nbsp;estimate&nbsp;)",
				"name" => "India Population",  
				"url" => "http://en.wikipedia.org/wiki/India",
				 ),
				 
	3 => array( "img_name" => "india_english.jpg",
				"desc" => "India biggest English&nbsp;speaking&nbsp;country: 1,186,623,000 (&nbsp;2010&nbsp;estimate&nbsp;)",
				"name" => "India biggest English speaking country",  
				"url" => "http://en.wikipedia.org/wiki/List_of_countries_where_English_is_an_official_language",
				 ),
 
	4 => array( "img_name" => "top_sites.jpg",
				"desc" => "3&nbsp;of&nbsp;top&nbsp;10&nbsp;site in&nbsp;2010 did&nbsp;not&nbsp;exist&nbsp;in&nbsp;2003",
				"name" => "Top Sites",  
				"url" => "http://www.alexa.com/topsites",
				 ),
	
	5 => array( "img_name" => "jobs_to_38.jpg",
				"desc" => "today’s&nbsp;learner will&nbsp;have&nbsp;10-14 jobs by&nbsp;the&nbsp;age&nbsp;of&nbsp;38",
				"name" => "Jobs to 38",  
				"url" => "http://www.dol.gov/",
				 ),
	
	6 => array( "img_name" => "myspace_users.jpg",
				"desc" => "There are over  250&nbsp;million registered users on&nbsp;MySpace.",
				"name" => "There are over  250",  
				"url" => "http://en.wikipedia.org/wiki/MySpace",
				 ),
	7 => array( "img_name" => "facebook_users.jpg",
				"desc" => "There are over  500&nbsp;million registered users on&nbsp;Facebook.",
				"name" => "There are over  500",  
				"url" => "http://en.wikipedia.org/wiki/Facebook",
				 ),
	8 => array( "img_name" => "facebook_country.jpg",
				"desc" => "If Facebook were a country it would be the 3rd-largest in the world.",
				"name" => "If Facebook were a country",  
				"url" => "http://en.wikipedia.org/wiki/List_of_countries_by_population",
				 ),	
				 
	9 => array( "img_name" => "myspace_country.jpg",
				"desc" => "If MySpace were a country it would be the 3rd-largest in the world.",
				"name" => "If MySpace were a country",  
				"url" => "http://en.wikipedia.org/wiki/List_of_countries_by_population",
				 ),	
				 
	10 => array( "img_name" => "myspace_visitors.jpg",
				"desc" => "MySpace.com have 10 million Daily Unique Visitors.",
				"name" => "MySpace.com have 10 million",  
				"url" => "https://www.google.com/adplanner/planning/site_profile#siteDetails?identifier=myspace.com&geo=001&trait_type=1&lp=true",
				 ),	
				 
	11 => array( "img_name" => "facebook_visitors.jpg",
				"desc" => "Facebook.com have 220 million Daily Unique Visitors.",
				"name" => "Facebook.com have 220 million",  
				"url" => "https://www.google.com/adplanner/planning/site_profile#siteDetails?identifier=facebook.com&geo=001&trait_type=1&lp=true",
				 ),	
				 
	12 => array( "img_name" => "first_sms.jpg",
				"desc" => "The first commercial text message was sent in december of 1982",
				"name" => "The first commercial text message",  
				"url" => "http://en.wikipedia.org/wiki/SMS",
				 ),	
				 
	13 => array( "img_name" => "left_handed_people.jpg",
				"desc" => "10% of people are left-handed",
				"name" => "10% of people are left-handed",  
				"url" => "http://news.nationalgeographic.com/news/2007/08/070801-left-gene.html",
				 ),	
				 
	14 => array( "img_name" => "longest_chess.jpg",
				"desc" => "Longest chess game was Nikolić-Arsović - 269 moves 20h 15min",
				"name" => "Longest chess game",  
				"url" => "http://en.wikipedia.org/wiki/List_of_world_records_in_chess#Longest_game",
				 ),	
				 
	15 => array( "img_name" => "tower.jpg",
				"desc" => "Burj Khalifa is the tallest building in the world - 828 m",
				"name" => "Burj Khalifa is the tallest building",  
				"url" => "http://en.wikipedia.org/wiki/Burj_Khalifa",
				 ),	
);

	$min = 1 ; $max = count($wp_facts);
	$output = $wp_facts[rand(1,$max)];

	$output_fin = '<ul class="wp_facts">' . $wp_facts_start . '<a rel="nofallow" title="'.$output["name"].'" href="'. $output["url"] .'"><img class="wp_facts_img" src="'. get_option('home')  .'/wp-content/plugins/wp-facts/images/' 
	. $output["img_name"]. '" alt="'.  $output["name"] .'"  title="'.  $output["name"] .'" ></a>'
	. '</div><div id="desc_wp_facts">' . $output["desc"] . $wp_facts_end . '<div style="clear: both; height:1px;"></div></ul>';
	
	return $output_fin;
}

function wp_facts(){
	
	$output = wp_get_facts() ;

	echo $output;
}



add_action('plugins_loaded', 'widget_sidebar_wp_facts');
function widget_sidebar_wp_facts() {
	function widget_wp_facts($args) {
	    extract($args);
		
		echo $before_widget;
		
		$output = wp_get_facts($before_title,$after_title);
		echo $output;
		echo $after_widget;
	}
	register_sidebar_widget('WP Facts', 'widget_wp_facts');
}



