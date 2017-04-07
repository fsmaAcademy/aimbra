<?php
define('DB_NAME', 'aimbra-wp-EwihzV2b');
define('DB_USER', 'YNARtadSb26e');
define('DB_PASSWORD', '8gsfaf95lFXtoeV9');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '9a4C7wZ8QorBKPq9iWuKJxNOVety6y96fOxLpBEn');
define('SECURE_AUTH_KEY',  'W83DRArpg2jMeF00ZdIv0y1jJCRs1uUimJY2jpZt');
define('LOGGED_IN_KEY',    'uAjQxYJdqoOuSidboqYYrZei7QETwHhTfjwGgEAl');
define('NONCE_KEY',        'LVSBjJL3rZN4nJ3xVHfLqLIAI2EcJEmthuFB79z5');
define('AUTH_SALT',        'J9d51YudZ1FeAJFzEsyp3VymFw5Vdk4dO448ocw8');
define('SECURE_AUTH_SALT', 'UiFek5U3LmXbJTVldOZ1lcZSOrtzv6K4xi5FwHjZ');
define('LOGGED_IN_SALT',   'NT867MqsSk2sSjkf0ARIuVDk5lZXPNrKsG5jLOkK');
define('NONCE_SALT',       'mZGDNwz2AnHK7M4FbNiQVGquKxbISwxsBcPvye2p');

$table_prefix  = 'wp_ade511d92d_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
