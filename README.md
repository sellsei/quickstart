Sellsei Quickstart
==================

[![Build status...](https://img.shields.io/travis/sellsei/quickstart/master.svg)](https://travis-ci.org/sellsei/quickstart)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/sellsei/quickstart.svg)](https://scrutinizer-ci.com/g/sellsei/quickstart)

Quick Installation
------------------

```bash
$ wget http://getcomposer.org/composer.phar
$ git clone https://github.com/sellsei/quickstart.git
$ cd quickstart
$ php ../composer.phar install
$ php app/console assets:install
$ php app/console fos:js-routing:dump
$ php app/console assetic:dump
```
