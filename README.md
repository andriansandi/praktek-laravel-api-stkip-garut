# Praktik Sistem Integrasi STKIP Garut
Source code untuk praktikum sistem integrasi di STKIP Garut dengan menggunakan Laravel 7.

### Technology Stacks
* Laravel 7.x
* XAMPP

### Installation
1. Unduh git repository dengan menggunakan perintah Git Clone
2. Ubah `.env` di root folder aplikasi pada bagian
    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1 #sesuaikan dengan IP Address local
    DB_PORT=3306
    DB_DATABASE=laravel #sesuaikan nama database pada MySQL (aplikasi XAMPP)
    DB_USERNAME=root #sesuaikan nama user di MySQL (aplikasi XAMPP)
    DB_PASSWORD= #isikan password sesuai dengan di aplikasi XAMPP
    ```
3. Jalankan perintah sebagai berikut untuk memulai proses instalasi
    ```sh
    $ php artisan key:generate
    $ php artisan migrate
    $ php artisan db:seed
    ```

#### Author
- [Sandi Andrian](mailto:andrian.sandi@gmail.com)