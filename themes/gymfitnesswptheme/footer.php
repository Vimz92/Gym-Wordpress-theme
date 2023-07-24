<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<footer class="site-footer container">

<div class="footer-content">
<?php 
        $args=array(
            'theme_location' => 'main-menu',  
            'container'=> 'nav',
            'container-class' => 'main-menu'
        );
        wp_nav_menu($args);
    ?>

    <p>All Rights Reserved. <?php echo get_bloginfo('name')  ?>
</div>


</footer>
    
</body>
</html>