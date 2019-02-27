<?php
/*
Activació dels widgets de la barra lateral. Necessitem incloure el 
següent codi per que els enllaços del menú de wodgets estiga visible en el panell de
control d'administració,  ique poguem afegit components en ell.
*/

/* Registre de la sidebar */
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
/* Registre del menu */
function add_menu() {
    register_menu( array(
                    'header-menu'   => 'Header Menu',
    ));
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );