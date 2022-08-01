<?php include("../connect.php");
session_start();

 $u=$_GET['email'] ;
 
 
 
      $selr="SELECT * FROM users WHERE email like '%{$u}%'";
$result= $conn->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	
	
	$toid= $row["id"];

	
}}
 


$sel= "SELECT * FROM users WHERE id='".$toid."'";
$result= $conn->query($sel);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){

  

$userid=$row["userid"];


	$_SESSION['dormuserid']="$userid";
	
		$date= date("Y-m-d h:i:sa");
	 $iiin = "INSERT INTO login (id, userid, date, page) VALUES ( '', '$userid', '$date', 'logingmail')";
if ($conn17->query($iiin)==true) { }else{echo $conn17->error;}
	

echo "<script type='text/javascript'>alert('Logged in successfully');</script>";
//  include("robotupdate.php");
 
header("Location:https://dorm.com.ng/v2/dm/html/studytools.php");




}}else{
$ale2 = "Login failed.Email not registered";
echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
header("Location:https://dorm.com.ng");



}
 
?>