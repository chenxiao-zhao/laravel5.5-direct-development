all:
	make tar
tar:
	rm -rf /var/www/release/swedavia-airport-api;
	mkdir -p /var/www/release/swedavia-airport-api
	cp -r ./ /var/www/release/swedavia-airport-api/
	dos2unix /var/www/release/swedavia-airport-api/*.sh
	cd /var/www/release/swedavia-airport-api; ./build_docker.sh;
	cd /var/www/release;docker save -o swedavia-airport-api.tar swedavia-airport-api;tar -zvcf swedavia-airport-api_1.0_docker_amd64.tar.gz swedavia-airport-api.tar;

clean:
	rm -rf /var/www/release
