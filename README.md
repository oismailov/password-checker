Password Checker
==============

Technologies
-----------------

PHP framework symfony 2.7.5

MySQL Server 5.6.19

Doctrine ORM 2.4.8

PHPUnit 4.6.6

Composer

Preparation
-----------------

open in browser file config.php - this script will guide you through the basic configuration of your project

$ php app/console doctrine:database:create - create DB

$ php app/console doctrine:schema:update --force  - create DB Tables/Schema

$ composer update - download/update all needed packages from composer.json

$ php app/console ser:run - run project on local machine


Structure
-----------------

$ tree src/Acme/PasswordCheckerBundle/ - bundle(plugin) for password checker

src/Acme/PasswordCheckerBundle/
├── AcmePasswordCheckerBundle.php
├── Controller
│   ├── DefaultController.php
│   ├── ExceptionController.php
│   └── PasswordController.php
├── DependencyInjection
│   ├── AcmePasswordCheckerExtension.php
│   └── Configuration.php
├── Entity
│   ├── PasswordChecker.php
│   ├── PasswordChecker.php~
│   └── PasswordCheckerRepository.php
├── Helper
│   ├── JsonHelper.php
│   └── Validation.php
├── Resources
│   ├── config
│   │   └── services.xml
│   ├── data
│   │   └── password_patterns.yml
│   └── views
│       └── Default
│           └── index.html.twig
└── Tests
    └── Controller
        └── DefaultControllerTest.php


Controllers are located in  Controller directory.
-----------------

All logic are in src/Acme/PasswordCheckerBundle/Controller/PasswordController.php

Models are located in Entity directory.
-----------------

Password Checker model is in src/Acme/PasswordCheckerBundle/Entity/PasswordChecker.php

Configuration - app/config


How To Use
-----------------

Please go to this page http://127.0.0.1:8000/password-checker and you will see the result of script job.
