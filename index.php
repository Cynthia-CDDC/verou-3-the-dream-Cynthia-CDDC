<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream</title>
</head>
<body>
<?php
    // var_dump($_POST);
    $currencyNOK = $_POST["country"];

    function convertToEuro($currencyNOK) 
    {
      $euro = 0.0989;
      return $result = $euro * $currencyNOK;
    }
  ?>

<form action="" method="post">
  <label for="country">Norway: NOK</label><br>
  <input type="text" id="country" name="country"><br>
  <p>Result: € <?php echo convertToEuro($currencyNOK); ?></p>
  <input type="submit" value="Submit">
</form>

</body>
</html>