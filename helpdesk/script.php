<?php
$formdata = filter_input_array(INPUT_POST);
$filters = $formdata['filters'];

$result = "SELECT * FROM distr WHERE sk_name LIKE '%".$filters['name']."%'";
foreach($filters['filters'] as $filter){
   $result .= " AND groups LIKE '%$filter%'";
}

?>
<!-- В общем, так: в начале, в $filters = $formdata['filters']; у нас массив, тот,
 который в консоли. теперь как получить значения полей:
  $filters['name'] - это инпут с именем.
   $filters['filters'] - это массив с чекбовсами. -->
