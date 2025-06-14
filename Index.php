

```php
<?php
  // Exemple de produit
  product_name = "Chaussures Alliz";price = 50.00; // en dollars
  commission =price * 0.10;
  final_price =price + commission;paypal_client_id = getenv('PAYPAL_CLIENT_ID');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Alliz Shop - Achat</title>
  <script src="https://www.paypal.com/sdk/js?client-id=<?= paypal_client_id ?>   currency=USD"></script>
</head>
<body>
  <h1><?=product_name ?></h1>
  <p>Prix : <?= number_format(price, 2) ?></p>
  <p>Commission (10%) : <?= number_format(commission, 2) ?></p>
  <p><strong>Total à payer : <?= number_format(final_price, 2) ?></strong></p>

  <div id="paypal-button-container"></div>

  <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [{
            description: "<?= product_name ?>",
            amount: 
              value: '<?= number_format(final_price, 2) ?>'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {alert('Paiement effectué avec succès par ' + details.payer.name.given_name + ' !');
        });
      }
    }).render('#paypal-button-container');
  </script>
</body>
  </html>
'''
