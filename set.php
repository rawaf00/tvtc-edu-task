<?php 
require("secure.php"); 
include("conn.php");
?>
<!DOCTYPE html>


<html dir="rtl">

<head>
    <title>أطقمي</title>
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
    <!-- اثناء الضغط على تفاصيل -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });

    </script>

</head>

<body>

    <div class="topnav" id="myTopnav">
        <?php include("nav.php"); ?>
    </div>

    <div class="container">
        <h2>أطقم قمت بإنشائها مسبقاً</h2>

        <script>
            $(document).ready(function() {
                $('.sets').on('click', function() {
                    $('.collapse').collapse('hide');


                });
            })

        </script>
        <?php 

            $result = mysqli_query($conn,"SELECT * FROM sets WHERE us_id='$_SESSION[us_id]'");

            while($row = mysqli_fetch_assoc($result)){
                ?>
        <button class="btn btn-primary sets" data-toggle="collapse" data-target="#myDIV<?= $row['id'] ?>"><?= $row["se_name"] ?></button>
        <?php } ?>


        <?php 

            $result = mysqli_query($conn,"SELECT s.id, s.se_name, c.ty_id, c.pic, c.details FROM sets s INNER JOIN clothes c ON c.id=s.cl_id1 OR c.id=s.cl_id2 OR c.id=s.cl_id3 WHERE s.us_id='$_SESSION[us_id]'");

            while($row = mysqli_fetch_assoc($result)){
                $records[$row["id"]]["id"] = $row["id"];
                $records[$row["id"]][$row['ty_id']+10] = $row['pic'] ;
				$records[$row["id"]][$row['ty_id']+20] = $row['details'] ;

                $setId = $row["id"];
            } 

foreach($records as $set){
?>

        <div id="myDIV<?= $set['id']?>" class="collapse collapsed">
            <!-- اسفله يكون مخفي الا اذا تم الضغط على اسم الطقم -->

            <div class="row">

                <div class="col-xs-6" style="text-align: left">
                    <img src="images/uploads/<?= $set[11] ?>" width="150">
                </div>
                <div>
                    <div class="col-xs-6">
                        <a href="#" data-placement="left" id="popover" data-toggle="popover" data-content="<?= $set[21] ?>"> التفاصيل</a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-6" style="text-align: left">
                    <img src="images/uploads/<?= $set[12] ?>" width="150">
                </div>
                <div>
                    <div class="col-xs-6">
                        <a href="#" data-placement="left" id="popover" data-toggle="popover" data-content="<?= $set[22] ?>"> التفاصيل</a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-6" style="text-align: left">
                    <img src="images/uploads/<?= $set[13] ?>" width="150">
                </div>
                <div>
                    <div class="col-xs-6">
                        <a href="#" data-placement="left" id="popover" data-toggle="popover" data-content="<?= $set[23] ?>"> التفاصيل</a>
                    </div>
                </div>
            </div>

        </div>

        <?php } ?>
    </div>
</body>

</html>
