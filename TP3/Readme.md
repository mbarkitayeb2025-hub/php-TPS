=========================================
TP3 - RÉPONSES AUX QUESTIONS
=========================================

--- Activité 1 : Premier formulaire HTML ---
1. Quel est le rôle de l'attribut name ?
   L'attribut name sert de clé (identifiant) pour la donnée saisie. C'est ce nom qui sera envoyé au serveur PHP pour récupérer la valeur.

2. Pourquoi chaque champ possède-t-il un name différent ?
   Pour que PHP puisse distinguer les données. Si deux champs avaient le même name, la deuxième valeur écraserait la première.

3. Que se passe-t-il lorsqu'on clique sur Envoyer ?
   Le navigateur regroupe les données du formulaire et les envoie au serveur. Par défaut, la méthode utilisée est GET.

4. Quelle URL apparaît dans le navigateur ?
   Les données apparaissent dans l'URL sous la forme : formulaire.php?nom=Dupont&prenom=Ahmed...

--- Activité 2 : Récupérer les données avec $_GET ---
1. Observer l'URL après validation.
   L'URL contient les données saisies, séparées par des "&".

2. Où apparaissent les données ?
   Elles apparaissent dans l'URL (la barre d'adresse du navigateur).

3. Pourquoi la méthode GET permet-elle de voir les données dans l'URL ?
   Parce que GET est conçue pour passer les paramètres via l'URL (query string). C'est utile pour les recherches ou les filtres.

4. Que se passe-t-il si on ouvre directement la page sans envoyer le formulaire ?
   PHP génère une erreur "Undefined array key" car les clés $_GET['nom'] n'existent pas encore.

--- Activité 3 : isset() ---
(Travail demandé) : La page affiche "Veuillez remplir le formulaire." si aucune donnée n'a été envoyée, grâce à la condition if (isset($_GET['nom'])).

--- Activité 4 : GET ou POST ? ---
Tableau comparatif :
- GET : Données dans l'URL / Adapté aux recherches / URL partageable / Données visibles.
- POST : Données dans le corps de la requête / Adapté à l'envoi de données / URL non partageable / Données non visibles.

--- Activité 5 & 6 : Validation ---
(Travail demandé) : Le code vérifie que tous les champs sont remplis (empty) et que l'âge est entre 16 et 40, et la moyenne entre 0 et 20.

--- Activité 7 : Conserver les valeurs saisies ---
Question : Pourquoi utilise-t-on htmlspecialchars() ?
   Pour sécuriser l'affichage. Si un utilisateur tape <script>alert('hack')</script>, htmlspecialchars() va convertir les chevrons (< >) en entités HTML (&lt; &gt;), empêchant ainsi le code malveillant de s'exécuter (faille XSS).

--- Activité 8 : Affichage du résultat ---
(Travail demandé) : Utilisation de la fonction resultat($moyenne) pour afficher "Admis" ou "Ajourné".

--- Activité 9 : Intégration au projet ---
(Travail demandé) : Création de fonctions.php pour centraliser les fonctions communes (comme resultat()).

--- Activité 10 & 11 : Ajouter un étudiant ---
(Travail demandé) : La page ajouter.php utilise POST, valide les données, crée un tableau associatif $etudiant, et sépare bien la logique (haut de page) de l'affichage (bas de page).

--- Activité 12 : Recherche d'un étudiant avec GET ---
Question : Pourquoi GET est-il particulièrement adapté à cette fonctionnalité ?
   Parce que la recherche est une action non destructive (on ne modifie pas les données). L'URL peut être partagée ou mise en favori pour retrouver le résultat de la recherche.

--- Activité 13 : Mini-projet du TP ---
(Travail demandé) : La page index.php propose la liste, l'ajout, et la recherche. Le résultat (Admis/Ajourné) s'affiche automatiquement.

--- Activité 14 : Réflexion ---
1. Différence entre GET et POST ?
   GET passe les données dans l'URL, POST les passe dans le corps de la requête.

2. Quand utiliser GET ?
   Pour les recherches, les filtres, ou quand on veut pouvoir partager le lien.

3. Quand utiliser POST ?
   Pour l'envoi de données sensibles (mots de passe), l'ajout, la modification ou la suppression de données.

4. Pourquoi vérifier isset() ou empty() ?
   isset() permet de vérifier si une variable existe (évite les erreurs). empty() vérifie si elle est vide. On les utilise pour s'assurer que l'utilisateur a bien rempli le formulaire.

5. Pourquoi valider les données reçues par le serveur ?
   Parce que l'utilisateur peut entrer n'importe quoi (ex: âge = 500, moyenne = -5). La validation garantit que les données respectent les règles métier.

6. Pourquoi ne faut-il pas faire confiance aux données envoyées par le navigateur ?
   Parce qu'un utilisateur malveillant peut modifier le code HTML ou envoyer des requêtes directement au serveur sans passer par le formulaire.

7. Quel est le rôle de htmlspecialchars() ?
   Convertir les caractères spéciaux en entités HTML pour éviter les injections de code (XSS).

8. Quelle différence existe entre validation et affichage sécurisé ?
   La validation vérifie que les données sont logiques (ex: âge > 16). L'affichage sécurisé empêche que les données cassent la page ou exécutent du code.

9. Pourquoi séparer les fonctions dans fonctions.php ?
   Pour éviter de répéter le code (principe DRY : Don't Repeat Yourself) et faciliter la maintenance.
=========================================