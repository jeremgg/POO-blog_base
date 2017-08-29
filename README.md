# blog_base
Base d'un projet de blog en php orienté objet



1 - Créer une structure de fichier comme ci-dessous :



  - App : dossier contenant toutes les class spécifique de l'application. C'est le corps de l'application qui permet de tout gérer
      - Dossier Entity : contient tous les enregistrements
      - Dossier Table : permet de faire des requètes par rapport à différents types de contenus
      		- Post : contient les méthodes spécifiques à l'affichage des articles
          - Category : contient les méthodes spécifiques à l'affichage des catégories
          - user : contient les méthodes globales relatives au utilisateurs

      - class App : contient les méthodes globales à l'ensemble de l'application
      - class Autoloader : autoloading des class spécifique au dossier app


  - Config : dossier contenant les éléments de configurations de la base de donnée


  - Core : dossier contenant toutes les class génériques
      - Dossier Database : contient les méthodes permettant de se connecter à la base de donnée et de définir les types de requète
      - Dossier Auth : contient les méthodes qui permettent aux utilisateurs de se connecter au back-end
      - Dossier Entity : contient la class parente à toutes les entitées
      - Dossier Table : contient les function pour effectuer les requète sur la base de donnée
      - Dossier HTML : contient les class liées aux formulaires
      - class Autoloader : autoloading des class spécifique au dossier core
      - class Config : contients les fonction en rapport avec la configuration de la base de donnée


  - Pages : dossier contenant l'affichage de de chaques pages
      - Dossier posts : contient le contenu dynamique des pages de l'application
      - Dossier templates : contient les templates de pages 
      - Dossier users : page de connexion au back-end
      - Dossier admin : contient toutes les pages du back-end
          - Dossier posts : concerne les articles
              - index.php : page qui liste tous les articles
              - add.php : page pour ajouter des articles
              - edit.php : page de modification des articles
              - delete.php : page de suppression des articles
          - Dossier categories : concerne les catégories
              - index.php : page qui liste tous les catégories
              - add.php : page pour ajouter des catégories
              - edit.php : page de modification des catégories
              - delete.php : page de suppression des catégories


  - public  : dossier contenant tous les fichiers publics
      - Dossier css
      - Dossier js
      - index.php : racine du site front-end
      - Admin.php : racine du site back-end

