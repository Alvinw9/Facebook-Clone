<?php include 'database/config.php';

if(isset($_SESSION['username'])){
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
}
else{
    header("Location: register.php");
}

?>


<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<div class="header_bar">
  <div class="nav-center">
      <div class="dropdown"><?php echo "Hello";?>
        <span><img src="<?php echo $user['profile_pic']; ?>"></span>
        <div class="dropdown-content">
            <div class="dropdown-a">
                <h5><a href="<?php echo $userLoggedIn; ?>">
                       <?php echo $user ['username']?></a></h5>
                <hr>
                
                <a href="requests.php">Requests</a>
                
                <hr>
                
                <a href="account_settings.php">Settings</a><br><br>
                <a href="includes/handlers/logout.php">Logout</a>
            </div>
        </div> 
        <?php echo $user['first_name']; ?><?php echo "!";?> 
        
      </div>
  </div>
   
</div>

