<?php    
    
include "connection.php";  

if(isset($_POST['submit'])) {
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $lname=$_POST['lname'];
  $pwd=$_POST['pwd'];
  $cnf=$_POST['cnf'];
  $mail=$_POST['mail'];
  $number=$_POST['number'];
  $sex=$_POST['sex'];
  $address=$_POST['address'];
  $code=$_POST['code'];
  $city=$_POST['city'];
  $country=$_POST['country'];
  $skills=$_POST['skills'];
  $std=$_POST['std'];
  $sup=$_POST['sup'];
  $don=$_POST['don'];
  $cont1==$_POST['cont1'];
  $cont2=$_POST['cont2'];	
  $cont3=$_POST['cont3'];
  $agree=$_POST['agree'];
 $query = "INSERT INTO registration (fname, mname, lname, pwd, cnf, mail, number, sex, address, code, city, country, skills, std, sup, don, cont1, cont2, cont3, agree)
  VALUES ('$fname', '$mname', '$lname',  '$pwd',  '$cnf',  '$mail',  '$number',  '$sex',  '$address',  '$code',  '$city',  '$country',  '$skills',  '$std', '$sup', '$don', '$cont1', '$cont2', '$cont3', '$agree')";

if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred when submitting your review.');
    } else {
      echo "Thanks for Registering";
    }

}
?>
