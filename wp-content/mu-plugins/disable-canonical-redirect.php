<?php
/**
 * Disable WordPress canonical redirect to prevent infinite redirect loop
 * behind Traefik reverse proxy on dev environment.
 */
add_filter( 'redirect_canonical', '__return_false' );
