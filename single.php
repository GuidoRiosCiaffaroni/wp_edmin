<?php get_header(); ?>

                      
                            <div class="module">
                                <div class="module-head">
                                    <h3><?php the_title(); //Titulo de la Pagina ?></h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">

                                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    <?php get_template_part( 'entry' ); ?>
                                    <?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
                                    <?php endwhile; endif; ?>
          
                                    </div>
                                </div>
                            </div>


<?php get_footer(); ?>               