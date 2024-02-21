# Magic-api-front

##  auteur
- Daret Tom td4 (dare0005)

## langage et Framework
- php
- Symfony Api
- Javascript
- React
- Html/Css
- PhpMyAdmin

## A propos
Magic the gathering est un jeu de carte stratégique. Ce jeu a été créé au début des années 90. Chaque joueur est un arpenteur (une sorte de magicien) et s’affronte en invoquant des sorts et des créatures. Le but étant de terrasser son adversaire en réduisant son nombre de point de vie à 0.

## Le projet
Un site qui permet de lister des cartes avec sa description.

# API
## Base de données

La ressource est composé de 10 tables, 2 pour les images et 8 pour décrire d'une carte.
> - Card
> - Capacity
> - Element
> - Cost
> - Extension
> - Type
> - Keyword
> - KeywordCard
> - IconElt
> - Picture
## Installation / Configuration

configuration de composer
``` bash
composer install
```
## Serveur Web local

### Lancer le serveur web
Lancez le serveur Web local avec cette commande :
```bash
composer start
```
### Accès au serveur Web
Naviguez alors à partir de cette adresse : <http://localhost:8000>

## les tests
lancer tout les tests développé si dessous :
```shell
composer test
```

### Style de codage

Le code suit la recommandation [Symfony](https://symfony.com/doc/current/contributing/code/standards.html) :
- il peut être contrôlé avec
```shell
composer test:cs
```
- il peut être reformaté automatiquement avec :
```shell 
composer fix:cs
```

Lance les tests codeception qui génère une nouvelle base avec :
```shell
composer test:codeception
```

## génération de la base de donnée
détruit l'ancienne et génère une nouvelle :
```shell
composer db
```

# REACT

## Installation / Configuration

configuration de npm
``` bash
npm run dev
```