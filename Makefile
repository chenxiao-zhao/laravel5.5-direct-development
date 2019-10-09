VERSION=2.2

all:
	make package

package:
	rm -rf /var/www/release/laravel5.5-direct-development;
	mkdir -p /var/www/release/laravel5.5-direct-development
	cp -r ./ /var/www/release/laravel5.5-direct-development/
	dos2unix /var/www/release/laravel5.5-direct-development/*.sh
	# add version info
	sed -i "s#__BUILD_VERSION__#${VERSION}#g" /var/www/release/laravel5.5-direct-development/.env.example
	sed -i 's/laravel5.5-direct-development/laravel5.5-direct-development-${VERSION}/' /var/www/release/laravel5.5-direct-development/build_docker.sh
	cd /var/www/release/laravel5.5-direct-development;rm -rf vendor/;composer install --no-dev --ignore-platform-reqs;cp .env.example .env;./build_docker.sh;
	cd /var/www/release;docker save -o laravel5.5-direct-development_${VERSION}_docker_amd64.tar laravel5.5-direct-development-${VERSION};tar -zvcf laravel5.5-direct-development_${VERSION}_docker_amd64.tar.gz laravel5.5-direct-development_${VERSION}_docker_amd64.tar;

tar:
	rm -rf /var/www/release/laravel5.5-direct-development
	mkdir -p /var/www/release/laravel5.5-direct-development
	cp -r ./ /var/www/release/laravel5.5-direct-development/
	dos2unix /var/www/release/laravel5.5-direct-development/*.sh
	cd /var/www/release; tar czvf laravel5.5-direct-development_${VERSION}_arm64.tar.gz ./laravel5.5-direct-development

clean:
	rm -rf /var/www/release
