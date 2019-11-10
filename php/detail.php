<?php
include "header.php";
$id = $_SESSION['cus_id'];
$name = " ";
$lname = " ";
$user = " ";
$tel = " ";
$address = " ";
$email = " ";
if (isset($id)) { //ถ้ามีค่า
    $sql = " select * from custumer where cus_id = '{$id}' ";
    $query = $db->select($sql);
    while ($fetch = $db->fetch($query)) {
        $name = $fetch["cus_fname"];
        $lname = $fetch["cus_lname"];
        $user = $fetch["cus_id"];
        $tel = $fetch["cus_tel"];
        $address = $fetch["cus_add"];
        $email = $fetch["cus_email"];

    }
}
?>
  <tr>
    <td height="85" bgcolor="#FFFFCC">รหัสลูกค้า</td>
    <td bgcolor="#FFFFCC"><?php echo $user; ?></td>
  </tr>
  <tr>
    <td height="76" bgcolor="#FFFFCC">ชื่อ</td>
    <td bgcolor="#FFFFCC"><?php echo $name; ?></td>
  </tr>
  <tr>
    <td height="75" bgcolor="#FFFFCC">นามสกุล</td>
    <td bgcolor="#FFFFCC"><?php echo $lname; ?></td>
  </tr>
  <tr>
    <td height="80" bgcolor="#FFFFCC"><p>เบอร์โทรศัพท์</p></td>
    <td bgcolor="#FFFFCC"><?php echo $tel; ?></td>
  </tr>
  <tr>
    <td height="80" bgcolor="#FFFFCC"><p>E-Mail</p></td>
    <td bgcolor="#FFFFCC"><?php echo $email; ?></td>
  </tr>
  <tr>
    <td height="83" bgcolor="#FFFFCC">ที่อยู่</td>
    <td bgcolor="#FFFFCC"><?php echo $address; ?> </td>
  </tr>


  <tr>

  </tr>
</table>
<blockquote>&nbsp;</blockquote>
<blockquote>
  <blockquote>
    <blockquote>
      <p>&nbsp;</p>
    </blockquote>
  </blockquote>
</blockquote>
</body>
</html>
