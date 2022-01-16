<?php get_header(); ?>

                      
                            <div class="module">
                                <div class="module-head">
                                    <h3><?php the_title(); //Titulo de la Pagina ?></h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">

 
                                    <?php if ( have_posts() ) : ?>
                                    <h1 class="entry-title" itemprop="name"><?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
                                    <?php while ( have_posts() ) : the_post(); ?>
                                    <?php get_template_part( 'entry' ); ?>
                                    <?php endwhile; ?>
                                    <?php get_template_part( 'nav', 'below' ); ?>
                                    <?php else : ?>
                                    <article id="post-0" class="post no-results not-found">
                                    <h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
                                    <div class="entry-content" itemprop="mainContentOfPage">
                                    <p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
                                    <?php get_search_form(); ?>
                                    </div>
                                    <?php endif; ?>


                                    </div>
                                </div>
                            </div>


<?php get_footer(); ?>               