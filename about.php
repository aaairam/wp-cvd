<?php
  /**
   *Template Name: About
   */
?>

<?php get_header(); ?>

<section class="About-me">
    <div class="container">
        <div class="aboutme__wrapper">
            <div class="aboutme__TEXT">
                <div class="about--text">
                    <h3><?php echo get_field('about_banner_paragraph')?></h3>
                    <h1><?php echo get_field('about_banner_title')?></h1>
                    <p><?php echo get_field('about_banner_big_paragraph')?></p>
                    <p><?php echo get_field('about_banner_big_paragraph')?></p>
                </div>
                <div class="about--icon">
                    <ul>
                        <li>
                            
            <?php if (have_rows('the_icons')): ?>
            <?php while ( have_rows('the_icons')): the_row(); ?>
            <?php 
            $sub_value = get_sub_field('icons');
            $link =  get_sub_field('icons_link');
             ?>

                <a href="<?php echo $link ?>"><i class="<?php  echo $sub_value ?>"></i></a>


                <?php endwhile; ?>
                <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
            
            <img src="<?php echo get_template_directory_uri() ?>./img/about/about me 1.png" alt="">            
        </div>
    </div>
    <div class="down">
    <a href=""><i class="fa-solid fa-angle-down"></i></a>
    </div>
</section>
<section class="projects">
    <div class="container">
        <div class="project__text">
                <h2><?php echo get_field('about_banner_main_title')?></h2>
                <p><?php echo get_field('about_banner_main_paragraph')?></p>
            </div>
        <div class="project__wrapper">


        <?php

            $args = array (
                'post_type' => 'CardsPost',
                'posts_per_page'   => 6,
                
            );
            $newQuery = new WP_Query($args)
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
            <div class="project__card">               
            <?php echo get_the_post_thumbnail() ?>
                    <div class="cards__text">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_content() ?></p>
                    </div>                
            </div>

            <?php

            endwhile;
            else:
            echo"no available content";
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
</section>

<?php include 'contactus.php'; ?>

<?php get_footer(); ?>