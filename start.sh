## start nginx
service nginx start

sed -i "/^max_execution_time/cmax_execution_time = 600" /etc/php/7.0/fpm/php.ini
sed -i "/^max_input_time/cmax_input_time = 600" /etc/php/7.0/fpm/php.ini
sed -i "/^upload_max_filesize/cupload_max_filesize = 512M" /etc/php/7.0/fpm/php.ini
sed -i "/^post_max_size/cpost_max_size = 512M" /etc/php/7.0/fpm/php.ini
sed -i "/^memory_limit/cmemory_limit = 512M" /etc/php/7.0/fpm/php.ini

## start php7.0-fpm
service php7.0-fpm start

service cron start
crontab /var/www/laravel5.5-direct-development/root

if [ "$DB_HOST" = "" ]
then
  echo "error:mysql host needed.please export DB_HOST before install."
else
    sed -i "/^DB_HOST/cDB_HOST=${DB_HOST}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$DB_DATABASE" = "" ]
then
  echo "error:mysql database name  needed.please export DB_DATABASE before install."
else
    sed -i "/^DB_DATABASE/cDB_DATABASE=${DB_DATABASE}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$DB_USERNAME" = "" ]
then
  echo "error:mysql user name needed.please export DB_USERNAME before install."
else
    sed -i "/^DB_USERNAME/cDB_USERNAME=${DB_USERNAME}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$DB_PASSWORD" = "" ]
then
  echo "error:mysql password needed.please export DB_PASSWORD before install."
else
    sed -i "/^DB_PASSWORD/cDB_PASSWORD=${DB_PASSWORD}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$DB_PORT" = "" ]
then
  echo "warning:use default mysql port 3306.please export DB_PORT before install if you want to configure it."
else
    sed -i "/^DB_PORT/cDB_PORT=${DB_PORT}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$MONGO_HOST" = "" ]
then
  echo "error:mongo host needed.please export MONGO_HOST before install."
else
    sed -i "/^MONGO_HOST/cMONGO_HOST=${MONGO_HOST}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$MONGO_PORT" = "" ]
then
  echo "warning:use default mongo port 27017.please export MONGO_PORT before install if you want to configure it."
else
    sed -i "/^MONGO_PORT/cMONGO_PORT=${MONGO_PORT}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$MONGO_DATABASE" = "" ]
then
  echo "error:mongo database name needed.please export MONGO_DATABASE before install."
else
    sed -i "/^MONGO_DATABASE/cMONGO_DATABASE=${MONGO_DATABASE}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$MONGO_USERNAME" = "" ]
then
  echo "error:mongo user name needed.please export MONGO_USERNAME before install."
else
    sed -i "/^MONGO_USERNAME/cMONGO_USERNAME=${MONGO_USERNAME}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$MONGO_PASSWORD" = "" ]
then
  echo "error:mongo password needed.please export MONGO_PASSWORD before install."
else
    sed -i "/^MONGO_PASSWORD/cMONGO_PASSWORD=${MONGO_PASSWORD}" /var/www/laravel5.5-direct-development/.env
fi

if [ "$JWT_TTL" = "" ]
then
  echo "warning:please export JWT_TTL before install if you want to configure it."
else
    sed -i "/^JWT_TTL/cJWT_TTL=${JWT_TTL}" /var/www/laravel5.5-direct-development/.env
fi