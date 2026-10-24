-- Database cleanup after the spam/compromise of francoslandscapingc.com
-- Run once in phpMyAdmin on database `francosl_wp729` (table prefix `wppg_`).
-- Take a backup (Export) first.

START TRANSACTION;

-- 1. Remove all comments. Every one of the ~370 comments is SEO spam
--    (escort, casino, pirated-PDF and Ukrainian shop links); 246 of them were
--    approved and visible on the site. The only other one is the WordPress sample.
DELETE FROM `wppg_commentmeta`;
DELETE FROM `wppg_comments`;
UPDATE `wppg_posts` SET `comment_count` = 0;

-- 2. Close comments and pingbacks on all existing and future content.
UPDATE `wppg_posts` SET `comment_status` = 'closed', `ping_status` = 'closed';
UPDATE `wppg_options` SET `option_value` = 'closed' WHERE `option_name` IN ('default_comment_status', 'default_ping_status');
UPDATE `wppg_options` SET `option_value` = '1' WHERE `option_name` IN ('comment_moderation', 'comment_registration');
UPDATE `wppg_options` SET `option_value` = '0' WHERE `option_name` = 'users_can_register';

-- 3. Delete the spam account "fgdfg" (fmksaw9qpe@ozkadem.edu.pl, registered 2025-06-01).
DELETE FROM `wppg_usermeta` WHERE `user_id` = 2;
DELETE FROM `wppg_users` WHERE `ID` = 2;

-- 4. The admin account's website field contains a password hash; clear it.
UPDATE `wppg_users` SET `user_url` = '' WHERE `ID` = 1;

-- 5. Log everyone out (invalidates any session an attacker may hold).
DELETE FROM `wppg_usermeta` WHERE `meta_key` = 'session_tokens';

COMMIT;
