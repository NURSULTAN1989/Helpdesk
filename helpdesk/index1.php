<!-- https://unreal-stuff.ru/articles/html-css/open-folder-in-windows-from-browser/ -->
<!-- открыть папки через браузер -->
<?php include ("bd.php");
/*session_start();*/
if (empty($_POST["search"])){$search = "";}
else {$search = $_POST["search"];}
if(isset($_GET["groups"]))
{
   $groups = $_POST["groups"];
}

$products = array();
if ($search == "")
    { $result = mysqli_query($link,"SELECT * FROM distr"); }
else
    { $result = mysqli_query($link,"SELECT * FROM distr WHERE sk_name LIKE '%".$search."%' OR sk_ver LIKE '%".$search."%'   " );}
/*mysqli_query($link,"SELECT * FROM contests WHERE MATCH (question,answer) AGAINST ('$search*')" );*/
/*WHERE(superid = '".$_SESSION['id']."' )*/
if ($groups == "")
    { $result = mysqli_query($link,"SELECT * FROM distr"); }
else
    { $result = mysqli_query($link,"SELECT * FROM distr WHERE groups LIKE '%".$groups."%' OR groups LIKE '%".$groups."%'   " );}

$i = 0;
while ($row = mysqli_fetch_assoc($result)){
    $products[$i]['id'] = $row['id'];
    $products[$i]['sk_name'] = $row['sk_name'];
    $products[$i]['sk_vendor'] = $row['sk_vendor'];
    $products[$i]['groups'] = $row['groups'];
    $products[$i]['sk_kind'] = $row['sk_kind'];
    $products[$i]['sk_status'] = $row['sk_status'];
    $products[$i]['sk_lic'] = $row['sk_lic'];
    $products[$i]['sk_ver'] = $row['sk_ver'];
    $products[$i]['sk_proof'] = $row['sk_proof'];
    $products[$i]['sk_act'] = $row['sk_act'];
    $products[$i]['sk_desc'] = $row['sk_desc'];
    $products[$i]['sk_path'] = $row['sk_path'];

    $i++;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Главная</title>
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
            <a class="navbar-brand " href="index.php"><img style="width: 20%" src="assets/img/logo1.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-android-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav pl-md-5 ml-auto"  >

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="software.php">ПО</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="license.php">Лицензии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="https://apps.tsb.kz/Organigramm/Organigramm.aspx">Орг.структура</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="admin/index.php">Админ</a>
                    </li>



                </ul>

                <div class="navbar-nav ml-auto">
                    <form method="post" class="search-form" action="index.php">
                        <input type="text" placeholder="Поиск" name="search" id="search">
                    </form>
                </div>

            </div>
        </div>
    </nav>



</header>






<div class="top-shadow"></div>

<section class="">

    <div class="" >


        <div class="content">

            <div class="container" style=" padding-top: 15px;">

              <h1 style="margin-left: 50rem; padding-bottom: 20px">Главная</h1>
                <div class="">
                    <script>
                        $(document).ready(function(){
                            $(#groups).change(function(){
                                $(#groupsForm).submit();
                            });
                        });

                        var filter = document.getElementById('groups');
                        filter.addEventListener('select', function(){
                            var searchVal= filter.value;
                            var xhr = new XMLHttpRequest();
                            xhr.onreadystatechange= function(){
                                document.getElementById('tbl').innerHTML  = this.responseText;

                            }
                            xhr.open('Get', 'index.php?groups='+searchVal, true);
                            xhr.send();
                        })
                        myFunction(){

                        }

                    </script>

                   <!--  <script type="text/javascript">
                        
                        
                    </script> -->


                    <table  class="html-4">
                         <thead>
                        <tr>

                            <th >ID</th>
                            <th >Наименование</th>
                            <th >Производитель</th>
                            <th >Группировка</th>
                            <th >Категория</th>
                            <th >Статус</th>
                            <th >Лицензия</th>
                            <th >Версия</th>
                            <th >Статус проверки</th>
                            <th >Акт проверки</th>
                            <th >Дистрибутив</th>
                            <th >Описание</th>

                        </tr>

                        <tr>

                            <th ></th>
                            <th ></th>
                            <th ></th>
                            
                            <th >
                            <form method="GET" id="groupsForm">
                              <select name="groups" id="groups" onsubmit="myFunction()">
                                <option value=""  disabled selected>Группировка</option>
                                <option value="АТФ">АТФ</option>
                                <option value="Запись экрана">Запись экрана</option>
                                <option value="Архиватор">Архиватор</option>
                                <option value="Налоги">Налоги</option>
                                <option value="Удаленное подключение">Удаленное подключение</option>
                                <option value="Кодеки">Кодеки</option>
                              </select>                        
                            </form>
                            </th>
                            <th >
                            <form method="GET" id="sk_kindForm">
                              <select id="sk_kind">
                              <option value="Категория">Категория</option>
                              <option value="Прикладное ПО">Прикладное ПО</option>
                              <option value="Серверное ПО">Серверное ПО</option>
                              <option value="Драйвер">Драйвер</option>
                              <option value="Библиотека">Библиотека</option>
                            </select>
                            </form>
                            </th>
                            <th >
                            <form method="GET" id="sk_statusForm">
                              <select id="sk_status">
                                <option value="all1">Статус</option>
                                <option value="2009">Одобрено</option>
                                <option value="2010">Устарело</option>
                                <option value="2009">Ограниченно</option>
                                <option value="2010">Запрещено</option>
                              </select>
                            </form>
                            </th>
                            <th >
                            <form method="GET" id="sk_licForm">
                              <select id="sk_lic">
                                <option value="all1">Лицензия</option>
                                <option value="2009">Бесплатное</option>
                                <option value="2010">Лицензионно</option>
                              </select>
                            </form>
                            </th>
                            <th ></th>
                            <th ></th>
                            <th ></th>
                            <th ></th>
                            <th ></th>

                        </tr>

                        </thead>

                        <tbody>


                        <?php foreach ($products as $product): ?>
                            <tr>

                              <td>
                                  <?php echo $product['id']; ?>
                              </td>
                              <td>
                                  <?php echo $product['sk_name']; ?>
                              </td>

                              <td>
                                  <?php echo $product['sk_vendor']; ?>
                              </td>

                              <td>
                                  <?php echo $product['groups']; ?>
                              </td>

                              <td>
                                  <?php echo $product['sk_kind']; ?>
                              </td>
                              <td>
                                  <?php echo $product['sk_status']; ?>
                              </td>

                              <td>
                                  <?php echo $product['sk_lic']; ?>
                              </td>

                              <td>
                                  <?php echo $product['sk_ver']; ?>
                              </td>

                              <td>
                                  <?php echo $product['sk_proof']; ?>
                              </td>
                              <td>
                                <a href="customproto:\\10.49.49.44\distr$">Акт</a>
                                  <!-- <?php echo $product['sk_act']; ?> -->
                              </td>
                              <td>
                                <a href="customproto://C:/MAMP">Дистрибутив</a>
                              <!-- <?php echo $product['sk_path']; ?> -->
                              </td>
                              <td>
                                  <?php echo $product['sk_desc']; ?>
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



</body>
</html>
