## start nginx
service nginx start

## start php7.0-fpm
service php7.0-fpm start

if [ "$DB_HOST" = "" ]
then
  echo "error:mysql host needed.please export DB_HOST before install."
else
    sed -i "/^DB_HOST/cDB_HOST=${DB_HOST}" /var/www/swedavia-airport-api/.env
fi

if [ "$DB_DATABASE" = "" ]
then
  echo "error:mysql database name  needed.please export DB_DATABASE before install."
else
    sed -i "/^DB_DATABASE/cDB_DATABASE=${DB_DATABASE}" /var/www/swedavia-airport-api/.env
fi

if [ "$DB_USERNAME" = "" ]
then
  echo "error:mysql user name needed.please export DB_USERNAME before install."
else
    sed -i "/^DB_USERNAME/cDB_USERNAME=${DB_USERNAME}" /var/www/swedavia-airport-api/.env
fi

if [ "$DB_PASSWORD" = "" ]
then
  echo "error:mysql password needed.please export DB_PASSWORD before install."
else
    sed -i "/^DB_PASSWORD/cDB_PASSWORD=${DB_PASSWORD}" /var/www/swedavia-airport-api/.env
fi

if [ "$DB_PORT" = "" ]
then
  echo "warnning:use default mysql port 3306.please export DB_PORT before install if you want to configure it."
else
    sed -i "/^DB_PORT/cDB_PORT=${DB_PORT}" /var/www/swedavia-airport-api/.env
fi

if [ "$AZURE_ACCOUNT_NAME" = "" ]
then
  echo "warnning:please export AZURE_ACCOUNT_NAME before install if you want to configure it."
else
    sed -i "/^AZURE_ACCOUNT_NAME/cAZURE_ACCOUNT_NAME=${AZURE_ACCOUNT_NAME}" /var/www/swedavia-airport-api/.env
fi

if [ "$AZURE_ACCOUNT_KEY" = "" ]
then
  echo "warnning:please export AZURE_ACCOUNT_KEY before install if you want to configure it."
else
    sed -i "/^AZURE_ACCOUNT_KEY/cAZURE_ACCOUNT_KEY=${AZURE_ACCOUNT_KEY}" /var/www/swedavia-airport-api/.env
fi

if [ "$AZURE_CONTAINER_NAME" = "" ]
then
  echo "warnning:please export AZURE_CONTAINER_NAME before install if you want to configure it."
else
    sed -i "/^AZURE_CONTAINER_NAME/cAZURE_CONTAINER_NAME=${AZURE_CONTAINER_NAME}" /var/www/swedavia-airport-api/.env
fi

if [ "$AZURE_FILE_CLOUD_PATH" = "" ]
then
  echo "warnning:please export AZURE_FILE_CLOUD_PATH before install if you want to configure it."
else
    sed -i "/^AZURE_FILE_CLOUD_PATH/cAZURE_FILE_CLOUD_PATH=${AZURE_FILE_CLOUD_PATH}" /var/www/swedavia-airport-api/.env
fi

if [ "$JWT_TTL" = "" ]
then
  echo "warnning:please export JWT_TTL before install if you want to configure it."
else
    sed -i "/^JWT_TTL/cJWT_TTL=${JWT_TTL}" /var/www/swedavia-airport-api/.env
fi