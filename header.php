<?php 

$url = home_url( '/' );

$current_user = wp_get_current_user(); 
$current_user_login = $current_user->user_login;
$current_user_email = $current_user->user_email;
$current_user_firstname = $current_user->user_firstname;
$current_user_lastname = $current_user->user_lastname;
$current_user_ID = $current_user->ID;

/*
$user = new WP_User( $current_user_ID );

if ( ! empty( $user->roles ) && is_array( $user->roles ) && in_array( 'Some_role', $user->roles ) ) 
{
    return true;
}

$current_user_roles = $user->roles;
*/

$current_user_roles = $current_user->roles;


/**/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <title><?php bloginfo( 'name' ); ?></title>
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo get_template_directory_uri(); ?>/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a>
                        <?php
                        if ( is_front_page() || is_home() || is_front_page() && is_home() ) { }
                        echo '<a class="brand" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url">' . esc_html( get_bloginfo( 'name' ) ) . '</a>';
                        if ( is_front_page() || is_home() || is_front_page() && is_home() ) { }
                        ?>
                    <div class="nav-collapse collapse navbar-inverse-collapse">

                    <?php
                    if (get_current_user_id() != NULL) 
                    {
                        echo '
                            <ul class="nav nav-icons">
                                <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                                <li><a href="#"><i class="icon-eye-open"></i></a></li>
                                <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                            </ul>
                        ';
                    }
                    ?>

                        <!--
                        <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="text" class="search-field" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
                            <input type="submit" value="Search">
                        </form> 
                        -->

                        <?php //get_search_form(); ?>

                    <ul class="nav pull-right">

                    <?php


                    if (get_current_user_id() != NULL) 
                    {
                     echo '
                        
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrador
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">  

                    ';
                                    wp_nav_menu( 
                                        array( 
                                            'theme_location' => 'main-menu', 
                                            'link_before' => '<span itemprop="name">', 
                                            'link_after' => '</span>' 
                                        ) 
                                    ); 

                    echo '
                                </ul>
                            </li>
                    ';


                    echo '
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">  </a></li>
                                    <li><a href="#">Item No. 1</a></li>
                                    <li><a href="#">Don\'t Click</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Example Header</li>
                                    <li><a href="#">A Separated link</a></li>
                                </ul>
                            </li>

                    ';

                    echo '
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="'.get_template_directory_uri().'/images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><?php echo $current_user_roles; ?></li>
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="'.wp_logout_url(home_url()).'">Logout</a></li>
                                </ul>
                            </li>

                    ';







                    }
                    ?>

                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                
                <div class="row">
                    <div class="span3">    


                    <?php
                    // activa sidebar solo si el usuario esta registrado 
                    if (get_current_user_id() != NULL) 
                    {
                        get_sidebar();
                    }
                    ?>

                    <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
                    <?php dynamic_sidebar( 'primary-widget-area' ); ?>
                    <?php endif; ?>
                    <!--Inico Sidebar -->
                    </div>

                    <?php
                    if (get_current_user_id() != NULL) 
                    {
                        //echo "<p class='exito'><b>Usuario validado</b>. Puede ingresar los datos.<p></br>";
                    }
                    else
                    {
                        echo '
                            <script type="text/javascript">
                                var URLactual = window.location;  
                                if (URLactual != "'.get_site_url().'/login" )
                                {
                                    window.location.href = "'.get_site_url().'/login";
                                    
                                    if(URLactual == "'.get_site_url().'/lostpassword")
                                    {
                                       // window.location.href = "'.get_site_url().'/login";
                                    }
                                    
                                }

                            </script>
                        ';
                    }


                    ?>


                    <?php
                    if (get_current_user_id() != NULL) 
                    {
                        echo '
                        <div class="span9">
                            <div class="content">
                        ';
                    }
                    ?>
 