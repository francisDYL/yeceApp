# YECE App
YOUTH ENTREPRENEURSHIP CENTER FOR EMPOWERMENT

## Prérequis pour le déploiement

Pour déployer cette application, vous devez vous assurer d'avoir un serveur web avec:

- Php 7.1
- MySQL 5.6
- Accès SSH/terminal
- Extensions populaire de Php comme `mbstring`...
- Dernière version de Composer
- Git


## Configuration

Une fois que vous aurez cloner la Master branch dans le repertoire adéquat sur votre serveur, vous devrez suivre les étapes suivantes pour préparer le déploiement

- Copier le fichier `.env.example` et le renomer en `.env`. Puis le remplir avec les Informations adéquates. n'oubliez pas de passer en mode `production`.
-   Installer les dépendances
    ```
    composer install
    ```
- Initialiser la base de données
    ```
    php artisan migrate
    ``` 
    puis 
    ```
    php artisan migrate:refresh --seed
    ```
- Pour le login en tant qu'administrateur : admin@yeceapp.com et password: secret. Il est recommandé de changer ceci avant d'effectuer les deux commandes précédentes. pour cela rendez-vous dans le fichier `database/seeds/UserTableSeeder.php`
- Pour l'envoie d'email, après avoir completer le fichier .env par les informations fourni par votre hébergeur ou votre fournisseur de service mail, rendez-vous dans le fichier `app/Http/Controllers/MailController.php` et remplacer `admin@yeceapp.com` par l'adresse mail à laquelle vous voulez recevoir vos emails de contact.
- à partir d'ici l'applications devrait fonctionner sans problème.

## Auteurs

N'hésitez pas à nous contacter en cas de difficultés. Nous vous aiderons dans la limite de notre disponibilité.

- **[Francis Djiomejoung](mailto:leroifrancis56@gmail.com)**
- **[Willy Nzesseu](mailto:willynzesseu@gmail.com)**

Pour YECE Group!
## License

Copyright © YECE 2018
