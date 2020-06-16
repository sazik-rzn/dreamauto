<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?= $description ?>" />
  <meta name="keywords" content="<?= $keywords ?>" />
  <meta name="author" content="<?= $author ?>" />
  <?= $ya_verification_code ?>
  <link rel="icon" href="/upload/favicon.png" />
  <link rel="canonical" href="<?= $site_url ?>" />

  <title><?= $site_name ?> | <?= $title ?></title>

  <!-- Bootstrap core CSS -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous" />

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="ie10-viewport-bug-workaround.css" rel="stylesheet" />

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9
      ]><script src="../../assets/js/ie8-responsive-file-warning.js"></script
    ><![endif]-->
  <script src="ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet" />
</head>

<body>
  <?php require __DIR__ . "/widgets/menu.php" ?>
  <?php require __DIR__ . "/widgets/slider.php" ?>

  <div class="container marketing">
    <?php require __DIR__ . "/widgets/feautures.php" ?>

    <?php require __DIR__ . "/widgets/articles.php" ?>

    <hr class="featurette-divider">

    <?php require __DIR__ . "/widgets/contact.php" ?>
    
    <hr class="featurette-divider">
  </div>

  <?php require __DIR__ . "/widgets/callback.php" ?>

  <script src="jquery-1.12.4.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="ie10-viewport-bug-workaround.js"></script>
  <?= $ya_counter_code ?>
</body>

</html>