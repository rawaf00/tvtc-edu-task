<?php 
require("secure.php"); 
include("conn.php");


if(@$_POST["Action"] == "saveSet"){
	
	        mysqli_query($conn, "INSERT INTO sets (se_name,cl_id1, cl_id2, cl_id3, us_id) VALUES(
            '$_POST[setName]',
            '$_POST[cl_id1]',
            '$_POST[cl_id2]',
            '$_POST[cl_id3]',
            '$_SESSION[us_id]')");
	header("location: set.php");
}



?>
<!doctype html>
<html dir="rtl">

<head>
    <title>اختيار تصميم ملابس</title>
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





    <script>
        jQuery(document).ready(function($) {

            $('#myCarousel').carousel({
                interval: 5000
            });

            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click(function() {
                var id_selector = $(this).attr("id");
                try {
                    var id = /-(\d+)$/.exec(id_selector)[1];
                    console.log(id_selector, id);
                    jQuery('#myCarousel').carousel(parseInt(id));
                } catch (e) {
                    console.log('Regex failed!', e);
                }
            });
            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function(e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-' + id).html());
            });
        });

    </script>

    <style>
        .hide-bullets {
            list-style: none;
            margin-left: -40px;
            margin-top: 20px;
        }

        .thumbnail {
            padding: 0;
        }

        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 30vh;
            margin: auto;

        }

        #myCarousel1,
        #myCarousel2,
        #myCarousel3 {}

    </style>


    <div class="container">
        <h2 align="center">اختيار تصميم ملابس</h2>







        <script>
            function injId() {

                document.querySelector("#cl_id1").value = document.querySelector("#tShirts .active img").title
                document.querySelector("#cl_id2").value = document.querySelector("#pants .active img").title
                document.querySelector("#cl_id3").value = document.querySelector("#shoes .active img").title
                if (!confirm("هل ترغب بحفظ هذا الطقم؟")) {
                    return false
                }
            }

        </script>

        <!-- الفنايل -->
        <div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <!--
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" id="tShirts">

                <?php 
                    $counter = 0;
                    $result = mysqli_query($conn,"SELECT * FROM clothes WHERE ty_id='1'")or die(mysqli_error($conn));

                    while($row = mysqli_fetch_assoc($result)){
                $activ = ($counter == 0)?"active":"";
?>
                <div class="item <?= $activ ?>">
                    <img src="images/uploads/<?= $row['pic'] ?>" height="25%" title="<?= $row['id'] ?>">
                </div>
                <?php 
                    $counter++;
                    } 
                ?>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">السابق</span>
    </a>
            <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">التالي</span>
    </a>
        </div>










        <!-- البناطيل -->
        <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <!--
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" id="pants">

                <?php 
                    $counter = 0;
                    $result = mysqli_query($conn,"SELECT * FROM clothes WHERE ty_id='2'")or die(mysqli_error($conn));

                    while($row = mysqli_fetch_assoc($result)){
                $activ = ($counter == 0)?"active":"";
?>
                <div class="item <?= $activ ?>">
                    <img src="images/uploads/<?= $row['pic'] ?>" height="25%" title="<?= $row['id'] ?>">
                </div>
                <?php 
                    $counter++;
                    } 
                ?>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">السابق</span>
    </a>
            <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">التالي</span>
    </a>
        </div>




        <!-- الاحذية -->
        <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <!--
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            -->
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" id="shoes">

                <?php 
                    $counter = 0;
                    $result = mysqli_query($conn,"SELECT * FROM clothes WHERE ty_id='3'")or die(mysqli_error($conn));

                    while($row = mysqli_fetch_assoc($result)){
                $activ = ($counter == 0)?"active":"";
?>
                <div class="item <?= $activ ?>">
                    <img src="images/uploads/<?= $row['pic'] ?>" height="25%" title="<?= $row['id'] ?>">
                </div>
                <?php 
                    $counter++;
                    } 
                ?>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">السابق</span>
    </a>
            <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">التالي</span>
    </a>
        </div>







        <form onSubmit="return injId()" method="post">
            <input name="Action" type="hidden" value="saveSet">
            <input id="cl_id1" name="cl_id1" type="hidden">
            <input id="cl_id2" name="cl_id2" type="hidden">
            <input id="cl_id3" name="cl_id3" type="hidden">
            <div class="form-group">
                <label class="control-label col-sm-2" for="kit">اسم الطقم :</label>
                <div class="col-sm-10">
                    <input name="setName" type="text" required oninvalid="this.setCustomValidity('يجب إدخال اسم الطقم')" class="form-control" id="kit" placeholder="ادخل اسم الطقم">
                </div>
            </div>










            <br>
            <div class="row">
                <div class="col-sm-5">
                </div>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">حفظ الطقم</button>
                    <button type="reset" class="btn btn-danger">إلغاء</button>
                </div>
            </div>
        </form>
    </div>





</body>

</html>
