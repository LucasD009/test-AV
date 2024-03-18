# Documentation API et Batch

## Documentation API

### Endpoints

#### Créer un Utilisateur

- **URL** : `/user`
- **Méthode** : `POST`
- **Corps de la requête (exemple)** :

    json :
    `{
    "first_name": "Lucas",
    "last_name": "David",
    "email": "lucas.david@example.com",
    "phone": "0612345678",
    "postal_address": "9 Impasse du test",
    "professional_status": true,
    "last_login": "2024-03-20 10:00:00"
    }`
- **Réponse réussie :** Code d'état 200 avec message "Utilisateur créé avec succès."

#### Récupérer tous les Utilisateurs
- **URL :** `/users`
- **Méthode :** `GET`
- **Réponse réussie :** Code d'état 200 avec un tableau d'utilisateurs.
- **Réponse d'erreur :** Code d'état 404 avec message "Utilisateurs non trouvés" si l'utilisateur n'existe pas.

#### Récupérer un Utilisateur par ID
- **URL :** `/user/{id}`
- **Méthode :** `GET`
- **Paramètres d'URL :** `id=[integer]`
- **Réponse réussie :** Code d'état 200 avec les détails de l'utilisateur.
- **Réponse d'erreur :** Code d'état 404 avec message "Utilisateur non trouvé" si l'utilisateur n'existe pas.

#### Mettre à Jour un Utilisateur
- **URL :** `/user/{id}`
- **Méthode :** `PUT`
- **Paramètres d'URL :** `id=[integer]`
- **Corps de la requête (exemple) :**

    json :
    `{
    "first_name": "Lucas",
    "last_name": "David",
    "email": "lucas.david@example.com",
    "phone": "0612345678",
    "postal_address": "9 Impasse du test",
    "professional_status": true,
    "last_login": "2024-03-20 10:00:00"
    }`
- **Réponse réussie :** Code d'état 200 avec message "Utilisateur mis à jour avec succès."

#### Supprimer un Utilisateur
- **URL :** `/user/{id}`
- **Méthode :** DELETE
- **Paramètres d'URL :** `id=[integer]`
- **Réponse réussie :** Code d'état 200 avec message "Utilisateur supprimé avec succès."


# Documentation Batchs

#### Supprimer les Utilisateurs Inactifs (depuis 36 mois)
- **Lancer la commande :** `docker-compose exec app php spark batch:deleteinactive` (ou `php spark batch:deleteinactive` depuis l'intérieur du Docker)
