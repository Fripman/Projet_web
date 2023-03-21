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
|A accès|❌|✅|✅|

Actions sur la base de données :
- Créer une offre /api/v1/offers (post)
- Modifier une offre /api/v1/offers (patch)
- Supprimer une offre /api/v1/offers (delete)