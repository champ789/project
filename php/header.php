<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ร้านขาย - เช่าซีดี </title>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>

<body>
<?php
include "db.php";

$db = new Database();
session_start();

?>
<table width="1299"  border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td width="1295" height="200" bgcolor="#FF33CC"><img src="../Untitled-1.jpg" width="1144" height="201" /></td>
  </tr>
  <tr>
    <td  bgcolor="#FFCC33"><table width="1019"  border="0" align="center" cellpadding="1" cellspacing="1">
      <tr>
        <td width="183"><table width="1019"  border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td width="195"><table width="1019"  border="0" align="center" cellpadding="1" cellspacing="1">
              <tr>
                <td width="195"><table width="1019"  border="0" align="center" cellpadding="1" cellspacing="1">
                  <tr>
                    <td width="205"><table width="1019"  border="0" align="center" cellpadding="1" cellspacing="1">
                      <tr>
                        <td width="214"><table width="1019"  border="0" align="center" cellpadding="1" cellspacing="1">
                          <tr>
                            <td width="214"><table width="1019"  border="0" align="center" cellpadding="1" cellspacing="1">
                              <tr>
                                <td><a href="home.php"><img src="../pic/home.png" style=" width: 92px; height: auto; " /></a></td>
                                <td width="183"><a href="custo.php"><img src="../pic/login.png" width="180" height="150"/></a></td>
                                <td width="195"><a href="register.php"><img src="../pic/register.png" width="180" /></a></td>
                                <!-- <td width="205"><a href="detail.php"><img src="../pic/contact-us.png" width="180"  /></a></td> -->
                                <td width="214"><a href="rent.php"><img src="../pic/rental-list.png" width="180"  /></a></td>
                                <td width="214"><a href="return.php"><img src="../pic/return.png" width="180"  /></a></td>
                                <!-- <td width="206"><a href="bag.php"><img src="../pic/bag.png" width="180" /></a></td> -->
                              </tr>
                            </table>
                            </td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                    </td>
                  </tr>
                </table>

                </td>
              </tr>
            </table></td>
          </tr>
        </table></td>

      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#33FFCC"><table width="1106" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <span style="float: right;margin-top: -24px;">
      <?php
if ($_SESSION['cus_id']) {
    echo "ลูกค้า : <a href='detail.php'>" . $_SESSION['cus_fname'] . "     " . $_SESSION['cus_lname']."</a>";
    echo '&nbsp;&nbsp<a href="custo.php?logout" style="color:red;font-size:14px" >ออกจากระบบ</a>';
}
?>
      </span>
    </tr>
