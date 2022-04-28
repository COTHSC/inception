cd /srv/wordpress #would be good to change that to env var

# if [[ ! -f "wp-config.php" ]] ; 
# then
#     wp config create --dbname=${MY_SQL_DATABASE} --dbuser=${MY_SQL_USER} --dbpass=${MY_SQL_PASSWORD} --dbhost=${MY_SQL_HOST}
# fi
wp core install --url="esc.42.fr" --title="testin" --admin_user=jean --admin_password=1 --admin_email="test@42.fr" --skip-email
php-fpm7 -F