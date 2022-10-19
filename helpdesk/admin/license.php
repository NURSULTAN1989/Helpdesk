<!-- https://unreal-stuff.ru/articles/html-css/open-folder-in-windows-from-browser/ -->
<!-- открыть папки через браузер -->
<?php session_start();
if(empty($_SESSION['login'])) :?>
    <?php header('Location:../index.php'); ?>
    <?php endif ?>
<?php include ("../bd.php");
/*session_start();*/
if (empty($_POST["search"])){$search = "";}
else {$search = $_POST["search"];}

$products = array();
if ($search == "")
    { $result = mysqli_query($link,"SELECT * FROM license"); }
else
    { $result = mysqli_query($link,"SELECT * FROM license WHERE name LIKE '%".$search."%'   " );}
/*mysqli_query($link,"SELECT * FROM contests WHERE MATCH (question,answer) AGAINST ('$search*')" );*/
/*WHERE(superid = '".$_SESSION['id']."' )*/
$i = 0;
while ($row = mysqli_fetch_assoc($result)){
    $products[$i]['id'] = $row['id'];
    $products[$i]['name'] = $row['name'];
    $products[$i]['data'] = $row['data'];
    $products[$i]['treaty'] = $row['treaty'];
    $products[$i]['amount'] = $row['amount'];
    $products[$i]['install'] = $row['install'];

    $i++;
}

?>
    <?php include("blocks/header.php"); ?>
    <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav pl-md-5 ml-auto"  >
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">ПО</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="license.php">Лицензия</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Инфраструктура</a>
                    </li>
                </ul>
                <div class="navbar-nav ml-auto">
                    <a href="logout.php" style="margin-right:10px">logout</a>
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

              <h1 style="margin-left: 35rem; padding-bottom: 20px">Главная</h1>
              
              <h6 style="margin-left: 65rem; padding-bottom: 5px"><a  href="license/new.php">Добавить новые данные</a></h6>
                <div class="">


                    <table  class="html-4">
                         <thead>
                        <tr>

                            <th >ID</th>
                            <th >Удалить</th>
                            <th >Изменить</th>
                            <th >Наименование лицензии</th>
                            <th >Дата приобретения</th>
                            <th >У кого/договор/номер</th>
                            <th >Количество</th>
                            <th >Устанвок</th>


                        </tr>


                        </thead>

                        <tbody>


                        <?php foreach ($products as $product): ?>
                            <tr>


                              <td>
                                  <?php echo $product['id']; ?>
                              </td>

                              <td>
                                  <a href="license/delete.php?id=<?php echo $product['id']?>" onclick="if(confirm('Удалить запись?')){return true}else{return false}">&#128938;</a>
                              </td>
                              <td>
                                <a href="license/edit.php?id=<?php echo $product['id']?>">Изменить</a>
                              </td>

                              <td>
                                  <?php echo $product['name']; ?>
                              </td>

                              <td>
                                  <?php echo $product['data']; ?>
                              </td>

                              <td>
                                  <?php echo $product['treaty']; ?>
                              </td>

                              <td>
                                  <?php echo $product['amount']; ?>
                              </td>
                              <td>
                                  <?php echo $product['install']; ?>
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
