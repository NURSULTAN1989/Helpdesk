<?php include ("../../bd.php");
$products = array();
$result = mysqli_query($link,"SELECT lu.id, lu.comp_name, lu.full_name, lu.cz, lu.depart, lu.action, lu.status, l.name, lu.lisense_id, lu.instal_date, lu.remove_date, lu.cause, lu.coment FROM lisense_users as lu JOIN license as l WHERE lu.lisense_id=l.id HAVING lu.id='".intval($_GET["id"])."'" );
//    $myrow = mysqli_fetch_array($result);

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

</head>

<body>

            <div class="form">
                <div class="form-panel one">
                    <div class="form-header">
                        <h1>Редактировать</h1>
                    </div>
                    <div class="form-content">

                            <?php foreach ($products as $product): ?>
                            <div class="form-group">
                                <label > ID  </label>
                                <label ><?php echo $product['id'];?>   </label>
                            </div>

                            <form action="change.php?id=<?php echo $product['id']?>" method="post">



                                <div class="form-group">
                                    <label for="fio">Имя компьютера</label>
                                    <input  value="<?php echo $product['comp_name'];?>" type="text" name="comp_name" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">ФИО</label>
                                    <input  value="<?php echo $product['full_name'];?>" type="text" name="full_name" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">СЗ</label>
                                    <input  value="<?php echo $product['cz'];?>" type="text" name="cz" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Подразделения</label>
                                    <input  value="<?php echo $product['depart'];?>" type="text" name="depart" />
                                </div>
                                  <div class="form-group">
                                      <label for="fio">Действие</label>
                                      <input  value="<?php echo $product['action'];?>" type="text" name="action" />
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Сатус</label>
                                      <input  value="<?php echo $product['status'];?>" type="text" name="status" />
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Лицензия</label>
                                      <input  value="<?php echo $product['name'];?>" type="text" name="name" />
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Дата установки</label>
                                      <input  value="<?php echo $product['instal_date'];?>" type="text" name="instal_date" />
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Дата удаления</label>
                                      <input  value="<?php echo $product['remove_date'];?>" type="text" name="remove_date" />
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Причина</label>
                                      <input  value="<?php echo $product['cause'];?>" type="text" name="cause" />
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Комментарий</label>
                                      <input  value="<?php echo $product['coment'];?>" type="text" name="coment" />
                                  </div>



                            <?php endforeach; ?>
                            <div class="form-group">
                                <button type="submit" >Изменить</button>
                            </div>
                        </form>
                        <br><br><br>
                    </div>
                </div>
            </div>

</body>
</html>
