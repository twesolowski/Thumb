<?php



if (!defined('THUMB_CACHE')) {
    define('THUMB_CACHE',           './cache/');    // Path to cache directory (must be writeable)
}

if (!defined('THUMB_CACHE_AGE')) {
    define('THUMB_CACHE_AGE',       86400);         // Duration of cached files in seconds
}

if (!defined('THUMB_BROWSER_CACHE')) {
    define('THUMB_BROWSER_CACHE',   true);          // Browser cache true or false
}

if (!defined('SHARPEN_MIN')) {
    define('SHARPEN_MIN',           12);            // Minimum sharpen value
}

if (!defined('SHARPEN_MAX')) {
    define('SHARPEN_MAX',           28);            // Maximum sharpen value
}

if (!defined('ADJUST_ORIENTATION')) {
    define('ADJUST_ORIENTATION',    true);          // Auto adjust orientation for JPEG true or false
}

if (!defined('JPEG_QUALITY')) {
    define('JPEG_QUALITY',          100);           // Quality of generated JPEGs (0 - 100; 100 being best)
}