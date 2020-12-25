<?php 
require("secure.php"); 
include("conn.php");
?>
<!doctype html>
<html dir="rtl">

<head>
   <title>إضافة صور ملابس</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
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


        <h2 align="center">إضافة صور ملابس</h2>

   
   

         
                     
                      <?php 	
        if(@$_POST["Action"] == "addCloth"){
            
$target_dir = "images/uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);	
						
    if (file_exists($target_file)) {
        echo "عذراً، الملف موجود من قبل.<br>";
        $uploadOk = 0;
    }
			
    if ($_FILES["file"]["size"] > 500000) {
        echo"عذراً، الملف كبير جداً.<br>";
        $uploadOk = 0;
    }
			
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "عذراً، يسمح فقط بملفات JPG و JPEG و PNG و GIF.<br>";
        $uploadOk = 0;
    }
			
    if ($uploadOk == 0) {
        echo "عذراً، لم يتم تحميل الملف.<br>";
		
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $picName = basename( $_FILES["file"]["name"]);          
    

 		            ?>
            <div class="alert alert-success">تم إضافة الصورة بنجاح.</div>
            <?php           

			
            mysqli_query($conn, "INSERT INTO clothes (ty_id, details, pic, us_id, date) VALUES(
            '$_POST[label]',
            '$_POST[details]',
            '$picName',
            '$_SESSION[us_id]',
            NOW())");
                
        } else {
            echo "عذراً، حدث خطأ أثناء تحميل ملفك.<br>";
        }
    }            
            
}
        ?>
   
 






        <form method="post" enctype="multipart/form-data" onSubmit="return checkType()">
            <input type="hidden" name="Action" value="addCloth">
            <div class="row">
                <div class="col-sm-2">
                    <label class="custom-file">ادخل صورة :</label>
                </div>
                <div class="col-sm-10">
               <input type="file" name="file" id="file" required  oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('يجب إدخال صورة اللباس')" class="custom-file-input">
                    <span class="custom-file-control"></span>      
                </div>
            </div>
            <br>




            <div class="row">
                <div class="col-sm-2">
                    <label for="cl">نوع اللباس :</label>
                </div>


                <div class="col-sm-10">
<script>
clIndex = 0
function checkType(){

	cl = document.querySelector("#cl")

	if(clIndex == 0){
		cl.setCustomValidity('يجب إدخال نوع اللباس')
		return false
	}

}
</script>

                    <select name="label" id="cl" class="btn btn-primary btn-sm" oninput="setCustomValidity('')" onChange="console.log(clIndex = selectedIndex)">
                            
                            <option hidden="false" value="no">اختر لباس</option>
                        
                        <?php
                        
                        $result = mysqli_query($conn,"SELECT * FROM types");
                        
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <option value="<?= $row['id']?>"><?= $row['label']?></option>
                        <?php
                        }
                        
                        
                        ?>
                        

                        </select>

                </div>
            </div>
            <br>




            <div class="row">
                <div class="bd-example" data-example-id="">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="fo">التفاصيل :</label>
                        </div>
                    </div>




                    <div class="col-sm-10">

                        <textarea name="details" required  oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('يجب إدخال تفاصيل اللباس')"></textarea>


                    </div>
                </div>
            </div>

            <br>



            <div class="row">
                <div class="col-sm-5">
                </div>
                <div class="col-sm-7">
			<button type="submit" class="btn btn-primary">إضافة</button>
			<button type="reset" class="btn btn-danger">إلغاء</button>
                </div>
            </div>

        </form>



    </div>
</body>

</html>
