# Blueprint Exercise

Welcome to my project! 🚀

This project is built with Laravel and uses a MySQL database. It provides a diagnostic screener interface where users can answer questions and submit their responses. Follow the instructions below to get started.

## Installation

1. Clone the repository to your local machine:

   ```
   git clone https://github.com/your-username/project-name.git

2. Install Laravel dependencies. Make sure you have Laravel installed globally. If not, you can install it by following the official Laravel documentation:

3. Create a .env file based on the provided .env_example file:

  ```
  cp .env_example .env
```
4. Update the .env file with your MySQL database credentials. You can use the following example credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blueprint
DB_USERNAME=root
DB_PASSWORD=
```

4. Create a new database named "blueprint" in your MySQL server.

5. Migrate the database
```php artisan migrate
```

## Usage

Start the development server:

```
php artisan serve
```

Open your web browser and navigate to http://127.0.0.1:8000/screener.

You should now see the diagnostic screener page. Answer the questions and proceed through the screener.

Once you have completed the screener, the data will be submitted to the backend.
