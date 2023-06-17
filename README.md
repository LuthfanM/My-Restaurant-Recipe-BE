<h1 align="center">My Restaurant Recipe (Back end Version)</h1>

<div align="center">

🔥🔥🔥 Project tentang restaurant yang berfungsi menyimpan resep, kategori makanan dan mengelompokkan nya. Ini adalah back end dari project <a href="https://github.com/LuthfanM/My-Restaurant-Recipe">ini</a>

**License Notation**: No lisence. This project is created for learning purpose and finishing specific tasks
</div>

## 📖 About
&emsp; &emsp;My Restaurant Recipe be able to store your food's recipe into database, write recipe and connect it into your food, also categorize your recipe into one list.

### Tasks
Sebuah restoran membutuhkan aplikasi untuk mencatat resep. Aplikasi ini mencakup resep makanan, bahan makanan dan kategori makanan sebagai fungsi utama. Sebuah resep terdiri dari bahan-bahan makanan dan dikelompokkan berdasarkan kategori. Misal untuk resep nasi goreng dikelompokan kedalam kategori main course dan bahan yang digunakan terdiri nasi 1 piring, telor 2 buah, minyak secukupnya, bawang merah 5 siung, bawang putih 5 siung, ayam secukupnya, sayur cesim 5 helai, kecap secukupnya dan garam secukupnya.

Tugas anda adalah membuat aplikasi tersebut dalam bentuk web sehingga staff dari restoran dapat menuliskannya, sehingga di kemudian hari dapat dilihat daftar dan detail dari resep makanan, beserta dengan data master (bahan dan kategori). Buatlah desain flow aplikasi yang mudah digunakan bagi user yang mengisinya dan dengan melihat segala kemungkinan buatlah desain struktur database tersebut semaksimal mungkin tanpa harus mengurangi performa.

## ✨ Features
- 🌈 Integrate with Next JS as It's Front end. The Repo is here : https://github.com/LuthfanM/My-Restaurant-Recipe
-  Integrated with PostgreSQL as it's database.

## Getting Started

First, Install dependencies :

```bash
composer install
```

Then :
```bash
Create database 
psql -c "CREATE USER kresto WITH PASSWORD 'kresto';"
psql -c "CREATE DATABASE laravel OWNER kresto;"
```

Run this script to populate database
``bash
php artisan make:migration create_foods_recipes_categories_tables --create=foods_recipes_categories
php artisan db:seed --class=CategorySeeder
```

Then start server :
``bash
php artisan serve —port 8080
```

in order this app to work, you must start your laravel server at port : 8080 for easier way.
You might need to changes some config in your postgre to match current setting. It is on .env file 
Adjust Db_connection, and so on.

This project integrated with <a href="https://github.com/LuthfanM/My-Restaurant-Recipe">this repository</a> as it's Front end

## Some of Screenshot

<a href="https://imgur.com/7kYBtgC"><img src="https://i.imgur.com/7kYBtgC.png" title="source: imgur.com" width="50%" height="50%" /></a>

<a href="https://imgur.com/09mr1ws"><img src="https://i.imgur.com/09mr1ws.png" title="source: imgur.com" width="50%" height="50%" /></a>

<a href="https://imgur.com/GRacf0K"><img src="https://i.imgur.com/GRacf0K.png" title="source: imgur.com" width="50%" height="50%" /></a>


<b>Version : v.1.0</b>


