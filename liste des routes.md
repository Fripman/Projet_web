# Page de connexion :
- ## URL : /login

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|✅|✅|✅|

Actions sur la base de données :
- Authentifier : /api/v1/authenticate
- Se déconnecter : /api/v1/logout

# Page de recherche :
- ## URL : /

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|✅|✅|✅|

Actions sur la base de données :
- Rechercher une entreprise /api/v1/companies (get)
- Consulter les stats des entreprises /api/v1/companies (get)
- Rechercher une offre /api/v1/offers (get)
- Consulter les stats des offres /api/v1/offers (get)
- Ajouter une offre à la wish-list /api/v1/accounts/wishlists (post)
- Retirer une offre à la wish-list /api/v1/accounts/wishlists (delete)

# Gestion des offres :
- ## URL : /gestion-offers

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|❌|✅|✅|

Actions sur la base de données :
- Créer une offre /api/v1/offers (post)
- Modifier une offre /api/v1/offers (patch)
- Supprimer une offre /api/v1/offers (delete)

# Gestion de mes candidatures :
- ## URL : /my-applies

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|✅|❌|✅|

Actions sur la base de données :
- Créer une offre /api/v1/offers (post)
- Modifier une offre /api/v1/offers (patch)
- Supprimer une offre /api/v1/offers (delete)

# Gestion des candidatures :
- ## URL : /gestion-applies

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|❌|✅|✅|

Actions sur la base de données :
- Consulter les stats des étudiants /api/v1/accounts (get)
- Informer le système de l'avancement de la candidature step 1 (get) (delete)

# Créer un compte :
- ## URL : /create-account

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|❌|✅|✅|

Actions sur la base de données :
- Créer un compte étudiant /api/v1/accounts (post)
- Créer un compte pilote /api/v1/accounts (post)

# Afficher un profil :
- ## URL : /profil/id || /profil/me

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|✅|✅|✅|

Actions sur la base de données :
- Modifier un compte étudiant /api/v1/accounts (patch)
- Supprimer un compte étudiant /api/v1/accounts (delete)
- Modifier un compte pilote /api/v1/accounts (patch)
- Supprimer un compte pilote /api/v1/accounts (delete)

# Gestion des comptes :
- ## URL : /gestion-accounts

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|❌|✅|✅|

Actions sur la base de données :
- Rechercher un compte étudiant /api/v1/accounts (get)
- Consulter les stats des étudiants /api/v1/accounts (get)
- Rechercher un compte pilote /api/v1/accounts (get)

# Gestion des comptes :
- ## URL : /gestion-companies

||Etudiant|Tuteur|Admin|
|:-|:-:|:-:|:-:|
|A accès|❌|✅|✅|

Actions sur la base de données :
- Créer une entreprise /api/v1/companies (post)
- Modifier une entreprise /api/v1/accounts (patch)
- Évaluer une entreprise /api/v1/accounts (patch)
- Supprimer une entreprise /api/v1/accounts (delete)
- Consulter les stats des entreprises /api/v1/accounts (get)