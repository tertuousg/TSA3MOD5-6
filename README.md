# Tasks for Today — TSA3 Laravel 12

IT0049 Web System Technologies — Technical Summative Assessment 3.

## Requirements
PHP 8.2+, Composer, PHP SQLite extensions (`pdo_sqlite`), and optionally Node/npm.

## Install (Windows PowerShell)
```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```
SQLite database file `database/database.sqlite` is included empty. If missing, create it before migrating.

Open http://127.0.0.1:8000 . Pages: `/` (today only), `/tasks` (all tasks ordered by date), `/profile` (one user), `/about` (developer).

## Tests
```powershell
php artisan test
```

## GitHub / hosting
Upload source files but **do not commit `.env`, `vendor/`, or `node_modules/`**. The provided `.env.example` is safe to publish. For deployment, install dependencies, set `APP_KEY` and database connection, run migrations and seeders, and point the web server document root at `public/`. SQLite requires persistent storage on the host.

## Notes
This archive uses your uploaded Laravel 12 `composer.json`, `composer.lock`, `artisan`, `package.json`, `vite.config.js`, and repository configuration. Vendor dependencies are not bundled; run `composer install`. Today's seeded tasks use the current application date in Asia/Manila, so re-seed when you need new sample tasks for a different day. `migrate:fresh` destroys existing database tables.
