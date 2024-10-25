<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="disp()">
<?php get_header(); ?>
<div class="header">
<h1>
    <?php 
        bloginfo(); //  Site Title.
        wp_nav_menu(); // Menu.
    ?>
</h1>
</div>
<div class="container">
<?php 
if (have_posts())
{
    while (have_posts())
    {
?>
<h1><?php the_title(); // Post Title ?></h1>
<p>
<?php
        the_post(); // Post Title.
        the_excerpt(); // Post Content.
        the_author(); // Post Author.
        the_category(); // Display Post Category.
        the_permalink(); // Display Permalink.
        the_date(); // Display Date.
        the_time(); // Display Time.
        get_post_thumbnail_id();
    }
        
}
?>
</p>
</div>
<div class="footer">
<?php get_footer();?> 
</div>      
</body>
</html>