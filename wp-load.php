if (file_exists(dirname(__FILE__) . '/../wp-config.php')) {
    require_once(dirname(__FILE__) . '/../wp-config.php');
} else {
    require_once(dirname(__FILE__) . '/wp-config.php');
}
