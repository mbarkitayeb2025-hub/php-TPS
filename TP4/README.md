



### Activité 1 : 
3. **Comment le serveur peut-il savoir qu'il s'agit du même utilisateur ?** 
   Le protocole HTTP est sans état. Par défaut, le serveur ne peut pas savoir que c'est le même utilisateur, sauf si on utilise un mécanisme comme les sessions ou les cookies
4. **Est-ce que PHP conserve automatiquement les informations entre les deux requêtes ?** 
   Non, PHP ne conserve rien automatiquement d'une page à l'autre. Chaque requête est indépendante.

---

### Activité 3 : 
1. **Où avons-nous créé la variable ?** 
   Dans le fichier `session.php`.
2. **Où avons-nous récupéré la variable ?** 
   Dans le fichier `profil.php`.
3. **Pourquoi `session_start()` est-il nécessaire ?** 
   Il permet de démarrer la session ou de reprendre la session existante pour accéder au tableau `$_SESSION`.
4. **La variable `$_SESSION` est-elle une variable classique ?** 
   Non, c'est une variable superglobale qui persiste d'une page à l'autre tant que la session est active.
5. **Que se passe-t-il si on ferme le navigateur puis qu'on revient sur la page ?** 
   La session se ferme généralement (car le cookie de session est supprimé par défaut à la fermeture du navigateur), donc la variable est perdue.

---

### Activité 5 :
1. **Pourquoi faut-il vérifier l'existence de la variable ?** 
   Pour s'assurer que l'utilisateur est bien connecté avant de lui donner accès à la page.
2. **Que se passe-t-il si l'utilisateur accède directement à la page ?** 
   S'il n'est pas connecté, le message "Accès refusé" s'affiche ou la page refuse de s'exécuter correctement.
3. **Pourquoi cette vérification sera-t-elle importante pour l'authentification ?** 
   Elle permet de protéger les pages d'administration pour interdire l'accès aux visiteurs non connectés.

---

### Activité 6 : 
* **Que se passe-t-il après `session_destroy()` ?** 
   La session en cours est détruite sur le serveur et toutes les variables de session sont effacées. L'utilisateur est alors déconnecté.

---

### Activité 7 :
1. **Où est stocké le cookie ?** 
   Il est stocké directement sur le poste client (dans le navigateur web).
2. **Que représente 3600 ?** 
   C'est la durée de vie du cookie en secondes (ici, 3600 secondes = 1 heure).
3. **Quelle différence existe entre un cookie et une session ?** 
   Une session est stockée sur le serveur (plus sécurisée), tandis qu'un cookie est stocké sur le navigateur de l'utilisateur.
4. **Que se passe-t-il lorsque le cookie expire ?** 
   Le navigateur le supprime automatiquement.

---

### Activité 10 : 
1. **Pourquoi les sessions sont-elles particulièrement adaptées à l'authentification ?** 
   Parce qu'elles sont stockées sur le serveur et sont donc plus sécurisées que les cookies pour garder l'état de connexion de l'utilisateur.
2. **Pourquoi faut-il éviter de stocker des informations sensibles directement dans un cookie ?** 
   Parce que les cookies sont visibles et modifiables par l'utilisateur directement depuis son navigateur.
3. **Peut-on considérer qu'un cookie est totalement sécurisé ?** 
   Non, car il peut être intercepté ou modifié par l'utilisateur.

---

### Activité 12 : 
1. **Que se passe-t-il avec un mauvais identifiant ?** 
   Le script affiche le message "Identifiants incorrects".
2. **Que se passe-t-il avec un mauvais mot de passe ?** 
   Le message "Identifiants incorrects" s'affiche également.
3. **Pourquoi cette solution n'est-elle pas adaptée à une véritable application ?** 
   Parce que les identifiants sont écrits "en dur" dans le code et les mots de passe ne sont pas sécurisés.

---

### Activité 16 :
1. **Le résultat est-il identique à 123456 ?** 
   Non, le résultat est une longue chaîne de caractères aléatoires .
2. **Pourquoi ?** 
   Parce que la fonction `password_hash()` transforme le mot de passe en une empreinte cryptographique sécurisée.
3. **Peut-on retrouver directement le mot de passe à partir du hash ?** 
   Non, le hachage est à sens unique.
4. **Pourquoi ne doit-on jamais stocker les mots de passe en clair ?** 
   Pour éviter qu'en cas de vol de la base de données, tous les comptes des utilisateurs soient immédiatement compromis.

---

### Activité 20 : 
* **Quel est l'intérêt de créer ces fonctions ?** 
   Cela évite de répéter le même code de vérification sur toutes les pages sécurisées du site, ce qui rend le code plus propre et plus facile à maintenir.

---

### Activité 21 : 
* **Pourquoi utiliser `htmlspecialchars()` lors de l'affichage ?** 
   Pour éviter les failles de sécurité de type XSS (Cross-Site Scripting) en transformant les caractères spéciaux HTML en texte inoffensif.

---

### Activité 23 :
1. **Qu'est-ce qu'une session ?** Un moyen de stocker des données temporaires sur le serveur pour un utilisateur précis.
2. **Pourquoi `session_start()` est-il nécessaire ?** Pour démarrer ou reprendre une session.
3. **Quel est l'ôle de `$_SESSION` ?** Un tableau associatif pour stocker les variables de session.
4. **Qu'est-ce qu'un cookie ?** Un petit fichier stocké sur le navigateur de l'utilisateur.
5. **Quelle différence existe entre cookie et session ?** La session est sur le serveur, le cookie est sur le client.
6. **Quel est l'rôle de `$_COOKIE` ?** Récupérer les cookies envoyés par le navigateur.
7. **Pourquoi utilise-t-on `session_destroy()` ?** Pour détruire complètement la session en cours (lors de la déconnexion).
8. **Pourquoi ne faut-il pas stocker les mots de passe en clair ?** Pour des raisons de sécurité en cas de fuite de données.
9. **Quel est l'rôle de `password_hash()` ?** Générer une empreinte sécurisée d'un mot de passe.
10. **Quel est l'rôle de `password_verify()` ?** Vérifier si un mot de passe correspond à son hash.
11. **Pourquoi une page d'administration doit-elle être protégée ?** Pour empêcher les utilisateurs non connectés ou non autorisés d'y accéder.
12. **Pourquoi créer une fonction `protegerPage()` ?** Pour centraliser la vérification de connexion et éviter la duplication de code.
13. **Pourquoi utiliser `htmlspecialchars()` lors de l'affichage de données utilisateur ?** Pour se protéger contre les attaques XSS.