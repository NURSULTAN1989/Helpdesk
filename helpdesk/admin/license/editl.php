<?php include ("../../bd.php");
$products = array();
$result = mysqli_query($link,"SELECT * FROM license WHERE id='".intval($_GET["id"])."'" );
//    $myrow = mysqli_fetch_array($result);

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
                                    <label for="fio">Наименование лицензии</label>
                                    <input value="<?php echo $product['name'];?>"  type="text" name="name" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Дата приобретения</label>
                                    <input  value="<?php echo $product['data'];?>" type="text" name="data" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">У кого/договор/номер</label>
                                    <input  value="<?php echo $product['treaty'];?>" type="text" name="treaty" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Количество</label>
                                    <input  value="<?php echo $product['amount'];?>" type="text" name="amount" />
                                </div>
                                  <div class="form-group">
                                      <label for="fio">Устанвок</label>
                                      <input  value="<?php echo $product['install'];?>" type="text" name="install" />
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
