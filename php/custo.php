<?php
include "header.php";
$id = $_GET['id'];
if (isset($id)) { //เชคว่ามีส่งรหัสมาไหม
    $sql = "
    select * from custumer where cus_id = '{$id}'
  ";
    $select = $db->select($sql); //เลิอกข้อมูลในตาราง
    $fetch = $db->fetch($select); //เอาข้อมูลมาแสดง
    if ($fetch) { //เชคกรอกรหัสลูกค้าถูกไหม
        $_SESSION = $fetch;
        header("location: detail.php");
    } else {
        echo '<script>alert("ไม่พบข้อมูลลูกค้า");</script>';
    }
}
if (isset($_GET['no'])) {
    echo '<script>alert("ไม่มีรหัสลุกค้า");</script>';
}
if (isset($_GET['logout'])) {
    session_unset();
    header("location: home.php");
}
?>
  <tr>
    <td width="96" height="78" bgcolor="#CCFFCC">&nbsp;</td>
    <td width="278" bgcolor="#CCFFCC">&nbsp;</td>
  </tr>
  <tr style="margit-top:1px;">
    <td height="94" bgcolor="#CCFFCC" style=" text-align: right; " ><strong>รหัสลูกค้า</strong></td>
    <td bgcolor="#CCFFCC"><form id="form1" name="form1" method="get" action="">
      <p>
        <label for="pass"></label>
        <input type="text" name="id" id="pass" style=" width: 200px; "/>
    </form></td>
  </tr>
  <tr>
    <td height="77" bgcolor="#CCFFCC">&nbsp;</td>
    <td bgcolor="#CCFFCC"><blockquote>
      <blockquote>
        <blockquote>
          <p>&nbsp;</p>
        </blockquote>
      </blockquote>
    </blockquote></td>
  </tr>
</table>
</body>
</html>
