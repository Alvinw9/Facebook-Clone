<? php

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
    
    // first name
    $fname = strip_tags($_POST['reg_fname']);
    $fname = str_replace(' ', '', $fname);
    $fname = ucfirst(strtolower($fname));
    $_SESSION['reg_fname'] = $fname;
    
    // last name
    $lname = strip_tags($_POST['reg_lname']);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($flame));
    $_SESSION['reg_lname'] = $lname;
    
    // username
    $username = strip_tags($_POST['username']);
    $username = str_replace(' ', '', $username);
    $username = ucfirst(strtolower($username));
    $_SESSION['username'] = $username;
    
    // email
    $email = strip_tags($_POST['reg_email']);
    $email = str_replace(' ', '', $email);
    $email = ucfirst(strtolower($email));
    $_SESSION['reg_email'] = $email;
    
    // email2
    $email2 = strip_tags($_POST['reg_email2']);
    $email2 = str_replace(' ', '', $email2);
    $email2 = ucfirst(strtolower($email2));
    $_SESSION['reg_email2'] = $email2;
    
    // password
    $password = strip_tags($_POST['password']);
    $password = str_replace(' ', '', $password);
    $password = ucfirst(strtolower($password));
    $_SESSION['password'] = $password;
    
    // password2
    $password2 = strip_tags($_POST['password2']);
    $password2 = str_replace(' ', '', $password2);
    $password2 = ucfirst(strtolower($password2));
    $_SESSION['password2'] = $password2;
    
    // date of birth
    $dob = $_POST['dob'];
    
    // gener
    $gender = &_POST['gender'];
    
    // signup date
    $date = date("Y-m-d");
    
}
    
?>