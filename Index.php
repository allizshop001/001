// Exemple de produit
  $product_name = "Chaussures Alliz";
  $price = 50.00; // en dollars
  $commission = $price * 0.10;
  $final_price = $price + $commission;
  $paypal_client_id = getenv('PAYPAL_CLIENT_ID');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Alliz Shop - Achat</title>
  <script src="https://www.paypal.com/sdk/js?client-id=<?= $paypal_client_id ?>&currency=USD"></script>
</head>
<body>
  <h1><?= htmlspecialchars($product_name) ?></h1>
  <p>Prix : <?= number_format($price, 2) ?> $</p>
  <p>Commission (10%) : <?= number_format($commission, 2) ?> $</p>
  <p><strong>Total à pa

  