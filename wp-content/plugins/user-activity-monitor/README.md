# User Activity Monitor

A WordPress plugin that monitors user registration and password changes, sending email notifications to designated administrators.

## Features

- Monitors new user registrations
- Tracks password changes and resets
- Sends email notifications to designated administrators
- Secure logging system for audit trails
- Follows WordPress security best practices
- Object-oriented architecture for easy maintenance and extensibility

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- WordPress mail system properly configured (wp_mail working)

## Installation

1. Download the plugin and extract it to your `/wp-content/plugins/` directory
2. Alternatively, upload the zip file through the WordPress plugins screen
3. Activate the plugin through the WordPress admin interface
4. The plugin will automatically set up the necessary directories and configurations

## Configuration

The plugin uses the following default settings:

- Notification email: pacman.genious@gmail.com (configurable through WordPress options)
- Log directory: wp-content/logs/user-activity-monitor/
- Daily log rotation
- Secure log file permissions (0600)

## Security Features

- Secure password handling (never stored in plain text)
- Protected log directory with .htaccess
- Proper sanitization of all data
- WordPress nonce verification for forms
- Secure error handling and logging

## Logging

Logs are stored in the `wp-content/logs/user-activity-monitor/` directory with the following format:
```
activity-YYYY-MM-DD.log
```

Each log entry includes:
- Timestamp
- Log level (INFO, ERROR, SECURE)
- Event message
- Context data (JSON formatted)

## Email Notifications

Email notifications include:
- Username
- Event type (registration/password change)
- Timestamp
- Additional context (when available)
- Security notice

## Development

The plugin follows WordPress coding standards and best practices. Key files:

- `user-activity-monitor.php`: Main plugin file
- `includes/Core.php`: Core functionality
- `includes/Logger.php`: Logging system
- `includes/Mailer.php`: Email notification system

## Troubleshooting

1. Check the WordPress error log for any issues
2. Verify email settings in WordPress
3. Ensure proper file permissions on the log directory
4. Check if wp_mail() is functioning correctly

## Security Considerations

- Passwords are never logged in plain text
- Sensitive data is hashed before logging
- Log files are protected from direct web access
- All data is properly sanitized and validated

## License

GPL v2 or later 