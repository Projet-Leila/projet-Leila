# Projet LEILA

## Prérequis

### A installer sur votre poste

### Drop

A la racine du projet:

```shell
php bin/console doctrine:schema:drop --full-database --force
```

Au changement des entities

```shell
php bin/console doctrine:migrations:diff
```

Supprimer les anciens version migration

### Update

A la racine du projet:

```shell
php bin/console doctrine:migrations:migrate -n
```