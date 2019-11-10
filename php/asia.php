<?php
include "header.php";
?>
 
    <td><img src="../หนัง/หนังเอเชีย1.jpg" alt="" width="213" height="277" /></td>
    <td><img src="../หนัง/หนังเอเชีย2.jpg" alt="" width="183" height="275" /></td>
    <td><img src="../หนัง/หนังเอเชีย3).jpg" alt="" width="200" height="278" /></td>
    <td><img src="../หนัง/หนังเอเชีย4.jpg" alt="" width="183" height="275" /></td>
  </tr>
  <tr>
    <td bgcolor="#99CCFF"><strong>รหัสสินค้า</strong> 0013</td>
    <td bgcolor="#99CCFF"><strong>รหัสสินค้า</strong> 0014</td>
    <td bgcolor="#99CCFF"><strong>รหัสสินค้า</strong> 0015</td>
    <td bgcolor="#99CCFF"><strong>รหัสสินค้า</strong> 0016</td>
  </tr>
  <tr>
    <td bgcolor="#9999FF"><strong>ราคา</strong> ซื้อ100 / เช่า 50</td>
    <td bgcolor="#9999FF"><strong>ราคา</strong> ซื้อ120 / เช่า 60</td>
    <td bgcolor="#9999FF"><strong>ราคา</strong> ซื้อ110 / เช่า 55</td>
    <td bgcolor="#9999FF"><strong>ราคา</strong> ซื้อ100 / เช่า 50</td>
  </tr>
  <tr>
    <td bgcolor="#9999FF">
    <a href="rent.php?id=0013&type=buy">
    <input type="submit" name="aaa" id="aaa" value="ซื้อ" />
    </a>
    <a href="rent.php?id=0013&type=rent">
      <input type="submit" name="rent" id="rent2" value="เช่า" />
      </a>
      </td>
    <td bgcolor="#9999FF">
     <a href="rent.php?id=0014&type=buy">
    <input type="submit" name="aaa2" id="aaa2" value="ซื้อ" />
    </a>
    <a href="rent.php?id=0014&type=rent">
      <input type="submit" name="rent2" id="rent" value="เช่า" />
      </a>
      </td>
    <td bgcolor="#9999FF">
    <a href="rent.php?id=0015&type=buy">
    <input type="submit" name="aaa3" id="aaa3" value="ซื้อ" />
    </a>
    <a href="rent.php?id=0015&type=rent">
      <input type="submit" name="rent3" id="rent3" value="เช่า" />
      </a>
      </td>
    <td bgcolor="#9999FF">
    <a href="rent.php?id=0016&type=buy">
    <input type="submit" name="aaa4" id="aaa4" value="ซื้อ" />
    </a>
      <a href="rent.php?id=0016&type=rent">
      <input type="submit" name="rent4" id="rent4" value="เช่า" />
      </a>
      </td>
  </tr>

</table>
</body>
</html>
