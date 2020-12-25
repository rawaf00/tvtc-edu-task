<!DOCTYPE html> 
<html dir="rtl"> 
<head>
    <title>برمجة الويب ت المتقدمه </title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script>
    $(document).ready(function(){

        
    })
    </script>
</head>
<body>

<div class="topnav" id="myTopnav"><?php include("nav.php"); ?></div>
  <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>للمشاكل والأقتراحات الرجاء مراسلتنا.</h1>
<br>
                  
                  
                   
<?php 
include("conn.php");


if(@$_POST["Action"] == "saveMessage"){
	
	mysqli_query($conn, "INSERT INTO contact (email, message) VALUES('$_POST[email]','$_POST[message]')")or die(mysqli_error($conn));
 {
		    ?>
        <div class="alert alert-success">  تم استلام رسالتك وسيتم التواصل معك قريباً</div>
        <?php 

    } 

	mysqli_close($conn);


    }else{
?>
                 
                    <form id="contact-form" method="post" action="contact.php" role="form">
                    	<input type="hidden" name="Action" value="saveMessage"> 
                    	 <div class="messages"></div>
        

    <div class="controls">

      
    
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">الإيميل <font color="red">*</font></label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="الرجاء ادخل ايميلك *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
          
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">الرسالة <font color="red">*</font></label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="اكتب رسالتك *" rows="4" required data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="ارسال">
            </div>
        </div>
        
    </div>

                    	
                    </form> 

                </div>

            </div>
 <?php }    ?>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>

</body>
</html>
