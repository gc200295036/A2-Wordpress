<?php 
/* Template Name: Homepage Template */
// the below php hook is used to call the header template
get_header();
?>
<!-- this is the part of the document that will handle the content of the webpage-->
<main>
<!-- while loop -->
    <?php 
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content/content-page');
        endwhile;
    ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>