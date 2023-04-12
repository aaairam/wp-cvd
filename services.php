<?php
  /**
   *Template Name: Services
   */
?>

<?php get_header(); ?>

<?php

    $args = array (
    'post_type' => 'ServicesPost',
    'posts_per_page'   => 3,
    );
    $newQuery = new WP_Query($args)
?>

<?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>


<section class="<?php echo get_field('class_name')?>">
    <div class="container">
        <div class="service__wrapper">
            <div class="web">
                <div class="service__text">
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content() ?></p>
                    <p><?php the_content() ?></p>
                    <div class="price">
                        <h4>Price starts at</h4>
                        <h2><?php echo get_field('the_price')?></h2>
                        <h5><i><?php echo get_field('text')?></i></h5>
                    </div>
                </div>
                <?php echo get_the_post_thumbnail() ?>
            </div>
            
        </div>
    </div>
    <div class="down">
        <a href=""><i class="<?php echo get_field('icon')?>"></i></a>
    </div>
</section>

<?php

    endwhile;
    else:
    echo"no available content";
    endif;
    wp_reset_postdata();
?>

<?php include 'contactus.php'; ?>

<?php get_footer(); ?>