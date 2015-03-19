
##########################    INSTALLATION DU PROJET    ########################## 

Récupérer le projet sur le Git : https://github.com/melanie2b4/projet_symfony.git

Placer le dossier dans le Htdocs (ou www pour windows) de MAMP (ou Wamp) pour une installation en local.

Ensuite à l'aide de l'invite de commande procéder à ces étapes pour l'installation de symfony:

$ sudo curl -LsS http://symfony.com/installer -o /usr/local/bin/symfony
$ sudo chmod a+x /usr/local/bin/symfony

Ensuite Installer Composer dans le dossier du projet.
(se déplacer dans le dossier de son projet à l'aide de la commande "cd" et "cd.." , 
cd permettant de rentrer dans un dossier et cd.. de retourner dans le dossier parent.

$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install


Toujours dans l'invite de commande créez la base de donnée à l'aide de la commande suivante:
$ php app/console doctrine:database:create

Attention veuillez rentrez les bons paramètres en fonction de votre configuration actuelle 
qui peut différer entre différents postes tel que :
-le numéro de port
-le nom d'utilisateur 
-le mot de passe

Une fois cette étape terminée récupérez le fichier de la base de donnée symfony.sql disponible à la racine du dossier path 
dans le git.

Ouvrir le fichier avec un éditeur de texte, et copiez le tout.
Accédez ensuite à phpmyadmin et séléctionner votre base de donnée Symfony.
Collez ensuite le contenu de votre base de donnée dans la partie "SQL" sur phpmyadmin et éxécutez le tout.

Pour finir revenez à l'invite de commande et inserez la commande suivante: 
$ php app/console doctrine:schema:update --force

Voilà normalement le site est opérationnel si il n'y a pas eu d'erreurs.


##########################    UTILISATION DU SITE    ########################## 

Veuillez vous connecter en Administrateur si vous voulez pouvoir ajouter ou supprimer un Quizz.

Identifiant: admin
Mot de passe : adminadmin

Pour rajouter un Quizz: app_dev.php/add
Pour supprimer un Quizz: app_dev.php/listquizz   
