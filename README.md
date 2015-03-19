# projet_symfony

INSTALLATION MACOS

Recuperer projet : 
https://github.com/melanie2b4/projet_symfony.git

Le placer dans le dossier htdocs de MAMP Pour une instalation en local.

Installer symfony :
$ sudo curl -LsS http://symfony.com/installer -o /usr/local/bin/symfony

$ sudo chmod a+x /usr/local/bin/symfony

Installer composer dans le dossier du projet :
$ curl -sS https://getcomposer.org/installer | php

$ php composer.phar install


Créer la base de donnée :

database_driver: pdo_mysql
    database_host: 127.0.0.1
    database_port: 8889
    database_name: symfony
    database_user: root
    database_password: root

