<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ใบเสร็จ</title>
</head>
<?php
  include "db.php";
  $db = new Database();
  $id = $_GET['id'];
  $data = array();
  if(isset($id)){
    $sql = " select * from bill where no_fn='{$id}' ";
    $bill = $db->fetch($db->select($sql));
    $sql = "
      select * from rent where bill_no='{$id}'
    ";
    $select = $db->select($sql);
    while($f = $db->fetch($select)){
      $sql = "select * from movie where mvi_id='{$f['rent_id']}' limit 1";
      $movie = $db->fetch($db->select($sql)); //ดูรายละเอียดหนัง
      $f['name'] = $movie['name_mvi'];
      $sum += $f['rent_tal'];
      $data[]= $f;
    }
  }
?>
<body>
<table width="996" height="336" border="2" cellpadding="1" cellspacing="1">
  <tr>
    <td width="67" height="38"><p style="text-align:center">ลำดับที่</p></td></td>
    <td width="650"><p style="text-align:center">รายการ</p></td>
    <td width="100"><p style="text-align:center">จำนวนเงิน</p></td>
  </tr>
  <?php foreach($data as $k => $v){ ?>
  <tr >
    <td height="10"><?php echo $k+1; ?></td>
    <td><p><?php echo $v['name']; ?></p></td>
    <td><p><?php echo $v['rent_tal']; ?></p></td>
  </tr>
<?php } ?>
  <tr>
    <td height="44">&nbsp;</td>
    <td width="650"><p style="text-align:center">รวม</p></td>
    <td><?php echo $bill['tal_a'];?></td>
  </tr>
</table>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <p>&nbsp;</p>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
</body>
</html>
