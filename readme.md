<h1>Lectures</h1>
<h3>Laravel 5.7 API WITH AUTHENTICATION</h3>
<p>This application makes use of simple authentication and authorization without Passport. The application can be tested with Postman.</p>

<h3>Steps to making this application work:</h3>
<ul>
    <li>Create database 'lectures' in mysql with phpmyadmin</li>
    <li>In the command line: composer install</li>
    <li>php artisan migrate</li>
    <li>php artisan db:seed</li>
    <li>php artisan serve: at 127.0.0.1:8000</li>
</ul>

<h3>Testing in Postman</h3>
<ul>
    <li>POST: 127.0.0.1:8000/api/register</li>
    Headers:- Content-Type: application/json<br>
    Body (choose option 'form-data'):- <br>
        name: John Doe <br>
        email: j.doe@example.com, <br>
        password: password, <br>
        password_confirmation: password <br>
    <li>POST: 127.0.0.1:8000/api/login </li>
    Headers:- Content-Type: application/json<br>
    Body (choose option 'form-data'):- <br>
        email: j.doe@example.com, <br>
        password: password, <br>
    Note: The JSON response gives an api_token. Keep this at hand. This is needed to logout.
    <li>Retrieve data from the database using GET: 127.0.0.1:8000/api/lectures </li>
    Headers:- Authorization: Bearer api_token. (Insert the login api_token here.)<br>
    This will list all the data in the database table 'lectures'.<br>
    If no authorization is sent along with the Get command, "Route [login] not defined" exception is thrown.
    <li>Finally logout using POST: 127.0.0.1:8000/api/logout</li>
    Headers:- Authorization: Bearer api_token. (Insert the login api_token here.)
</ul>

<p>That's it.</p>
<p>Based on article https://www.toptal.com/laravel/restful-laravel-api-tutorial. I adapted this tto suit Laravel 5.7. </p>


=================

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
