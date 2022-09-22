<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## edu-site-laravel

교육(강의) 사이트를 벤치마킹하여 php8.1, Laravel8 학습용으로 개발한 project 입니다

## Sub Module

Laravel-Supports, Javascript-Supports submodule 을 연결 합니다

```shell
npm run module
```

## Database

migration 초기 설정 및 Seeder 를 실행하여 초기 데이터를 insert 합니다.

```shell
npm run init
```

## Sub Module

- [LaravelSupports](https://github.com/WilsonParker/LaravelSupports)
- [JavascriptSupports](https://github.com/WilsonParker/JavascriptSupports)

## Worker

```shell
php artisan queue:work --queue=high,default
```

## To do
