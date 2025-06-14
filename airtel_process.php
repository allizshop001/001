

“`php
<?php
if (_SERVER["REQUEST_METHOD"] === "POST") {
  phone =_POST["phone"];
  amount =_POST["amount"];

  // Simuler le traitement Airtel (à remplacer par API réelle plus tard)
  echo "<h3>Paiement simulé via Airtel Money</h3>";
  echo "Numéro : " . htmlspecialchars(phone) . "<br>";
  echo "Montant :" . htmlspecialchars($amount) . "<br>";
  echo "<p style='color: green;'>Paiement envoyé avec succès !</p>";
} else {
  echo "Méthode non autorisée.";
}
```

---

Tu veux aussi que je te mette tous ces fichiers dans un `.zip` prêt à télécharger ?
