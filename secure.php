<?php 
session_start();
$err = "";
$allow = 0;


if(@$_SESSION["status"] == "Logged"){
	if(@$_GET["do"] == "logOut"){session_destroy();}else{$allow=1;}
}else{
	if(@$_POST){
		
		
		
$user = strtolower($_POST["email"]);
$pass = crypt($_POST['pass'],	$user);

include("conn.php");
        
$result = mysqli_query($conn, "SELECT pass, id FROM users WHERE email='$user'") or die(mysqli_error($conn));		
$row = mysqli_fetch_assoc($result);

		
		
		if($row['pass'] == $pass){
			$_SESSION["status"] = "Logged";
            $_SESSION["us_id"] = $row['id'];
			$allow = 1;
		}else{$err = "<div style='color:red'>عفوا، اسم المستخدم و كلمة المرور خطأ</div>";}
	}
}
	if(!$allow){
		include("login.php");
				
exit();
} 
?>
