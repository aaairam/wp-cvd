<?php
  /**
   *Template Name: Updates
   */
?>

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
            <div class="updates__right">
                <div class="updates__categ bb-1">
                    <h3>CATEGORIES</h3>
                    <table>
                      
                        <?php

                $args = array (
                    'post_type' => 'CategoryPost',
                    'posts_per_page'   => 5,

                );
                $newQuery = new WP_Query($args)
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                        <tr>
                        <td><?php the_title() ?></td>
                        <td><?php echo get_the_excerpt() ?></td>
                        </tr>
                        <?php

                endwhile;
                else:
                echo"no available content";
                endif;
                wp_reset_postdata();
                ?>
                    </table>
                </div>
                <div class="updates__rp bb-1">
                        <h3>RECENT POST</h3>
                        <?php

                $args = array (
                    'post_type' => 'RecentPost',
                    'posts_per_page'   => 3,
                
                );
                $newQuery = new WP_Query($args)
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                        <div class="rp__item">
                            <?php echo get_the_post_thumbnail() ?>
                            <div class="rp__item__text">
                                <h4><?php the_content() ?></h4>
                                <p><?php echo get_the_excerpt() ?></p>
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


                <div class="updates__tags">
                    <h3>TAGS</h3>
                    <div class="tags__item">    
                        <a href="" class="btn bg-light">WEB DESIGN</a>             
                        <a href="" class="btn bg-light">WIRE FRAME</a>
                        <a href="" class="btn bg-light">WEB DEVELOPMENT</a>
                        <a href="" class="btn bg-light">LOGO</a>
                        <a href="" class="btn bg-light">VECTOR</a>
                        <a href="" class="btn bg-light">SOCIAL MEDIA</a>                                   
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>

<?php include 'contactus.php'; ?>
<?php get_footer(); ?>