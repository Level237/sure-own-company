# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 13 web application framework project. The project uses:
- PHP 8.3+
- Laravel 13.0
- SQLite (default database, stored at `database/database.sqlite`)
- Tailwind CSS v4 for styling
- Vite for frontend asset compilation

## Common Commands

### Development
```bash
# Start development server (includes server, queue, logs, and vite)
composer run dev

# Start only the PHP server
php artisan serve

# Start Vite dev server
npm run dev

# Build assets for production
npm run build
```

### Database
```bash
# Run all pending migrations
php artisan migrate

# Rollback the last migration
php artisan migrate:rollback

# Fresh migration (drop all tables and re-run)
php artisan migrate:fresh

# Create a new migration
php artisan make:migration create_table_name
```

### Testing
```bash
# Run all tests
composer run test
# or
php artisan test

# Run specific test file
php artisan test tests/Feature/ExampleTest.php

# Run tests with coverage
php artisan test --coverage
```

### Code Quality
```bash
# Format code with Laravel Pint
./vendor/bin/pint

# Check code style
./vendor/bin/pint --test
```

### Other Useful Commands
```bash
# Clear application cache
php artisan cache:clear

# Clear configuration cache
php artisan config:clear

# Clear route cache
php artisan route:clear

# Clear view cache
php artisan view:clear

# Generate application key
php artisan key:generate

# Create a new controller
php artisan make:controller ControllerName

# Create a new model
php artisan make:model ModelName

# Create a new model with migration
php artisan make:model ModelName -m

# Create a new seeder
php artisan make:seeder SeederName

# Run seeders
php artisan db:seed
```

## Architecture

### Directory Structure
- `app/` - Application code
  - `Http/Controllers/` - HTTP controllers
  - `Models/` - Eloquent models
  - `Providers/` - Service providers
- `config/` - Configuration files
- `database/`
  - `migrations/` - Database migrations
  - `seeders/` - Database seeders
  - `factories/` - Model factories
- `resources/`
  - `views/` - Blade templates
  - `css/` - CSS files (Tailwind)
  - `js/` - JavaScript files
- `routes/`
  - `web.php` - Web routes
  - `console.php` - Artisan console commands
- `storage/` - Application storage (logs, cache, uploads)
- `tests/`
  - `Feature/` - Feature tests
  - `Unit/` - Unit tests

### Database Configuration
The default database connection is SQLite (`database/database.sqlite`). To use a different database, set the `DB_CONNECTION` environment variable in `.env`:
- `sqlite` - SQLite (default)
- `mysql` - MySQL/MariaDB
- `pgsql` - PostgreSQL
- `sqlsrv` - SQL Server

### Frontend Build
The project uses Vite with Tailwind CSS v4. Entry points:
- `resources/css/app.css` - Main CSS entry
- `resources/js/app.js` - Main JavaScript entry

### Testing Configuration
Tests use an in-memory SQLite database by default. Test configuration is in `phpunit.xml`.

## Environment Variables

Key environment variables (see `.env.example`):
- `APP_ENV` - Application environment (local, production)
- `APP_KEY` - Application encryption key
- `APP_DEBUG` - Debug mode
- `APP_URL` - Application URL
- `DB_CONNECTION` - Database connection type
- `DB_DATABASE` - Database name/path
- `DB_HOST` - Database host
- `DB_PORT` - Database port
- `DB_USERNAME` - Database username
- `DB_PASSWORD` - Database password
- `CACHE_DRIVER` - Cache driver (array, file, redis, etc.)
- `QUEUE_CONNECTION` - Queue connection (sync, database, redis, etc.)
- `SESSION_DRIVER` - Session driver (file, cookie, database, redis, etc.)
