<?php
/*
Template Name: Yip-Landing-Page
*/
get_header();
?>

<div class="container clearfix">
    <div class="banner">
            <img src="<?php echo get_template_directory_uri().'/assets/images/Yip-Landing-page-banner.png'?>" >
            </div>
    <div class="column-left Yip-Landing-Page">
    <h1><?php _e('yiptv is free live tv!','yiptv'); ?></h1>
    <div class="content Yip-Landing-Page">
    <p><?php _e('Its true! Join free today and in minutes, you will have unlimited access to 18 live channels from Latin America and around for as long as you like. Plus, free members can watch 9 bonus channels from our Premium Membership, FREE for the first 7 days','yiptv'); ?></p></div>
    
    <div class="channel Yip-Landing-Page">
    <h2><?php _e('channel lineup','yiptv'); ?></h2> 
    <div class="content Yip-Landing-Page">
    <p><?php _e('Yip TV NEVER requires a service contract or any additional equipment to watch sports, movies, news and entertainment and more.','yiptv'); ?></p>
    <p><?php _e('FREE membership, 18 FREE channels for as long as you like and 9 FREE bonus channels for your first 7 days. Thats what you get from YipTV','yiptv'); ?></p>
        </div>
        <img src="<?php echo get_template_directory_uri() .'/assets/images/pic1.png' ?>" alt="">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/pic2.png' ?>" alt="">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/pic3.png' ?>" alt="">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/pic4.png' ?>" alt="">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/pic5.png' ?>" alt="">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/pic6.png' ?>" alt="">
    </div>
    </div>
    <div class="column-right">
         <img src="<?php echo get_template_directory_uri() .'/assets/images/free-membership.png' ?>" alt="">
        <div class="premium">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/premium-member.png' ?>" alt=""></div>
    </div>
</div>
    <div class="signup Yip-Landing-Page">
        <div class="container">
             <h2><?php _e('start watching now<a href="#">join free</a>','yiptv'); ?></h2>
        </div>
    </div>
    <div class="family-share">
        <div class="container">
             <h2>How To Watch</h2>
            <span class="column1">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/iphone.png' ?>" alt="">
            <p><?php _e('Just sign up for YipTV and begin watching for free right away!','yiptv'); ?></p>
            </span>
            <span class="column2">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/laptop.png' ?>" alt="">
            <p><?php _e('Sign in at yiptv.com and watch on any TV. PC or mobile device that is connected to the internet.','yiptv'); ?></p>
            </span>
            <span class="column3">
            <img src="<?php echo get_template_directory_uri() .'/assets/images/samsung.png' ?>" alt="">
            <p><?php _e('Download our free app from Google Play or App Store and watch from home or on the go. Data rates apply.','yiptv'); ?></p>
            </span>
        </div>
    </div>
<div class="signup Yip-Landing-Page">
        <div class="container">
             <h2><?php _e('start watching now<a href="#">join free</a>','yiptv'); ?></a></h2>
        </div>
    </div>

<?php get_footer(); ?>