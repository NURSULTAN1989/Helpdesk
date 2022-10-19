<?php 
include("bd.php");
$products = array();

if(isset($_POST['skkind'])){
	$request = $_POST['skkind'];
	$query = "SELECT * FROM distr WHERE sk_kind LIKE '%".$request."%'";
	$result = mysqli_query($link,$query);
	$count =  mysqli_num_rows($result);
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

<table  class="html-4">
  <tr>
                            <th style="width: 5%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>
                            <th style="width: 17%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>
                            <th style="width: 18%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>
                            <th style="width: 13%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>
                            <th style="width: 12%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>
                            <th style="width: 5%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>
                            <th style="width: 10%; border-right: 1px solid #dfdfdf; border-collapse: collapse;"></th>

                        </tr>

                        <tbody >
<?php 
  if ($count) {
  ?>

                        <?php foreach ($products as $product): ?>
                            <tr style="color: <?php if (strcmp($product['sk_status'], 'Одобрено')==0){echo 'black';} 
                            elseif (strcmp($product['sk_status'], 'Ограниченно')==0){echo 'green';}
                            elseif (strcmp($product['sk_status'], 'Устарело')==0){echo 'pink';}
                            elseif (strcmp($product['sk_status'], 'Отменено')==0){echo 'red';}
                            elseif (strcmp($product['sk_status'], 'На проверке')==0){echo 'grey';}
                            else {echo 'black';}?>;
                            ">

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
                                  <?php if (strcmp($product['sk_lic'], 'Лицензионно')==0){ ?><a href=""><?php echo $product['sk_lic'];?></a><?php }else {echo $product['sk_lic']; }?>
                              </td>
                              <td>
                                <a href="customproto:\\10.49.49.44\distr$">Акт</a>
                                  <!-- <?php echo $product['sk_act']; ?> -->
                              </td>
                              <td>
                                <a href="customproto://C:/MAMP">Дистрибутив</a>
                              <!-- <?php echo $product['sk_path']; ?> -->
                              </td>





                            </tr>

                            <tr class="spacer"><td colspan="100"></td></tr>
                        <?php endforeach; ?>
                         <?php }else{
                      echo " SORRY NO RECORD FOUND";
                    }
?>
                        </tbody>
</table>

<?php 
}
?>