run:
	docker run -d -p 4200:80 -v nameVol:/test.flower-bottle --rm --name flowerbottle/node flowerbottle/node:volumes
run-dev:
	docker run -d -p 4200:80 -v "~/PhpstormProjects/test.flower-bottle" -v nameVol:/test.flower-bottle --rm --name flowerbottle/node flowerbottle/node:volumes
stop:
	docker stop flowerbottle/node