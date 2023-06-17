Create database 
psql -c "CREATE USER kresto WITH PASSWORD 'kresto';"
psql -c "CREATE DATABASE laravel OWNER kresto;"


php artisan make:migration create_foods_recipes_categories_tables --create=foods_recipes_categories

php artisan db:seed --class=CategorySeeder

