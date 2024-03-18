# test-DC

## Installation du projet
Lancer le script start.sh dispo dans back-DC : `./start.sh`

## Réalisation du test

Pour commencer je découvre CodeIgniter via la doc et ensuite comme le choix des technos et d'archi sont imposés j’anticipe pour le déploiement pour pas que ça me pose de soucis une fois le projet terminé.
Comme je connais déjà un peu Clever Cloud je vais partir là dessus pour héberger.
Et ça a l’air un peu plus galère a setup par rapport à PHP mais je vais faire un déploiement via docker dans CC. 
Ça me permettra aussi d’avoir un environnement iso entre le local et CC mais aussi de permettre à n’importe qui récupérant le projet de le lancer plus rapidement avec le bon environnement.
Et donc pour le moment je laisse cette partie de coté. Par contre en local je vais utiliser docker-compose et la doc de CC me dit « Docker Compose functionalities are not supported. » donc j’aurais ça à gérer pour le déploiement car chaque partie sera déployée de son coté.

Pour travailler j'utilise Docker, Visual Studio Code, SourceTree, DBeaver (BDD), ITerm (terminal) et Postman

## BDD

J'ai choisi de créer des seeds pour ma base pour facilter mes tests. Et je ferais un script permettant de lancer le projet rapidement pour le tester et ces données seront donc utiles pour peupler la base.

Pour le numéro de téléphone il n'y a pas de contrainte d'unicité ici pour facilité le peuplement auto de la base mais dans un contexte métier c'est, en géneral, nécéssaire.


## Temps passé :

Jeudi après-midi : 1h pour découvrir CodeIgniter et démarrer le projet
Vendredi matin : 1h pour configurer mon docker et avoir une page de démarrage qui fonctionne ainsi que commencer à voir comment marchent les migrations sur CI

Lundi matin : Création de la migration, des seeds et découverte du fonctionnement des routes sur CI. Créations des routes (non terminé).





# INIT CI REAMDE :

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
