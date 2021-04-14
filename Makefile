test: phpunit phpcs

build: phpunit-coverage phpcs

phpunit:
	vendor/bin/phpunit --no-coverage

phpunit-coverage:
	vendor/bin/phpunit --testsuite=unit --coverage-text --coverage-clover build/logs/clover.xml

phpcbf:
	vendor/bin/phpcbf -p --encoding=utf-8 --standard=PSR2 --ignore=src/Arr.php src

phpcs:
	vendor/bin/phpcs -p --encoding=utf-8 --standard=PSR2 --ignore=src/Arr.php src
