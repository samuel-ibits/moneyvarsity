<?php 
$DB_NAME='moneyvar_users';
 $DB_USER='moneyvar_user';
 $DB_PASSWORD='P@$$w0rd123';
 $DB_HOST='localhost:3306';
 $conn= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME");
 

if(isset($_POST['login'])) { 
    $u=$_POST['email'];
$p=$_POST['password'];



 
    
    	$selr="SELECT * FROM users WHERE phone like '%{$u}%'";
$result= $conn->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	
	
	$t= $row["phone"];

	
}}else{
    $selr="SELECT * FROM users WHERE uname like '%{$u}%'";
$result= $conn->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	
	
	$t= $row["phone"];

	
}}
    
}
$toid='a'.$t.$p;


$sel= "SELECT * FROM users WHERE id='".$toid."'";
$result= $conn->query($sel);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){

  

$userid=$row["userid"];
$phone= $row["phone"];
$uname= $row["uname"];
$password= $row["password"];
$tokid='a'.$phone.$password;
$tokid2='a'.$uname.$password;	
If($toid==$tokid or $toid==$tokid2){
    $f=$userid;

	
echo "<script type='text/javascript'>alert('Logged in successfully');</script>";

}

}}

  }






if(isset($_POST['signup'])) { 


    $email=$_POST['email'];
   
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $fulname=$fname." ". $lname;
    
   echo $pas=$_POST['pass'];
    
   $pockid='pocket'.rand();
   $userid='user'.rand();
   $tokenid= 'a'.$email.$pass;
    $date= date("Y-m-d h:i:sa");
   
    $upline=$_POST['upline'];;
    $downline=rand(10000, 99999);

    
$in = "INSERT INTO accounts VALUES ('$tokenid', '$userid', '$fulname', '$email', '$pas', '$upline', '$downline', '0', '0')";

if ($conn->query($in) === TRUE) { echo'true';}else{echo $conn->error;}

}
 
   

?>