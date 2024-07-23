# Sets de cartes pour le Memory Test

## Composition d'un set (jeu d'images) : 

- Un fichier JSON qui référence les images du set.
- Un répertoire contenant les images référencées.

## Utilisation d'un set

Soit l'arborescence suivante :
- /index.html
- /main.js
    - data/
        - colors.json
        - colors/
            - black.png
            - blue.png
            - ...

Avec Javascript, charger le JSON en utilisant l'API fetch.

```js
/***** main.js *****/

// Chargement du JSON
const response = await fetch('./data/colors.json');
// conversion du JSON en objet JS 
const json = await response.json(); 
// ajout du chemin vers l'image pour chaque élément
const data = json.map(x => x.path = './data/colors/' + x.name);

console.log(data);
/* Sortie : 
[
    {
        id: 1,
        name: "black.png"
        path: "./data/colors/black.png"
    },
    {
        id: 2,
        name: "blue.png"
        path: "./data/colors/blue.png"
    }
    // ...
]
*/
```

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
