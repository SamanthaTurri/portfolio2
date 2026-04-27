<?php require_once 'inc/progress.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/comeau-reset.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/page.css">
  <link rel="stylesheet" href="css/modals.css">
  <title>Samantha Turri | Web Strategist & Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script type="module" src="js/modals.js"></script>
</head>
<body class="debug">
  <pre class="session-debug"><?php // print_r($_SESSION); ?></pre> // TODO
  <div id="wrapper">
  <?php require_once 'inc/nav.php'; ?>
  </div>
  <?php require_once 'modals/enterprise.php'; ?>
  <?php require_once 'modals/agency.php'; ?>
</body>
</html>


