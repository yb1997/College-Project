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
        <li id="profile-btn"><a href="../User/" class="text-white"><?php echo $user['name'] ?></a></li>
        <li onclick="sessionLogout()" id="logout-btn"><?php echo 'Log out'; ?></li>
        <?php } else { ?>
        <li data-toggle="modal" data-target="#login-modal"><?php echo 'Log in'; ?></li>
        <?php } ?>
        <li>About Us</li>

        <form action="login.php">
          <input type="hidden">
        </form>
      </ul>
    </div>
  </header>
  <div id="side-navbar">
    <i class="fa fa-times fa-2x nav-toggle" aria-hidden="true"></i>
    <ul>
      <li><a href="../">Home</a></li>
      <li><a href="../recipes/">Recipes</a></li>
      <li><a href="../about/">About Us</a></li>
    </ul>
  </div>
</nav>

<!-- Log in modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="loginmodal-container">
        <h1>Login to Your Account</h1><br>
        <form method="post" action="<?php echo '../config/login.php'; ?>">
          <input type="text" name="usr-name" placeholder="Username">
          <input type="password" name="usr-pwd" placeholder="Password">
          <input type="submit" name="login" class="login loginmodal-submit" value="Login" id="login-btn">
        </form>
        
        <div class="login-help">
          <a href="../Signup/">Sign up</a> - <a href="#">Forgot Password</a>
        </div>
      </div>
    </div>
  </div>

<script>
  function sessionLogout() {
    var http = new XMLHttpRequest();
    var url = "../config/login.php";
    var params = "log-out=yes";
    http.open("POST", url, true);

    //Send the proper header information along with the request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(params);
    location.reload();
  }
</script>
