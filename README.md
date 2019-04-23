# laravelAlgoliaSearch
A laravel project that uses and demonstrates algolia for searching

# Installation
1. Clone the repo and cd into it
2. composer install
3. Rename or copy .env.example file to .env
4. php artisan key:generate
5. Set your database credentials in your .env file
6. Set your Algolia credentials in your .env file. Specifically ALGOLIA_APP_ID and ALGOLIA_SECRET
7. php artisan scout:import "App\Post"
8. php artisan serve
