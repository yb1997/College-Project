<?php include "setup.php"; ?>
<?php include "config/popular-recipes.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
  <meta name="author" content="Yogender Bisht">
  <meta name="description" content="Find best recipes for your health and Cooking tips and tricks">
  <title><?php echo SITE_NAME; ?> | Home</title>
  
  <link rel="icon" href="favicon.ico">

  <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css?v=1.0">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css?v=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/index.css?v=1.1">
  
</head>

<body>
<!--     <header class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Food Paradise</h1>
            <hr>
          </div>
        </div>
      </div>
    </header>

    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <div class="container">
            <ul class="nav navbar-nav">
              <li><a href="#">Recipes</a></li>
              <li><a href="#">Holidays and Events</a></li>
              <li><a href="#">Tips and Tricks</a></li>
              <li><a href="#">About Us</a></li>
            </ul>
            <ul class="nav navbar-right">
              <li><a href="#">Log in</a></li>
            </ul>
          </div>
        </div>
    </nav> -->

  <!-- Navigation Bar with header-->
<?php 
  if (isset($_POST['usr-name'],$_POST['usr-pwd'])) {
    $usr_name = ($_POST['usr-name'])?$_POST['usr-name']:'guest';
    $usr_pwd = ($_POST['usr-pwd'])?$_POST['usr-pwd']:'password';
    
  }


?>
<nav>
  <header>
    <i class="fa fa-bars fa-2x nav-toggle" aria-hidden="true"></i>
    <span id="nav-brand">Food Paradise</span>
    <div class="nav-menu-icon">
      <i class="fa fa-ellipsis-v fa-2x" aria-hidden="true"></i>
    </div>
    <div class="nav-menu">
      <ul>
        <?php if (isset($_SESSION['usr-id'])) {
          $user_id = $_SESSION['usr-id'];
          $q = "SELECT * FROM `user` WHERE `id` = $user_id";
          $r = mysqli_query($conn,$q);
          $user = mysqli_fetch_assoc($r);
        ?>
        <li id="profile-btn"><?php echo $user['name'] ?></li>
        <li onclick="sessionLogout()" id="logout-btn"><?php echo 'Log out'; ?></li>
        <?php } else { ?>
        <li data-toggle="modal" data-target="#login-modal"><?php echo 'Log in'; ?></li>
        <?php } ?>
        <li>About Us</li>
      </ul>
    </div>
  </header>
  <div id="side-navbar">
    <i class="fa fa-times fa-2x nav-toggle" aria-hidden="true"></i>
    <ul>
      <li><a href="/College-Project/">Home</a></li>
      <li><a href="recipes/">Recipes</a></li>
      <li><a href="about/">About Us</a></li>
    </ul>
  </div>
</nav>

<!-- Log in modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="loginmodal-container">
        <h1>Login to Your Account</h1><br>
        <form method="post" action="<?php echo 'config/login.php'; ?>">
          <input type="text" name="usr-name" placeholder="Username">
          <input type="password" name="usr-pwd" placeholder="Password">
          <input type="submit" name="login" class="login loginmodal-submit" value="Login">
        </form>
        
        <div class="login-help">
          <a href="Signup/">Sign up</a> - <a href="#">Forgot Password</a>
        </div>
      </div>
    </div>
  </div>

<!--   <pre style="padding: 5px;margin: 0;z-index: 15;position: fixed;top: 60px;left: 100px;">PHP console
  </pre> -->

<!-- Recipe of the week -->
  <div class="main-header">
    <!-- <p class="">Recipe of the week</p> -->
    <div class="recipe-img"></div>
    <div class="desc-box">
      <h1 class="text-center">Welcome</h1>
      <p class="text-center">You can find all types of recipes here, enjoy !!</p>
    </div>
  </div>


<!-- ***************** Search section ***************************** -->
  <div class="container-fluid text-center search-section">
    <h1>Find a Recipe</h1>
    <div class="search-field">
      <input type="search" name="search-control"><i class="fa fa-search fa-2x" aria-hidden="true"></i><!-- put icon inside submit button -->
    </div>
  </div>

<!-- Carousel
  ================================================== -->
  <div class="container-fluid carousel-wrapper">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/recipes/golgappa-big-op1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Golgappa</h1>
              <p><a class="btn btn-sm btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/recipes/rasmalai-big-op1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Ras Malaai</h1>
              <p><a class="btn btn-sm btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/recipes/jalebi-big-op1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Jalebi</h1>
              <p><a class="btn btn-sm btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <!-- <i class="fa fa-angle-left fa-3x" aria-hidden="true" style="line-height: 400px;"></i> -->
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <!-- <i class="fa fa-angle-right fa-3x" aria-hidden="true" style="line-height: 400px;"></i> -->
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


<!-- Popular Section -->

  <div class="popular-section-heading text-center">
    <h1>Popular Recipes</h1>
  </div>

  <div class="container-fluid card-container">
    <div class="row" id="cards">
      <?php foreach ($pop_rec_rows as $pop_rec_row) {
        $recipe_id = $pop_rec_row["id"];
        $recipe_name = (strlen($pop_rec_row["recipe-name"]) > 24)?substr($pop_rec_row["recipe-name"],0,23).'...':$pop_rec_row["recipe-name"];
        $recipe_author = $pop_rec_row["recipe-author"];
        $recipe_img_loc = ($pop_rec_row["image-loc"])?$pop_rec_row["image-loc"]:'img/recipe-placeholder.jpg';
      ?>
        <div class='col-md-3 col-sm-4 col-xs-6 card-wrapper'>
          <div class='card'>
            <div class='img-wrapper'>
              <img src= <?php echo '"'.$recipe_img_loc.'"'; ?> alt='<?php echo $recipe_name; ?>' height='100%' width='100%'>
            </div>
            <div class='card-desc'>
              <a class='recipe-name text-capitalize' href=<?php echo "'recipe/?id=".$recipe_id."'"; ?> > <?php echo $recipe_name; ?> </a>
              <p class='author-name'>By <?php echo $recipe_author; ?></p>
              <i class='fa fa-bookmark fa-2x'></i>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div><!-- End popular section -->

<!-- Newsletter -->
  <div class="container-fluid newsletter">
    <div class="newsletter-main">
      <h2>Get Our Newsletter</h2>
      <h5>We promise no spamming !</h5>
      <form class="form-inline" action="index.html" method="post">
        <div class="form-group">
          <input type="email" name="email" placeholder="Your Email" class="form-control">
          <button type="submit" name="submit-mail" class="btn btn-primary">Sign Up</button>
        </div>
      </form>
      <div class="newsletter-links">
        <a href="#"><i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>



<!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <p>&copy; 2017</p>
    </div>
  </footer>


<!-- Scripts -->
  <script type="text/javascript" src="vendor/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="vendor/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/nav-bar.js"></script>
  <script type="text/javascript" src="js/home-js.js"></script>
  <script>
    function sessionLogout() {
      var http = new XMLHttpRequest();
      var url = "config/login.php";
      var params = "log-out=yes";
      http.open("POST", url, true);

      //Send the proper header information along with the request
      http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      http.send(params);
      location.reload();
    }
  </script>
</body>
</html>
