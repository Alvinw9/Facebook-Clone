<?php 

$fname = "";
$lname = "";
$username = "";
$password = "";
$password2 = "";
$email = "";
$email2 = "";
$date = "";
$dob = "";
$gender = "";
$error_array = array();

if ( isset($_POST['reg_user']) ) {
    
    //First Name 
    $fname = strip_tags($_POST['reg_fname']);
    $fname = str_replace(' ', '', $fname);
    $fname = ucfirst(strtolower($fname));
    $_SESSION['reg_fname'] = $fname;
    
    //Last Name 
    $lname = strip_tags($_POST['reg_lname']);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($lname));
    $_SESSION['reg_lname'] = $lname;
    
    //Username
    $username = strip_tags($_POST['username']);
    $username = str_replace(' ', '', $username);
    $username = ucfirst(strtolower($username));
    $_SESSION['username'] = $username;
    
    //Email
    $email = strip_tags($_POST['reg_email']);
    $email = str_replace(' ', '', $email);
    $email = ucfirst(strtolower($email));
    $_SESSION['reg_email'] = $email;
    
    //Email2
    $email2 = strip_tags($_POST['reg_email2']);
    $email2 = str_replace(' ', '', $email2);
    $email2 = ucfirst(strtolower($email2));
    $_SESSION['reg_email2'] = $email2;
    
    //Password
    $password = strip_tags($_POST['reg_password']);
    $password = str_replace(' ', '', $password);
    $password = ucfirst(strtolower($password));
    $_SESSION['reg_password'] = $password;

    //Password2
    $password2 = strip_tags($_POST['reg_password2']);
    $password2 = str_replace(' ', '', $password2);
    $password2 = ucfirst(strtolower($password2));
    $_SESSION['reg_password2'] = $password2;
    
    //Date of Birth 
    $dob = $_POST['dob'];
    
    //Gender
    $gender = $_POST['gender'];
    
    //Signup Date
    $date = date("Y-m-d");
    
    if( $email == $email2 ){
        
        if( filter_var($email, FILTER_VALIDATE_EMAIL) ){
            
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            
            $e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$email'"); 
            
            $num_rows = mysqli_num_rows($e_check);
            
            if($num_rows > 0){
                array_push($error_array, "Email already in use");
            }
            
        } else{
            array_push($error_array, "Email is invalid format");
        } 
        
    } else{
        array_push($error_array, "Email doesn't match");
    }
    
    $user_check = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
          
    $num_rows = mysqli_num_rows($user_check);
    
    if ( $num_rows > 0 ) {
        array_push($error_array, "Username already in exists");
    }
   
    if ( strlen($username) > 20 || strlen($username) < 2 ) {
        array_push($error_array, "Username must be between 2 and 20");
    } else if ( preg_match('/[^A-Za-z0-9]/', $username) ) {
        array_push($error_array, "Your username can only contain english characters or numbers");
    }
    
}

?>