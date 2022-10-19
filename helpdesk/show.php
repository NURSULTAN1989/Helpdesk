<?php include ("bd.php");
$products = array();
$result = mysqli_query($link,"SELECT * FROM distr WHERE id='".intval($_GET["id"])."'" );
//    $myrow = mysqli_fetch_array($result);

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
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотреть ПО</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="admin/assets/style.css">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

</head>

<body>

            <div class="form">
                <div class="form-panel one">
                    <div class="form-header">
                        <h1><a style="color: orange;  text-decoration: none;" href="software.php"> &#128938;</a></h1>
                    </div>
                    <div class="form-content">

                            <?php foreach ($products as $product): ?>
                            <div class="form-group">
                                <label > ID  </label>
                                <label ><?php echo $product['id'];?>   </label>
                            </div>

                            <form action="change.php?id=<?php echo $product['id']?>" method="post">



                                <div class="form-group">
                                    <label for="fio">Наименование</label>
                                    <input  value="<?php echo $product['sk_name'];?>" type="text" name="sk_name" readonly />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Производство</label>
                                    <input  value="<?php echo $product['sk_vendor'];?>" type="text" name="sk_vendor" readonly/>
                                </div>
                                <div class="form-group">
                                    <label for="fio">Группировка</label>
                                    <input  value="<?php echo $product['groups'];?>" type="text" name="groups" readonly/>
                                </div>
                                <div class="form-group">
                                    <label for="fio">Категория</label>
                                    <input  value="<?php echo $product['sk_kind'];?>" type="text" name="sk_kind" readonly/>
                                </div>
                                  <div class="form-group">
                                      <label for="fio">Статус</label>
                                      <input  value="<?php echo $product['sk_status'];?>" type="text" name="sk_status" readonly/>
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Лицензия</label>
                                      <input  value="<?php echo $product['sk_lic'];?>" type="text" name="sk_lic" readonly/>
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Версия</label>
                                      <input  value="<?php echo $product['sk_ver'];?>" type="text" name="sk_ver" readonly/>
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Статутс проверки</label>
                                      <input  value="<?php echo $product['sk_proof'];?>" type="text" name="sk_proof" readonly/>
                                  </div>

                                    <div class="form-group">
                                        <label for="fio">Акт проверки</label>
                                        <textarea  name="sk_act"  cols="70" rows="3" readonly><?php echo $product['sk_act'];?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fio">Описание</label>
                                        <textarea  name="sk_desc"  cols="70" rows="3" readonly><?php echo $product['sk_desc'];?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fio">Путь</label>
                                        <textarea name="sk_path"  cols="70" rows="3" readonly><?php echo $product['sk_path'];?></textarea>

                                    </div>




                            <?php endforeach; ?>
                        </form>

                    </div>
                </div>
            </div>

</body>
</html>
