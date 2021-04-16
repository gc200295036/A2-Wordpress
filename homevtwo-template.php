<?php
/* Template Name: homevtwo page template 
*  @version 1.0
*  Description: This template will use the plugin Advanced Custom Fields
*/
get_header();
?>
<main>
    <section class="masthead" style="background-image: url(<?php the_field('masthead_image'); ?>);">
    <div>
        <h1><?php the_field('masthead_title'); ?></h1>
    </div>
    </section>
    <section class="row-one">
        <article>
            <img src="<?php the_field('image_one'); ?>" alt="image one">
        </article>
        <article>
            <img src="<?php the_field('image_two'); ?>" alt="image two">
        </article>
        <article>
            <img src="<?php the_field('image_three'); ?>" alt="image three">
        </article>
    </section> <!-- end of row-one -->
    <section class="row-two">
        <article>
        <h2><?php the_field('title_1'); ?></h2>
        <p><?php the_field('text_2'); ?></p>
        </article>
        <article>
        <h2><?php the_field('title_2'); ?></h2>
        <p><?php the_field('text_2'); ?></p>
        </article>
    </section>
    <!-- for the posts -->
    <section class="all-posts">
    <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish'
        );
        $arr_posts = new WP_Query($args);
        if($arr_posts->have_posts()) :
            while ($arr_posts->have_posts()) :
                $arr_posts->the_post();
    ?>
    <article>
    <?php
    if(has_post_thumbnail()) :
        the_post_thumbnail();
    endif;
    ?>
    <header>
        <h4><?php the_title(); ?></h4>
    </header>
    </div>
        <?php the_excerpt(); ?>
        <?php the_category(); ?>
        <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </article>
    <?php
    endwhile;
    endif;
    ?>
    </section>
    <!-- my content -->
    <section class="nick-r-s">
    <article>
    <?php $args2 = array('post_type' =>'projects', 'posts_per_page' => 6);
    $the_query = new WP_Query($args2);
    if($the_query->have_posts()) :
        while($the_query->have_posts()) : $the_query->the_post();
    ?>
    <div>
        <?php if(has_post_thumbnail()) :?>
        <img src="<?php the_post_thumbnail_url('largest'); ?>" alt="nickimg">
        <?php endif; ?>
    </div>
    <div>
    <h1><?php the_title();?></h1>
    <?php the_excerpt();?>
    <?php the_category();?>
    <a href="<?php the_permalink();?>">Read More</a>
    </div>
    <?php 
        endwhile;
            wp_reset_postdata();
    else: 
    endif;
    ?>
    </article>
    </section>
    <!-- end of my new code-->
</main>
<?php
get_footer();
?>