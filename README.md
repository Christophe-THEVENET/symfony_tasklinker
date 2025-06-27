# TaskLinker


## Formation Bootcamp avancé Symfony OpenClassRooms

### Exercice 2 - Faites vos premiers pas avec Symfony 7


Développeur PHP au sein de l’agence BeWize, l’entreprise vous demande de travailler sur l’amélioration de l’outil de gestion de projet interne TaskLinker. 
 
En effet, cet outil ne dispose pas de système de sécurité, et l’entreprise souhaite ajouter une couche d’authentification et de gestion des utilisateurs.

Voici la [base de code](https://github.com/OpenClassrooms-Student-Center/876-p10-m1)  du projet. 
 

Pour y parvenir, vous vous appuierez sur les [maquettes réalisées](https://www.figma.com/file/CDaLz5jdtYeWEDcA66bya2/Tasklinker?type=design&mode=design&t=CQFOgGAUKcKsY0Ub-0) par l’entreprise.

Si vous le souhaitez, vous aurez la possibilité d’aller plus loin, en ajoutant un système d'authentification à 2 facteurs pour la connexion.


## Features

    * Créer les pages de connexion et d’inscription;
    * Gérer les rôles d’accès : simple collaborateur et chef de projet;
    * Modifier la fiche d’un employé afin de changer son rôle;
    * Configurer l'accès des pages en fonction des rôles;
        seuls les chefs de projet peuvent maintenant créer et modifier un projet ;
        seuls les chefs de projet peuvent maintenant modifier les fiches Employés ;
    * les employés ne peuvent voir que les projets auxquels ils ont accès (à l’exception des chefs de projet qui peuvent tous les voir) ;
    * les utilisateurs non connectés ne peuvent accéder qu’à la page de connexion et d’inscription;
    * Système d'authentification à 2 facteurs pour la connexion
    * Symfony UX Turbo pour améliorer l'expérience utilisateur;
    * Symfony UX Toggle Password pour afficher/masquer les mots de passe dans les formulaires;


## Prérequis


* PHP 8.1.0 ou plus;

* Symfony 6.3 ou plus;
  
* Composer;

* MySQL/MariaDB;



## Installation

    
  `git clone https://github.com/Christophe-THEVENET/tasklinker.git`

`cd tasklinker/`

`composer install`    

`cp .env .env.local` > configurer le DNS de la base de données

`php bin/console c:c `

`php bin/console doctrine:database:create`

`php bin/console doctrine:migrations:migrate`

`php bin/console doctrine:fixtures:load`    


## Utilisation


`symfony server:start`

url: localhost:8000

Connectez-vous avec le compte admin crée dans les fixtures (voir les identifiants dans le fichier `src/DataFixtures/AppFixtures.php`)
