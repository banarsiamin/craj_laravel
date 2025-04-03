# CRAJ - Contemporary Research Analysis Journal

A web application for a research journal built with Laravel 11.

## Features

- Home page with journal information
- Article submission system
- Article detail pages
- Current issues listing
- Contact page
- Aims and scope information

## Installation

1. Clone the repository
```bash
git clone https://github.com/yourusername/crajl-laravel.git
cd crajl-laravel
```

2. Install dependencies
```bash
composer install
npm install && npm run dev
```

3. Set up environment variables
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database in `.env` file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crajl
DB_USERNAME=root
DB_PASSWORD=
```

5. Run migrations
```bash
php artisan migrate
```

6. Create storage link
```bash
php artisan storage:link
```

7. Start the development server
```bash
php artisan serve
```

## Usage

Visit `http://localhost:8000` in your browser to access the application.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
