<?php 
/* 
* Template Name: Custom Post Template No Custom Fields
*  Template Post Type: post
*/
get_header();
?>
<main class="post-main-v2">
    <section>
    <!-- add post wrapper -->
    <?php if(have_posts()) :while(have_posts()) : the_post();?>
        <div class="post-wrapper">
        <?php the_post_thumbnail(); ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <?php ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>