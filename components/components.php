<?php defined( 'ABSPATH' ) || exit; 

// Components
// ****************************

// Core
function display_header(){ require get_theme_file_path('components/core/header/header.php'); }
function display_footer(){ require get_theme_file_path('components/core/footer/footer.php'); }
function display_sidebar(){ require get_theme_file_path('components/core/sidebar/sidebar.php'); }
function home(){ require get_theme_file_path('templates/home/home.php'); }

function mobile_menu(){ require get_theme_file_path('components/core/header/menu/menu-mobile.php'); }
function secondary_menu(){ require get_theme_file_path('components/core/header/menu/menu-secondary.php'); }
function desktop_menu(){ require get_theme_file_path('components/core/header/menu/menu-desktop.php'); }

function breadcrumbs(){ require get_theme_file_path('components/core/breadcrumbs/breadcrumbs.php'); }
function pagination(){ require get_theme_file_path('components/core/pagination/pagination.php'); }
function cover(){ require get_theme_file_path('components/core/cover/cover.php'); }

// UI
function accordion(){ require get_theme_file_path('components/ui/accordion/accordion.php'); }
function card(){ require get_theme_file_path('components/ui/card/card.php'); }
function box(){ require get_theme_file_path('components/ui/box/box.php'); }
function cta(){ require get_theme_file_path('components/ui/cta/cta.php'); }
function modal(){ require get_theme_file_path('components/ui/modal/modal.php'); }

//Project