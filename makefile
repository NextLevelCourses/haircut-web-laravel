
#=========================================== BEGIN::exec docker app ============================
docker-haircut-start:
	docker compose -f docker-compose.yml up -d
#stop docker haircut
docker-haircut-stop:
	docker compose -f docker-compose.yml down
#list docker haircut
docker-haircut-container:
	docker compose -f docker-compose.yml ps
#list docker images
docker-haircut-images:
	docker image ls
#restart docker haircut
docker-haircut-restart:
	docker compose -f docker-compose.yml restart
#logs docker haircut
docker-haircut-logs:
	docker compose -f docker-compose.yml logs -f
#build docker haircut
docker-haircut-build:
	docker compose -f docker-compose.yml build app

#================================================== migration ========================================
docker-haircut-migrate:
	docker compose -f docker-compose.yml exec app php artisan migrate
	docker compose -f docker-compose.yml exec app php artisan db:seed
docker-haircut-migrate-rollback:
	docker compose -f docker-compose.yml exec app php artisan migrate:rollback
#exec run migrate refresh
docker-haircut-refresh:
	docker compose -f docker-compose.yml exec app php artisan migrate:refresh
	docker compose -f docker-compose.yml exec app php artisan db:seed
#exec run seeder
docker-haircut-seed:
	docker compose -f docker-compose.yml exec app php artisan db:seed
#exec app docker via composer install
docker-haircut-composer:
	docker compose -f docker-compose.yml exec app composer install
#=========================================== END::exec docker app ============================


#=========================================== BEGIN::exec local app ============================
#run app haircut via shell
haircut-serve-port:
	php -S localhost:8089 -t public
haircut-serve:
	php artisan serve
#migrate schema
haircut-migrate:
	php artisan migrate
	php artisan db:seed
#seed database
haircut-seed:
	php artisan db:seed
#refresh schema and seed
haircut-refresh:
	php artisan migrate:refresh
	php artisan db:seed
#rollback schema
haircut-rollback:
	php artisan migrate:rollback
#generate key
haircut-key-generate:
	php artisan key:generate
haircut-config-refresh-optimize:
	php artisan route:clear
	php artisan config:clear
	php artisan cache:clear
	php artisan view:clear
	php artisan optimize
haircut-composer-dump-autoload:
	composer dump-autoload
haircut-config-optimize:
	php artisan optimize
#=========================================== END::exec local app ============================