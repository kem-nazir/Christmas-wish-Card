# Carte de Vœux de Noël Interactive

Une carte de vœux de Noël virale avec messages personnalisés et partage sur WhatsApp / Facebook Messenger.

## Fonctionnalités

- **Rideaux animés** : cliquer sur la cloche ouvre/ferme les rideaux avec une animation
- **Message personnalisé** : le visiteur entre son prénom et reçoit une page de vœux unique
- **Partage viral** : les boutons WhatsApp et Messenger utilisent dynamiquement l'URL d'hébergement
- **Compte à rebours** jusqu'au 25 décembre 2025
- **Musique de fond** : Jingle Bells joué au clic (page d'accueil) ou en autoplay (page de vœux)
- **Décorations animées** : guirlandes d'ornements, animations CSS (swing, pulse, tada)
- **Design responsive** pour mobile

## Structure

```
├── index.php       Page d'entrée avec rideaux + formulaire
├── wish.php        Page de vœu personnalisée avec partage
├── slide.js        Plugin jQuery easing pour les animations
├── pic/
│   ├── Jingle-Bells.mp3    Musique de Noël
│   ├── joy.png / joynw.png Graphiques de vœux
│   ├── left.jpg / right.jpg Images des rideaux
│   ├── cot1.png – cot8.png Ornements décoratifs
│   ├── pèrenw1.gif / pèrenw2.gif  Père Noël animé
│   ├── oliver.gif / namg.gif       Personnage animé / fond texte
│   ├── bibell.png, tsapp.png, fbicon.png, vsht.png
│   └── (autres icônes et illustrations)
```

## Prérequis

- Serveur web avec **PHP 7+**
- Aucune base de données ni dépendance externe (hors CDN)

## Installation

1. Déposer tous les fichiers sur votre serveur web
2. Accéder à `index.php` depuis un navigateur

## Personnalisation

| Élément | Emplacement |
|---|---|
| Date du compte à rebours | Ligne `new Date("Dec 25, 2025 00:00:00")` dans `index.php` et `wish.php` |
| Musique | Remplacer `pic/Jingle-Bells.mp3` |
| Texte des vœux | Dans les balises `.wishMessage` des deux fichiers |
| Image Open Graph | Remplacer `pic/joy.png` |

Le lien de partage est automatiquement détecté (protocole + hôte du serveur).

## Licence

Projet libre et open source.
