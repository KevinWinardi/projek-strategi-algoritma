# Projek Strategi Algoritma

Projek ini merupakan tugas dari mata kuliah Strategi Algoritma. Adapun beberapa algoritma yang dibahas antara lain:
- Fibonacci
- Sorting
- Coin Change
- Knapsack
- Searching

## Setup
Menyimpan ke lokal:
```
git clone https://github.com/KevinWinardi/projek-strategi-algoritma.git
cd routing-controller-fibonacci
```
Menyiapkan vendor, enviroment, beserta database migrasi:
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```
Menjalankan projek:
```
php artisan serve
```
