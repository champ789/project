<?php
include "header.php";
$id = $_GET['id'];
$tel = " ";
$am = " ";
$rt = " ";
$dt = " ";
$mul = " ";
$date = date("Ymd") + 5430000; //วันที่ พ.ศ.
$sum = 0; //ราคารวม
$date_return = date("Ymd", mktime(0, 0, 0, date("m"), date("d") + 3, date("Y"))) + 5430000;
$cus_id = 0;
if (isset($_SESSION['cus_id'])) { //ไม่มีรหัสลูกค้า
    $cus_id = $_SESSION['cus_id'];
}
if(isset($_GET['success'])){ //ถ้ามีการกดปุ่มยืนยัน
  $sql_update = "
    update 
      rent
    set
      status = 'คืน'
    where
    cus_id='{$cus_id}' 
    and status = 'เช่า' 
    and bill_no != 0
  ";
  // echo $sql_update;exit();
  $db->update($sql_update); // อัพเดทเลขที่บิล

    header("location: home.php?success");
}


//ค้นหารายการวันนี้ ลูกค้าคนนี้ และ เช่า หรือ ซื้อ
$sql = "
  select * from  rent where cus_id='{$cus_id}' and status = 'เช่า' and bill_no != 0
";
$select = $db->select($sql);
$data = array();
while ($f = $db->fetch($select)) {
    $sql = "select * from movie where mvi_id='{$f['rent_id']}' limit 1";
    $movie = $db->fetch($db->select($sql)); //ดูรายละเอียดหนัง
    $f['name'] = $movie['name_mvi'];
    $sum += $f['rent_tal'];
    $data[]= $f;
}

?>
  <tr style=" font-weight: bold;font-size:25px ">
    <td bgcolor="#CCCCFF">รหัสหนัง</td>
    <td bgcolor="#CCCCFF">ชื่อหนัง</td>
    <td bgcolor="#CCCCFF">วันที่คืน</td>
    </tr>
    <?php foreach ($data as $k => $v) {?>
  <tr style="font-size:20px ">
    <td bgcolor="#CCCCFF"><?php echo $v['rent_id']; ?></td>
    <td bgcolor="#CCCCFF"><?php echo $v['name']; ?></td>
    <td bgcolor="#CCCCFF"><?php echo $v['date_rt']; ?></td>
    </tr>
    <?php }?>
  <tr>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">
    <a href="return.php?success"><img src="../pic/confirm.png" alt="" width="179" height="107" /></a></td>
    </tr>
</table>
</body>
</html>

</body>
</html>
