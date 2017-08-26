# blog_base
Base d'un projet de blog en php orienté objet



1 - Créer une structure de fichier comme ci-dessous :



  - App : dossier contenant toutes les class spécifique de l'application. C'est le corps de l'application qui permet de tout gérer
      - dossier Entity : contient les fonction spécifiques pour l'affichage des données
      - dossier Table : contient les requètes spécifiques pour l'affichage des données
      		- Post : contient les méthodes spécifiques à l'affichage des articles sur home.php
          - Category : contient les méthodes spécifiques aux catégories
          - user : contient les méthodes globales relatives au utilisateurs

      - class App : contient les méthodes globales à l'ensemble de l'application
      - class Autoloader : autoloading des class spécifique au dossier app


  - Config : dossier contenant les éléments de configurations de la base de donnée


  - Core : dossier contenant toutes les class génériques
      - Dossier Database : contient les méthodes permettant de se connecter à la base de donnée et de définir les types de requète
      - Dossier Entity : contient la class parente à toutes les entitées
      - Dossier Table : contient les function pour effectuer les requète sur la base de donnée
      - class Autoloader : autoloading des class spécifique au dossier core
      - class Config : contients les fonction en rapport avec la configuration de la base de donnée


  - Pages : dossier contenant l'affichage de de chaques pages
      - dossier posts : contient le contenu dynamique des pages de l'application
      - dossier templates : contient les templates de pages 


  - public  : dossier contenant tous les fichiers publics
      - dossier css
      - dossier js
      - index.php : racine du site

