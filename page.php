<?php

get_header();

if(have_posts())
{
    while(have_posts())
    {
        the_post();
        get_template_part('template_parts/content', 'full');
    }
}

get_footer();

?>