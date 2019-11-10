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
  $sum = $_GET['success'];
  $sql = "
    insert into bill
    set
    st_fn = '{$date}',
    tal_a = '{$sum}'
  ";
  $db->insert($sql); // insert ตารางบิล
  $sql = "
    select * from bill order by no_fn desc limit 1
  ";
  $bill = $db->fetch($db->select($sql)); //หาเลขที่บิลล่าสุด
  
  $sql_update = "
    update 
      rent
    set
      bill_no = '{$bill['no_fn']}'
    where
    rent_dt='{$date}' and 
    cus_id='{$cus_id}' 
    and (status = 'เช่า' or status='ซื้อ') 
    and bill_no=0
  ";
  // echo $sql_update;exit();
  $db->update($sql_update); // อัพเดทเลขที่บิล
  header("location:  bill.php?id=".$bill['no_fn']);
  exit();
}

if (isset($id)) { //ถ้ามีค่า
    if (!isset($_SESSION['cus_id'])) { //ไม่มีรหัสลูกค้า
        header("location:  custo.php?no");exit();
    }
    $sql = "select * from movie where mvi_id='{$id}' ";
    $select = $db->fetch($db->select($sql)); //ดูรายละเอียดหนัง
    $price = 0; //ราคา
    // echo $date_return;exit();
    if ($_GET['type'] == 'rent') { //ถ้าเช่า
        $price = $select['mvi_p'];
        $status = 'เช่า';
    } else { //ถ้าซื้อ
        $price = $select['mvi_s'];
        $date_return = 0;
        $status = "ซื้อ";
    }
    // print_r($select);exit();
    $sql = "insert into
              rent
            set
              rent_id = '{$id}',
              rent_tal = '{$price}',
              rent_am = 1,
              date_rt = '{$date_return}',
              rent_dt = '{$date}',
              table_mul = 0,
              status = '{$status}',
              cus_id = '{$_SESSION['cus_id']}'
    ";
    $db->insert($sql);
    header("location:  rent.php");exit();
} else {

}

if(isset($_GET['delete'])){ // ถ้าลบ
  $id = $_GET['delete'];
  $db->update("delete from rent where id='{$id}'");
  header("location:  rent.php");exit();
}

//ค้นหารายการวันนี้ ลูกค้าคนนี้ และ เช่า หรือ ซื้อ
$sql = "
  select * from  rent where rent_dt='{$date}' and cus_id='{$cus_id}' and (status = 'เช่า' or status='ซื้อ') and bill_no=0
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
    <td bgcolor="#CCCCFF">ราคา</td>
    <td bgcolor="#CCCCFF">วันที่คืน</td>
    <td bgcolor="#CCCCFF">สถานะ</td>
    <td bgcolor="#CCCCFF">ยกเลิก</td>
    </tr>
    <?php foreach ($data as $k => $v) {?>
  <tr style="font-size:20px ">
    <td bgcolor="#CCCCFF"><?php echo $v['rent_id']; ?></td>
    <td bgcolor="#CCCCFF"><?php echo $v['name']; ?></td>
    <td bgcolor="#CCCCFF"><?php echo $v['rent_tal']; ?></td>
    <td bgcolor="#CCCCFF"><?php echo $v['date_rt']; ?></td>
    <td bgcolor="#CCCCFF"><?php echo $v['status']; ?></td>
    <td bgcolor="#CCCCFF"><a href="rent.php?delete=<?php echo $v['id']; ?>"><img src="../pic/delete.png" style=" width: 35px; "></a></td>
    </tr>
    <?php }?>
  <tr>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">&nbsp;</td>
    <td bgcolor="#CCCCFF">
    <a href="rent.php?success=<?php echo $sum;?>"><img src="../pic/confirm.png" alt="" width="179" height="107" /></a></td>
    </tr>
</table>
</body>
</html>
