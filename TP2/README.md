### Activité 1 - Premier tableau PHP
1. **Combien d'éléments contient le tableau ?** Il contient 4 éléments[cite: 23].
2. **Quel est l'indice du premier élément ?** L'indice du premier élément est 0[cite: 23].
3. **Quel est l'indice du dernier élément ?** L'indice du dernier élément est 3[cite: 23].
4. **Que produit `echo $etudiants[2];` ?** Cela affiche "Nour" à l'écran[cite: 23].
5. **Que se passe-t-il avec `$etudiants[4]` ?** Cela génère un avertissement "Undefined array key" car l'indice 4 n'existe pas (le tableau s'arrête à 3)[cite: 23].

### Activité 2 - Parcourir avec for
1. **Quel est le rôle de `count()` ?** Elle compte et retourne le nombre total d'éléments présents dans le tableau[cite: 23].
2. **Pourquoi utilise-t-on `<` et non `<=` ?** Parce que les indices commencent à 0 ; un tableau de 4 éléments se termine à l'indice 3, donc la boucle doit s'arrêter avant d'atteindre 4[cite: 23].
3. **Pourquoi ne pas écrire directement 4 ?** Pour rendre le code dynamique afin qu'il s'adapte automatiquement si on ajoute ou retire des étudiants du tableau plus tard[cite: 23].

### Activité 3 - Parcourir avec foreach
* **Dans quels cas `foreach` est-il plus pratique que `for` ?** Il est plus pratique lorsqu'on veut simplement lire tous les éléments d'un tableau sans avoir besoin de manipuler manuellement un compteur numérique[cite: 24].

### Activité 9 - Première fonction
1. **Quel est le rôle du paramètre ?** Il permet de transmettre une donnée externe à la fonction pour qu'elle puisse être utilisée dynamiquement à l'intérieur de celle-ci[cite: 27].
2. **Pourquoi une fonction évite-t-elle de répéter du code ?** Elle regroupe un bloc d'instructions sous un même nom, ce qui permet de l'exécuter plusieurs fois depuis différents endroits sans avoir à faire de copier-coller[cite: 27].

### Activité 10 - Fonction avec return
* **Quelle est la différence entre une fonction qui utilise `echo` et une fonction qui utilise `return` ?** `echo` affiche immédiatement le texte sur la page web, tandis que `return` renvoie la valeur calculée au script pour qu'elle puisse être stockée dans une variable et réutilisée[cite: 28].

### Activité 14 - Moyenne de la classe
1. **Combien de paramètres possède la fonction ?** La fonction possède 1 paramètre[cite: 30].
2. **Que représente `$etudiants` ?** Il représente le tableau contenant les données de tous les étudiants[cite: 30].
3. **Pourquoi utilise-t-on `foreach` ?** Pour parcourir facilement la liste des étudiants, accéder à la moyenne de chacun, et l'ajouter à la somme totale[cite: 30].
4. **Que retourne la fonction ?** Elle retourne la moyenne générale calculée pour toute la classe[cite: 30].

### Activité 18 - Séparer les fonctions
1. **Pourquoi séparer les fonctions ?** Cela permet de garder le code principal propre et de pouvoir réutiliser ces mêmes fonctions dans plusieurs pages web différentes[cite: 32].
2. **Que fait `require_once` ?** Il importe le code du fichier spécifié et s'assure qu'il n'est chargé qu'une seule fois, ce qui évite les erreurs si on essaie de déclarer la même fonction deux fois[cite: 32].
3. **Pourquoi utilise-t-on `../` ?** Cela indique au serveur de remonter d'un dossier dans l'arborescence (du dossier `exercices/` vers `tp02-php/`) pour trouver le fichier `fonctions.php`[cite: 32].

---

### 21. Questions de réflexion
1. **Pourquoi utiliser un tableau plutôt que `$etudiant1`, `$etudiant2`, etc. ?** Les tableaux permettent de regrouper de nombreuses données similaires sous une seule variable, ce qui rend possible leur traitement avec des boucles dynamiques au lieu de manipuler des dizaines de variables séparées[cite: 34, 35].
2. **Quelle différence entre `$etudiants[0]` et `$etudiant["nom"]` ?** `$etudiants[0]` utilise un indice numérique (tableau indexé), alors que `$etudiant["nom"]` utilise une clé textuelle explicite pour accéder à une valeur précise (tableau associatif)[cite: 34, 35].
3. **Pourquoi une fonction améliore-t-elle la réutilisation du code ?** Elle centralise la logique : si on a besoin de modifier ou de corriger un comportement, il suffit de le faire à un seul endroit dans la fonction[cite: 34, 35].
4. **Quelle différence entre `echo` et `return` ?** `echo` sert uniquement à l'affichage direct, tandis que `return` transmet la donnée au code principal pour d'autres traitements éventuels[cite: 34, 35].
5. **Pourquoi séparer les fonctions dans un fichier ?** Cela permet de partager le même fichier de fonctions entre plusieurs pages de l'application sans dupliquer le code source partout[cite: 34, 35].