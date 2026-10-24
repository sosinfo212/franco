<?php
namespace UserActivityMonitor;

/**
 * Core plugin class
 */
class Core {
    /**
     * @var Logger
     */
    private Logger $logger;

    /**
     * @var Mailer
     */
    private Mailer $mailer;

    /**
     * Initialize the plugin
     */
    public function init(): void {
        $this->logger = new Logger();
        $this->mailer = new Mailer();

        // Hook into user registration
        add_action('user_register', [$this, 'handleNewUserRegistration']);
        
        // Hook into password update
        add_action('password_reset', [$this, 'handlePasswordReset'], 10, 2);
        add_action('profile_update', [$this, 'handleProfileUpdate'], 10, 2);
    }

    /**
     * Handle new user registration
     *
     * @param int $user_id The user ID
     */
    public function handleNewUserRegistration(int $user_id): void {
        $user = get_userdata($user_id);
        if (!$user) {
            $this->logger->error('Failed to get user data for new registration', ['user_id' => $user_id]);
            return;
        }

        $subject = sprintf('New User Registration: %s', $user->user_login);
        $message = sprintf(
            "A new user has registered:\n\nUsername: %s\nEmail: %s\nRegistration Time: %s",
            $user->user_login,
            $user->user_email,
            current_time('mysql')
        );

        $this->sendNotification($subject, $message, $user_id);
    }

    /**
     * Handle password reset
     *
     * @param \WP_User $user The user object
     * @param string   $new_password The new password
     */
    public function handlePasswordReset(\WP_User $user, string $new_password): void {
        $subject = sprintf('Password Reset: %s', $user->user_login);
        $message = sprintf(
            "A user has reset their password:\n\nUsername: %s\nEmail: %s\nReset Time: %s",
            $user->user_login,
            $user->user_email,
            current_time('mysql')
        );

        // Log password securely if needed (commented out by default)
        // $this->logger->secureLog('Password reset', [
        //     'user_id' => $user->ID,
        //     'password' => $new_password
        // ]);

        $this->sendNotification($subject, $message, $user->ID);
    }

    /**
     * Handle profile update (catches password changes from profile)
     *
     * @param int     $user_id The user ID
     * @param \WP_User $old_user_data The old user data
     */
    public function handleProfileUpdate(int $user_id, \WP_User $old_user_data): void {
        // Only proceed if this is a password change
        if (isset($_POST['pass1']) && !empty($_POST['pass1'])) {
            $user = get_userdata($user_id);
            if (!$user) {
                $this->logger->error('Failed to get user data for profile update', ['user_id' => $user_id]);
                return;
            }

            $subject = sprintf('Password Changed: %s', $user->user_login);
            $message = sprintf(
                "A user has changed their password:\n\nUsername: %s\nEmail: %s\nChange Time: %s",
                $user->user_login,
                $user->user_email,
                current_time('mysql')
            );

            $this->sendNotification($subject, $message, $user_id);
        }
    }

    /**
     * Send notification email and handle any failures
     *
     * @param string $subject The email subject
     * @param string $message The email message
     * @param int    $user_id The user ID for logging purposes
     */
    private function sendNotification(string $subject, string $message, int $user_id): void {
        $notification_email = get_option('uam_notification_email', 'pacman.genious@gmail.com');
        
        // Debug log the email attempt
        $this->logger->info('Attempting to send notification', [
            'to' => $notification_email,
            'subject' => $subject,
            'user_id' => $user_id
        ]);

        // Verify WordPress email configuration
        $admin_email = get_option('admin_email');
        if (empty($admin_email)) {
            $this->logger->error('WordPress admin email is not configured');
            return;
        }

        try {
            // Add debug headers
            $sent = $this->mailer->send($notification_email, $subject, $message);
            
            if (!$sent) {
                throw new \Exception('wp_mail() returned false');
            }
            
            $this->logger->info('Notification sent successfully', [
                'user_id' => $user_id,
                'subject' => $subject,
                'to' => $notification_email
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Failed to send notification email', [
                'user_id' => $user_id,
                'error' => $e->getMessage(),
                'to' => $notification_email
            ]);
            
            // Log WordPress mail configuration
            $this->logger->error('WordPress mail configuration', [
                'wp_admin_email' => get_option('admin_email'),
                'wp_site_name' => get_bloginfo('name'),
                'php_mailer_errors' => (function_exists('error_get_last') ? error_get_last() : null)
            ]);
        }
    }
} 