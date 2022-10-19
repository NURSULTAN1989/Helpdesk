<!-- https://unreal-stuff.ru/articles/html-css/open-folder-in-windows-from-browser/ -->
<!-- открыть папки через браузер -->
<?php include ("bd.php");
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
<!DOCTYPE html>
<?php include("blocks/header.php"); ?>
            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav pl-md-5 ml-auto"  >

                  <li class="nav-item">
                      <a class="nav-link " href="index.php">Главная</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="software.php">ПО</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="license.php">Лицензии</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="https://apps.tsb.kz/Organigramm/Organigramm.aspx">Орг.структура</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " data-toggle="modal" href="#admin">Админ</a>
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
<?php include("blocks/modal.php");?>






<div class="top-shadow"></div>

<section class="">

    <div class="" >


        <div class="content">

            <div class="container" style=" padding-top: 15px;">

              <h1 style="margin-left: 35rem; padding-bottom: 20px">Лицензия</h1>
                <div class="">


                    <table  class="html-4">
                         <thead>
                        <tr>

                            <th style="width: 10%">ID</th>
                            <th style="width: 18%">Наименование лицензии</th>
                            <th style="width: 18%">Дата приобретения</th>
                            <th style="width: 18%">У кого/договор/номер</th>
                            <th style="width: 18%">Количество</th>
                            <th style="width: 18%">Установок</th>


                        </tr>


                        </thead>

                        <tbody>


                        <?php foreach ($products as $product): ?>
                            <tr>


                              <td>
                                  <?php echo $product['id']; ?>
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
