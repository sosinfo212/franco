<?php
namespace UserActivityMonitor;

/**
 * Logger class for handling secure logging
 */
class Logger {
    /**
     * @var string
     */
    private string $log_dir;

    /**
     * Constructor
     */
    public function __construct() {
        $this->log_dir = WP_CONTENT_DIR . '/logs/user-activity-monitor';
        
        if (!file_exists($this->log_dir)) {
            wp_mkdir_p($this->log_dir);
            // Protect the logs directory
            file_put_contents($this->log_dir . '/.htaccess', "Order deny,allow\nDeny from all");
        }
    }

    /**
     * Log an info message
     *
     * @param string $message The message to log
     * @param array  $context Additional context
     */
    public function info(string $message, array $context = []): void {
        $this->log('INFO', $message, $context);
    }

    /**
     * Log an error message
     *
     * @param string $message The message to log
     * @param array  $context Additional context
     */
    public function error(string $message, array $context = []): void {
        $this->log('ERROR', $message, $context);
    }

    /**
     * Log sensitive information securely
     *
     * @param string $message The message to log
     * @param array  $context Additional context
     */
    public function secureLog(string $message, array $context = []): void {
        // Hash sensitive data before logging
        if (isset($context['password'])) {
            $context['password_hash'] = wp_hash($context['password']);
            unset($context['password']);
        }

        $this->log('SECURE', $message, $context);
    }

    /**
     * Write log entry
     *
     * @param string $level   Log level
     * @param string $message The message to log
     * @param array  $context Additional context
     */
    private function log(string $level, string $message, array $context = []): void {
        $timestamp = current_time('mysql');
        $log_file = $this->log_dir . '/activity-' . date('Y-m-d') . '.log';

        $entry = sprintf(
            "[%s] [%s] %s %s\n",
            $timestamp,
            $level,
            $message,
            !empty($context) ? json_encode($context) : ''
        );

        error_log($entry, 3, $log_file);

        // Set secure permissions
        if (file_exists($log_file)) {
            chmod($log_file, 0600);
        }
    }
} 