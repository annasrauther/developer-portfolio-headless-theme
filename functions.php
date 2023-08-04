<?php
/**
 * Initialize CORS for the Developer Portfolio.
 *
 * This function sets up the necessary Cross-Origin Resource Sharing (CORS) headers
 * to allow requests from specific origins. The allowed origins are retrieved dynamically
 * using WordPress site URL.
 *
 * @param mixed $value The original value passed in for the filter. Not used in this case.
 * @return mixed The original value passed in for the filter. Not used in this case.
 */
function developer_portfolio_init_cors( $value ) {
	$allowed_origins = [
		get_site_url(),
		'http://localhost:3000', // for local development
	];

	if ( array_key_exists( 'HTTP_ORIGIN', $_SERVER ) && in_array( $_SERVER['HTTP_ORIGIN'], $allowed_origins ) ) {
		// Use the WordPress provided function to set CORS headers.
		// This follows WordPress standards for handling CORS.
		rest_send_cors_headers();
	}
	return $value;
}

/**
 * Add the CORS initialization to the REST API.
 *
 * This function removes the default REST API CORS headers and adds
 * the custom CORS initialization function to set the allowed origins.
 */
function developer_portfolio_add_cors_to_rest_api() {
	// Remove the default REST API CORS headers.
	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );

	// Add the custom CORS initialization function.
	add_filter( 'rest_pre_serve_request', 'developer_portfolio_init_cors' );
}

// Hook the function to the 'rest_api_init' action with priority 15.
add_action( 'rest_api_init', 'developer_portfolio_add_cors_to_rest_api', 15 );
