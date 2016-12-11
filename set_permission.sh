#!bin/sh

find /var/www/html/mycampus.app -type d -exec sudo chmod 755 {} \;
find /var/www/html/mycampus.app -type f -exec sudo chmod 644 {} \;
sudo chmod 777 -R /var/www/html/mycampus.app/storage
sudo chmod +x /var/www/html/mycampus.app/set_*.sh
