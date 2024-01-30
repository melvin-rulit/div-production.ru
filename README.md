<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Описание проекта
В данном проекте реализуется Тестовое задание на позицию Backend-разработчика:

- REST API;
- SWAGGER;
- DOCKER

Данные хранятся в подключенной БД MySQL

# Инсталляция

Клонируйте проект в директорию с сервером:
```sh
git clone https://github.com/melvin-rulit/div-production.ru.git
```
Затем, открыв из папки проекта консоль, введите команду для установки пакетов Laravel:

```sh
composer update
```

Переименуйте файл ```.env.example``` на ```.env``` и заполните поля для подключения к БД:

`DB_CONNECTION=mysql`
`DB_HOST=127.0.0.1`
`DB_PORT=3306`
`DB_DATABASE=basa`
`DB_USERNAME=root`
`DB_PASSWORD=`

В открытой консоли директории проекта введите команду для генерации таблиц базы данных:

```sh
php artisan migrate
```

В открытой консоли директории проекта введите команду для записи Администратора в базу данных:

```sh
php artisan migrate --seed
```

# Запуск проекта

В той же консоли для запуска сайта по адресу `http://127.0.0.1:8000` введите команду:

```sh
php artisan serve
```

В новой консоли для запуска NodeJS и корректной работы введите команду:

```sh
npm install
```

```sh
npm run dev
```

