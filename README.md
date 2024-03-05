# Démo de DataTables avec Laravel

Ce projet démontre comment utiliser DataTables avec Laravel pour afficher et gérer des tables de données. 
Il inclut une fonctionnalité pour afficher les pays, les villes et les personnes associées à ces derniers.

## Pour commencer

Pour démarrer avec ce projet, suivez ces étapes :

1. Clonez le dépôt sur votre machine locale :

git clone <https://github.com/HamzaSefiani/laravelDataTable.git>



2. Installez les dépendances à l'aide de Composer :

composer install


3. Créez un fichier `.env` et mettez à jour les informations sur la base de données.


5. Exécutez les migrations et les seeders de la base de données pour enrichir la base de données :

php artisan migrate --seed



6. Lancez l'application :

php artisan serve







7. Visitez `http://localhost:8000` dans votre navigateur pour voir la démo de DataTables.


## Utilisation

- Accédez à la page d'accueil pour voir une liste des pays. En cliquant sur un pays, vous verrez une liste de villes associées à ce pays.
- En cliquant sur une ville, vous verrez une liste de personnes associées à cette ville.
- Les tables sont implémentées à l'aide de DataTables, offrant des fonctionnalités telles que la pagination, la recherche et le tri.

## Technologies utilisées

- Laravel
- MySQL
- DataTables
- Bootstrap

## Crédits

Ce projet est créé par SEFIANI HAMZA.






