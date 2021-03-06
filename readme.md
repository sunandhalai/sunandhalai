# Sunandhalai of Suan Sunandha Rajabhat University

เว็บไซต์เพื่อการศึกษาและใช้ในชมรมสุนันทาลัย มหาวิทยาลัยราชภัฏสวนสุนันทา

## require

- PHP version 5.6
- MySQL version 

## Config

| create `.env` file in project or rename `.env.example` to `.env`

```dotenv
APP_NAME=SunandhalaiClub
APP_ENV=local
APP_KEY=base64:6IxQPZ0v6hTau2SDCPbIDah8TF6DmgZC/L/6xdkf6xI=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```

## Install

```bash
$ composer install

$ npm install 
// or
$ yarn install


// generate key
$ php artisan key:generate

// run 
$ php artisan serve

```

## use in project
- **[Laravel](http://laravel.com)**
- [bootstrap.css](https://www.getbootstrap.com)

## License

 © 2017 sunandhalai club