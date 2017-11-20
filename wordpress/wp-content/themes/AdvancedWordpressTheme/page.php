
    
<?php get_header();?>


    <div class="container content">
        <div class="main block">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <article class="page">
                        <?php if(page_is_parent() || $post->post_parent > 0 ) :?>
                            <nav class="nav sub-nav">
                            <ul>
                                <span class='parent-link'><a href="<?php echo get_the_permalink(get_top_parent());?>"><?php echo get_the_title(get_top_parent());?></a></span>
                            <?php $args=array(
                                'child_of' => get_top_parent(),
                                'title' => ''
                            )?>
                            <?php wp_list_pages($args);?>
                            </ul>
                            </nav>
                            <div class="clr"></div>
                        <?php endif ?>
                        <h2><?php the_title();?></h2>
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