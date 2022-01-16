<!-- Comentario -->
<?php get_header(); ?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                   
                            <!--/#btn-controls-->
  
                            <!--/.module-->
            


                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'entry' ); ?>
                            <?php comments_template(); ?>
                            <?php endwhile; endif; ?>
                            <?php get_template_part( 'nav', 'below' ); ?>
            
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
<?php get_footer(); ?>               