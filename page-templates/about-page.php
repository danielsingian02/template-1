<?php
/**
 * Template Name: Template 1 About 
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
    function getAcfValue($key){
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
                    <div class="about__img-wrap">
                        <?php $aboutimg = get_field('about_img');?>
                        <img src="<?php echo $aboutimg; ?>" class="about__img">
                        <p class="about__img-desc"><?php getAcfValue("image_description");?></p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- end of about section-->

<!-- cards -->
    <section class="cards">
        <h2 class="card__heading"><?php getAcfValue("card_head");?></h2>
        <div class="divider--center"></div>
        <div class="card-wrapper col-sec flex">
            <div class="cards__colwrapper">
                <div class="cards__wrapper col-center">
                    <div class="cards__main-container flex">
                        <div class="card__container">
                            <div class="inner-card-container col-center">
                                <?php $cardimg = get_field('card_image');?>
                                <img src="<?php echo $cardimg ?>" class="cards__img">
                                <div class="card-body col-center">
                                    <h4 class="cards__title"><?php getAcfValue("card_title1");?></h4>
                                    <p class="cards__desc"><?php getAcfValue("card_description1");?></p>
                                    <a href="<?php getAcfValue("card_link1");?>" class="cards__link"><?php getAcfValue("link_text1");?></a>
                                </div>
                            </div>
                        </div>
                
                        <div class="card__container">
                            <div class="inner-card-container col-center">
                                <?php $seccardimg = get_field('card_image2');?>
                                <img src="<?php echo $seccardimg ?>" class="cards__img">
                                <div class="card-body col-center">
                                    <h4 class="cards__title"><?php getAcfValue("card_title2");?></h4>
                                    <p class="cards__desc"><?php getAcfValue("card_description2");?></p>
                                    <a href="<?php getAcfValue("card_link2");?>" class="cards__link"><?php getAcfValue("link_text2");?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards__main-container flex">
                        <div class="card__container">
                            <div class="inner-card-container col-center">
                                <?php $thirdcardimg = get_field('card_image3');?>
                                <img src="<?php echo $thirdcardimg ?>" class="cards__img">
                                <div class="card-body col-center">
                                    <h4 class="cards__title"><?php getAcfValue("card_title3");?></h4>
                                    <p class="cards__desc"><?php getAcfValue("card_description3");?></p>
                                    <a href="<?php getAcfValue("card_link3");?>" class="cards__link"><?php getAcfValue("link_text3");?></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card__container">
                            <div class="inner-card-container col-center">
                                <?php $fourthcardimg = get_field('card_image4');?>
                                <img src="<?php echo $fourthcardimg ?>" class="cards__img">
                                <div class="card-body col-center">
                                    <h4 class="cards__title"><?php getAcfValue("card_title4");?></h4>
                                    <p class="cards__desc"><?php getAcfValue("card_description4");?></p>
                                    <a href="<?php getAcfValue("card_link4");?>" class="cards__link"><?php getAcfValue("link_text4");?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="cards__colwrapper display-start-col ">
                <?php $firsticon = get_field('list_icon');
                      $secicon = get_field('list_icon2');
                      $thirdicon = get_field('list_icon3');
                      $fourthicon = get_field('list_icon4');?>
                <h2 class="cards__list-title"><?php getAcfValue("list_title");?></h2>
                <p class="cards__list-desc"><?php getAcfValue("list_description");?></p>
                <div class="cards-list-wrapper flex">
                    <div class="cards-icon-list"><img src="<?php echo $firsticon ?>" class="cards__img"></div>
                    <div class="cards__list-wrapper"><p class="cards__list"><?php getAcfValue("list_item1");?></p></div>
                </div>

                <div class="cards-list-wrapper flex">
                    <div class="cards-icon-list"><img src="<?php echo $secicon ?>" class="cards__img"></div>
                    <div class="cards__list-wrapper"><p class="cards__list"><?php getAcfValue("list_item2");?></p></div>
                </div>
                
                <div class="cards-list-wrapper flex">
                    <div class="cards-icon-list"><img src="<?php echo $thirdicon ?>" class="cards__img"></div>
                    <div class="cards__list-wrapper"><p class="cards__list"><?php getAcfValue("list_item1");?></p></div>
                </div>

                <div class="cards-list-wrapper flex">
                    <div class="cards-icon-list"><img src="<?php echo $fourthicon ?>" class="cards__img"></div>
                    <div class="cards__list-wrapper"><p class="cards__list"><?php getAcfValue("list_item1");?></p></div>
                </div>

                <div class="cards-btn-wrap"><a href="#" class="button">Link Button</a></div>
            </div>
        </div>
    </section>
<!-- end of cards -->

<!-- info section -->
    <section class="info">
        <div class="col-sec flex">
            <div class="row-wrap col-center">
                <p class="info-desc"><?php getAcfValue("first_paragraph");?></p>
                <p class="info-desc"><?php getAcfValue("second_paragraph");?></p>
                <p class="info-desc"><?php getAcfValue("third_paragraph");?></p>
            </div>
            <div class="row-wrap col-center">
                <?php $infoimg = get_field('info_image');?>
                <img src="<?php echo $infoimg; ?>" class="info__img">
            </div>
        </div>
    </section>
<!-- end of card section -->


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
