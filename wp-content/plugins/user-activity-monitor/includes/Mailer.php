<?php
namespace UserActivityMonitor;

/**
 * Mailer class for handling email notifications
 */
class Mailer {
    /**
     * Send an email notification
     *
     * @param string $to      Recipient email address
     * @param string $subject Email subject
     * @param string $message Email message
     * @return bool Whether the email was sent successfully
     */
    public function send(string $to, string $subject, string $message): bool {
        // Add debugging headers
        $headers = [
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
            'X-User-Activity-Monitor: true',
            'X-Debug-Time: ' . current_time('mysql'),
            'X-WordPress-Site: ' . get_site_url()
        ];

        // Ensure proper line endings
        $message = str_replace("\n", "\r\n", $message);

        // Add security notice and debug info
        $message .= sprintf(
            "\r\n\r\n---\r\nThis is an automated security notification from %s (%s).\r\nPlease do not reply to this email.",
            get_bloginfo('name'),
            get_site_url()
        );

        // Enable debug mode for wp_mail if WP_DEBUG is enabled
        if (defined('WP_DEBUG') && WP_DEBUG) {
            add_filter('wp_mail_failed', function($error) {
                error_log('WordPress Mail Error: ' . print_r($error, true));
                return $error;
            });
        }

        // Use WordPress's built-in email function
        return wp_mail($to, $subject, $message, $headers);
    }
} 