<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', 'wordpress');

define('DB_HOST', '172.17.0.2');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'o3uxMcuoDdZdGyJVoqxMVvAJHu6PqPAqeK8NG2UN');
define('SECURE_AUTH_KEY',  'QUTMOCig6lZ2vvWOrGJb568NqqRrFuwPgzw6EXoq');
define('LOGGED_IN_KEY',    'NOqqW9wrCAGinwX85Ek51aRBruThzDealjh8eUHj');
define('NONCE_KEY',        'TYxNcz31DVD4GPmLeRsxR8MEeTNPgwfFRvria0zD');
define('AUTH_SALT',        'qQ1ZRnWp3gPx3S25e50haNZC7I5RivPx0UC3LnKJ');
define('SECURE_AUTH_SALT', '8KKSe3Od6OSePkLX8lck1xJhCeNQ12qdVRqUd7Yd');
define('LOGGED_IN_SALT',   '3mjkmjD4AORnw4Y1LWwQDgZJ26jRUYmZSzqSU3oO');
define('NONCE_SALT',       'HL3rYJKVSbo6GFcv3pPTvfTEVdSjSMg0NLKjl2kj');

$table_prefix  = 'wp_f37dfe292b_';

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
