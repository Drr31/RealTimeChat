# Mini Chat PHP – Application de messagerie simple avec PDO 💬

Ce projet est une application de **chat minimaliste** développée en **PHP** avec une base de données **MySQL**, utilisant **PDO** pour gérer les échanges de manière sécurisée. Il permet à un utilisateur de saisir un pseudo et un message, puis de voir s’afficher les derniers messages envoyés.

## 📄 Fonctionnalités

- Connexion sécurisée à la base de données via **PDO**
- Insertion de nouveaux messages avec pseudo
- Affichage des **10 derniers messages** dans l’ordre chronologique
- Mise à jour dynamique possible (via rechargement ou `setInterval`)
- Interface HTML simple et responsive

## 📁 Structure du projet

mini-chat-php/
├── index.html # Formulaire pour envoyer un message
├── envoyer.php # Traitement de l'envoi (insertion PDO)
├── dire.php # Affichage des messages depuis la BDD
├── css/
│ └── style.css # Mise en forme de l’interface (optionnelle)
├── js/
│ └── script.js # Mise à jour automatique (optionnelle)
└── sql/
└── chat.sql # Script de création de la table


## 🛠️ Technologies utilisées

- **PHP 7+**
- **MySQL / MariaDB**
- **PDO** pour les connexions et requêtes SQL
- **HTML/CSS/JS** (structure et mise à jour dynamique optionnelle)

## 🗃️ Exemple de base de données

```sql
CREATE TABLE chat (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pseudo VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  date_envoi DATETIME DEFAULT CURRENT_TIMESTAMP
);


⚙️ Lancement local
Importer le fichier chat.sql dans votre base de données

Modifier les identifiants de connexion dans dire.php et envoyer.php si nécessaire :

$bdd = new PDO('mysql:host=localhost;dbname=nom_de_la_bdd;charset=utf8', 'utilisateur', 'motdepasse');
Placer les fichiers dans un dossier accessible par un serveur local (Apache, XAMPP, MAMP, etc.)

✍️ Auteur
Rochdi Dardor
Étudiant en informatique / MMI
Projet de messagerie instantanée simple en PHP avec base de données

