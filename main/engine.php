<?php 
$DB_NAME='moneyvar_users';
 $DB_USER='moneyvar_user';
 $DB_PASSWORD='P@$$w0rd123';
 $DB_HOST='localhost:3306';
 $conn= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME");
 

if(isset($_POST['login'])) { 
    $u=$_POST['email'];
$p=$_POST['password'];


$toid='a'.$u.$p;
 
    
    	$selr="SELECT * FROM accounts WHERE id='".$toid."'";
$result= $conn->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	$token=$row["token"];
	
  echo "<script type='text/javascript'>alert('Logged in successfully');</script>";

  header("Location: referals.php?tknopqii=".$token);

}}else{
    
  echo "<script type='text/javascript'>alert('Logging failed try again');</script>";
  header("Location: signin.php");

}

  }






if(isset($_POST['signup'])) { 


    $email=$_POST['email'];
   
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $fulname=$fname." ". $lname;
    
   $pas=$_POST['pass'];
    
   $pockid='pocket'.rand();
   $userid='user'.rand();
   $tokenid= 'a'.$email.$pas;
    $date= date("Y-m-d h:i:sa");
   
    $upline=$_POST['upline'];;
    $downline=rand(10000, 99999);

    
$in = "INSERT INTO accounts VALUES ('$tokenid', '$userid', '$fulname', '$email', '$pas', '$upline', '$downline', '0', '0')";

if ($conn->query($in) === TRUE) {
  

  echo "<script type='text/javascript'>alert('Account created in successfully');</script>";

  echo' <script>window.location.replace("https://moneyvarsity.biz/dashboard/main/signup.php?id="'.$upline.');</script>';
}else{echo $conn->error;

  echo "<script type='text/javascript'>alert('Account creation failed');</script>";

 echo' <script>window.location.replace("https://moneyvarsity.biz/dashboard/main/signup.php?id="'.$upline.');</script>';

 
}
}

?>