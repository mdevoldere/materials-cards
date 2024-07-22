# Sets de cartes pour le Memory Test

## Composition d'un set (jeu d'images) : 

- Un fichier JSON qui référence les images du set.
- Un répertoire contenant les images référencées.

## Création d'un nouveau set : 

Pour créer un nouveau jeu d'images, suivez les étapes suivantes.

### Créer et stocker les images 
- Créer un répertoire contenant vos images
    - Le nom du répertoire ne doit contenir que des lettres minuscules (pas d'espace, pas de chiffre, pas de caractère spécial)
    - Le répertoire doit contenir au moins 28 images différentes
- Créer le JSON correspondant

### Générer le JSON

Le script "json.php" permet de générer le fichier JSON correspondant à un jeu d'images (SET).

Pour utiliser le script, PHP8 doit être installé sur la machine et accessible en ligne de commande

La commande `php -v` permet de vérifier l'installation et la version de PHP.

*Étapes pour générer le fchier JSON*

- Ouvrir un terminal
- Se positionner dans le répertoire contenant le fichier `json.php`
- Lancer la commande : `php -S localhost:4000`
- Ouvrir un navigateur et entrer l'url : [http://localhost/4000/json.php?d=**repertoire**](http://localhost/4000/json.php?d=repertoire)
    - Remplacer "repertoire" par le nom du dossier contenant votre jeu d'images.
- Le fichier JSON portant le nom du répertoire scanné est généré.
- Le contenu du JSON est affiché à l'écran.
