<!-- https://unreal-stuff.ru/articles/html-css/open-folder-in-windows-from-browser/ -->
<!-- открыть папки через браузер -->
<?php session_start();
if(empty($_SESSION['login'])) :?>
    <?php header('Location:../index.php'); ?>
    <?php endif ?>
<?php include ("../bd.php");
if (empty($_POST["search"])){$search = "";}
else {$search = $_POST["search"];}

$products = array();
if ($search == "")
    { $result = mysqli_query($link,"SELECT lu.id, lu.comp_name, lu.full_name, lu.cz, lu.depart, lu.action, lu.status, l.name, lu.lisense_id, lu.instal_date, lu.remove_date, lu.cause, lu.coment FROM lisense_users as lu JOIN license as l WHERE lu.lisense_id=l.id;"); }
else
    { $result = mysqli_query($link,"SELECT lu.id, lu.comp_name, lu.full_name, lu.cz, lu.depart, lu.action, lu.status, l.name, lu.lisense_id, lu.instal_date, lu.remove_date, lu.cause, lu.coment FROM lisense_users as lu JOIN license as l WHERE lu.lisense_id=l.id HAVING l.name LIKE '%".$search."%'    " );}
/*mysqli_query($link,"SELECT * FROM contests WHERE MATCH (question,answer) AGAINST ('$search*')" );*/
/*WHERE(superid = '".$_SESSION['id']."' )*/
$i = 0;
while ($row = mysqli_fetch_assoc($result)){
    $products[$i]['id'] = $row['id'];
    $products[$i]['comp_name'] = $row['comp_name'];
    $products[$i]['full_name'] = $row['full_name'];
    $products[$i]['cz'] = $row['cz'];
    $products[$i]['depart'] = $row['depart'];
    $products[$i]['action'] = $row['action'];
    $products[$i]['status'] = $row['status'];
    $products[$i]['name'] = $row['name'];
    $products[$i]['lisense_id'] = $row['lisense_id'];
    $products[$i]['instal_date'] = $row['instal_date'];
    $products[$i]['remove_date'] = $row['remove_date'];
    $products[$i]['cause'] = $row['cause'];
    $products[$i]['coment'] = $row['coment'];




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
                        <a class="nav-link active" href="licenses.php">Лицензия</a>
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
                            <th >Имя комп-ра</th>
                            <th >ФИО</th>
                            <th >СЗ</th>
                            <th >Подразделение</th>
                            <th >Действие</th>
                            <th >Статус</th>
                            <th >Лицензия</th>
                            <th >Версия</th>
                            <th >Дата установки</th>
                            <th >Дата удаления</th>
                            <th >Причина</th>
                            <th >Комментарий</th>
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
                                  <?php echo $product['comp_name']; ?>
                              </td>

                              <td>
                                  <?php echo $product['full_name']; ?>
                              </td>

                              <td>
                                  <?php echo $product['cz']; ?>
                              </td>

                              <td>
                                  <?php echo $product['depart']; ?>
                              </td>
                              <td>
                                  <?php echo $product['action']; ?>
                              </td>
                               <td>
                                  <?php echo $product['status']; ?>
                              </td>

                              <td>
                                  <a href="license/editl.php?id=<?php echo $product['lisense_id']; ?>"><?php echo $product['name']; ?></a>
                              </td>

                              <td>
                                  <?php echo $product['instal_date']; ?>
                              </td>

                              <td>
                                  <?php echo $product['remove_date']; ?>
                              </td>
                              <td>
                                  <?php echo $product['cause']; ?>
                              </td>
                              <td>
                                  <?php echo $product['coment']; ?>
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
