<?php
// submit user data
require 'config.php';



if ($_SERVER['REQUEST_METHOD'] === "POST") {
   $empFirstName = $_POST['name'];
   $empMidName = $_POST['midname'];
   $empLastName = $_POST['lastname'];
   $empLastName2 = $_POST['seclastname'];
   $empUserName = $_POST['username'];
   $empPassword = $_POST['password'];
   $empPwdConfirm = $_POST['pwdconfirm'];
   
   
   // check required fields
   // name , lastname, username, username, password, pwdconfirm
   echo "---- :";
   print_r($_POST);
   echo " MidName : ". $_REQUEST["midname"];
   echo $empFirstName;
   var_dump($_POST);
   // check to see if password and pwdconfirm match
   
   // hidden fields -- company id  *--Todo must get this from session. -- default is 1
   // employee type -- default is USER
   
   
   //    
}
echo 'wtf!';
?>