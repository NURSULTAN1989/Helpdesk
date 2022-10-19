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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
                                    <label for="fio">Наименование</label>
                                    <input   type="text" name="sk_name" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Производитель</label>
                                    <input   type="text" name="sk_vendor" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Группировка</label>
                                    <input   type="text" name="groups" />
                                </div>
                                <div class="form-group">
                                    <label for="fio">Категория ПО</label>
                                    <select id="sk_kind" name="sk_kind">
                                      <option value="" disabled="" selected="">Категория</option>
                                      <option value="Прикладное ПО">Прикладное ПО</option>
                                      <option value="Серверное ПО">Серверное ПО</option>
                                      <option value="Драйвер">Драйвер</option>
                                      <option value="Библиотека">Библиотека</option>
                                    </select>
                                    <!-- <input   type="text" name="sk_kind" /> -->
                                </div>
                                  <div class="form-group">
                                      <label for="fio">Статус</label>
                                      <select id="sk_status" name="sk_status">
                                        <option value="" disabled="" selected="">Статус</option>
                                        <option value="Одобрено">Одобрено</option>
                                        <option value="Устарело">Устарело</option>
                                        <option value="Ограниченно">Ограниченно</option>
                                        <option value="Запрещено">Запрещено</option>
                                      </select>
                                      <!-- <input   type="text" name="sk_status" /> -->
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Лицензия</label>
                                      <select id="sk_lic" name="sk_lic">
                                        <option value="" disabled="" selected="">Лицензия</option>
                                        <option value="Бесплатное">Бесплатное</option>
                                        <option value="Лицензионно">Лицензионно</option>
                                      </select>
                                      <!-- <input   type="text" name="sk_lic" /> -->
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Версия</label>
                                      <input   type="text" name="sk_ver" />
                                  </div>
                                  <div class="form-group">
                                      <label for="fio">Статутс проверки</label>
                                      <input  type="text" name="sk_proof" />
                                  </div>

                                    <div class="form-group">
                                        <label for="fio">Акт проверки</label>
                                        <textarea  name="sk_act"  cols="70" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fio">Описание</label>
                                        <textarea  name="sk_desc"  cols="70" rows="6"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="fio">Путь</label>
                                        <textarea name="sk_path"  cols="70" rows="3"></textarea>

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
