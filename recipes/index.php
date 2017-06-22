<?php include "../setup.php"; ?>
<?php include "../config/recipe-config.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title><?php echo SITE_NAME; ?> | Recipes</title>

  <?php include '../config/csslinks.php'; ?>
  <link rel="stylesheet" type="text/css" href="../css/recipes.css?v=1.1">
</head>
<body>

<?php include "../template/navbar.php"; ?>

<!-- Editor's choice -->
  <div class="jumbotron ed-choice-sec">
  	<div class="img-container"></div>
  	<div class="desc-box">
  		<div class="heading-section">
  			<div class="heading-content-wrapper">
          <h1>Rabdi</h1>
          <h5>Editor's choice</h5>
        </div>
  		</div>
  		<div class="desc-section"><p>A cold sweet dish for cool people</p></div>
  		<div class="btn-section">
        <a href="#" class="btn btn-primary">Learn recipe</a>
      </div>
  	</div>
  </div>

<!-- Recipes section -->
  <div class="container-fluid card-container">
    <div class="row" id="cards">
    <?php foreach ($recipes as $recipe) { ?>
      <?php
      $recipe_id = $recipe["id"];
      $recipe_name = (strlen($recipe["recipe-name"]) > 24)?substr($recipe["recipe-name"],0,23).'...':$recipe["recipe-name"];
      $recipe_author = $recipe["recipe-author"];
      $recipe_img_loc = ($recipe["image-loc"])?'../'.$recipe["image-loc"]:'../img/recipe-placeholder.jpg';
      ?>
      <div class='col-md-3 col-sm-4 col-xs-6 card-wrapper'>
        <div class='card'>
          <div class='img-wrapper'>
            <img src='<?php echo $recipe_img_loc; ?>' alt='<?php echo $recipe_name; ?>' height='100%' width='100%'>
          </div>
          <div class='card-desc'>
            <a class='recipe-name text-capitalize' href='../recipe/?id=<?php echo $recipe_id; ?>'> <?php echo $recipe_name; ?> </a>
            <p class='author-name'>By <?php echo ucwords(strtolower($recipe_author)); ?></p>
            <i class='fa fa-bookmark fa-2x'></i>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>


<!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p>&copy; 2017</p>
    </div>
  </footer>

<!-- Scripts -->
  <script type="text/javascript" src="../vendor/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../vendor/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/nav-bar.js"></script>

</body>
</html>
