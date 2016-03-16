# Setup the development environment

If you want to work on InvoicePlane you should setup your working environment with the following guide. You could also work with the download package from the InvoicePlane website but using this guide is a safer way to ensure all requirements are met and you can properly work on the app.


## Basic requirements

You need to install the following libraries / apps / dependencies to work on InvoicePlane

* [Composer](https://getcomposer.org/doc/00-intro.md)
* [NodeJS](https://nodejs.org/en/) (version 4.4 LTS) with the following packages
    * [ESLint](http://eslint.org/docs/user-guide/command-line-interface)
    * [Grunt CLI](https://github.com/gruntjs/grunt-cli)
    * [Bower](http://bower.io/)
* [Ruby](https://www.ruby-lang.org/en/) (version >= 2.2.0) with the following gems:
    * [SASS](http://sass-lang.com/install)
    * [SCSS Lint](https://github.com/brigade/scss-lint)


## 1. The repository

The first step is to clone the repository to your machine. To do so use the following command:

```bash
$ git clone https://github.com/InvoicePlane/InvoicePlane-2 invoiceplane
$ cd invoiceplane
```


## 2. Load all dependencies

As all libraries and the codeigniter core are handled by Composer you have to load these dependencies first.

```bash
$ composer install
$ npm install
$ bower install
```

Composer, NPM and Bower will then load all dependencies and copy them to the correct directories.


## 3. Compile all assets

All assets (CSS and JavaScript) are compiled by libraries and actions which are bundled within the gruntfile. If oyu are not familiar with Grunt you can learn more about it here. At the moment you only have to know that you can compile the assets with the following command:

```bash
$ grunt
```
Grunt will then compile all assets and enter the watch mode after it. Grunt watches all source files for changes and will start compiling again if a file was changed.
