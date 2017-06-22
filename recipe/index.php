<?php include "../setup.php" ?>
<?php include "../config/recipe-config.php"; ?>
<?php
  $id = 1;

  if (isset($_GET["id"])) {
    $id = $_GET["id"];
  }

  $q = "SELECT * FROM `recipe` WHERE `recipe-name` = '". $id . "'";
  $r = mysqli_query($conn,$q) or die("query failed !");
  $recipe = mysqli_fetch_assoc($r);

  if (!isset($_GET["id"])) {
    header("Location: ../index.php");
  } else {
    $found = false;
  }
  foreach ($recipes as $recipe) {
    if ($_GET["id"] == $recipe["id"]) {
      $found = true;
      break;
    }
  }
  if (!$found) {
    header("Location: ../index.php");
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <title><?php echo SITE_NAME." | ".$recipe["recipe-name"] ?></title>

  <?php include '../config/csslinks.php'; ?>
  <link rel="stylesheet" type="text/css" href="../css/recipe.css?v=1.1">
</head>
<body>

  <?php include "../template/navbar.php"; ?>

<!-- for debugging purposes only -->
<!--   <pre>
    <h2>PHP Console</h2>
  </pre> -->
<!-- ########################### -->

  <div class="container">
    <h1 class="recipe-name"><?php echo $recipe["recipe-name"]; ?></h1>
    <hr>
    <h4 id="recipe-author"><?php echo ucwords(strtolower($recipe["recipe-author"])); ?></h4>

    <div class="row rec-overview">
      <div class="col-md-6 col-xs-12">
        <img class="img-responsive" src="<?php echo '../'.$recipe["image-loc"]; ?>" alt="<?php echo $recipe["recipe-name"]; ?>">
      </div>
      <div class="col-md-6 col-xs-12 rec-summary-wrap text-white">
        <p class="rec-summary"><?php echo $recipe["recipe-summary"]; ?></p>
      </div>
    </div>

    <hr>
    
    <div class="row rec-instructions">
      <div class="col-sm-4 ingre-sec">
        <h4>INGREDIENTS</h4>
        <ul class="ingre-list">
          <?php echo $recipe["ingredients"]; ?>
        </ul>
      </div>
      <div class="col-sm-8 rec-steps-sec">
        <h4>PREPARATION</h4>
        <ul class="recipe-steps">
          <?php echo $recipe["steps"] ?>
        </ul>
      </div>
    </div>

  </div>

<!-- Footer -->
  <footer>
    <p>&copy; 2017</p>
  </footer>

<!-- Scripts -->
  <script type="text/javascript" src="../vendor/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../vendor/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/nav-bar.js"></script>

</body>
</html>
