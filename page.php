<?php get_header(); ?>

                      
                            <div class="module">
                                <div class="module-head">
                                    <h3><?php the_title(); //Titulo de la Pagina ?></h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">

                                        <?php edit_post_link(); ?>
                                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
                                        
                                        <?php the_content(); // Contenido  ?> 



                                        <div class="entry-links"><?php wp_link_pages(); ?></div>


                                        <?php 
                                        if ( comments_open() && !post_password_required() ) 
                                        { 
                                            comments_template( '', true ); 
                                        } 
                                      
                                        ?>

                                        <?php

                                        echo '
                                            <script type="text/javascript">
                                                var URLactual = window.location;  
                                                
                                                if (URLactual == "'.get_site_url().'/dashboard/" )
                                                {
                                                 window.location.href = "'.get_site_url().'/";   
                                                }

                                            </script>
                                        ';


                                        /*
                                        Esta Funcion Determina si el usuario es diferente de administrador y redirige la pagina a la raiz
                                        */
                                              if( is_user_logged_in() ) 
                                              {
                                                $user = wp_get_current_user();
                                                $role = ( array ) $user->roles;
                                                $CurrentRole = $role[0];
                                                if ($CurrentRole != 'administrator' )
                                                {
                                                    echo "";
                                                }
                                              } 
   
                                
                                        ?>



                                        <!--
                                        <div class="entry-links"><?php wp_link_pages(); ?></div>
                                        <?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
                                        -->

                                    </div>
                                </div>
                            </div>


<?php get_footer(); ?>               