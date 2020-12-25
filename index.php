<!DOCTYPE html>
<?php 
session_start();
if(@$_GET["do"] == "logOut"){
	session_destroy();
	header("location:index.php");
} 
?>
<html>

<head>
    <title>الرئيسيه</title>
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
        <h2>اخر التصاميم</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->


            <!-- Wrapper for slides -->
            <div class="carousel-inner">


                <style>
                    .item img {
                        margin: auto;
                    }

                </style>

                <?php 
include("conn.php");
            $result = mysqli_query($conn,"SELECT s.id, s.se_name, c.ty_id, c.pic, c.details FROM sets s INNER JOIN clothes c ON c.id=s.cl_id1 OR c.id=s.cl_id2 OR c.id=s.cl_id3 ORDER BY s.id DESC LIMIT 15");

            while($row = mysqli_fetch_assoc($result)){
                $records[$row["id"]]["id"] = $row["id"];
                $records[$row["id"]][$row['ty_id']+10] = $row['pic'] ;
                $records[$row["id"]][$row['ty_id']+20] = $row['details'] ;

                
                $setId = $row["id"];

                
            }
$Active = " active";
foreach($records as $set){

?>

                <div class="item<?=$Active?>">
                    <img src="images/uploads/<?= $set[11] ?>" width="150">
                    <img src="images/uploads/<?= $set[12] ?>" width="150">
                    <img src="images/uploads/<?= $set[13] ?>" width="150">
                </div>
                <?php 
$Active = "";
} ?>





            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
        </div>
    </div>









</body>

</html>
