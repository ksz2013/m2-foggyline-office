# m2-foggyline-office

### Installation

```sh
$ composer config repositories.koncz-m2-foggyline-office git https://github.com/ksz2013/m2-foggyline-office.git
$ composer require koncz/m2-foggyline-office:dev-master
```

Manually:

Copy the zip into app/code/Foggyline/Office directory


#### After installation by either means, enable the extension by running following commands:

```sh
$ php bin/magento module:enable Foggyline_Office --clear-static-content
$ php bin/magento setup:upgrade
```