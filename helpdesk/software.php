<!-- https://unreal-stuff.ru/articles/html-css/open-folder-in-windows-from-browser/ -->
<!-- открыть папки через браузер -->
<?php include ("bd.php");
/*session_start();*/
if (empty($_POST["search"])){$search = "";}
else {$search = $_POST["search"];}

$products = array();
if ($search == "")
    { $result = mysqli_query($link,"SELECT * FROM distr"); }
else
    { $result = mysqli_query($link,"SELECT * FROM distr WHERE sk_name LIKE '%".$search."%' OR sk_ver LIKE '%".$search."%'   " );}
/*mysqli_query($link,"SELECT * FROM contests WHERE MATCH (question,answer) AGAINST ('$search*')" );*/
/*WHERE(superid = '".$_SESSION['id']."' )*/
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
<?php include("blocks/header.php");?>

            <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav pl-md-5 ml-auto"  >

                  <li class="nav-item">
                      <a class="nav-link " href="index.php">Главная</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="software.php">ПО</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="license.php">Лицензии</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " href="https://apps.tsb.kz/Organigramm/Organigramm.aspx">Орг.структура</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link " data-toggle="modal" href="#admin">Админ</a>
                  </li>



                </ul>

                <div class="navbar-nav ml-auto">
                    <form method="post" class="search-form" action="software.php">
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

              <h1 style="margin-left: 50%; padding-bottom: 20px">ПО</h1>
                <div class="">


                    <table  class="html-4">
                         <thead>
                        <tr>

                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">ID</th>
                            <th style="width: 15%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">Наименование</th>
                            <th style="width: 15%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">Производитель</th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">Группировка</th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">Категория</th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">Статус</th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">Лицензия</th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">Версия</th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;">Статутс проверки</th>


                        </tr>


                        </thead>

                        <tbody>


                        <?php foreach ($products as $product): ?>
                            <tr>

                              <td>
                                  <?php echo $product['id']; ?>
                              </td>
                              <td>
                                  <a href="show.php?id=<?php echo $product['id']?>"><?php echo $product['sk_name']; ?></a>
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
                              <!-- <td>
                                <a href="customproto://C:/MAMP">Акт</a>
                                   <?php echo $product['sk_act']; ?>
                              </td>
                              <td>
                                <a href="customproto://C:/MAMP">Дистрибутив</a>
                              <?php echo $product['sk_path']; ?>
                              </td>
                              <td>
                                  <?php echo $product['sk_desc']; ?>
                              </td> -->





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
