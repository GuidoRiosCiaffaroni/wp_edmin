<?php
// Ocultar barra de admin a usuarios no administradores
function ocultar_admin_bar(){
   if(current_user_can('administrator'))
   {
      show_admin_bar(true);
   }
   else
   {
       show_admin_bar(false);
   }
}
add_action('after_setup_theme','ocultar_admin_bar');



//Redireccionar a una página después del login
function redireccionar(){ return ('http://localhost/wordpress/'); } add_filter('login_redirect','redireccionar');
add_filter('show_admin_bar','__return_false');


