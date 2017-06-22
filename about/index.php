<?php include "../setup.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITE_NAME; ?> | About</title>
	
  <?php include '../config/csslinks.php'; ?>
  <link rel="stylesheet" href="../css/about.css">
</head>
<body>
	<?php include "../template/navbar.php"; ?>

  <div class="jumbotron">
    <img src="../img/profile-bg.jpg" alt="background-image"/>
  </div>
  
  <div class="container img-container text-center">
    <div class="img-wrapper center-block">
      <img src="../img/pp.jpg" alt="profile pic" id="ppic" height="200px" width="200px">
    </div>
    <div class="wrapper">
      <h1>Yogender Bisht</h1>
      <a href="//plus.google.com/u/0/115462702180283438654?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;">
        <img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" style="border:0;width:32px;height:32px;"/>
      </a>
      <h3 class="text-left">
        I like to sit and code for hours, recently I have been into frontend area and learned languages HTML5, CSS3, JS5
        <br>
        <br>
        I have learned following languages
        <ul>
          <li>Java</li>
          <li>C++</li>
          <li>MySQL</li>
          <li>Intermiadiate level PHP</li>
          <li>HTML5</li>
          <li>CSS3</li>
          <li>JS5</li>
          <li>Bootstrap</li>
          <li>JQuery</li>
        </ul>
        <br>
        After completing frontend, I'll learn backend.
        I'm looking forward for learning app developmentn also.
      </h3>
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