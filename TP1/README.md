# Réponses au TP 1 : Prise en main de PHP

## Activité 1 : Préparation de l'environnement Ubuntu 24.04
**Q1. Quelle version d'Ubuntu est installée sur votre machine ?**
*(Remplacez ceci par la version affichée dans votre terminal, ex: Ubuntu 24.04 LTS)*

**Q2. À quoi sert la commande apt update ?**
Elle met à jour les informations concernant les paquets disponibles, mais n'installe pas automatiquement les nouvelles versions des logiciels[cite: 5].

**Q3. Quelle version de PHP est installée ?**
*(Remplacez ceci par votre version, ex: PHP 8.x.x)*[cite: 6].

**Q4. Que signifie CLI ?**
CLI signifie "Command Line Interface" (Interface en Ligne de Commande)[cite: 6].

**Q5. PHP est-il déjà associé à Apache dans cette installation ?**
Non, dans cette installation nous utilisons le serveur HTTP intégré de PHP destiné au développement local, sans installer Apache[cite: 8].

---

## Activité 4 : Premier programme PHP
**Q1. Quel résultat obtenez-vous (avec php index.php) ?**
Le terminal affiche le texte brut : `Bonjour PHP !`[cite: 8].

**Q2. Quelle différence observez-vous entre php index.php et l'ouverture dans un navigateur ?**
Dans le terminal, le code est exécuté et affiché en texte brut brut sans interprétation visuelle. Dans le navigateur, le rendu visuel est géré par le navigateur web en lisant le code HTML généré.

---

## Activité 5 : Le serveur intégré de PHP
**Q1. Quel est le rôle de localhost ?**
`localhost` représente la machine locale[cite: 19].

**Q2. Que représente le numéro 8000 ?**
C'est le port réseau utilisé ici par le serveur intégré de PHP[cite: 19].

**Q3. Quel programme écoute sur ce port ?**
C'est le serveur HTTP intégré de PHP[cite: 19].

**Q4. Pourquoi le navigateur ne doit-il pas accéder directement au fichier index.php ?**
Si le navigateur accède au fichier directement (comme un fichier local `file://`), le code PHP ne sera pas exécuté. Le navigateur doit passer par le serveur PHP (via `http://localhost:8000`) pour que le script soit interprété et que le HTML soit généré[cite: 4, 9].

**Q5. Que se passe-t-il lorsque vous modifiez index.php puis rechargez la page ?**
Le serveur PHP exécute la nouvelle version du fichier et le navigateur affiche le résultat mis à jour.

---

## Activité 6 : Première page HTML contenant du PHP
**Q. Le code PHP apparaît-il dans le code source envoyé au navigateur ? Expliquez votre réponse.**
Non. Le navigateur reçoit uniquement du HTML généré, car le serveur exécute le script PHP avant de transmettre le contenu[cite: 4, 10].

---

## Activité 8 & 9 : Les variables PHP et Types
**Q1. Faut-il déclarer explicitement le type de $age ?**
Non, le typage est dynamique en PHP. Une variable est simplement déclarée en commençant par le caractère `$`[cite: 11, 19].

**Q2. Que se passe-t-il si on écrit: `$age = "vingt";` ?**
La variable change de type et devient une chaîne de caractères (string).

**Q3. Une variable PHP peut-elle changer de type au cours de l'exécution ?**
Oui.

**Q4. Identifier le type de chaque variable :**
* `$nom` = string (chaîne de caractères)[cite: 12]
* `$age` = integer (entier)[cite: 12]
* `$taille` = double/float (nombre à virgule flottante)[cite: 12]
* `$etudiant` = boolean (booléen)[cite: 12]

---

## Activité 15 : Première interaction avec une page web
**Q1. Que contient $_GET ?**
C'est un tableau contenant les paramètres transmis par la méthode GET via l'URL[cite: 19].

**Q2. Pourquoi utilise-t-on $_GET['nom'] ?**
Pour récupérer spécifiquement la valeur saisie dans le champ du formulaire correspondant au nom[cite: 16].

**Q3. Quel rapport existe entre name="nom" et $_GET['nom'] ?**
L'attribut `name="nom"` dans le formulaire HTML définit la clé qui sera utilisée dans l'URL, et `$_GET['nom']` permet à PHP de récupérer la valeur associée à cette clé[cite: 16].

**Q4. Que se passe-t-il si l'utilisateur ne saisit aucun nom ?**
La variable sera vide, mais la clé existera si le formulaire a été soumis. (La condition `isset` sera vraie, mais le nom affiché sera vide)[cite: 16].

---

## Activité 17 : Comprendre le cycle requête/réponse
**Schéma complété :**
1. Requête HTTP[cite: 18]
2. Exécution du code PHP par le serveur / Interpréteur PHP[cite: 4, 9]
3. HTML généré[cite: 4, 9, 18]
4. Réponse HTTP contenant le HTML envoyé au navigateur

**Q1. Qui exécute le code PHP ?**
Le serveur PHP[cite: 18].

**Q2. Qui interprète le HTML ?**
Le navigateur web[cite: 18].

**Q3. Le navigateur exécute-t-il PHP ?**
Non[cite: 18].

**Q4. Pourquoi PHP est-il qualifié de langage côté serveur ?**
Parce que son exécution pour générer dynamiquement des pages web a lieu entièrement sur le serveur avant l'envoi au client[cite: 18].

**Q5. Quelle est la différence entre le rôle de PHP et celui de JavaScript dans une application web ?**
PHP s'exécute côté serveur pour préparer le contenu (interactions avec la base de données, sécurisation), tandis que JavaScript s'exécute généralement côté client (dans le navigateur) pour l'interactivité de la page.