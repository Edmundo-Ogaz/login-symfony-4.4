run:
	php bin/console server:run

symfony-run:
	symfony server:start

routers:
	php bin/console debug:router

list-make:
	symfony console list make

controller-make:
	symfony console make:controller DefaultController