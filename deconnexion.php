<?php
/*
Template Name: Page de Déconnexion
*/

wp_logout();
wp_redirect(home_url());
exit;
?>