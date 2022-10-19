<?php
include ("../bd.php");
session_start();
if (isset($_GET['idmod'])) {
        $id=$_GET['idmod']; }
if (empty($_POST["search"])){$search = "";}
else {$search = $_POST["search"];}
$products = array();
if ($search == "")
    { $result = mysqli_query($link,"SELECT * FROM distr"); }
else
    { $result = mysqli_query($link,"SELECT * FROM distr WHERE id LIKE '%".$search."%' OR sk_ver LIKE '%".$search."%'   " );}
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
   <?php include("blocks/header.php"); ?>
   <div class="collapse navbar-collapse" id="navbarsExample05">
                <ul class="navbar-nav pl-md-5 ml-auto"  >
                    <li class="nav-item">
                        <a class="nav-link active " href="index.php">ПО</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="licenses.php">Лицензия</a>
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
   <h6 style="margin-left: 65rem; padding-bottom: 5px"><a  href="software/new.php">Добавить новые данные</a></h6>
                <div class="">
                   
                    <table  class="html-4">
                         <thead>
                        <tr>
                            <th >ID</th>
                            <th >Удалить</th>
                            <th >Изменить</th>
                            <th >Наименование</th>
                            <th >Производитель</th>
                            <th >Группировка</th>
                            <th >Категория</th>
                            <th >Статус</th>
                            <th >Лицензия</th>
                            <th >Версия</th>
                            <th >Статутс проверки</th>
                            <th >Акт проверки</th>
                            <th >Описание</th>
                            <th >Путь</th>
                        </tr>
                        </thead>
                        <tr>
                            <th ></th>
                            <th ></th>
                            <th ></th>
                            <th ></th>
                            <th ></th>
                            <th >
                              <select name="groups" id="groups">
                                <option value=""  disabled="" selected="">Группировка</option>
                                <option value="АТФ">АТФ</option>
                                <option value="Запись экрана">Запись экрана</option>
                                <option value="Архиватор">Архиватор</option>
                                <option value="Налоги">Налоги</option>
                                <option value="Удаленное подключение">Удаленное подключение</option>
                                <option value="Кодеки">Кодеки</option>
                              </select>
                            </th>
                            <th >
                              <select id="sk_kind">
                              <option value="" disabled="" selected="">Категория</option>
                              <option value="Прикладное ПО">Прикладное ПО</option>
                              <option value="Серверное ПО">Серверное ПО</option>
                              <option value="Драйвер">Драйвер</option>
                              <option value="Библиотека">Библиотека</option>
                            </select>
                            </th>
                            <th >
                              <select id="sk_status">
                                <option value="" disabled="" selected="">Статус</option>
                                <option value="Одобрено">Одобрено</option>
                                <option value="Устарело">Устарело</option>
                                <option value="Ограниченно">Ограниченно</option>
                                <option value="Запрещено">Запрещено</option>
                              </select>
                            </th>
                            <th >
                              <select id="sk_lic">
                                <option value="" disabled="" selected="">Лицензия</option>
                                <option value="Бесплатное">Бесплатное</option>
                                <option value="Лицензионно">Лицензионно</option>
                              </select>
                            </th>
                            <th ></th>
                            <th ></th>
                            <th ></th>
                            <th ></th>
                            <th ></th>
                        </tr>
                    </table>
                    <div class="filter">
                        <table class="html-4">
                        <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                              <td>
                                  <?php 
                                  echo $product['id']; ?>
                              </td>
                              <td>
                                  <a href="software/delete.php?id=<?php echo $product['id']?>" onclick="if(confirm('Удалить запись?')){return true}else{return false}">&#128938;</a>
                              </td>
                              <td>
                                <a href="software/edit.php?id=<?php echo $product['id']?>">Изменить</a>
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
                                  <?php if (strcmp($product['sk_lic'], 'Лицензионно')==0){ ?><a href=""><?php echo $product['sk_lic'];?></a><?php }else {echo $product['sk_lic']; }?>
                              </td>
                              <td>
                                  <?php echo $product['sk_ver']; ?>
                              </td>
                              <td>
                                  <?php echo $product['sk_proof']; ?>
                              </td>
                              <td>
                                  <?php echo $product['sk_act']; ?>
                              </td>
                              <td>
                                  <?php echo $product['sk_desc']; ?>
                              </td>
                              <td>
                                  <?php echo $product['sk_path']; ?>
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
    </div>
</section>
</div>
<script type="text/javascript">
            $(document).ready(function(){
                $("#groups").on('change', function(){
                    var value = $(this).val(); 
                    $.ajax({
                        type: "POST",
                        url: 'filter.php',
                        data: 'request='+value,
                        success: function(data){
                      $(".filter").html(data)
                        },
                    });
                });
                $("#sk_kind").on('change', function(){
                    var value = $(this).val(); 
                    $.ajax({
                        type: "POST",
                        url: 'skkind.php',
                        data: 'skkind='+value,
                        success: function(data){
                      $(".filter").html(data)
                        },
                    });
                });
                $("#sk_status").on('change', function(){
                    var value = $(this).val(); 
                    $.ajax({
                        type: "POST",
                        url: 'skstatus.php',
                        data: 'skstatus='+value,
                        success: function(data){
                      $(".filter").html(data)
                        },
                    });
                });
                $("#sk_lic").on('change', function(){
                    var value = $(this).val(); 
                    $.ajax({
                        type: "POST",
                        url: 'sklic.php',
                        data: 'sklic='+value,
                        success: function(data){
                      $(".filter").html(data)
                        },
                    });
                });
            });
</script>
</body>
</html>
