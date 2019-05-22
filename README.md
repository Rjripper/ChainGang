<h1 align="center">
  Chain Gang
</h1>

Chain Gang is a simple Laravel webshop made my students, open source and free. It has a webshop front-end and an admin back-end.

# Preview

### Screenshot

![Chainggang admin dashboard preview](https://i.boring.host/13HR7TtA.png)

## Getting Started
In order to run **Chaing Gang** on your local machine all what you need to do is to have the prerequisites stated below installed on your machine and follow the installation steps down below.

#### Prerequisites
  - Mysql
  - Composer
  - Apache
  - Node.js
  - Yarn or NPM
  - Git
  - libpng-dev *linux only*

#### Installing & Local Development
Start by typing the following commands in your terminal in order to get **Chaing Gang** full package on your machine and starting a local development server with live reload feature.

```
> git clone https://github.com/Rjripper/ChainGang.git webshop
> cd webshop
> composer install
> npm install
> npm run dev
```
#### Migrating Database
Before you can actually see the webshop, you'll need create an **.env** file in the **root** directory of the project. I'm sure there are plenty of examples on the internet.

```
> php artisan migrate:fresh
```

Want to have some dummy data in your database? (Note: Will be added soon)
```
> php artisan db:seed --class=DummyDatabase
```

## Deployment
In deployment process, you have two commands:

1. Build command
Used to generate the final result of compiling src files into build folder. This can be achieved by running the following command:
```
> npm run build
```

2. Preview command
Used to create a local dev server in order to preview the final output of build process. This can be achieved by running the following command:
```
> npm run watch
```

## Special Thanks
- [Adminator Dashboard](https://github.com/puikinsh/Adminator-admin-dashboard/)
- [Webshop Design](https://colorlib.com/wp/template/e-shop/)

## Changelog
#### V 0.0.1
Development :)

## Authors
- [Colorlib](https://colorlib.com)
- [M.E. Yilmaz](https://www.meyilmaz.com)
- [R.J.S-W](https://github.com/Rjripper)
- [T.K](https://github.com/TKremer00)
- [J.S](https://github.com/KillStreamNL)

## License

Adminator is licensed under The MIT License (MIT). Which means that you can use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the final products. But you always need to state that Colorlib is the original author of the **Admin Dashboard Design** & **Webshop Design** template.


