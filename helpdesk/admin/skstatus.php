<?php 
include("../bd.php");
$products = array();

if(isset($_POST['skstatus'])){
	$request = $_POST['skstatus'];
	$query = "SELECT * FROM distr WHERE sk_status LIKE '%".$request."%'";
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

<table class="html-4">
                        <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                              <td>
                                  <?php echo $product['id']; ?>
                              </td>
                              <td>
                                  <a href="software/delete.php?id=<?php echo $product['id']?>">&#128938;</a>
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

<?php 
}
?>