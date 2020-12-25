<?php 
include("conn.php");
?>
<!DOCTYPE html>
<html dir="rtl">

<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
<!--
    <style>
        /* Full-width input fields */

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */

        input[type=submit],
        input[type=reset] {
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Extra styles for the cancel button */

        .cancelbtn {
            padding: 10px 10px;
            background-color: #f44336;
        }

        backbtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 10px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }


        /* Float cancel and signup buttons and add an equal width */

        .cancelbtn,
        .signupbtn {
            float: left;
            width: 30%;
        }

        /* Add padding to container elements */

        .container {
            padding: 16px;
        }

        /* Clear floats */

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */

        @media screen and (width: 50px) {
            .cancelbtn,
            .signupbtn {
                width: 50%;
            }
        }

    </style>
    <script>
        $(document).ready(function() {

        })

    </script>
    -->
</head>

<body>

    <div class="topnav" id="myTopnav">
        <?php include("nav.php"); ?>
    </div>
    
    <div class="container">
       




        <?php 
    if(@$_POST["Action"] == "addUser"){
$email = strtolower($_POST["email"]); 	        
$pass = crypt($_POST['pass'],	$email);

	$sql = "INSERT INTO users (name, email, pass, mobile)VALUES ('$_POST[name]', '$email', '$pass', $_POST[mobile])";

	if (mysqli_query($conn, $sql)) {
		    ?>
        <div class="alert alert-success">تم تسجيلك بنجاح.</div>
        <?php 

    } else {
        
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


    }else{
 ?>

<!--

        <form action="signup.php" method="post">
            <label><b>الاسم</b></label>
            <input type="hidden" name="Action" value="addUser">
            <input type="text" placeholder="ادخل اسمك" name="name" required>

            <label><b>الايميل</b></label>
            <input type="text" placeholder="ادخل البريد الالكتروني" name="email" required>

            <label><b>كلمة المرور</b></label>
            <input pattern=".{3,}" type="password" id="pass" title="ثلاث احرف" placeholder="ادخل كلمة المرور" name="pass" required>

            <label><b>اعد كتابة كلمة المرور</b></label>
            <input type="password" placeholder="اعادة كلمة المرور" name="pswRepeat" required>

            <label><b>الجوال</b></label>
            <input type="text" placeholder="الهويه" name="mobile" required>


            <input type="checkbox" checked="checked"> تذكر


            <div class="clearfix">
                <input type="submit" class="signupbtn" value="انشاء الحساب">
                <input type="reset" class="cancelbtn" value="الغاء">

            </div>
        </form>
        
-->
       
       
	
	<form class="form-horizontal"action="signup.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>صفحة تسجيل الدخول</legend>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirmation"></label>
  <div class="col-md-4">
    <button id="confirmation" name="confirmation" class="btn btn-primary">إنشاء الحساب</button>
  </div>
</div>


<!--
<!-- Text input-->




<div class="form-group">

  <label class="col-md-4 control-label" for="firstname">الإسم</label>  
  <div class="col-md-5">
  <input id="firstname" name="name" type="text" placeholder="ادخل الإسم" class="form-control input-md" required>
    <input type="hidden" name="Action" value="addUser">
  </div>
  <div class="col-md-3"></div>

	</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">الإيميل</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="ادخل ايميلك" name="email" class="form-control input-md" required>  </div>
  <div class="col-md-3"></div>

</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">رقم الجوال</label>  
  <div class="col-md-5">
  <input id="firstname" name="mobile" type="text" placeholder="ادخل بطاقة الاحوال" class="form-control input-md" required>
  <div class="col-md-3"></div>
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">كلمة المرور </label>
  <div class="col-md-5">
    <input id="password" name="pass" pattern=".{3,}" title="ثلاث احرف" type="password" placeholder="كلمة المرور" class="form-control input-md" required>
    <div class="col-md-3"></div>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirmasipassword">اعادة كلمة المرور</label>
  <div class="col-md-5">
    <input id="confirmasipassword" name="pswRepeat" type="password" placeholder="اعادة كلمة المرور" class="form-control input-md" required="">
      <div class="col-md-3"></div>



  </div>
</div>

</fieldset>
</form>

	</div>

        <?php }    ?>



    </div>
</body>

</html>
