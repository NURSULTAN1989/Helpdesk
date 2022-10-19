<!DOCTYPE html>
<?php

include ("bd.php");
$result = mysqli_query($link,"SELECT * FROM distr");
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
  $('#search').on('input', getDishes);
  $('input.dishes_filter').on('click', getDishes);
});

var getDishes = function(){
  let request_data = {'filters': [], 'name': $('#search').val() };
  $('input.dishes_filter').each(function(e, elem){
    if( $(elem).is(':checked') ){
      request_data['filters'].push( $(elem).val() );
    }
  });


  $.ajax({
    url: 'script.php',
    type: 'POST',
    dataType: 'html',
    data: {filters: request_data},  // отправляем массив в php
    success: function(html){
    console.log(  $("#results").show());
console.log(  $("#results").append(html));

    },
    error: function(jqXHR, status, msg){
        console.log("break");
    }
});
};
</script>

<?php
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

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sdfdsfsdf</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style11.css">

    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  </head>

  <body>



<input id="search" type="text" value="" />
<input type="checkbox" value="АТФ" class="dishes_filter" />
<input type="checkbox" value="filter2" class="dishes_filter" />
<input type="checkbox" value="filter3" class="dishes_filter" /><header role="banner" style="min-width: 580px;">
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
                        <a class="nav-link " href="contests.php">ПО</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Орг.структура</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Инфраструктура</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="admin.php">Админ</a>
                    </li>



                </ul>

                <div class="navbar-nav ml-auto">

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
                            <th >Статутс проверки</th>
                            <th >Акт проверки</th>
                            <th >Дистрибутив</th>
                            <th >Описание</th>

                        </tr>

                        <tr>

                            <th ></th>
                            <th ></th>
                            <th ></th>
                            <th >
                              <select name="Group[]" id="groups">
                                <option value=""  disabled selected>Группировка</option>
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
                              <option value="all1">Категория</option>
                              <option value="2009">Прикладное ПО</option>
                              <option value="2010">Серверное ПО</option>
                              <option value="2009">Драйвер</option>
                              <option value="2010">Библиотека</option>

                            </select>
                            </th>
                            <th >
                              <select id="sk_status">
                                <option value="all1">Статутс</option>
                                <option value="2009">Одобрено</option>
                                <option value="2010">Устарело</option>
                                <option value="2009">Ограниченно</option>
                                <option value="2010">Запрещено</option>
                              </select>
                            </th>
                            <th >
                              <select id="sk_lic">
                                <option value="all1">Лицензия</option>
                                <option value="2009">Бесплатное</option>
                                <option value="2010">Лицензионно</option>
                              </select>
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
                                <a href="customproto://C:/MAMP">Акт</a>
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
