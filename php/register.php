<?php
include "header.php";
if (isset($_POST['user'])) { //เชคว่ามีการส่งข้อมูลมาไหม
    $user = $_POST['user'];
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $telephone = $_POST['tel'];
    $address = $_POST['addr'];
    $email = $_POST['email'];

    $sql = "
      insert into custumer
      set
      cus_id='{$user}' ,
      cus_fname='{$name}',
      cus_lname='{$lname}',
      cus_add='{$address}',
      cus_tel='{$telephone}',
      cus_email='{$email}'
    ";
    if ($db->insert($sql)) {
        echo '<script>alert("ลงทะเบียนเสร็จสิ้น");</script>';
    } else {
        echo '<script>alert("ลงทะเบียนไม่สำเร็จ !! ");</script>';
    }
}

?>
<form id="form1" name="form1" method="post" action="">
    <tr>
      <td height="58" bgcolor="#9999FF"><strong>รหัสลูกค้า</strong></td>
      <td bgcolor="#9999FF">
        <input type="text" name="user" id="user" />
        <label for="user"></label>
      </td>
    </tr>
    <tr>
      <td height="54" bgcolor="#9999FF"><strong>ชื่อ</strong></td>
      <td bgcolor="#9999FF">
        <label for="name"></label>
        <input type="text" name="name" id="name" />
      </td>
    </tr>
    <tr>
      <td height="50" bgcolor="#9999FF"><strong>นามสกุล</strong></td>
      <td bgcolor="#9999FF">
        <label for="lname"></label>
        <input type="text" name="lname" id="lname" />
      </td>
    </tr>
    <tr>
      <td height="61" bgcolor="#9999FF"><strong>เบอร์โทร</strong></td>
      <td bgcolor="#9999FF">
        <label for="tel"></label>
        <input type="text" name="tel" id="tel" />
      </td>
    </tr>
    <tr>
      <td height="61" bgcolor="#9999FF"><strong>E-Mail</strong></td>
      <td bgcolor="#9999FF">
        <label for="email"></label>
        <input type="text" name="email" id="email" />
      </td>
    </tr>
    <tr>
      <td height="66" bgcolor="#9999FF"><strong>ที่อยู่</strong></td>
      <td bgcolor="#9999FF">
        <label for="addr"></label>
        <input type="text" name="addr" id="addr" />
      </td>
    </tr>
    <tr>
      <td bgcolor="#9999FF">&nbsp;</td>
      <td bgcolor="#9999FF">
              <p>
              <input type="image" name="submit" src="../pic/confirm.png" border="0" alt="Submit" style=" width: 230px; " />
</p>
            </td>
    </tr>
    </form>
  </table>
</body>
</html>
