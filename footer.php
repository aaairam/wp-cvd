<?php wp_footer(); ?>


<?php 
$homepage_id = get_option('page_on_front');
?>

<section class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="social__media">


            <?php if (have_rows('the_icons' ,$homepage_id)): ?>
            <?php while ( have_rows('the_icons',$homepage_id)): the_row(); ?>
            <?php 
            $sub_value = get_sub_field('icons');
            $link =  get_sub_field('icons_link');
             ?>

                <a href="<?php echo $link ?>"><i class="<?php  echo $sub_value ?>"></i></a>


                <?php endwhile; ?>
                <?php endif; ?>
                
                <p>Baloc Road, Brgy San Ignacio San Pablo City, Laguna 400</p>
            </div>
            <p>©CREATIVEVISUALDESIGNS 2022</p>
        </div>
    </div>
 </section>  