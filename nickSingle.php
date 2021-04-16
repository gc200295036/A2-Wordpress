<?php 
/* 
Template Name: Nicks Website Template
Template Post Type: Nicks Website
*/
get_header();
?>
<main class="nick-main">
<section>
<div>
    <?php 
    if (has_post_thumbnail());
    ?>
    <img src="<?php the post_thumbnail_url('largest');?>" alt="nick image">
    <?php endif; ?>
</div>
<div>
    <?php if(have_posts()) : while(have_posts(() : the_post();?>
    <h1>
    <?php the_title(); ?>
    </h1>
    <?php the_content();?>
    <?php endwhile; endif;?>
</div>
</section>
</main>
<?php get_footer();
?>
