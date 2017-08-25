# blog_base
Base d'un projet de blog en php orienté objet



1 - Créer une structure de fichier comme ci-dessous :

  - App : dossier contenant toutes les class de l'application
      - dossier Table : contient les class spécifiques pour l'affichage des pages
      		- Class Article : contient les méthodes spécifiques à l'affichage des articles sur home.php
          - Class Categorie : contient les méthodes spécifiques aux catégories
          - Class Table : contient les méthodes globales à l'affichage des articles et des catégories

      - class Database : contient les méthodes permettant de se connecter à la base de donnée et de définir les types de requète
      - class App : contient les méthodes globales à l'ensemble de l'application

  - public  : dossier contenant tous les fichiers publics
      - dossier css
      - dossier js
      - index.php : racine du site

  - Pages : dossier contenant le contenu de chaques pages
      - dossier templates : contients les templates de pages 

