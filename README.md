<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Project Setup

Follow these steps to set up and start the Laravel project.

## Prerequisites

- PHP >= 8.2
- Composer
- A database (e.g., SQLite, MySQL)

## Installation Steps

1. **Install Composer Dependencies**

    Run the following command to install the necessary dependencies:

    ```bash
    composer install
    ```

2. **Copy the .env File**

    Copy the example environment configuration file to `.env`:

    ```bash
    cp .env.example .env
    ```

3. **Generate Application Key**

    Generate a new application key:

    ```bash
    php artisan key:generate
    ```

4. **Set Up the Database**

    Open the `.env` file and configure your database settings (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).

5. **Run Database Migrations**

    Run the following command to create the necessary database tables:

    ```bash
    php artisan migrate
    ```

## Additional Steps

- **Serve the Application**

    You can start the Laravel development server using the following command:

    ```bash
    php artisan serve
    ```

    The application will be available at `http://localhost:8000`.

- **Seed the Database (Optional)**

    If you have seeders, you can populate the database with sample data:

    ```bash
    php artisan db:seed
    ```

## Troubleshooting

- If you encounter any issues with file permissions, ensure that the web server has write permissions for the `storage` and `bootstrap/cache` directories.
- Check your `.env` file to ensure all necessary configurations are set correctly.

## Conclusion

You should now have a working Laravel application. For more information on Laravel, visit the [official documentation](https://laravel.com/docs).

