## 執行此專案的流程

1. 下載並安裝 XAMPP 及 composer
2. 開啟 XAMPP 中的 Apache 及 MYSQL<br>
    ![](https://i.imgur.com/ZdGZqtQ.png)
3. 開啟 MYSQL admin
    ![](https://i.imgur.com/JexUwLF.png)
4. 建立新的database<br>
    ![](https://i.imgur.com/0AorO2E.png)<br>
    ![](https://i.imgur.com/IZn5Ajo.png)
5. 打開.env.example檔案，更改檔名成.env，在DB_DATABASE欄位填入你剛剛設定的資料庫名稱<br>
    ![](https://i.imgur.com/XkxbUfL.png)

6. 開啟命令提示字元，或是其他可以下指令的工具(之後簡稱為CRI)，輸入下方指令
    ```php=
    php artisan key:generate
    ```
    之後檢查.env檔的APP_KEY欄位是否有值<br>
    ![](https://i.imgur.com/wxdKIHQ.png)
7. 在CRI輸入下方指令，以記錄現有的Migrations
    ```composer=
    composer dump-autoload
    ```
8. 在CRI輸入下方指令，建立資料表及預存資料
    ```php=
    php artisan migrate
    php artisan db:seed
    ```
    或是合成一行執行
    ```php=
    php artisan migrate --seed
    ```
9. 在CRI輸入下方指令，啟動Laravel框架
    ```php=
    php artisan serve
    ```
10. 開啟瀏覽器，在網址列輸入localhost:8000或127.0.0.1:8000

## 重要基本元件位置
1. Routes: routes/web.php
2. Middleware: App/Http/Middleware
3. Model: App/Http/Models
4. View: resources/views
5. Controller: App/Http/Controllers
6. Migration: database/migrations
7. Seeder: database/seeders


---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
