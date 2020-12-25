<!DOCTYPE html>
<html dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
<link rel="stylesheet" href="css/login.css">

    
    <script>
        $(document).ready(function() {


        })

    </script>
</head>

<body>

    <div class="topnav" id="myTopnav">
        <?php include("nav.php"); ?>
    </div>
<div class="container">
    <h2>تسجيل الدخول</h2>


<?= @$err ?>

<div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="add.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputemail" class="form-control "style="text-align: center" placeholder="ادخل الإيميل"  name="email",  required autofocus>

                <input type="password" id="inputPassword" class="form-control"style="text-align: center" placeholder="ادخل كلمة المرور"name="pass" required>
                <div id="remember" class="checkbox">
                    
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">دخول</button>
            </form><!-- /form -->
		<span class="psw"> <a href="signup.php">إنشاء حساب؟</a></span><br>
        <br>
        <span class="psw"> <a href="#">نسيت كلمة المرور؟</a></span>
         
        </div>
        </div>
       <div class="col-md-4"></div>        
        <!-- /card-container -->

   </div>     
    <!--</form>-->
    
</div><!-- /container -->
</body>

</html>
