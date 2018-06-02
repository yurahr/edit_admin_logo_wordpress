<?php

// замена логотипа Wordpress и ссылки в админке сайта, второй вариант
function hr_edit_admin_logo(){
   echo '
   <style type="text/css">
        #login h1 a { 
			background: url('. get_bloginfo('template_directory') .'/images/admin_wp_logo.png) no-repeat 0 0 !important; 
			width: 149px!important; 
			height: 117px!important;}
    </style>';
}
add_action('login_enqueue_scripts', 'hr_edit_admin_logo');

// замена ссылки на логотипе в админке сайта
function hr_edit_admin_logo_link(){
	return home_url('/');
}
add_filter('login_headerurl','hr_edit_admin_logo_link');

//Заменить title лого на странице входа в админку
function hr_custom_loginlogo_title( $url ) { 
 return 'Самый лучший сайт'; 
} 
add_filter( 'login_headertitle', 'hr_custom_loginlogo_title' );
?>