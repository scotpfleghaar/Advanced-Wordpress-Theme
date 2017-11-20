
    
<?php get_header();?>


    <div class="container content">
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class='post'>
                        <h2><?php the_title();?></h2>
                        <p class="meta">Posted at
                             <?php the_time('F j, Y g:i a')?>
                             by 
                             <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                             <?php the_author();?></a>
                            | Posted in <?php $categories = get_the_category();
                            $separator = ", ";
                            $output = ''; 
                            if($categories){
                                foreach($categories as $category){
                                    $output .= "<a href='".get_category_link($category->term_id)."'>".$category->cat_name."</a>" . $separator;
                                }
                            }
                            echo trim($output, $separator);
                            ?>
                            </p>
                            <?php if(has_post_thumbnail()) :?>
                            <div class="post-thumbnail"><?php the_post_thumbnail()?></div>

                        <?php endif; ?>
                        <?php the_content();?>
                        
                    </article>
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