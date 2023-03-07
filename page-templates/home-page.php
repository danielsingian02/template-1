<?php
/**
 * Template Name: Template 1 Home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-backend-theme
 */

 function getAcfValue($key)
 {
   echo empty(get_field($key)) ? acf_get_field($key)['default_value'] : get_field($key);
 }

get_header();
?>
<!-- hero banner -->
<main id="primary" class="site-main">
    <section class="hero-banner">
        <div class="col-sec col-center">
            <h2 class="hero-banner__heading"><?php getAcfValue("header_text");?></h2>
            <p class="hero-banner__subhead"><?php getAcfValue("header_sub_text");?></p>      
        </div>
    </section>
<!-- end of hero banner -->
<!-- about section -->
    <section class="about">
        <div class="about col-sec">
            <div class="about__container flex">
                <div class="about__colwrapper">
                    <h2 class="about__col1__head"><?php getAcfValue("about_head");?></h2>  
                    <div class="divider"></div>   
                    <p class="about-col1__intro"><?php getAcfValue("about_description");?></p>     
                </div>
                <div class="about__colwrapper col-center">
                    <div class="about__btn-wrap">
                        <a href="<?php getAcfValue("button_link_1");?>" class="cards__btn"><?php getAcfValue("button_name_1");?></a>
                        <a href="<?php getAcfValue("button_link_2");?>" class="cards__btn"><?php getAcfValue("button_name_2");?></a>
                        <a href="<?php getAcfValue("button_link_3");?>" class="cards__btn"><?php getAcfValue("button_name_3");?></a>
                        <a href="<?php getAcfValue("button_link_4");?>" class="cards__btn"><?php getAcfValue("button_name_4");?></a>                      
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- end of about section-->




<!-- location section -->
    <div class="map-container flex">
        <div class="col-sec--map ">         
            <h2 class="map__heading"><?php getAcfValue("map_heading");?></h2>
            <div class="divider--white"></div>          
            <p class="map__description"><?php getAcfValue("map_paragraph");?></p>   
        </div>     

        <div class="map__location-col2">
            <?php
            /** 
             *  Google Map Link
             * 
             * @string Google Map Embed = google_map_embed
             
            * */      
            $googleMapLink = get_field('google_map_embed') ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663169.1803332209!2d-80.55231773090945!3d35.494947564826745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670919995695!5m2!1sen!2sph';
            ?>
            <iframe src="<?php echo $googleMapLink ?>" 
                width="100%" 
                height="450"
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="location__iframe">
            </iframe>
        </div>    
    </div>
<!-- end of location section -->
	</main><!-- #main -->

<?php

get_footer();
