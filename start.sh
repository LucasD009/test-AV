#!/bin/bash

echo "Lancement Docker"
if ! docker-compose up -d; then
  echo "Une erreur s'est produite lors du lancement des conteneurs Docker."
  exit 1
fi

echo "Attente que la base de données soit prête..."
until docker-compose exec db mysqladmin --user=user --password=passsword ping > /dev/null 2>&1; do
  echo "En attente de la base de données..."
  sleep 3
done

echo "Exécution des migrations..."
if ! docker-compose exec -T app php spark migrate > /dev/null 2>&1; then
  echo "Une erreur s'est produite lors de l'exécution des migrations."
  exit 1
fi

echo "Seeding de la base de données..."
if ! docker-compose exec -T app php spark db:seed UserSeeder > /dev/null 2>&1; then
  echo "Une erreur s'est produite lors du seeding de la base de données."
  exit 1
fi

echo "Le projet est lancé"
echo "L'API est disponible sur http://localhost:8080/"
