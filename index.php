<?php
  $paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $badWord = $_GET['badWord'];
    
  $paragraphWithCensorship = str_replace($badWord, '***', $paragraph);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BadWord</title>
</head>
<body>
<form action="index.php" method="get">
Inserisci la parola da censurare: <input type="text" name="badWord"><br>
<input type="submit">
</form>
  <p>Paragrafo originale: <?= $paragraph; ?></p>
  <p>Lunghezza paragrafo originale: <?= strlen($paragraph); ?></p>
  <p>Paragrafo censurato: <?= $paragraphWithCensorship; ?></p>
  <p>Lunghezza paragrafo censurato: <?= strlen($paragraphWithCensorship); ?></p>
</body>
</html>