<?php include ("../bd.php");
/*session_start();*/
if (empty($_POST["search"])){$search = "";}
else {$search = $_POST["search"];}

$products = array();
if ($search == "")
    { $result = mysqli_query($link,"SELECT * FROM certificate"); }
else
    { $result = mysqli_query($link,"SELECT * FROM certificate WHERE nomination LIKE '%".$search."%' OR conditions LIKE '%".$search."%'   " );}
/*WHERE(superid = '".$_SESSION['id']."' )*/
$i = 0;
while ($row = mysqli_fetch_assoc($result)){
    $products[$i]['id'] = $row['id'];
    $products[$i]['nomination'] = $row['nomination'];
    $products[$i]['conditions'] = $row['conditions'];
    $products[$i]['term'] = $row['term'];

    $i++;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Сертификаты</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style11.css">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

</head>
<body>

<header role="banner" style="min-width: 580px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="index.php"><img style="width: 30%" src="../images/logo6.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-android-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav pl-md-5 ml-auto" style="padding-left: 10rem !important;">

                    <li class="nav-item">
                        <a class="nav-link " href="contests.php">Конкурсы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="certificate.php">Сертификаты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Опросники</a>
                    </li>


                </ul>

                <div class="navbar-nav ml-auto">
                    <form method="post" class="search-form" action="certificate.php">
                        <input type="text" placeholder="Поиск" name="search" id="search">
                    </form>
                </div>

            </div>
        </div>
    </nav>
</header>






<div class="top-shadow"></div>

<section class="">
    <img src="../images/default.jpg" style="position: fixed; width: 100%; height: 100%;" alt="">
    <div class="slider-item" >


        <div class="content">

            <div class="container" style=" padding-top: 100px;">


                <div class="table-responsive custom-table-responsive">

                    <table class="table custom-table">
                        <thead>
                        <tr>


                            <th scope="col">Название</th>
                            <th scope="col">Состояние</th>
                            <th scope="col">Срок</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php foreach ($products as $product): ?>
                            <tr scope="row">


                                <td>
                                    <?php echo $product['nomination']; ?>
                                </td>

                                <td>
                                    <?php echo $product['conditions']; ?>
                                </td>
                                <td>
                                    <?php echo $product['term']; ?>
                                </td>
                            </tr>

                            <tr class="spacer"><td colspan="100"></td></tr>
                        <?php endforeach; ?>








                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>
</section>

</div>





<script src="assets/js/main.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/main.js"></script>

<script src="js/main.js"></script>

</body>
</html>
