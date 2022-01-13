<!--Inico Sidebar -->
                        
<?php
    global $wpdb;                   // datos del sistema
    // echo '--->'.get_current_user_id().'<br>'; 
    $current_user = wp_get_current_user();
?>

                        <div class="sidebar">

                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo $url ?>">
                                    <?php printf( __( 'Username: %s <br/>', 'textdomain' ), esc_html( $current_user->user_login ) ); ?></a></i>
                            </ul>

                            <ul class="widget widget-menu unstyled">
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                        <i class="menu-icon icon-dashboard"></i>
                                        <i class="icon-chevron-down pull-right"></i>
                                        <i class="icon-chevron-up pull-right"></i>More Pages 
                                    </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="http://localhost/wordpress/dashboart-resume/"><i class="icon-dashboard"></i>Resumen</a></li>
                                        <li><a href="#"><i class="icon-dashboard"></i>Profile </a></li>
                                        <li><a href="#"><i class="icon-dashboard"></i>All Users </a></li>
                                    </ul>
                                </li>
                            </ul>


                            <!--
                            <ul class="widget widget-menu unstyled">
                                <li class="active">
                                    <a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
                                </li>
                                <li>
                                    <a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox 
                                        <b class="label green pull-right">11</b> 
                                    </a>
                                </li>
                                <li>
                                    <a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks 
                                        <b class="label orange pull-right">19</b> 
                                    </a>
                                </li>
                            </ul>
                            -->
                            <!--/.widget-nav-->
                            
                            <!--
                            <ul class="widget widget-menu unstyled">
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
                            </ul>
                            -->
                            <!--/.widget-nav-->



                            <ul class="widget widget-menu unstyled">
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>


                            <ul class="widget widget-menu unstyled">
                            
                            </ul>

                        </div>
                        <!--/.sidebar-->

                        <!-- Inicio de sidebar -->

                        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                            <aside id="secondary" class="sidebar widget-area" role="complementary">
                                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                            </aside><!-- .sidebar .widget-area -->
                        <?php endif; ?>


                        <!-- Fin de sidebar-->