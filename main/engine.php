<?php include'connect.php';
 


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
    
   $pas=$_POST['password'];
   $repass=$_POST['confirmpassword'];
   if ($pas==$repass AND $err==""){$pass=$_POST['pass'];	$err2="";
    
   $pockid='pocket'.rand();
   $userid='user'.rand();
   $tokenid= 'a'.$phone.$pass;
    $date= date("Y-m-d h:i:sa");
   
//    $ins="INSERT INTO users (id, fname, lname, uname, password, phone, userid, email) VALUES ('$tokenid', '$fname', '$lname', '$uname', '$pass', '$phone', '$userid', '$email')";
    
//    }else{
//        $err2="Passwords does not match";
//    }if ($conn->query($ins)===TRUE) {
//        $sqdd="INSERT INTO profile (Id, ppic, name, username, phone, sta, date, mcred, course, school, email, descyour, year, pocketid, howsch, descou, dessch, dob, bescou, besstudtm, rescrush, irep, enjdoing, favfood, ihate, icherish) VALUES ('$userid', 'media/', '$fname', '$uname', '$phone', '1', '$date', '5', '', '', '$email', '' , '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
//    if ($conn6->query($sqdd)===TRUE) {}else{}
   
   $sqdl="CREATE TABLE account (id VARCHAR(30) NOT NULL PRIMARY KEY, fulname TEXT NOT NULL, email TEXT NOT NULL, password TEXT NOT NULL,  TEXT NOT NULL)";
   if ($conn->query($sqdl)===TRUE) {}else{}
   
//        echo "New Account Created";
//    $ale1 = "Account created success";
//    echo " <script type='text/javascript'>alert('$ale1'); </script>".$ale1;
//     $prof="block";$regdis="none";
    
//     $rselr="SELECT * FROM users WHERE id='".$tokenid."'";
//    $result= $conn->query($rselr);
//      If ($result->num_rows>0){
//    While ($row=$result->fetch_assoc()){
//        $f=$userid;
//        $_SESSION['dormuserid']="$f";
       
//    }}
//    } else {if($err==""){if($err2==""){
//    $ale2 = "Error:  Account not created phone-number has already been used before If this is your number contact us on facebook @ m.me/dorm.com.ng";
//    echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
//    $prof="none"; $regdis="block";
//        echo 'Error:   Account not created phone-number has already been used before If this is your number <a href="info@dorm.com.ng">send us a message now</a> <br>';
       
//    }else{$ale2 = "Error: Passwords does not match.Check passwords and try again";
//            echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
//    $prof="none"; $regdis="block";
//        }
       
//    }
       
//    else{$ale2 = "Error: You have entered an invalid phone number.Check your phone number and try again";
//    echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
//    $prof="none"; $regdis="block";
//        }
   
   
   
//    }

}
}else{$err="";$err2="";$prof="none";$regdis="block";$userid="";$fulname="";$uname="";$phone="";$pockid="";}
   
   

?>