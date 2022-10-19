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
                        <h1>Добавить</h1>
                    </div>
                    <div class="form-content">



                            <form action="add.php" method="post">

                                <div class="form-group">
                                    <label for="fio">Наименование лицензии</label>
                                    <input   type="text" name="name" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Дата приобретения</label>
                                    <input   type="text" name="data" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">У кого/договор/номер</label>
                                    <input   type="text" name="treaty" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Количество</label>
                                    <input   type="text" name="amount" />
                                </div>
                                  <div class="form-group">
                                      <label for="fio">Устанвок</label>
                                      <input   type="text" name="install" />
                                  </div>

                            <div class="form-group">
                                <button type="submit" >Добавить</button>
                            </div>
                        </form>
                        <br><br><br>
                    </div>
                </div>
            </div>

</body>
</html>
