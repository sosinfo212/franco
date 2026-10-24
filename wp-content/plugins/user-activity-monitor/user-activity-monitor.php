<?php
/**
 * Plugin Name: User Activity Monitor
 * Plugin URI: https://example.com/plugins/user-activity-monitor
 * Description: Monitors user signup and password changes, sending email notifications to administrators
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: user-activity-monitor
 * Domain Path: /languages
 *
 * @package UserActivityMonitor
 */

declare(strict_types=1);

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Define plugin constants
define('UAM_VERSION', '1.0.0');
define('UAM_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('UAM_PLUGIN_URL', plugin_dir_url(__FILE__));

// Autoloader for plugin classes
spl_autoload_register(function ($class) {
    $prefix = 'UserActivityMonitor\\';
    $base_dir = UAM_PLUGIN_DIR . 'includes/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Initialize the plugin
if (!class_exists('UserActivityMonitor\\Core')) {
    require_once UAM_PLUGIN_DIR . 'includes/Core.php';
    $user_activity_monitor = new UserActivityMonitor\Core();
    $user_activity_monitor->init();
}

// Activation hook
register_activation_hook(__FILE__, function() {
    // Initialize plugin settings with default values
    if (!get_option('uam_notification_email')) {
        update_option('uam_notification_email', 'pacman.genious@gmail.com');
    }
    
    // Create log directory if it doesn't exist
    $log_dir = WP_CONTENT_DIR . '/logs/user-activity-monitor';
    if (!file_exists($log_dir)) {
        wp_mkdir_p($log_dir);
        
        // Create .htaccess to protect logs
        $htaccess_content = "Order deny,allow\nDeny from all";
        file_put_contents($log_dir . '/.htaccess', $htaccess_content);
    }
});

// Deactivation hook
register_deactivation_hook(__FILE__, function() {
    // Cleanup if needed
}); 