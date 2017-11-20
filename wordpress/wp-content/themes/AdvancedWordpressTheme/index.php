
    
<?php get_header();?>


    <div class="container content">
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('content', get_post_format());?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, no posts where found')?>
            <?php endif; ?>
        </div>
        <div class="side">
            <div class="block">
                <h3>Sidebar head</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis tristique vulputate. Proin tristique
                    elementum est, quis aliquam diam blandit vel. Duis id efficitur enim, ultrices suscipit leo. Aenean et
                    fringilla sapien, eget porta magna. Aliquam eu leo ex. Nunc efficitur dolor tempor arcu ultrices, in
                    sodales eros pellentesque. Etiam laoreet nisl eget libero varius fringilla in nec eros. Nunc at ex vel
                    metus consequat imperdiet. Vestibulum lacinia risus id lorem lacinia, at lacinia nulla scelerisque. Maecenas
                    vitae dapibus eros.</p>
                <a class="button" href="#">Read More</a>
            </div>
        </div>
    </div>
    <?php get_footer();?>