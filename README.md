# Laravel Janitor JWT Demo

This a the demo project related to [my article on Medium](https://medium.com/@codingcave/api-authentication-with-laravel-janitor-part-2-laravel-jwt-proxy-d303afe8eba9).

## Installation

Clone the project from github:

```bash
git clone git@github.com:pactode/laravel-janitor-jwt-demo.git
```

Change directory to the project root.

```bash
cd laravel-janitor-jwt-demo
```

Install dependencies with composer

```bash
composer install
```

Copy the .env.example file to .env and update the database information accordingly.

```bash
cp .env.example .env
```

Generate application key
```bash
php artisan key:generate
```

Run the database migrations

```bash
php artisan migrate
```

Generate JWT secret

```bash
php artisan jwt:secret
```

Serve the application using Valet or by running: `php artisan serve`
