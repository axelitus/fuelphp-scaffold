# FuelPHP Scaffold
[![FuelPHP][ico_fuelphp]](http://fuelphp.com)
[![Software License][ico-license]](LICENSE.md)

A FuelPHP scaffold to begin projects as fast as possible. This scaffold contains slight modifications to the official FuelPHP release downloads. 

## Usage
To use this scaffolding just clone the repo and run composer to install the dependencies:

```
git clone --branch <tag_version> --depth 1 https://github.com/axelitus/fuelphp-scaffold.git <project_folder>
cd <project_folder>
composer install [--no-dev]
```

Optionally, you can go further and remove all git repo references to place your project under git version control.

Under Linux:

```
rm -rf .git
```

Under Windows:

```
rmdir /S .git
``` 

Your application folder is configured to be `<project_folder>/app`. It also contains a `composer.json` if you need additional requirements in your app. This is to maintain the base `composer.json` file uncluttered with just the framework's dependencies.

[ico_fuelphp]: https://img.shields.io/badge/FuelPHP-v1.8-blue.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square