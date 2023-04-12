<?php get_header(); ?>

<section class="updates">
    <div class="container">
        <div class="updates__title">
            <h1><?php echo get_field('updates_title')?></h1>
            <p><?php echo get_field('updates_title_paragraph')?></p>
        </div>
        <div class="updates__wrapper">
            <div class="updates__left">

             <?php

            $args = array (
                'post_type' => 'AuthorPost',
                'posts_per_page'   => 2,
                
            );
            $newQuery = new WP_Query($args)
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?> 
                <div class="left__item">
                <?php echo get_the_post_thumbnail() ?>
                    <div class="updates__author">
                        <ul>
                            <li><i class="fa-solid fa-user"></i>Karl Cydrick Raynes</li>
                            <li><i class="fa-solid fa-calendar-days"></i>February 23, 2023</li>
                            <li><i class="fa-solid fa-tags"></i><?php echo get_the_excerpt() ?></li>
                        </ul>

                    </div>
                    <div class="updates__text">
                        <h3><?php the_title() ?></h3>
                        <p><?php the_content() ?></p>
                        <a href="">Read more...</a>

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
    </div>
</section>

         
<?php get_footer(); ?>