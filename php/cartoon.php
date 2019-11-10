<?php
include "header.php";
?>
 
    <td><img src="../หนัง/การ์ตูน1.jpg" alt="" width="227" height="280" /></td>
    <td><img src="../หนัง/การ์ตูน2.jpg" alt="" width="184" height="282" /></td>
    <td><img src="../หนัง/การ์ตูน3).jpg" alt="" width="197" height="279" /></td>
    <td><img src="../หนัง/การ์ตูน4.jpg" alt="" width="181" height="279" /></td>
  </tr>
    <tr>
      <td bgcolor="#99FFCC"><strong>รหัสสินค้า</strong> 0009</td>
      <td bgcolor="#99FFCC"><strong>รหัสสินค้า</strong> 0010</td>
      <td bgcolor="#99FFCC"><strong>รหัสสินค้า</strong> 0011</td>
      <td bgcolor="#99FFCC"><strong>รหัสสินค้า</strong> 0012</td>
    </tr>
    <tr>
    <td bgcolor="#99FFCC"><strong>ราคา</strong> ซื้อ95 / เช่า 45</td>
    <td bgcolor="#99FFCC"><strong>ราคา</strong> ซื้อ90 / เช่า 45</td>
    <td bgcolor="#99FFCC"><strong>ราคา</strong> ซื้อ100 / เช่า 50</td>
    <td bgcolor="#99FFCC"><strong>ราคา</strong> ซื้อ110 / เช่า 55</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">
    <a href="rent.php?id=0009&type=buy">
    <input type="submit" name="aaa" id="aaa" value="ซื้อ" />
    </a>
      <a href="rent.php?id=0009&type=rent">
      <input type="submit" name="rent" id="rent2" value="เช่า" />
      </a>
      </td>
    <td bgcolor="#FFFFCC">
    <a href="rent.php?id=0010&type=buy">
    <input type="submit" name="aaa2" id="aaa2" value="ซื้อ" />
    </a>
      <a href="rent.php?id=0010&type=rent">
      <input type="submit" name="rent2" id="rent" value="เช่า" />
      </a>
      </td>
    <td bgcolor="#FFFFCC">
     <a href="rent.php?id=0011&type=buy">
    <input type="submit" name="aaa3" id="aaa3" value="ซื้อ" />
    </a>
    <a href="rent.php?id=0011&type=rent">
      <input type="submit" name="rent3" id="rent3" value="เช่า" />
      </a>
      </td>
    <td bgcolor="#FFFFCC">
     <a href="rent.php?id=0012&type=buy">
    <input type="submit" name="aaa4" id="aaa4" value="ซื้อ" />
    </a>
    <a href="rent.php?id=0012&type=rent">
      <input type="submit" name="rent4" id="rent4" value="เช่า" />
      </a>
      </td>
  </tr>
 
</table>
</body>
</html>
