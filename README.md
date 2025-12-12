# 🚗 LocAuto - Système de Gestion de Parc Automobile

Un projet PHP orienté objet développé dans le cadre d'une formation AFPA pour la gestion d'un parc de véhicules de location.

## 📋 Description

LocAuto est une application console qui simule la gestion d'un parc automobile pour une société de location. Le projet met en pratique les concepts fondamentaux de la programmation orientée objet en PHP : héritage, polymorphisme, interfaces, exceptions et gestion statique.

## 🏗️ Architecture du Projet

### Structure des Fichiers

```
locAuto-php/
├── locAuto.php              # Point d'entrée de l'application
└── classes/
    ├── Vehicule.class.php           # Classe abstraite de base
    ├── Citadine.class.php           # Véhicule citadin
    ├── Familiale.class.php          # Véhicule familial  
    ├── Utilitaire.class.php         # Véhicule utilitaire
    ├── Depanneuse.class.php         # Véhicule de dépannage
    ├── ParcVehicules.class.php      # Gestionnaire du parc
    ├── Inventoriable.class.php      # Interface pour les objets inventoriables
    ├── Garage.class.php             # Classe Garage
    ├── Materiel.class.php           # Classe Matériel
    ├── Outil.class.php              # Classe Outil
    └── ParcVehiculeException.class.php # Gestion des exceptions
```

### Concepts POO Implémentés

- **Héritage** : Hiérarchie de classes avec `Vehicule` comme classe abstraite parent
- **Polymorphisme** : Implémentation différente de méthodes selon le type de véhicule
- **Interface** : `Inventoriable` pour standardiser les objets du parc
- **Encapsulation** : Propriétés privées/protégées avec accesseurs
- **Exceptions** : Gestion d'erreurs personnalisées avec `ParcVehiculeException`
- **Méthodes statiques** : Gestion centralisée du parc via `ParcVehicules`

## 🚀 Fonctionnalités

### Gestion des Véhicules

- ✅ Création de différents types de véhicules (Citadine, Familiale, Utilitaire, Dépanneuse)
- ✅ Enregistrement automatique dans le parc
- ✅ Affichage des informations complètes de chaque véhicule
- ✅ Planification des révisions selon le type de véhicule

### Gestion du Parc

- ✅ Ajout de véhicules au parc
- ✅ Recherche de véhicules par identifiant
- ✅ Suppression de véhicules du parc
- ✅ Affichage complet du parc
- ✅ Gestion des erreurs (véhicule non trouvé)

## 💻 Installation et Utilisation

### Prérequis

- PHP 8.0 ou supérieur
- Terminal/Ligne de commande

### Exécution

```bash
# Cloner ou télécharger le projet
cd locAuto-php

# Exécuter l'application
php locAuto.php
```

## 🔧 Exemple d'Utilisation

```php
// Création des véhicules
$citadine = new Citadine("Peugeot", "208", "CIT123", 350);
$familiale = new Familiale("Renault", "Scénic", "FAM456", 7);
$utilitaire = new Utilitaire("Ford", "Transit", "UTI789", 1200);

// Enregistrement dans le parc
ParcVehicules::enregistrer($citadine);
ParcVehicules::enregistrer($familiale);
ParcVehicules::enregistrer($utilitaire);

// Affichage du parc
ParcVehicules::getParc();

// Recherche et suppression
$vehicule = ParcVehicules::searchVehiculeById("FAM456");
ParcVehicules::deleteVehiculeById("CIT123");
```

## 📚 Objectifs Pédagogiques

Ce projet permet de maîtriser :

- **Classes abstraites** et méthodes abstraites
- **Interfaces** et leur implémentation
- **Héritage** et surcharge de méthodes
- **Encapsulation** et visibilité des propriétés
- **Méthodes statiques** et variables de classe
- **Gestion d'exceptions** personnalisées
- **Autoloading** de classes en PHP
- **Polymorphisme** et liaison tardive

## 🎯 Concepts Avancés

- **Autoloading** : Chargement automatique des classes via `spl_autoload_register`
- **Type Hinting** : Typage strict des paramètres et valeurs de retour
- **Exception Handling** : Gestion robuste des erreurs métier
- **Static Methods** : Implémentation du pattern Singleton-like pour le parc

## 👨‍🎓 Contexte de Formation

Projet réalisé dans le cadre de la formation développeur web/web mobile à l'AFPA, module PHP et programmation orientée objet.

**Compétences développées :**

- Maîtrise des concepts POO en PHP
- Architecture logicielle et design patterns
- Gestion des erreurs et exceptions
- Bonnes pratiques de développement PHP

---

Formation AFPA - Développement Web et Web Mobile
