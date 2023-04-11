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
                <div class="left__item">
                    <img src="<?php echo get_template_directory_uri() ?>./img/updates/unsplash_dJpupM4LiS4.png" alt="">
                    <?php

          $args = array (
              'post_type' => 'CardsPost',
              'posts_per_page'   => 6,

          );
          $newQuery = new WP_Query($args)
          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                    
                    <div class="updates__author">
                        <ul>
                            <li><i class="fa-solid fa-user"></i>Maria Gilda Ceria</li>
                            <li><i class="fa-solid fa-calendar-days"></i>February 23, 2023</li>
                            <li><i class="fa-solid fa-tags"></i>Web Design | Wire Frame</li>
                        </ul>

                    </div>

                    <?php

                  endwhile;
                  else:
                  echo"no available content";
                  endif;
                  wp_reset_postdata();
                  ?>
                    <div class="updates__text">
                        <h3>Designing Concept</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat distinctio reprehenderit nihil eos exercitationem suscipit voluptatibus necessitatibus, dolorem praesentium eius! Molestiae consectetur, explicabo animi ad accusamus debitis inventore quisquam ipsum possimus ipsam voluptates harum? Quisquam facilis voluptatum reiciendis aspernatur ducimus quo nobis, rerum ipsum vero, blanditiis, quos odio nostrum. Dolorum!</p>
                        <a href="">Read more...</a>

                    </div>
                </div>
                <div class="left__item">
                    <img src="./img/updates/unsplash_FVgECvTjlBQ.png" alt="">
                    <div class="updates__author">
                        <ul>
                            <li><i class="fa-solid fa-user"></i>Maria Gilda Ceria</li>
                            <li><i class="fa-solid fa-calendar-days"></i>February 23, 2023</li>
                            <li><i class="fa-solid fa-tags"></i>Web Design | Wire Frame</li>
                        </ul>

                    </div>
                    <div class="updates__text">
                        <h3>Design to Code</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat distinctio reprehenderit nihil eos exercitationem suscipit voluptatibus necessitatibus, dolorem praesentium eius! Molestiae consectetur, explicabo animi ad accusamus debitis inventore quisquam ipsum possimus ipsam voluptates harum? Quisquam facilis voluptatum reiciendis aspernatur ducimus quo nobis, rerum ipsum vero, blanditiis, quos odio nostrum. Dolorum!</p>
                        <a href="">Read more...</a>

                    </div>
                </div>
            </div>
            <div class="updates__right">
                <div class="updates__categ bb-1">
                    <h3>CATEGORIES</h3>
                    <table>
                        <tr>
                            <td>Web Design</td>
                            <td>(2)</td>
                        </tr>
                        <tr>
                            <td>Web Development</td>
                            <td>(3)</td>
                        </tr>
                        <tr>
                            <td>Wire Frame</td>
                            <td>(1)</td>
                        </tr>
                        <tr>
                            <td>Vector & Logo</td>
                            <td>(5)</td>
                        </tr>
                        <tr>
                            <td>Social Media</td>
                            <td>(2)</td>
                        </tr>
                    </table>
                </div>
                <div class="updates__rp bb-1">
                        <h3>RECENT POST</h3>
                        <div class="rp__item">
                            <img src="./img/updates/unsplash_Im7lZjxeLhg.png" alt="">
                            <div class="rp__item__text">
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quod recusandae.</h4>
                                <p>February 23, 2023</p>
                            </div>                          
                        </div>
                        <div class="rp__item">
                            <img src="./img/updates/unsplash_MxVkWPiJALs.png" alt="">
                            <div class="rp__item__text">
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quod recusandae.</h4>
                                <p>February 23, 2023</p>
                            </div>                          
                        </div>
                        <div class="rp__item">
                            <img src="./img/updates/unsplash_OqtafYT5kTw.png" alt="">
                            <div class="rp__item__text">
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quod recusandae.</h4>
                                <p>February 23, 2023</p>
                            </div>                          
                        </div>
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
<?php get_footer(); ?>