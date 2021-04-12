<?php

$mysqli = new mysqli('localhost:3306','root','password','employee_self_service');
//mysqli_connect("localhost","root","");
//mysqli_select_db("employee_self_service");

//if(isset($_POST['username'])){
    //$username = $_POST['username'];
  //  $password = $_POST['password'];
    //$sql = " select * from user where username='".$username."' AND password = '".$password."' limit 1 ";
   // $result = mysqli_query($sql);
   // if (mysqli_num_rows($result)==1 ){
   //     echo "You have Successfully login";
   //     exit();
   // }else{
  //      echo"You have Entered Incorect Password";
  //      exit();
 ///   }
//
//}

//$username = $_POST['username'];
//$password = $_POST['password'];


//$username = stripcslashes($username);
//$password = stripcslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

//mysql_connect("localhost", "root", "");
//mysql_select_db("employee_self_service");

//$result = mysql_query("select * from user where username = '$username' and password='$password'") 
//or die("failed to query database".mysql_error());
//$row = mysql_fetch_array($result);
//if($row['username'] == $username && $row['password'] == $password){
//--echo "Login Sucess Welcome".$row['username'];
//}else{
 //   echo "Failed to login";
//}--

?>