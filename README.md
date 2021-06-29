## Prerequisites
* Composer
* PHP 7.4
* Xdebug 3

## Debug script
`php -dxdebug.start_with_request=yes -dxdebug.mode=debug -dxdebug.client_host=127.0.0.1 -dxdebug.client_port=9000 src/Solution.php`

## Run unit tests
`vendor/bin/phpunit tests/SolutionTest.php`

## Format code
`vendor/bin/phpcbf src/ tests/`
