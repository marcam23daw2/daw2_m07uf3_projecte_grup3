#!/usr/bin/env bash

sudo a2dissite 000-default.conf
sudo a2dissite default-ssl.conf

sudo systemctl restart apache2
sudo cp daw2.crt /etc/ssl/certs
sudo cp daw2.pem /etc/ssl/private

sudo chmod 644 /etc/ssl/certs/daw2.crt
sudo chgrp ssl-cert /etc/ssl/private/daw2.pem
sudo chmod 640 /etc/ssl/private/daw2.pem

# Asegúrate de que el archivo 'daw2s.conf' exista en tu directorio '/etc/apache2/sites-available'
if [ -f /etc/apache2/sites-available/daw2s.conf ]; then
    cat /etc/apache2/sites-available/daw2s.conf
    sudo a2ensite daw2s.conf
else
    echo "El archivo daw2s.conf no se encuentra en el directorio /etc/apache2/sites-available."
fi

sudo systemctl restart apache2

sudo systemctl status apache2

sudo netstat -atupn | grep apache2
