

```markdown
🛒 Alliz Shop

*Alliz Shop* est une plateforme e-commerce simple permettant de vendre et acheter des produits avec intégration de paiements via *Airtel Money* et *PayPal*. Une commission de 10% est prélevée automatiquement sur chaque transaction.

🚀 Fonctionnalités

- Interface de vente simple (HTML/PHP)
- Paiement par PayPal (intégration JS SDK)
- Paiement Airtel Money (via API locale)
- Commission automatique de 10%
- Déploiement sur Render

📁 Structure du projet

- `index.php` : Page principale avec intégration PayPal
- `commission.php` : Script pour calculer la commission
- `airtel.html` : Formulaire de paiement Airtel
- `airtel_process.php` : Traitement côté serveur Airtel
- `Dockerfile` : Pour héberger le projet PHP sur Render

⚙️ Déploiement Render

*Configuration Render* :

- Runtime : Docker
- Build Command : *(laisser vide)*
- Publish Directory : `./`
- Root Directory : *(laisser vide)*
- Environment Variable :
  - `PAYPAL_CLIENT_ID` : ta clé PayPal

🔐 Paiements

- *PayPal* : via SDK avec `client-id` injecté depuis les variables d'environnement# 001