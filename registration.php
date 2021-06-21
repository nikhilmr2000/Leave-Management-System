<?php
  session_start();
$name='';
$regno='';
$email='';
$password='';
$loginpassword='';
$gmail='';
$dashboard='';


$username="admin";
$pass2="adminlogin@123";


$mysqli=new mysqli('localhost','root','','leave')or die(mysqli_error($mysqli));


if(isset($_POST['signup'])){


	$name=$_POST['name'];
	$regno=$_POST['regno'];
	$email=$_POST['email'];
	$password=$_POST['password'];


    $vkey=md5(time().$regno);

    $insert=$mysqli->query("insert into register(name,regno,email,password,vkey) values('$name','$regno','$email','$password','$vkey')") or die(mysqli_error($mysqli)); 
   


}
?> 

<?php
   
if(isset($_POST['signin'])){
	$gmail=$_POST['gmail'];
	$loginpassword=$_POST['loginpassword'];

    $storeddata=$mysqli->query("select * from register where password='$loginpassword' and email='$gmail' ")or die(my_sqli_error($mysqli));

    while($row=$storeddata->fetch_assoc()){
    	if($row['password'] == $loginpassword && $row['email']== $gmail){
    		header("Location: leavegen.php");
            $_SESSION['user']=$row['name'];
        }
        else{
    	    header("Location: login.php");
        }

        
    }
}

if(isset($_POST['apply'])){

    $fname=$_POST['fname'];
    $fregno=$_POST['fregno'];
    $dept=$_POST['dept'];
    $days=$_POST['days'];
    $dob=$_POST['dob'];
    $fromdob=$_POST['fromdob'];
    $todob=$_POST['todob'];
    $reason=$_POST['reason'];


    $hashed=hash('sha512',$password);

    $mysqli->query("insert into application(fname,fregno,dept,days,dob,fromdob,todob,reason) values('$fname','$fregno','$dept','$days','$dob','$fromdob','$todob','$reason')") or die(mysqli_error($mysqli));

}



if(isset($_POST['login'])){
    $user=$_POST['username'];
    $pass1=$_POST['adminpass'];
    if($user==$username && $pass1==$pass2){
         header("Location: leavedetails.php");
    }
    else{
        header("Location: adminlogin.php");
    }
}














?>