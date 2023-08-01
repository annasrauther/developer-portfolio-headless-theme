<?php
/*
 * Custom WordPress Headless Theme
 * Theme Name: Developer Portfolio - Headless Theme
 * Description: This custom WordPress headless theme disables the front end and redirects to the Site URL.
 */

// Prevent direct access to this file.
if (!defined('ABSPATH')) {
    exit;
}

// Perform the redirection using WordPress template tag.
wp_redirect(home_url());
exit;
