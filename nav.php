 <nav class="navbar navbar-inverse" style="margin-bottom: 0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#myNavbar" onClick="myFunction()">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <!-- <a class="navbar-brand" href="index.html"> اللوقو</a>-->
    </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">     
           
<?php @session_start(); ?>
   
  <li><a href="index.php">الرئيسية</a></li>
  
  
  

  
  
  <?php if(@$_SESSION["status"] == "Logged"){ ?>
   <li><a href="add.php">إضافة</a></li>
   <li><a href="design.php">تصميم</a></li>
   <li><a href="set.php">أطقمي</a></li>
   <li><a href="pic.php">صوري</a></li>
   <?php } else{ ?> 
   
	<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> تسجيل</a></li>
	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> دخول</a></li>
   <?php }
		  ?>
   
   

  <li><a href="about.php">حول</a></li>
  <li><a href="contact.php">تعليق</a></li>
  <?php if(@$_SESSION["status"] == "Logged"){ ?>
  <li><a href="index.php?do=logOut" class="pull-left">خروج</a></li> 
<?php } ?>
        
     <!-- القائمة المنسدلة
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
     -->
        
        <!-- إضافة & تصميم & أطقمي & صوري = محجوبه عن الزائر -->
        
      
       
      </ul>
     
      
    
    </div>
  </div>
</nav>

  

