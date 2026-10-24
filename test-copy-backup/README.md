# Test copy backup (2026-10-24)

Snapshot of the private test copy used to verify the security cleanup.
The site files are the same as the rest of this repository; only what differs is stored here.

| File | What it is |
|---|---|
| `database.sql` | Database of the test copy **after** `security-cleanup.sql` was run (spam comments and spam user removed, comments closed, sessions cleared). |
| `wp-config.php` | Test config: local DB user `wp`/`wp` on `localhost`, error display turned off, `DISALLOW_FILE_EDIT`. |
| `apache-vhost.conf` | Apache virtual host used to serve the test copy on port 8080. |

## Differences from the live database

- `siteurl` and `home` are `http://localhost:8080`.
- Live-domain links inside Elementor page data were rewritten to `http://localhost:8080`,
  and Elementor's CSS/asset caches were cleared (Elementor rebuilds them automatically).

Do **not** import `database.sql` into the live site as-is. To fix the live database, run
`../security-cleanup.sql` on it instead.

## Restore the test copy

```sh
mysql -e "CREATE DATABASE francosl_wp729 CHARACTER SET utf8mb4;
          CREATE USER 'wp'@'localhost' IDENTIFIED BY 'wp';
          GRANT ALL ON francosl_wp729.* TO 'wp'@'localhost';"
mysql francosl_wp729 < database.sql
cp -r .. /var/www/franco            # site files
cp wp-config.php /var/www/franco/wp-config.php
cp apache-vhost.conf /etc/apache2/sites-available/franco.conf
a2enmod rewrite && a2ensite franco && service apache2 reload
```
