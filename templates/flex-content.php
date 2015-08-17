<?php

// check if the flexible content field has rows of data
if( have_rows('page_sections') ):

     // loop through the rows of data
    $i = 1; while ( have_rows('page_sections') ) : the_row();

        if( get_row_layout() == 'title_description' ):

          include('flex/sectionGeneral.php');

        elseif( get_row_layout() == 'hero_image' ): 

        	include('flex/sectionHero.php');

        elseif( get_row_layout() == 'full_width_gallery' ): 

          include('flex/sectionFWgallery.php');

        elseif( get_row_layout() == 'field_of_dreams' ): 

          include('flex/sectionDreams.php');

        elseif( get_row_layout() == 'hero_gallery' ): 

          include('flex/sectionHeroSlider.php');

        endif;

    $i++; endwhile;

else :

    //echo 'no rows bros';// no layouts found

endif;

?>