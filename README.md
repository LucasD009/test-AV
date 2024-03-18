# test-AV

## Installation du projet
Lancer le script start.sh dispo dans back-DC : `./start.sh`

## Réalisation du test

Pour commencer je découvre CodeIgniter via la doc et ensuite comme le choix des technos et d'archi sont imposés j’anticipe pour le déploiement afin que cela ne me pose de soucis une fois le projet developpé.
Comme je connais déjà un peu Clever Cloud je vais partir là dessus pour héberger.
Et ça a l’air un peu plus galère à setup par rapport à PHP mais je vais donc faire un déploiement via docker dans CC. 
Cela me permettra aussi d’avoir un environnement iso entre le local et CC. Mais aussi de permettre à n’importe qui récupérant le projet de le lancer plus rapidement avec le bon environnement.
Et donc pour le moment je laisse cette partie de coté. Par contre en local je vais utiliser docker-compose et la doc de CC me dit « Docker Compose functionalities are not supported. » donc j’aurais ça à gérer pour le déploiement.

# Environement de dev

Pour travailler j'utilise Docker, Visual Studio Code, SourceTree, DBeaver (BDD), ITerm (terminal) et Postman

# Conception : 

Je relève deux points pendant la conception de ce test :

- **Récupération d’une liste paginée d’utilisateurs (potentiellement 5M d’entrées)**
Visiblement CI récupère toutes les données pour ensuite les paginer ce qui va poser un soucis de performance sur de gros volumes.
Pour palier à ça je pourrais utiliser un curseur pour parcourir la table et ne retourner une à une que les pages demandées. Mais il serait alors plus compliqué de se rendre à une page précise et donc d'afficher le nombre de page en bas de l'écran pour l'utilisateur. Dans mon cas j'ai préféré ne rien faire pour avoir une pagination qui fonctionne avec des soucis de performances plutôt que quelque chose de bancal. N'ayant pas de WHERE dans ma requète c'est déjà un point ne ralentissant pas la requète.

- **Le listing et la suppression seront utilisées via un BO et la création et modification via le FO.**
Niveau sécurité ce n'est pas l'idéal de mettre les quatres méthodes sur la même route "user". Toutefois ne conaissant pas le contexte métier de ce test et si cela peut vraiment engendrer des soucis j'ai fait le choix pour plus de praticité ici de laisser toutes les requètes sur la même route.

## BDD

J'ai choisi de créer des seeds pour ma base pour facilter mes tests. Je ferai un script permettant de lancer le projet rapidement pour le tester et ces données seront alors utiles pour peupler la base. Niveau temps ce n'est pas très couteux et celà me permettra de rendre un projet plus propre.

Pour le numéro de téléphone il n'y a pas de contrainte d'unicité ici pour faciliter le peuplement auto de la base mais dans un contexte métier c'est, en géneral, nécéssaire.

## Documentation

La documentation API et Batch se trouve dans le fichier `Documentation.md`. J'ai hésité à utiliser swagger mais vu la taille de la doc il était plus rapide de faire ça à la main ici.

## Temps passé 

Jeudi après-midi : 1h pour découvrir CodeIgniter et démarrer le projet
Vendredi matin : 1h pour configurer mon docker et avoir une page de démarrage qui fonctionne ainsi que commencer à voir comment marchent les migrations sur CI

Lundi matin (3h) : Création de la migration et des seeds. (1h avec compris le temps de voir le fonctionnement). Créations de l'API, des routes et du batch (2h avec les ajustements).
Lundi après midi (2h): DocApi, ajustements et script démarrage (1h) puis recherche de comment optimiser la pagination + ajustement readme (1h)